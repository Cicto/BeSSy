<?php

namespace App\Controllers;

use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Applications extends BaseController
{
    public function index()
    {
        $convoInfo = $this->getConvoInfo(user_id(), 0, $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname);
        $this->viewData['title'] = 'Transactions';
        $this->viewData['departmentInfo'] = false;
        $this->viewData['convoInfo'] = $convoInfo;
        return view('services/transactions', $this->viewData);
    }

    public function transactionsDataTables()
    {
        // echo $this->userInformation['data'][0]->role;
        switch ($this->userInformation['data'][0]->role) {
          case 5:
            $user_id =$this->userInformation['data'][0]->user_id;
            $where = ['transactions.created_by'=> $user_id ];
            break;
          case 3:
            $dept_id =$this->userInformation['data'][0]->dept_id;
            $dept_services = $this->masterModel->get('services', 'service_id', ['dept_id' => $dept_id]);
            
            $where = "";
            if(!$dept_services['error']){
                foreach ($dept_services['data'] as $index => $dept_service) {
                    $service_id = $dept_service->service_id;
                    if(!$index){
                        $where = "transactions.service_id = $service_id";
                        continue;
                    }
                    $where = $where."OR transactions.service_id = $service_id";
                }
            }else{
                $where = [];
            }
            
            // print_r($where);
            break;
        default:
            $where = [];
        }
        
        $join = [
            ['services','services.service_id = transactions.service_id', 'left']
        ];
        $builder = $this->masterModel->getDataTables(
            'transactions',
            'transactions.transaction_id, transactions.service_id, transactions.actor, transactions.application_id, transactions.status, transactions.created_at, services.service_id, services.service_name',
            $where,
            $join
        );

        return DataTable::of($builder)->toJson(true);
    }

    public function transactionPreview($serviceId, $applicationId = 0){
        if(!($serviceId && $applicationId)){ throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); }
        
        $service_select = $this->masterModel->get("services", "*", ["service_id" => $serviceId]);
        $status = $this->masterModel->get("transactions", "status", ["application_id" => $applicationId]);
        if($service_select["error"]){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }else{
            $service_info = $service_select["data"][0];
            $service_table = $service_info->service_table;
            $service_key = $service_info->service_key;
        
            $transaction_select = $this->masterModel->get($service_table, "*", [$service_key => $applicationId]);
            if($transaction_select["error"]){
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }else{
                $convoInfo = $this->getConvoInfo(user_id(), $service_select['data'][0]->dept_id, $this->viewData['userInformation']->firstname.' '.$this->viewData['userInformation']->lastname);
                $this->viewData["service"] = $service_info;
                $this->viewData["transaction_info"] = $transaction_select["data"][0];
                $this->viewData['departmentInfo'] = $this->getDepartments($service_select['data'][0]->dept_id);
                $this->viewData['convoInfo'] = $convoInfo;
                $this->viewData["title"] = $service_info->service_name;
                $this->viewData["status"] = $status["data"][0];
                return view('services/' . $service_info->service_view, $this->viewData);
            }
        }
    }

    public function transactionReject($transactionId = 0){
        $update_result = $this->masterModel->update('transactions',["status"=>2 , "rejected_at" => date("Y-m-d H:i:s") ],["transaction_id"=>$transactionId]);
        
        return json_encode($update_result);
    }

    public function transactionApprove($transactionId = 0){
        $update_result = $this->masterModel->update('transactions',["status"=>1 , "approved_at" => date("Y-m-d H:i:s")],["transaction_id"=>$transactionId]);
        
        return json_encode($update_result);
    }
}