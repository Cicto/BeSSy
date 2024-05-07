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
        $this->viewData['title'] = 'Transactions';
        return view('services/transactions', $this->viewData);
    }

    public function transactionsDataTables()
    {
        $user_id =$this->userInformation['data'][0]->user_id;
        $where = ['transactions.created_by'=> $user_id ];
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
                $this->viewData["service"] = $service_info;
                $this->viewData["transaction_info"] = $transaction_select["data"][0];
                $this->viewData["title"] = $service_info->service_name;
                $this->viewData["status"] = $status["data"][0];
                return view('services/' . $service_info->service_view, $this->viewData);
            }
        }
    }
}
