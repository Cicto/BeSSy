<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;
use CodeIgniter\Files\File;

class Chats extends BaseController
{
    public function index(){
        $this->viewData['title'] = 'Department Chats';
        $this->viewData['departmentInfo'] = false;
        $convoInfo = $this->getConvoInfo(user_id(), 0, $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname);
        $this->viewData['convoInfo'] = $convoInfo;

        return view('chats/chatList', $this->viewData);
    }

    public function insertChat(){

        $chatData = [
            'convo_id' => $this->request->getPost('convo_id'),
            'message' => $this->request->getPost('message'),
            'actor' => $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname,
            'created_by' => user_id()
        ];

        $insertChat = $this->masterModel->insert('chats',  $chatData);

        if(is_int($insertChat['data']) > 0){
            echo json_encode([
                'error' => false,
                'message' => 'Message is sent!',
                'data' => $chatData,
                'senderPhoto' => ($this->viewData['userInformation']->user_photo != '') ? $this->viewData['userInformation']->user_photo : 'default-avatar.png'
            ]);
        }
        else{
            echo json_encode([
                'error' => true,
                'message' => $insertChat,
                'data' => false
            ]);
        }
    }

    public function getConvoList(){
        $builder = $this->masterModel->getDataTables('convo_list', 'convo_id, client_id, office_id, actor', ['deleted_at'=> NULL, 'office_id' => $this->userInformation['data'][0]->dept_id]);
        return DataTable::of($builder)->toJson(true);
    }

    public function getChats(){
        $chats = $this->masterModel->get('chats', 'chat_id, convo_id, message, ,file, file_size, actor, created_at, created_by', ['convo_id' => $this->request->getGet('convoId')], FALSE, 'created_at DESC', 10);

        if($chats['error'] == false){
            echo json_encode([
                'error' => false,
                'message' => 'Messages found!',
                'data' => $chats['data'],
                'senderPhoto' => ($this->viewData['userInformation']->user_photo != '') ? $this->viewData['userInformation']->user_photo : 'default-avatar.png'
            ]);
        }
        else{
            echo json_encode([
                'error' => true,
                'message' => 'No messages found!',
                'data' => false
            ]);
        }
    }

    public function uploadFile($convoId){
        $file = $this->request->getFile('file');
        $chatData = [
            'convo_id' => $convoId,
            'message' => '',
            'file' => $file->getName(),
            'actor' => $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname,
            'created_by' => user_id()
        ];

        if ($file->isValid() && !$file->hasMoved()) {
            // $filepath = './public/uploads/conversations/'.$this->request->getPost('convo_id') . $file->store();
            $file->move(ROOTPATH.'public/uploads/conversations/'.$convoId, $file->getName());
            // $data = ['uploaded_fileinfo' => new File($filepath)];
            
            $chatData = [
                'convo_id' => $convoId,
                'message' => '',
                'file' => $file->getName(),
                'file_size' => $file->getSizeByUnit('mb'),
                'actor' => $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname,
                'created_by' => user_id()
            ];
            $insertChat = $this->masterModel->insert('chats',  $chatData);
            
            if(is_int($insertChat['data']) > 0){
                echo json_encode([
                    'error' => false,
                    'message' => 'Message is sent!',
                    'data' => $chatData,
                    'senderPhoto' => ($this->viewData['userInformation']->user_photo != '') ? $this->viewData['userInformation']->user_photo : 'default-avatar.png'
                ]);
            }
            else{
                echo json_encode([
                    'error' => true,
                    'message' => $insertChat,
                    'data' => false
                ]);
            }
        }
    }

    public function videoCall(){
        return view('chats/videoCall', $this->viewData);
    }
}