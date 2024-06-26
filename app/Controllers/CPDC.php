<?php

namespace App\Controllers;

use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class CPDC extends BaseController
{
    public function addZoningPermit()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();

            $service_id = $data["service_id"];
            unset($data["service_id"]);
            $result_array = "";
            foreach ($this->request->getPost('site') as $site_data) {
                $result_array .= $site_data . " ";
            }

            $data["site"] = $result_array;

            $insert_result = $this->masterModel->insert('zoning_permit', $data);

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

    public function updateZoningPermit($zp_id = 0)
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            unset($data["service_id"]);

            $update_result = $this->masterModel->update('zoning_permit', $data, ["zp_id" => $zp_id]);
            return json_encode($update_result);

        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
