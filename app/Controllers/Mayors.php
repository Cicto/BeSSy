<?php

namespace App\Controllers;

use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Mayors extends BaseController
{
    public function addMayorsClearance()
    {
        $today = date("Y-m-d H:i:s");
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            $data["datetime_accomplished"] = $today;
            $service_id = $data["service_id"];
            unset($data["service_id"]);

            $insert_result = $this->masterModel->insert('mayors_clearance_application', $data);


            if ($insert_result["error"]) {
                return json_encode($insert_result);
            }

            $application_id = $insert_result["data"];

            $transaction_data = [
                "service_id" => $service_id,
                "application_id" => $application_id,
                "created_by" => $this->userInformation['data'][0]->user_id,
                "status" => 0,
                "actor" =>  $this->userInformation['data'][0]->firstname . " " . $this->userInformation['data'][0]->lastname
            ];

            $transactions = $this->masterModel->insert('transactions', $transaction_data);

            return json_encode($transactions);
            
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updateMayorsClearance($mca_id = 0)
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            unset($data["service_id"]);

            $update_result = $this->masterModel->update('mayors_clearance_application', $data, ["mca_id" => $mca_id]);
            return json_encode($update_result);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
