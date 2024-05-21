<?php

namespace App\Controllers;

use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class LCR extends BaseController
{
    public function addBirthCertificate()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            $service_id = $data["service_id"];
            unset($data["service_id"]);

            $insert_result = $this->masterModel->insert('birth_cert_request', $data);


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

    public function updateBirtCertificate($bc_id = 0)
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            unset($data["service_id"]);

            $update_result = $this->masterModel->update('birth_cert_request', $data, ["bc_id" => $bc_id]);
            return json_encode($update_result);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }


    public function addDeathCertificate()
    {

        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            $service_id = $data["service_id"];
            unset($data["service_id"]);

            $insert_result = $this->masterModel->insert('death_cert_request', $data);


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

    public function updateDeathCertificate($dc_id = 0)
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            unset($data["service_id"]);

            $update_result = $this->masterModel->update('death_cert_request', $data, ["dc_id" => $dc_id]);
            return json_encode($update_result);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function addMarriageCertificate()
    {

        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            $service_id = $data["service_id"];
            unset($data["service_id"]);

            $insert_result = $this->masterModel->insert('marriage_cert_request', $data);


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

    public function updateMarriageCertificate($mrg_id = 0)
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            unset($data["service_id"]);

            $update_result = $this->masterModel->update('marriage_cert_request', $data, ["mrg_id" => $mrg_id]);
            return json_encode($update_result);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

}
