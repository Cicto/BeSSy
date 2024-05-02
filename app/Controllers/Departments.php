<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Departments extends BaseController
{
    


    public function index()
    {   
        $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        return view('departments/manageDepartments', $this->viewData);
        
    }
    public function deptEmployees($deptID)
    {   
        $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        $this->viewData['employees'] = $this->masterModel->get('employees', 'dept_id, firstname, lastname, middlename', ['dept_id'=> $deptID]);
        $this->viewData['employeesCards'] =  $this->viewData['employees'] = $this->masterModel->get('employees', 'dept_id, firstname, lastname, middlename, employment_status', ['dept_id ='=> $deptID]);
        $this->viewData['departmentID'] = $deptID;
        return view('departments/departmentEmployees', $this->viewData);
        
    }
    public function departmentsDataTable()
    {
        $builder = $this->masterModel->getDataTables('departments', 'dept_id, dept_name, dept_alias, deleted_at', ['deleted_at'=> NULL]);
        return DataTable::of($builder)->toJson(true);

        
    }

    public function addDepartment()
    {
        if($this->request->isAJAX()){
            $master_model = new MasterModel();
            $data = [
               'dept_alias' => strtoupper($this->request->getPost('alias')),
               'dept_name' => $this->request->getPost('name')
            ];
            $result = $master_model->insert("departments", $data);
            return $result;
        }
        else
        {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }


    public function getDepartment($dept_id)
    {
        $getter = $this->masterModel->get('departments', 'dept_id, dept_name, dept_alias, deleted_at', ['deleted_at'=> NULL, 'dept_id' => $dept_id]);
        return json_encode($getter);
    }


    public function updateDepartment($id)
    {
        if($this->request->isAJAX()){
            $department_data = [
                'dept_name' => trim($this->request->getPost('name_new')),
                'dept_alias' => strtoupper(trim($this->request->getPost('alias_new'))),
            ];

            $update_dept = $this->masterModel->update('departments', $department_data, ['dept_id' => $this->request->getPost('id_dept')]);
            return $update_dept;
            
        }
    }

    public function archiveDepartment($id){
        if($this->request->isAJAX()){
            $current_date = date('Y-m-d H:i:s');
            $archive_dept = $this->masterModel->update('departments', ['deleted_at'=>$current_date], ['dept_id' => $id]);
            return json_encode($archive_dept);
        }
    }

    public function departmentsDataTableArchive(){
        $builder = $this->masterModel->getDataTables('departments', 'dept_id, dept_name, dept_alias, deleted_at', ['deleted_at !='=> NULL]);
        return DataTable::of($builder)->toJson(true);
    }

    public function unarchiveDepartment($id){
        if($this->request->isAJAX()){
            $archive_dept = $this->masterModel->update('departments', ['deleted_at'=>null], ['dept_id' => $id]);
            return json_encode($archive_dept);
        }
    }
        
    public function employeesDataTable($employeeID)
    {
        $builder = $this->masterModel->getDataTables('employees', 'dept_id, firstname, lastname, middlename, employment_status', ['dept_id'=> $employeeID]);
        return DataTable::of($builder)->toJson(true);

        
    }


    public function servicesDataTableSelect($deptID=0)
    {
        $builder = $this->masterModel->getDataTables('services', 'service_name, service_id', ['dept_id'=>$deptID, 'deleted_at'=>null]);
        return DataTable::of($builder)->toJson(true);
    }

    public function addServices($deptId)
    {
        if($this->request->isAJAX()){
            $master_model = new MasterModel();
            $data = [
               'dept_id' => $deptId,
               'service_name' => $this->request->getPost('name'),
               'service_alias' => $this->request->getPost('alias'),
               'service_view' => $this->request->getPost('view')
            ];
            $result = $master_model->insert("services", $data);
            return $result;
        }
        else
        {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function getServices($servId)
    {
        $getter = $this->masterModel->get('services', 'dept_id, service_name, service_alias, service_view, deleted_at, service_id', ['service_id' => $servId]);
        return json_encode($getter);
    }

    public function updateServices($ser_id)
    {
        if($this->request->isAJAX()){
            $services_data = [
                'service_name' => trim($this->request->getPost('service_name')),
                'service_alias' => trim($this->request->getPost('service_alias')),
                'service_view' => trim($this->request->getPost('service_view')),
            ];

            $update_services = $this->masterModel->update('services', $services_data, ['service_id' => $ser_id]);
            return $update_services;
            
        }
    }

    public function archiveService($ser_id){
        if($this->request->isAJAX()){
            $current_date = date('Y-m-d H:i:s');
            $archive_dept = $this->masterModel->update('services', ['deleted_at'=>$current_date], ['service_id' => $ser_id]);
            return json_encode($archive_dept);
        }
    }
    

    public function servicesDataTableArchive($deptID){
        $builder = $this->masterModel->getDataTables('services', 'service_id, service_name, deleted_at, dept_id', ['dept_id'=>$deptID, 'deleted_at !='=>null]);
        return DataTable::of($builder)->toJson(true);
    }

    public function unarchiveService($id){
        if($this->request->isAJAX()){
            $archive_serv = $this->masterModel->update('services', ['deleted_at'=>null], ['service_id' => $id]);
            return json_encode($archive_serv);
        }
    }

    
    
    // public function testest($username)
    // {
    //    $users = $this->masterModel->get("users", "email, username", ['username' => $username]);
    //    echo "<pre>";
    //    print_r($users);
    //    echo "</pre>";
    // }
}
