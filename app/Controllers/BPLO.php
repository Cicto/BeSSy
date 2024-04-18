<?php
namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class BPLO extends BaseController
{
    public function addBuildingPermitApplication(){
        $data = $this->request->getPost();
        $data["actor"] = $this->userInformation->firstname." ".$this->userInformation->lastname;
        $data["created_by"] = $this->userInformation->user_id;

        $insert_result = $this->masterModel->insert("building_permit_applications", $data);
        return json_encode($insert_result);
    }

    public function getAllBuildingPermitApplications(){

    }

    public function getOngoingBuildingPermitApplications(){
        $select_result = $this->masterModel->get("building_permit_applications", "*", ["finished_at" => NULL, "rejected_at" => NULL, "deleted_at" => NULL], FALSE, "created_at ASC");
        return json_encode($select_result);
    }

    public function getBuildingPermitStatistics(){
        $ongoing_select_result = $this->masterModel->get("building_permit_applications", "COUNT(bpa_id) AS total", ["finished_at" => NULL, "rejected_at" => NULL, "deleted_at" => NULL], FALSE, "created_at ASC");
        $finished_select_result = $this->masterModel->get("building_permit_applications", "COUNT(bpa_id) AS total", ["finished_at <> " => NULL, "rejected_at" => NULL, "deleted_at" => NULL], FALSE, "created_at ASC");
        $rejected_select_result = $this->masterModel->get("building_permit_applications", "COUNT(bpa_id) AS total", ["finished_at" => NULL, "rejected_at <>" => NULL, "deleted_at" => NULL], FALSE, "created_at ASC");
        
        return json_encode([
            'error' => false, 
            'message' => 'Data found', 
            'data' => [
                "ongoing" =>  !$ongoing_select_result["error"] ? $ongoing_select_result["data"][0]->total : 0, 
                "finished" =>  !$finished_select_result["error"] ? $finished_select_result["data"][0]->total : 0, 
                "rejected" =>  !$rejected_select_result["error"] ? $rejected_select_result["data"][0]->total : 0
            ]
        ]);
    }

    public function getBuildingPermitApplicationsDataTable($is_deleted = 0){
        $data = $this->request->getPost();
        $where_conditions = isset($data["where_conditions"]) ? $data["where_conditions"] : [];
        if($is_deleted){
            $where_conditions["deleted_at <>"] = NULL;
        }else{
            $where_conditions["deleted_at"] = NULL;
        }

        foreach ($where_conditions as $column => $value) {
            $where_conditions[str_replace("+", " ", $column)] = $value ? $value : NULL;
        }
        
        $select_result = $this->masterModel->getDataTables("building_permit_applications", 
            "bpa_id, first_name, middle_name, last_name, contact_number, application_description, current_department, 
            current_department, rejected_at, finished_at, actor, created_at, created_by, updated_at, updated_by, deleted_at", 
            $where_conditions);

        return DataTable::of($select_result)->toJson(true);
    }

    public function updateBuildingPermitApplication($bpa_id){
        $data = $this->request->getPost();
        
        foreach ($data as $column => $value) {
            $data[$column] = $value ? $value : NULL;
        }

        $data["updated_at"] = date("Y-m-d H:i:s");
        $data["updated_by"] = $this->userInformation['data'][0]->user_id;

        $update_result = $this->masterModel->update("building_permit_applications", $data, ["bpa_id" => $bpa_id]);
        return json_encode($update_result);
    }
}