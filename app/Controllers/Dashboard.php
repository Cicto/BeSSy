<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;

class Dashboard extends BaseController
{
    public function __construct()
    {
        
    }


    public function index()
    {   
        if(!$this->userInformation["data"]){
            return redirect()->to(base_url("users/newProfile"));
        }

        switch ($this->userInformation['data'][0]->role) {
            
            case '1': // System Admin
                return view('dashboards/systemAdmin', $this->viewData);
            break;
            case '2': // Office Head
                return view('dashboards/officeHead', $this->viewData);
            break;
            case '3': // Office Staff
                $this->viewData['departmentInfo'] = $this->getDepartments($this->viewData['userInformation']->dept_id);
                return view('dashboards/officeStaff', $this->viewData);
            break;
            case '4': // Encoder
                return view('dashboards/encoderDashboard', $this->viewData);
            break;
            case '5': // Client
                $activeDepartments = $this->masterModel->get('departments', 'dept_id, dept_alias, dept_name', ['is_visible' => 1]);
                $convoInfo = $this->getConvoInfo(user_id(), 0, $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname);
                $this->viewData['activeDepartments'] = (!$activeDepartments['error']) ? $activeDepartments['data'] : false;
                $this->viewData['departmentInfo'] = false;
                $this->viewData['convoInfo'] = $convoInfo;

                return view('dashboards/clientDashbord', $this->viewData);
            break;
            
            default:

                $getPassword = $this->masterModel->get('users', 'password_hash', ['id' => user_id()]);

                if(Password::verify(TemplateLib::defaultPassword(), $getPassword['result'][0]->password_hash))
                {  
                    return view('users/changePassword', $view_data); 
                }
                else
                {
                    $view_data = [
                        'title' => 'Welcome, '.$this->userInformation->firstname.' '.$this->userInformation->lastname,
                        'userInformation' => $this->userInformation
                    ];
                    return view('dashboards/client', $view_data);
                }

                break;
                
        }
    }

    public function adminDashboard()
    {   
        
    }

    public function clientDashboard()
    {
        $view_data = [
            'title' => 'Welcome, '.$userInfo->firstname.' '.$userInfo->lastname,
            'userInformation' => $userInfo
        ];
    }

    public function profile(){
        if($this->userInformation->role==3){
            $masterModel = new MasterModel();

            $view_data = [
                'title' => 'My Profile',
                'userInformation' => $this->userInformation,
                'userBarangaysCitiesAndProvinces' => json_decode(UtilController::userBarangaysCitiesAndProvinces($this->userInformation->brgy_id))
            ];
            return view('users/editProfile', $view_data);
        }else{throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();}

    }
}
