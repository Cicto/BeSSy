<?= $this->extend('layouts/nonAdminContainer'); ?>
<?php 
    function secondMinimizer($seconds){
        $seconds = (int)$seconds;
        if(($seconds/86400)>=1){
            $value = floor($seconds/86400);
            $unit = $value > 1 ? "days" : "day";
            return ["value" => $value, "unit" => $unit, "remainder" => $seconds%86400];
        }elseif(($seconds/3600)>=1){
            $value = floor($seconds/3600);
            $unit = $value > 1 ? "hrs" : "hr";
            return ["value" => $value, "unit" => $unit, "remainder" => $seconds%3600];
        }elseif(($seconds/60)>=1){
            $value = floor($seconds/60);
            $unit = $value > 1 ? "mins" : "min";
            return ["value" => $value, "unit" => $unit, "remainder" => $seconds%60];
        }
        return ["value" => floor($seconds), "unit" => "secs"];
    }?>
<?= $this->section('css'); ?>
<style>

</style>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="position-relative">
        <div class="bg-primary min-h-300px" style="
            background-image: url('<?=base_url()?>/public/assets/media/misc/auth-bg.png');
            background-size: cover;
        ">
            <div class="container h-100 d-flex flex-column py-10">
                <h1 class="page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center mb-10 text-light">
                    Building Permit Application Tracker
                    <span class="page-desc text-white opasity-50 fs-7 fw-semibold pt-2">Search your building permit and view its current status.</span>
                </h1>
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <form id="application-search-form">
                            <div class="input-group input-group-solid">
                                <span class="input-group-text"><i class="fab fa-slack-hash text-primary fs-2"></i></span>
                                <input type="text" class="form-control form-control-lg form-control-solid text-gray-800" name="bpa_id" placeholder="Application ID"/>
                            </div>
                            <div class="separator separator-content my-5">
                                <span class="w-125px text-light fw-semibold fs-7">or</span>
                            </div>
                            <div class="input-group input-group-solid">
                                <span class="input-group-text"><i class="fas fa-mobile-alt text-primary fs-2"></i></span>
                                <input type="text" class="form-control form-control-lg form-control-solid text-gray-800" name="contact_number" id="contact-number" placeholder="Mobile Number"/>
                            </div>
                            <button type="submit" class="btn bg-light-primary text-gray-800 float-end mt-5 fw-bold">Search Application</button>
                        </form>
                    </div>
                    <div class="offset-1 col-4 d-none d-lg-block">
                        <div class="card rounded-4 position-relative overflow-hidden bg-transparent border border-white">
                            <div class="card-header d-flex align-items-center border-0 pb-0">
                                <h2 class="title-custom fs-2 text-light">Finished Applications (<?=date("Y")?>)</h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex align-items-end">
                                    <div class="display-2 mx-3 position-relative">
                                        <?php 
                                            $finished_applications_count = 0;
                                            if($finished_applications["error"]){
                                                $finished_applications_count = rand(100, 4500);
                                            }else{
                                                $finished_applications_count = $finished_applications["data"][0]->total;
                                            }
                                        ?>
                                        <div class="position-absolute text-end end-0 text-light" data-kt-countup="true" data-kt-countup-value="<?=$finished_applications_count?>">0</div>
                                        <span class="opacity-0">
                                            <?=number_format($finished_applications_count);?>
                                        </span>
                                    </div>
                                    <p class="text-light">Building Permit <br>Application(s)</p>
                                </div>
                            </div>
                            <div class="position-absolute top-100 start-100 translate-middle">
                                <span class="svg-icon svg-icon-light opacity-25">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(25);">
                                        <path opacity="0.3" d="M14.1 15.013C14.6 16.313 14.5 17.813 13.7 19.113C12.3 21.513 9.29999 22.313 6.89999 20.913C5.29999 20.013 4.39999 18.313 4.39999 16.613C5.09999 17.013 5.99999 17.313 6.89999 17.313C8.39999 17.313 9.69998 16.613 10.7 15.613C11.1 15.713 11.5 15.813 11.9 15.813C12.7 15.813 13.5 15.513 14.1 15.013ZM8.5 12.913C8.5 12.713 8.39999 12.513 8.39999 12.313C8.39999 11.213 8.89998 10.213 9.69998 9.613C9.19998 8.313 9.30001 6.813 10.1 5.513C10.6 4.713 11.2 4.11299 11.9 3.71299C10.4 2.81299 8.49999 2.71299 6.89999 3.71299C4.49999 5.11299 3.70001 8.113 5.10001 10.513C5.80001 11.813 7.1 12.613 8.5 12.913ZM16.9 7.313C15.4 7.313 14.1 8.013 13.1 9.013C14.3 9.413 15.1 10.513 15.3 11.713C16.7 12.013 17.9 12.813 18.7 14.113C19.2 14.913 19.3 15.713 19.3 16.613C20.8 15.713 21.8 14.113 21.8 12.313C21.9 9.513 19.7 7.313 16.9 7.313Z" fill="currentColor"/>
                                        <path d="M9.69998 9.61307C9.19998 8.31307 9.30001 6.81306 10.1 5.51306C11.5 3.11306 14.5 2.31306 16.9 3.71306C18.5 4.61306 19.4 6.31306 19.4 8.01306C18.7 7.61306 17.8 7.31306 16.9 7.31306C15.4 7.31306 14.1 8.01306 13.1 9.01306C12.7 8.91306 12.3 8.81306 11.9 8.81306C11.1 8.81306 10.3 9.11307 9.69998 9.61307ZM8.5 12.9131C7.1 12.6131 5.90001 11.8131 5.10001 10.5131C4.60001 9.71306 4.5 8.91306 4.5 8.01306C3 8.91306 2 10.5131 2 12.3131C2 15.1131 4.2 17.3131 7 17.3131C8.5 17.3131 9.79999 16.6131 10.8 15.6131C9.49999 15.1131 8.7 14.1131 8.5 12.9131ZM18.7 14.1131C17.9 12.8131 16.7 12.0131 15.3 11.7131C15.3 11.9131 15.4 12.1131 15.4 12.3131C15.4 13.4131 14.9 14.4131 14.1 15.0131C14.6 16.3131 14.5 17.8131 13.7 19.1131C13.2 19.9131 12.6 20.5131 11.9 20.9131C13.4 21.8131 15.3 21.9131 16.9 20.9131C19.3 19.6131 20.1 16.5131 18.7 14.1131Z" fill="currentColor"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="position-absolute top-0 end-0 p-2 m-4 bg-white rounded-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-10" id="building-permit-info-container" style="display: none;">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-6">
                        <div class="d-flex align-items-center gap-4">
                            <div class="symbol symbol-40px symbol-circle">
                                <div class="symbol-label fs-3 fw-semibold text-primary bg-light-primary border border-primary border-2" id="name-symbol">JD</div>
                            </div>
                            <div class="">
                                <h1 class="fs-1 m-0 text-gray-800"><span class="first-name"></span> <span class="middle-name"></span> <span class="last-name"></span></h1>
                                <p class="m-0 text-gray-700 fw-semibold"><i class="fas fa-mobile-alt text-gray-700"></i> <span class="contact-number"></span></p>
                            </div>
                        </div>
                        <div class="bg-light-primary d-flex align-items-center px-5 border border-primary border-2 rounded" id="status-container">
                            <h2 class="text-primary m-0 status"></h2>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="fs-4 fw-semibold text-gray-800 mb-0" id="timeline-action-text">Your application is currently being processed by</p>
                        <h1 class="display-4 text-gray-900 m-0"><span class="current-department">Engineering Office</span></h1>
                    </div>
                    <div class="text-center" id="timeline-container">
                        <div class="vr h-75px"></div>
                        <div class="">
                            <div class="fs-4 fw-semibold text-gray-700">Business Permit Licensing Office</div>
                            <div class="fs-6 text-gray-600">January 2, 2024 - 10:35 pm</div>
                        </div>
                        <div class="vr h-75px"></div>
                        <div class="">
                            <div class="fs-4 fw-semibold text-gray-700">Application Created</div>
                            <div class="fs-6 text-gray-600">January 1, 2024 - 10:35 pm</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-10 mb-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 mb-6">
                            <div class="card h-100 bg-success overflow-hidden">
                                <div class="card-header pt-5 border-0">
                                    <div class="card-title d-flex flex-column">   
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?=!$ongoing_applications["error"] ? count($ongoing_applications["data"]) : 0?></span>

                                        <span class="text-white pt-1 fw-semibold fs-6">Ongoing Applications</span>             
                                    </div>
                                </div>
                                <div class="card-body border-0">
                                    <div class="d-flex flex-nowrap justify-content-end symbol-group symbol-hover">
                                        <?php if(!$ongoing_applications["error"]):?>
                                            <?php foreach ($ongoing_applications["data"] as $index => $applicant):
                                                $applicant_initials = $applicant->first_name[0].$applicant->last_name[0];
                                                if(count($ongoing_applications["data"]) >= 6 && $index >= 4){
                                                    break;
                                                }
                                            ?>
                                            <div class="symbol symbol-30px symbol-md-40px symbol-lg-30px symbol-xl-40px symbol-circle">
                                                <div class="symbol-label fw-semibold bg-success text-inverse-success">
                                                    <span class="fs-3 d-none d-lg-inline"><?=$applicant_initials?></span>
                                                    <span class="fs-5 d-none d-md-inline d-lg-none"><?=$applicant_initials?></span>
                                                    <span class="fs-6 d-inline d-md-none "><?=$applicant_initials?></span>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                            <?php if(count($ongoing_applications["data"]) >= 6):?>
                                                <div class="symbol symbol-30px symbol-md-40px symbol-lg-30px symbol-xl-40px symbol-circle">
                                                    <div class="symbol-label fs-6 fw-semibold bg-white text-success"><?=count($ongoing_applications["data"])-4?>+</div>
                                                </div>
                                            <?php endif;?>
                                        <?php endif;?>
                                    </div>
                                    <div class="w-75 bg-white h-5px ms-auto mt-4 rounded-pill position-relative placeholder-wave" style="">
                                        <span class="position-absolute placeholder w-100 bg-success"></span>
                                    </div>
                                </div>
                                <div class="position-absolute top-0 start-100 translate-middle" style="pointer-events: none;">
                                    <span class="svg-icon svg-icon-light opacity-25">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(25) rotate(<?=rand(0, 360)?>deg);">
                                            <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="currentColor"/>
                                            <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-6 d-block d-lg-none">
                            <div class="card h-100">
                                <div class="card-body d-flex align-items-center">
                                    <div class="text-center w-100">
                                        <?php if(!$dept_avg_duration["error"]):
                                                $dept_durations = $dept_avg_duration["data"][0];
                                                $total_dept_duration = 0;
                                                foreach ($dept_durations as $key => $value) {
                                                    $total_dept_duration += (int)$value;
                                                }

                                                $day_duration = floor($total_dept_duration / 86400);
                                                $day_remainder = floor($total_dept_duration % 86400);
                                                
                                                $hour_duration = floor($day_remainder / 3600);
                                                $hour_remainder = floor($day_remainder % 3600);

                                                $minute_duration = floor($hour_remainder / 60);
                                                $minute_remainder = floor($hour_remainder % 60);
                                            ?>
                                        <div class="fs-2hx fw-bold text-primary">
                                            <span class="day <?=$day_duration ? "" : "d-none"?>"><?=$day_duration?>day<small class="<?=$day_duration>1 ? "" : "d-none"?>">s</small></span>
                                            <span class="hour <?=$hour_duration ? "" : "d-none"?>"><?=$hour_duration?>hr<small class="<?=$hour_duration>1 ? "" : "d-none"?>">s</small></span>
                                            <span class="hour <?=$minute_duration ? "" : "d-none"?> <?=$day_duration ? "d-none" : ""?>"><?=$minute_duration?>min<small class="<?=$minute_duration>1 ? "" : "d-none"?>">s</small></span>
                                        </div>
                                        <div class="py-1 bg-primary bg-opacity-25 rounded-pill w-75 mx-auto mb-5"></div>
                                        <div class="fw-bold text-gray-800 fs-5">Overall Average Processing Time</div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-6">
                            <div class="card h-100">
                                <div class="card-header pt-5 border-0">
                                    <div class="card-title d-flex flex-column">   
                                        <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">
                                            ~
                                        </span>

                                        <span class="pt-1 fw-semibold fs-6">Average Time per Department</span>             
                                    </div>
                                </div>
                                <div class="card-body pt-0 ps-0 d-flex align-items-center">
                                    <div id="dept-duration-chart" class="w-50"></div>
                                    <div class="d-flex flex-grow-1 justify-content-between">
                                        <div style="margin-left: -10%;">
                                            <div class="text-gray-700 text-nowrap fw-semibold d-flex align-items-center gap-1">
                                                <div class="pt-1 ps-3 bg-primary rounded-pill"></div> BPLO
                                            </div>
                                            <div class="text-gray-700 text-nowrap fw-semibold d-flex align-items-center gap-1">
                                                <div class="pt-1 ps-3 bg-success rounded-pill"></div> Engineering
                                            </div>
                                            <div class="text-gray-700 text-nowrap fw-semibold d-flex align-items-center gap-1">
                                                <div class="pt-1 ps-3 bg-warning rounded-pill"></div> CPDC
                                            </div>
                                            <div class="text-gray-700 text-nowrap fw-semibold d-flex align-items-center gap-1">
                                                <div class="pt-1 ps-3 bg-danger rounded-pill"></div> Fire Dept
                                            </div>
                                        </div>
                                        <div class="ms-3 text-end">
                                            
                                            <?php if(!$dept_avg_duration["error"]):
                                                    $dept_durations = $dept_avg_duration["data"][0];
                                            ?>
                                            <div class="text-gray-800 text-nowrap fw-bold"><?=secondMinimizer($dept_durations->bplo_duration)["value"]?> <small><?=secondMinimizer($dept_durations->bplo_duration)["unit"]?></small></div>
                                            <div class="text-gray-800 text-nowrap fw-bold"><?=secondMinimizer($dept_durations->cpdc_duration)["value"]?> <small><?=secondMinimizer($dept_durations->cpdc_duration)["unit"]?></small></div>
                                            <div class="text-gray-800 text-nowrap fw-bold"><?=secondMinimizer($dept_durations->engineering_duration)["value"]?> <small><?=secondMinimizer($dept_durations->engineering_duration)["unit"]?></small></div>
                                            <div class="text-gray-800 text-nowrap fw-bold"><?=secondMinimizer($dept_durations->fire_department_duration)["value"]?> <small><?=secondMinimizer($dept_durations->fire_department_duration)["unit"]?></small></div>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-none d-lg-block">
                            <div class="card h-100">
                                <div class="card-body d-flex align-items-center">
                                    <div class="text-center w-100">
                                        <?php if(!$dept_avg_duration["error"]):
                                                $dept_durations = $dept_avg_duration["data"][0];
                                                $total_dept_duration = 0;
                                                foreach ($dept_durations as $key => $value) {
                                                    $total_dept_duration += (int)$value;
                                                }

                                                $day_duration = floor($total_dept_duration / 86400);
                                                $day_remainder = floor($total_dept_duration % 86400);
                                                
                                                $hour_duration = floor($day_remainder / 3600);
                                                $hour_remainder = floor($day_remainder % 3600);

                                                $minute_duration = floor($hour_remainder / 60);
                                                $minute_remainder = floor($hour_remainder % 60);
                                            ?>
                                        <div class="fs-2hx fw-bold text-primary">
                                            <span class="day <?=$day_duration ? "" : "d-none"?>"><?=$day_duration?>day<small class="<?=$day_duration>1 ? "" : "d-none"?>">s</small></span>
                                            <span class="hour <?=$hour_duration ? "" : "d-none"?>"><?=$hour_duration?>hr<small class="<?=$hour_duration>1 ? "" : "d-none"?>">s</small></span>
                                            <span class="hour <?=$minute_duration ? "" : "d-none"?> <?=$day_duration ? "d-none" : ""?>"><?=$minute_duration?>min<small class="<?=$minute_duration>1 ? "" : "d-none"?>">s</small></span>
                                        </div>
                                        <div class="py-1 bg-primary bg-opacity-25 rounded-pill w-75 mx-auto mb-5"></div>
                                        <div class="fw-bold text-gray-800 fs-5">Overall Average Processing Time</div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-6 mb-lg-0">
                            <div class="card h-100">
                                <div class="card-header pt-5 border-0">
                                    <h3 class="card-title text-gray-700 fw-bold">
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx me-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor"/>
                                                <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                        Chat now!
                                    </h3>
                                </div>
                                <div class="card-body pt-5">                 
                                    <a href="<?=base_url()?>/chats" class="fw-semibold fs-6 me-2 d-flex justify-content-between align-items-center">
                                        <div class="text-truncate">
                                            Business Permit Licensing Office
                                        </div>
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <div class="separator separator-dashed my-3"></div>
                                    <a href="<?=base_url()?>/chats" class="fw-semibold fs-6 me-2 d-flex justify-content-between align-items-center">
                                        <div class="text-truncate">
                                            City Engineering Office
                                        </div>
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <div class="separator separator-dashed my-3"></div>
                                    <a href="<?=base_url()?>/chats" class="fw-semibold fs-6 me-2 d-flex justify-content-between align-items-center">
                                        <div class="text-truncate">
                                            City Planning and Development Counsil
                                        </div>
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <div class="separator separator-dashed my-3"></div>
                                    <a href="<?=base_url()?>/chats" class="fw-semibold fs-6 me-2 d-flex justify-content-between align-items-center">
                                        <div class="text-truncate">
                                            Bureau of Fire Protection
                                        </div>
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100" style="
                        background-position: 100% 50%; 
                        background-image:url('<?=base_url()?>/public/assets/media/stock/900x600/42.png')
                    ">
                        <div class="card-body pb-0 d-flex flex-column justify-content-between">
                            <div class="mb-10">
                                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                    <span class="me-2">
                                        Would you like to apply for a 
                                        <br>
                                        <span class="position-relative d-inline-block text-success">
                                            <span class="text-success opacity-75-hover">Building Permit</span>  

                                            <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-success border-bottom w-100"></span>
                                        </span>                     
                                    </span>                 
                                    ?
                                </div>
                                
                                <div class="text-center">
                                    <a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                        Steps to apply 
                                    </a> 
                                </div>
                            </div>
                            <div class="text-center">
                                <img class="mx-auto h-150px h-lg-200px theme-light-show" src="<?=base_url()?>/public/assets/media/illustrations/misc/upgrade.svg" alt="">
                                <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="<?=base_url()?>/public/assets/media/illustrations/misc/upgrade-dark.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script>
    $(function () {
        <?php if(!$dept_avg_duration["error"]):
                $dept_durations = $dept_avg_duration["data"][0];
        ?>
        const dept_duration_chart_options = {
            chart: {
                type: 'donut'
            },
            series: [<?=$dept_durations->bplo_duration?>, <?=$dept_durations->cpdc_duration?>, <?=$dept_durations->engineering_duration?>, <?=$dept_durations->fire_department_duration?>],
            labels: ['BPLO', 'Engineering', 'CPDC', 'Fire Dept'],
            plotOptions: {
                pie: {
                    expandOnClick: false,
                    dataLabels: false
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                y: {
                    formatter: function(value){
                        const minimized_date_time = secondMinimizer(value);
                        return minimized_date_time.value + ' ' + minimized_date_time.unit;
                    },
                },
            },
            colors: ['#009EF7', '#50CD89', '#FFC700', '#F1416C'],
        }
        const dept_duration_chart = new ApexCharts($("#dept-duration-chart")[0], dept_duration_chart_options);
        dept_duration_chart.render();
        <?php endif;?>
        

        Inputmask({
            "mask" : "\\0\\999-999-9999"
        }).mask("#contact-number");

        $("#application-search-form").submit(function (e) { 
            e.preventDefault();
            const form_data = $(this).serialize();
            console.log(form_data)
            // if()
            ajaxRequest(
                "<?=base_url()?>/BPLO/getBuildingPermitApplication",
                "GET",
                form_data,
                function(data){
                    console.log(data)
                    if(data.error){ errorAlert("No data found", "There are no matching applications."); return; }
                    
                    const application_info = data.data[0];
                    const status = application_info.rejected_at ? "Rejected" : application_info.finished_at ? "Finished" : "Ongoing";
                    const status_colors = {
                        Rejected : "danger",
                        Finished : "success",
                        Ongoing : "primary"
                    };
                    const status_html = {
                        Rejected : `This application has been <b class="text-danger">Rejected</b> by`,
                        Finished : `Your application has been successfully processed.`,
                        Ongoing : "Your application is currently being processed by"
                    };
                    const color = status_colors[status];

                    const department_fullname = {
                        'bplo' : "Business Permit Licensing Office",
                        'engineering' : "City Engineering Office",
                        'cpdc' : "City Planning and Development Counsil",
                        'fire-department' : "Bureau of Fire Protection",
                        'finished' : "<b class='text-success'>Finished</b>",
                    }

                    for (const column in application_info) {
                        if (Object.hasOwnProperty.call(application_info, column)) {
                            const value = application_info[column];
                            $(`#building-permit-info-container .${column.replaceAll("_", "-")}`).text(value);
                        }
                    }

                    $("#status-container")
                        .attr("class", `d-flex align-items-center px-5 border border-2 rounded bg-light-${color} border-${color}`)
                        .find(".status").attr("class", `text-${color} m-0 status`).text(status);
                    
                    $("#name-symbol")
                        .attr("class", `symbol-label fs-3 fw-semibold text-${color} bg-light-${color} border border-${color} border-2`)
                        .text(application_info.first_name[0]+application_info.last_name[0])
                    
                    $("#timeline-action-text").html(status_html[status])

                    $("#building-permit-info-container .current-department").html(department_fullname[application_info.current_department]);

                    const application_history = JSON.parse(application_info.application_history)
                    let application_history_element = `
                        <div class="vr h-75px"></div>
                        <div class="">
                            <div class="fs-4 fw-semibold text-gray-700">Application Created</div>
                            <div class="fs-6 text-gray-600">${mySQLDateTimeToText(application_info.created_at)}</div>
                        </div>
                    `;
                    application_history.forEach((history, index) => {
                        console.log(history.datetime);
                        if(index == application_history.length-1 && status == "Ongoing"){
                            application_history_element = `
                            <div class="fs-6 text-gray-800 fw-semibold">${mySQLDateTimeToText(history.datetime)}</div>
                            ${application_history_element}`
                        }else{
                            application_history_element = `
                            <div class="vr h-75px"></div>
                            <div class="">
                                <div class="fs-4 fw-semibold text-gray-700">${department_fullname[history.dept]}</div>
                                <div class="fs-6 text-gray-600">${mySQLDateTimeToText(history.datetime)}</div>
                            </div>
                            ${application_history_element}`
                        }
                    });

                    $("#timeline-container").html(application_history_element);
                    
                    $("#building-permit-info-container").slideDown(200, function(){
                        this.scrollIntoView({ behavior: "smooth"});
                    });
                }
            )
        });
    });

    function secondMinimizer(seconds){
        if((seconds/86400)>=1){
            const value = Math.round(seconds/86400);
            const unit = value > 1 ? "days" : "day";
            return {"value" : value, "unit" : unit};
        }else if((seconds/3600)>=1){
            const value = Math.round(seconds/3600);
            const unit = value > 1 ? "hrs" : "hr";
            return {"value" : value, "unit" : unit};
        }else if((seconds/60)>=1){
            const value = Math.round(seconds/60);
            const unit = value > 1 ? "mins" : "min";
            return {"value" : value, "unit" : unit};
        }
        return {"value" : Math.round(seconds), "unit" : "secs"};
    }
</script>
<?= $this->endSection(); ?>
