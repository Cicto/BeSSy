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
        $where = ['transactions.created_by'=> $user_id];
        $join = [
            ['services','services.service_id = transactions.service_id', 'left']
        ];
        $builder = $this->masterModel->getDataTables(
            'transactions',
            'transactions.transaction_id, transactions.service_id, transactions.actor, transactions.application_id, transactions.created_at, services.service_id, services.service_name',
            $where,
            $join
        );

        return DataTable::of($builder)->toJson(true);
    }
}
