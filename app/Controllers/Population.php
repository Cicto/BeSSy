<?php

namespace App\Controllers;

use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Population extends BaseController
{
    public function addPopComServices()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            $service_id = $data["service_id"];
            unset($data["service_id"]);
            $insert_result = $this->masterModel->insert('popcom_services', $data);


            if ($insert_result["error"]) {
                return json_encode($insert_result);
            }

            $application_id = $insert_result["data"];

            $transaction_data = [
                "service_id" => $service_id,
                "application_id" => $application_id,
                "created_by" => $this->userInformation['data'][0]->user_id,
                "actor" =>  $this->userInformation['data'][0]->firstname . " " . $this->userInformation['data'][0]->lastname
            ];



            $transactions = $this->masterModel->insert('transactions', $transaction_data);

            return json_encode($transactions);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
