<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Services extends BaseController
{
    public function departmentServices($deptID)
    {   
        $services = $this->masterModel->get('services', 'service_id, dept_id, service_alias, service_name, service_view', ['deleted_at'  => null, 'dept_id' => $deptID]);
        $this->viewData['title'] = 'Department Services';
        $this->viewData['services'] = (!$services['error']) ? $services['data'] : false;
        $this->viewData['departmentInfo'] = $this->getDepartments($deptID);

        return view('services/departmentServices', $this->viewData);
    }

    public function serviceView($serviceId)
    {   
        $service = $this->masterModel->get('services', 'service_id, dept_id, service_alias, service_name, service_view', ['deleted_at'  => null, 'service_id' => $serviceId]);
        $this->viewData['services'] = (!$service['error']) ? $service['data'] : false;
        $this->viewData['departmentInfo'] = $this->getDepartments($service['data'][0]->dept_id);
        $this->viewData['title'] = $service['data'][0]->service_name;
        return view('services/'.$service['data'][0]->service_view, $this->viewData);
    }

    public function deptEmployees($deptID)
    {   
        $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        $this->viewData['employees'] = $this->masterModel->get('employees', 'dept_id, firstname, lastname, middlename', ['dept_id'=> $deptID]);
        $this->viewData['employeesCards'] =  $this->viewData['employees'] = $this->masterModel->get('employees', 'dept_id, firstname, lastname, middlename, employment_status', ['dept_id ='=> $deptID]);
        $this->viewData['departmentID'] = $deptID;
        return view('departments/departmentEmployees', $this->viewData);
        
    }
}