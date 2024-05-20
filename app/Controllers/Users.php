<?php

namespace App\Controllers;
use App\Controllers\UtilController;
use App\Models\UsersModel;
use App\Models\MasterModel;
use Myth\Auth\Entities\User;
use Myth\Auth\Authentication\LocalAuthentication;
use Myth\Auth\Password;
use Hermawan\DataTables\DataTable;
use App\Libraries\TemplateLib;

class Users extends BaseController
{

    public function index(){   
        // $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        $this->viewData['title'] = 'System Users';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();

        return view('users/users', $this->viewData);
    }

    public function myProfile(){
        $barangay_select = $this->masterModel->get("refbrgy", "*", ["citymunCode" => "031403"]);

        $this->viewData['title'] = 'My Profile';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();
        $this->viewData['barangays'] = $barangay_select["error"] ? FALSE : $barangay_select["data"];
        $this->viewData['departmentInfo'] = false;
        $convoInfo = $this->getConvoInfo(user_id(), 0, $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname);
        $this->viewData['convoInfo'] = $convoInfo;

        $this->viewData['url'] =  ROOTPATH;

        return view('users/editProfile', $this->viewData);
    }

    public function newProfile(){
        $check_user = $this->masterModel->get("user_info", "*", ["user_id" => user_id()]);
        if($check_user["data"]){ return redirect()->to(base_url()); }

        $barangay_select = $this->masterModel->get("refbrgy", "*", ["citymunCode" => "031403"]);

        $this->viewData['title'] = 'New Profile';
        $this->viewData['user_id'] = user_id();
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();
        $this->viewData['barangays'] = $barangay_select["error"] ? FALSE : $barangay_select["data"];
        $this->viewData['url'] =  ROOTPATH;

        return view('users/newProfile', $this->viewData);
    }

    public function getUsers(){
        return DataTable::of(
            $this->masterModel->getDataTables(
                'user_info',
                'user_id, username, user_qrcode, firstname, middlename, lastname, birthdate, role, user_photo, email, status, active, dept_name, dept_alias, user_info.dept_id, birthdate', 
                [], 
                [
                    ['users', 'users.id = user_info.user_id', 'left'],
                    ['departments', 'departments.dept_id = user_info.dept_id', 'left']
                ]
            )
        )->add('actions', function($row){
            return '
                <div class="dropdown ms-2">
                    <button class="btn btn-sm btn-icon btn-light-primary btn-active-primary me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                <rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                <rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                            </svg>
                        </span>
                    </button>
                    <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" aria-labelledby="dropdownMenuButton" style="">
                        <div class="menu-item px-3">
                            <span class="menu-link px-3 edit-btn" data-id = "'.$row->user_id.'" >Edit</span>
                        </div>
                        <div class="menu-item px-3">
                            <span class="menu-link px-3 access-btn" data-id = "'.$row->user_id.'" >Profile</span>
                        </div>
                    </div>
                </div>';
        })->toJson(true);
    }

    public function getUser($userId){
        $userInfo = $this->userInformation($userId);
    }
    
    public function addUser(){
        if($this->request->isAJAX()){
            $users = [
                'email' => trim($this->request->getPost('email')),
                'username' => trim($this->request->getPost('username')),
                'password_hash' => Password::hash(TemplateLib::defaultPassword()),
                'active' => 1
            ];

            $user_check = $this->infoCheck($users["username"], $users["email"]);
            if($user_check["error"]){
                return json_encode($user_check);
            }

            $insertUser = $this->masterModel->insert('users', $users);
            
            if(!$insertUser['error']){

                $userInfo = [
                    'user_id' => $insertUser['data'],
                    'user_qrcode' => 'BALIWAG-EMP-'.$this->request->getPost('dept_id').'-'.str_pad($insertUser['data'], 7, 0, STR_PAD_LEFT),
                    'firstname' => trim($this->request->getPost('firstname')),
                    'middlename' => trim($this->request->getPost('middlename')),
                    'lastname' => trim($this->request->getPost('lastname')),
                    'birthdate' => $this->request->getPost('birthdate'),
                    'dept_id' => $this->request->getPost('dept_id'),
                    'role' => $this->request->getPost('role'),
                ];

                $insertUserInfo = $this->masterModel->insert('user_info', $userInfo);
                
                if(!$insertUserInfo['error']){
                    return json_encode([
                        'error' => false,
                        'message' => $insertUserInfo['message'],
                        'data' => $insertUserInfo['data']
                    ]);
                }
                else{
                    return json_encode([
                        'error' => true,
                        'message' => $insertUserInfo['message'],
                        'data' => false
                    ]);
                }
            }
        }
        else{
            return json_encode([
                'error' => true,
                'message' => $insertUser['message'],
                'data' => false
            ]);
        }
    }

    public function updateUser(){
        if($this->request->isAJAX()){
            $message = '';
            $users = [
                'email' => trim($this->request->getPost('email')),
                'username' => trim($this->request->getPost('username')),
            ];

            $user_check = $this->infoCheck($users["username"], $users["email"], $this->request->getPost('user_id'));
            if($user_check["error"]){
                return json_encode($user_check);
            }

            $updateUser = $this->masterModel->update('users', $users, ['id' => $this->request->getPost('user_id')]);

            if(!$updateUser['error']){
                $userInfo = [
                    'firstname' => trim($this->request->getPost('firstname')),
                    'middlename' => trim($this->request->getPost('middlename')),
                    'lastname' => trim($this->request->getPost('lastname')),
                    'birthdate' => $this->request->getPost('birthdate'),
                    'contact_number' => $this->request->getPost('contact_number'),
                    'barangay' => $this->request->getPost('barangay'),
                    'role' => $this->request->getPost('role'),
                    'dept_id' => $this->request->getPost('dept_id'),
                ];

                $updateUserInfo = $this->masterModel->update('user_info', $userInfo, ['user_id' => $this->request->getPost('user_id')]);

                if(!$updateUserInfo['error']){
                    return json_encode([
                        'error' => false,
                        'message' => ($updateUser['data'] != false) ? $updateUser['message'] : $updateUserInfo['message'],
                        'data' => $updateUserInfo['data']
                    ]);
                }
                else{
                    return json_encode([
                        'error' => true,
                        'message' => $updateUserInfo['message'],
                        'data' => $updateUserInfo['data']
                    ]);
                }
            }
        }
    }

    public function resetUserPassword($id){
        if ($this->request->isAJAX())
        {
            $data = [
                'password_hash' => Password::hash(TemplateLib::defaultPassword()),
            ];

            $updatePassword = $this->masterModel->update('users', $data, ['id' => $id]);

            if(!$updatePassword['error']){
                return json_encode([
                    'error' => false,
                    'message' => 'Password Successfully Updated.',
                    'data' => $updatePassword['data']
                ]);
            }
            else{
                return json_encode([
                    'error' => false,
                    'message' => $updatePassword['message'],
                    'data' => $updatePassword['data']
                ]);
            }
        }
    }

    public function addUserInfo($userId){
        if($this->request->isAJAX()){
            $user_info = $this->request->getPost();
            $user_info['user_id'] = $userId;
            $user_info['role'] = 5;
            $user_info['user_qrcode'] = 'BALIWAG-EMP-00-'.str_pad($userId, 7, 0, STR_PAD_LEFT);
            $user_info['dept_id'] = 1;

            $insertUser = $this->masterModel->insert('user_info', $user_info);
            
            return json_encode($insertUser);
        }else{
            return json_encode([
                'error' => true,
                'message' => $insertUser['message'],
                'data' => false
            ]);
        }
    }

    private function infoCheck($username = "", $email_address = "", $user_id_exception = 0){
        $where_condition = "username='$username' OR email='$email_address'";
        if($user_id_exception){
            $where_condition = "(username='$username' OR email='$email_address') AND id <> $user_id_exception";
        }
        
        $check_select = $this->masterModel->get("users", "username, email", $where_condition);

        if(!$check_select["error"]){
            $matched_user_info = $check_select["data"][0];
            $message = "Username or email already in use";

            if($matched_user_info->username == $username){
                $message = "Username '$matched_user_info->username' already in use";
            }elseif($matched_user_info->email == $email_address){
                $message = "'$matched_user_info->email' is already in use";
            }

            return ['error' => true, 'message' => $message];
        }elseif($check_select["result"] == 'No data found'){

            return ['error' => false, 'message' => 'Username and email does not match'];

        }

        return ['error' => true, 'message' => $check_select['result'], 'data' => false];;
    }

    public function uploadUserPhoto($user_id){
        helper('filesystem');
        
        $file = $this->request->getFile('file');
        
        $filepath = "./public/assets/media/avatars";
        $fileName = $file->getName();

        $validationRule = [
            'file' => [
                'label' => 'File',
                'rules' => [
                    'uploaded[file]',
                    'max_size[file, 50000]',
                ],
            ],
        ];

        if(!$this->validate($validationRule)){
            return json_encode([
                'error' => true,
                'message' => $this->validator->getErrors()
            ]);
        }else{
            if(!unlink(str_replace("\\", "/", ROOTPATH)."public/assets/media/avatars/".$fileName)){
                return json_encode([
                    'error' => true,
                    'message' => 'Old photo not deleted',
                    'dir' => str_replace("\\", "/", ROOTPATH)."public/assets/media/avatars/".$fileName
                ]);
            }
            if (!$file->hasMoved()) {
                if($file->move($filepath, $fileName)){
                    $update = $this->masterModel->update('user_info', ["user_photo" => $fileName], ["user_id" => $user_id]);
                    $update["file_name"] = $fileName;
                    return json_encode($update);
                }else{
                    return json_encode([
                        'error' => true,
                        'message' => 'Something went wrong'
                    ]);
                } 
            }else{
                return json_encode([
                    'error' => true,
                    'message' => 'File was already moved!'
                ]);
            }
        }
    }

    public function authenticateUser($user_id = 0){
        // If no user_id is supplied, use the currently logged in user
        if(!$user_id){ $user_id = user_id(); }
        $user_select = $this->masterModel->get("users", "*", ["id"=>$user_id]);

        // On error
        if($user_select["error"]){ return json_encode($user_select); }

        $auth = service('authentication');
        $user_email_address = $user_select["data"][0]->email;
        $submitted_password = $this->request->getPost("password");

        $credentials = [
            'email' => $user_email_address,
            'password' => $submitted_password
	    ];
        
        if($auth->validate($credentials)){
            return json_encode([ 'error' => false, 'result' => 'User successfully authenticated' ]);
        }else{
            return json_encode([ 'error' => true, 'result' => 'Incorrect password submitted' ]);
        }

    }

    public function updateUserPassword($user_id = 0){
        if($this->request->isAJAX()){

            // If no user_id is supplied, use the currently logged in user
            if(!$user_id){ $user_id = user_id(); }

            $new_password = $this->request->getPOST("new_password");
            $repeat_password = $this->request->getPOST("repeat_password");

            if(strlen($new_password) < 8){
                return json_encode([
                    'error' => true, 'message' => 'Password must be at least 8 characters'
                ]);
            }

            if($new_password !== $repeat_password){
                return json_encode([
                    'error' => true, 'message' => 'Entered passwords do not match'
                ]);
            }
            $password_update = $this->masterModel->update("users", [ 'password_hash' => Password::hash($new_password) ], ["id" => $user_id]);
            return json_encode($password_update);

        }else{ throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); }
    }

    public function deactivateUser($user_id = 0){
        if($this->request->isAJAX()){
            // If no user_id is supplied, use the currently logged in user
            if(!$user_id){ $user_id = user_id(); }
    
            $password_update = $this->masterModel->update("users", [ 'active' => 0 ], ["id" => $user_id]);
            return json_encode($password_update);
        }else{ throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); }
    }
}
