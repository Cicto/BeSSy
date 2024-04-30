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
    public function buildingPermitTracker(){
        return view('services/bplo/buildingApplicationTracker', $this->viewData);
    }

    public function buildingPermitManager(){
        $finished_applications = $this->masterModel->get("building_permit_applications", "COUNT(bpa_id) as total", ["YEAR(finished_at)" => date("Y")]);
        $this->viewData["finished_applications"] = $finished_applications;
        $ongoing_applications = $this->masterModel->get("building_permit_applications", "first_name, last_name", ["rejected_at" => NULL, "finished_at" => NULL]);
        $this->viewData["ongoing_applications"] = $ongoing_applications;
        $dept_avg_duration = $this->masterModel->get("building_permit_applications", "AVG(NULLIF(`bplo_duration`, 0)) AS bplo_duration, AVG(NULLIF(`engineering_duration`, 0)) AS engineering_duration, AVG(NULLIF(`cpdc_duration`, 0)) AS cpdc_duration, AVG(NULLIF(`fire_department_duration`, 0)) AS fire_department_duration");
        $this->viewData["dept_avg_duration"] = $dept_avg_duration;

        return view('services/bplo/buildingApplicationManager', $this->viewData);
    }

    public function getBuildingPermitApplication($bpa_id = 0){
        $search_data = $this->request->getGet();
        $where_conditions = ["deleted_at" => NULL];

        if(count($search_data)){
            foreach ($search_data as $column => $value) {
                if($value){ $where_conditions[$column] = $value; }
            }
        }

        if($bpa_id){
            $where_conditions["bpa_id"] = $bpa_id;
        }

        if(count($where_conditions)<=1){
           return json_encode(['error' => true, 'result' => 'No conditions set', 'data' => false]);
        }
        
        $building_permit_select = $this->masterModel->get("building_permit_applications", "*", $where_conditions);
        return json_encode($building_permit_select);
    }

    // public function searchBuildingPermitApplication(){

    // }

    public function addBuildingPermitApplication(){
        $data = $this->request->getPost();
        $user_info = $this->userInformation["data"][0];
        $data["actor"] = $user_info->firstname." ".$user_info->lastname;
        $data["created_by"] = $user_info->user_id;
        $data["application_history"] = json_encode([["dept" => "bplo", "datetime" => date("Y-m-d H:i:s")]]);

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

        if($data["previous_department"]){
            $application_select = $this->masterModel->get("building_permit_applications", "*", ["bpa_id" => $bpa_id]);
            if(!$application_select["error"]){
                $application_info = $application_select["data"][0];

                $prev_dept = str_replace("-", "_", $data["previous_department"]);
                $prev_dept_duration = $application_info->{$prev_dept."_duration"};

                $created_at = strtotime($application_info->created_at);

                $bplo_duration = $application_info->bplo_duration;
                $engineering_duration = $application_info->engineering_duration;
                $cpdc_duration = $application_info->cpdc_duration;
                $fire_department_duration = $application_info->fire_department_duration;

                $overall_duration = $created_at + $bplo_duration + $engineering_duration + $cpdc_duration + $fire_department_duration;

                $now = strtotime(date('m/d/Y h:i:s a'));

                $duration = $now - $overall_duration;
                $data[$prev_dept."_duration"] = $application_info->{$prev_dept."_duration"} + $duration;

                // ===========|||============

                $application_history = json_decode($application_info->application_history, true);
                array_push($application_history, ["dept" => $data["current_department"], "datetime" => date("Y-m-d H:i:s")]);
                $data["application_history"] = json_encode($application_history);
            }
            unset($data["previous_department"]);
        }

        $data["updated_at"] = date("Y-m-d H:i:s");
        $data["updated_by"] = $this->userInformation['data'][0]->user_id;

        $update_result = $this->masterModel->update("building_permit_applications", $data, ["bpa_id" => $bpa_id]);
        return json_encode($update_result);
    }


}