<?= $this->extend('layouts/nonAdminContainer'); ?>
<?= $this->section('content'); ?>
<?php
$is_viewing = isset($transaction_info);
?>
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?= $title ?></h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url() ?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="javascript:history.back()" class="text-muted text-hover-primary">Department Services</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted"><?= $title ?></li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">

            <!-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">New System</a> -->
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid mb-5">
    <div id="kt_app_content_container" class="app-container container-fluid h-100">

        <!-- START OF FORM -->
        <div class="row mx-3 m-md-0">
            <div class="card col-lg-8 col-md-8 my-5 p-5 p-md-10 border border-2 rounded">

                <div class="form-container">
                    <div class="py-2">
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <span class="svg-icon svg-icon-primary svg-icon-2hx">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor"></path>
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="ms-5">
                                <!--=============================================== HEADER TITLE ===============================================-->
                                <h1 class=""><?= $title ?></h1>
                                <span class="form-label text-muted">
                                    City Planning and Development Office
                                </span>
                                <!--=========================================== END OF HEADER TITLE ============================================-->
                            </div>
                        </div>
                        <hr class="mb-0">
                    </div>
                    <form id="zp-form" class="mt-3">

                        <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of
                                Applicant</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="first_name" value="<?= $is_viewing ? $transaction_info->first_name : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="first-name" class="form-control form-control-lg form-control-solid" placeholder="First Name" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="middle_name" value="<?= $is_viewing ? $transaction_info->middle_name : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="middle-name" class="form-control form-control-lg form-control-solid" placeholder="Middle Name" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="last_name" value="<?= $is_viewing ? $transaction_info->last_name : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="last-name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Last Name" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of
                                Corporation/Business</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="company_name" value="<?= $is_viewing ? $transaction_info->company_name : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="company-name" class="form-control form-control-lg form-control-solid" placeholder="Corporation/Business Name" value="" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address of
                                Applicant</label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" name="applicant_address" value="<?= $is_viewing ? $transaction_info->applicant_address : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= ! $is_viewing ? "" : "disabled" ?> id="applicant-address" class="form-control form-control-lg form-control-solid" placeholder="Complete Address of Applicant" value="" required>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address of
                                Corporation/Business</label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" name="business_address" value="<?= $is_viewing ? $transaction_info->business_address : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="business-address" class="form-control form-control-lg form-control-solid" placeholder="Complete Address of Corporation/Business" value="" required>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project Type</label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" name="project_type" value="<?= $is_viewing ? $transaction_info->project_type : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="project-type" class="form-control form-control-lg form-control-solid" placeholder="Type of Project" value="" required>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-12 col-form-label required fw-semibold fs-6">Project Nature</label>

                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <div class="d-flex align-items-center mt-3">
                                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="project_nature" value="New Development" value="<?= $is_viewing ? $transaction_info->project_nature : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->project_nature == "New Development" ? 'checked' : '' ?> id="ifNo" type="radio">
                                        <span class="fw-semibold ps-2 fs-6">
                                            New Development
                                        </span>
                                    </label>

                                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="project_nature" value="Improvement" value="<?= $is_viewing ? $transaction_info->project_nature : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->project_nature == "Improvement" ? 'checked' : '' ?> id="ifNo1" type="radio">
                                        <span class="fw-semibold ps-2 fs-6">
                                            Improvement
                                        </span>
                                    </label> <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="project_nature" value="Others" value="<?= $is_viewing ? $transaction_info->project_nature : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->project_nature == "Others" ? 'checked' : '' ?> id="if-others" type="radio">
                                        <span class="fw-semibold ps-2 fs-6">
                                            Others
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12  col-form-label fw-semibold fs-6" id="if_others" style="display: none;">
                                    <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text' id='yesProject' name='project_nature_others' value="<?= $is_viewing ? $transaction_info->project_nature_others : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> placeholder="Specify" />

                                </div>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project
                                Location</label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" name="project_location" value="<?= $is_viewing ? $transaction_info->project_location : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="project-location" class="form-control form-control-lg form-control-solid" placeholder="Location of Project" value="" required>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project Area (in
                                sq.m.)</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="project_area" value="<?= $is_viewing ? $transaction_info->project_area : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="project-area" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Lot" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="build_imp" value="<?= $is_viewing ? $transaction_info->build_imp : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="build-imp" class="form-control form-control-lg form-control-solid" placeholder="Building(s) Improvement" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Existing Land Use
                                    Project Site</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <div class="d-flex align-items-center mt-4">
                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="site[]" value="Residential" value="<?= $is_viewing ? $transaction_info->site : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->site == "Residential" ? 'checked' : '' ?> type="checkbox" >
                                            <span class="fw-semibold ps-2 fs-6">
                                                Residential
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="site[]" value="Industrial" value="<?= $is_viewing ? $transaction_info->site : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->site == "Industrial" ? 'checked' : '' ?> type="checkbox" >
                                            <span class="fw-semibold ps-2 fs-6">
                                                Industrial
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="site[]" value="Vacant/Idle"  value="<?= $is_viewing ? $transaction_info->site : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->site == "Vacant/Idle" ? 'checked' : '' ?> type="checkbox" >
                                            <span class="fw-semibold ps-2 fs-6">
                                                Vacant/Idle
                                            </span>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="site[]" value="Institutional" value="<?= $is_viewing ? $transaction_info->site : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->site == "Institutional" ? 'checked' : '' ?> type="checkbox" >
                                            <span class="fw-semibold ps-2 fs-6">
                                                Institutional
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="site[]" value="Commercial" value="<?= $is_viewing ? $transaction_info->site : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->site == "Commercial" ? 'checked' : '' ?> type="checkbox" >
                                            <span class="fw-semibold ps-2 fs-6">
                                                Commercial
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="row">
                                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                <input type="text" name="agri_specify" value="<?= $is_viewing ? $transaction_info->agri_specify : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="agri-specify" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Agricultural (specify crops)" value="">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                <input type="text" name="land_use_others" value="<?= $is_viewing ? $transaction_info->land_use_others : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="land-use-others" class="form-control form-control-lg form-control-solid" placeholder="Other/Specify" value="">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Project Cost /
                                    Capitalization</label>

                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="project_cost" value="<?= $is_viewing ? $transaction_info->project_cost : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="project-cost" class="form-control form-control-lg form-control-solid" placeholder="In pesos, written in words and figures" value="" required>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-12 col-form-label required fw-semibold fs-6">IS THE PROJECT
                                    SUBJECT OF WRITTEN NOTICE
                                    (s) FROM THE OFFICE? AND/OR IT'S DEPUTIZED ADMINISTRATOR TO THE EFFECT REQUIRING
                                    FOR REPRESENTATION OF
                                    LOCATIONAL CLEARANCE/CERTIFICATE OF ZONING COMPLIANCE (LC/CZC) OR TO APPLY
                                    LC/CZC?
                                </label>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <div class="d-flex align-items-center mt-3">
                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="written_notice" value="Yes" value="<?= $is_viewing ? $transaction_info->written_notice : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->written_notice == "Yes" ? 'checked' : '' ?> id="yes-written-notice" type="radio" required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                Yes
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="written_notice" value="No" value="<?= $is_viewing ? $transaction_info->written_notice : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->written_notice == "No" ? 'checked' : '' ?>  id="no-written-notice" type="radio" required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                No
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12 col-form-label fw-semibold fs-6" id="written-notice" style="display: none;">If Yes please answer the
                                        following:
                                        <br><br>Name of HLRS Officers or Zoning Administrator who issued the
                                        notice(s)
                                        <input class="form-control form-control-lg required form-control-solid mb-3 mb-lg-0" type='text' id='hlrs-officers' name='hlrs_officers'value="<?= $is_viewing ? $transaction_info->hlrs_officers : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> />
                                        <br>Date of Notice(s)
                                        <input class="form-control form-control-lg required form-control-solid mb-3 mb-lg-0" type='date' id='hlrs-dateNotice' name='hlrs_dateNotice'value="<?= $is_viewing ? $transaction_info->hlrs_dateNotice : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> />
                                        <br>Order/request indicated in the Notice(s)
                                        <input class="form-control form-control-lg required form-control-solid mb-3 mb-lg-0" type='text' id='request-indicated' name='request_indicated'value="<?= $is_viewing ? $transaction_info->request_indicated : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> />
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-12 col-form-label required fw-semibold fs-6">IS THE PROJECT
                                    APPLIED FOR THE SUBJECT OF
                                    SIMILAR APPLICATIONS WITH OTHER OFFICES OF THE COMMISIONS AND/OR DEPUTIZED
                                    ZONING ADMINISTRATOR?</label>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <div class="d-flex align-items-center mt-3">
                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="project_applied" value="Yes" value="<?= $is_viewing ? $transaction_info->project_applied : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->project_applied == "Yes" ? 'checked' : '' ?> id="yes-similar-app"  type="radio" required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                Yes
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="project_applied" value="No" value="<?= $is_viewing ? $transaction_info->project_applied : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->project_applied == "No" ? 'checked' : '' ?> id="no-similar-app"  type="radio" required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                No
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12  col-form-label fw-semibold fs-6" id="similar-app" style="display: none;">If Yes please answer the following:
                                        <br><br>Other HLRS Office(s) where similar applicant(s) was were filed at
                                        <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text' id='hlrs-office' name='hlrs_office' value="<?= $is_viewing ? $transaction_info->hlrs_office : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> />
                                        <br>Date(s) Filed
                                        <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='date' id='hlrs-date' name='hlrs_date' value="<?= $is_viewing ? $transaction_info->hlrs_date : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> />
                                        <br>Action(s) taken by Office(s) mentioned in other HLRS Office(s)
                                        <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type='text' id='hlrs-action' name='hlrs_action' value="<?= $is_viewing ? $transaction_info->hlrs_action : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> />
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-12 col-form-label required fw-semibold fs-6">PREFERRED MODE OF
                                    RELEASE OF
                                    DECISION:</label>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <div class="d-flex align-items-center mt-3">
                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="mode" value="Pick-up" value="<?= $is_viewing ? $transaction_info->mode : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->mode == "Pick-up" ? 'checked' : '' ?> type="radio"  required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                Pick-up
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="mode" value="Applicant" value="<?= $is_viewing ? $transaction_info->mode : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->mode == "Applicant" ? 'checked' : '' ?> type="radio"  required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                Applicant
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="mode" value="By mail, address to:" value="<?= $is_viewing ? $transaction_info->mode : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->mode == "By mail, address to:" ? 'checked' : '' ?> type="radio"  required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                By mail, address to:
                                            </span>
                                        </label>

                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="mode" value="Authorized Representative" value="<?= $is_viewing ? $transaction_info->mode : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> <?= $is_viewing && $transaction_info->mode == "Authorized Representative" ? 'checked' : '' ?> type="radio"  required>
                                            <span class="fw-semibold ps-2 fs-6">
                                                Authorized Representative
                                            </span>
                                        </label>
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <input type="number" name="service_id" value="<?= $service->service_id ?>" class="d-none"required>
                            <!--=================================================== END OF YOUR CODE ==============================================-->

                            <!--================================================ FORM ALERT ========================================================-->

                            <div class="separator my-10"></div>

                            <!-- <div class="alert alert-primary d-flex align-items-center p-5">
                                <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor">
                                        </rect>
                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor">
                                        </rect>
                                    </svg>
                                </span>

                                <div class="d-flex flex-column">
                                    <h4 class="mb-1 text-primary">This is an alert</h4>
                                    <span>The alert component can be used to highlight certain parts of your page
                                        for higher
                                        content visibility.</span>
                                </div>
                            </div> -->

                            <!--============================================= END OF FORM ALERT ====================================================-->

                            <!--=============================================== FORM BUTTONS ======================================================-->
                            <div class="d-flex justify-content-center">
                                <button type="submit" <?= ! $is_viewing ? "" : "disabled" ?> class="btn btn-success mx-1 flex-grow-1">Submit Request</button>
                            </div>
                            <!--=========================================== END OF FORM BUTTONS ===================================================-->
                    </form>
                </div>
            </div>

        </div>
        <div class="container col-lg-4 col-md-4 my-5 p-5 p-md-8">


            <div class="alert alert-primary d-flex align-items-center p-5" data-kt-sticky="true" data-kt-sticky-name="docs-sticky-summary" data-kt-sticky-offset="{default: false, xl: '50px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                    </svg>
                </span>

                <div class="d-flex flex-column">
                    <h4 class="mb-1 text-primary">REQUIREMENTS: </h4>
                    <span> Requirements for requesting Zoning Permit:</span>
                    <div class="d-flex flex-column">
                        <li class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-5"></span>

                        </li>
                        <li class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-5"></span>

                        </li>
                        <li class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-5"></span>

                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>

<script>
    $(document).ready(function() {

        $("#zp-form").submit(function(e) {
            e.preventDefault();
            console.table($(this).serializeArray());
            confirm(
                'Wait!',
                'Are you sure you want to submit the form?',
                'question',
                "<?= base_url() ?>/cpdc/addZoningPermit",
                "POST",
                $(this).serializeArray(),
                function(response) {
                    console.log(response);
                    if (!response.error) {
                        successAlert('Form successfully submitted.', 'Form successfully submitted.',
                            'success');
                        $("#zp-form")[0].reset();
                    } else {
                        errorAlert('Error',
                            'There is an error during submitting the form.',
                            'warning');
                    }
                });

        });


        // PROJECT NATURE
        $("#if-others").click(function(e) {
            $("#if_others").show();
        });
        if ($('#if-others').is(':checked')) {
            $("#if_others").show();
        }
        $("#ifNo").click(function(e) {
            $("#if_others").hide();
            $("#yesProject").val("");
        });
        $("#ifNo1").click(function(e) {
            $("#if_others").hide();
            $("#yesProject").val("");
        });

        // WRIITEN NOTICE
        $("#yes-written-notice").click(function(e) {
            $("#written-notice").show();
            $("#written-notice").find("input, select").each(function(){
                $(this).attr("required", true);
            });
        });
        if ($('#yes-written-notice').is(':checked')) {
            $("#written-notice").show();
            $("#written-notice").find("input, select").each(function(){
                $(this).attr("required", true);
            });
        }
        $("#no-written-notice").click(function(e) {
            $("#written-notice").hide();
            $("#hlrs-officers").val("");
            $("#hlrs-dateNotice").val("");
            $("#request-indicated").val("");
            $("#written-notice").find("input, select").each(function(){
                $(this).removeAttr("required");
            });
        });

        // SIMILAR APPLICATIONS
        $("#yes-similar-app").click(function(e) {
            $("#similar-app").show();
            $("#similar-app").find("input, select").each(function(){
                $(this).attr("required", true);
            });
        });
        if ($('#yes-similar-app').is(':checked')) {
            $("#similar-app").show();
            $("#similar-app").find("input, select").each(function(){
                $(this).attr("required", true);
            });
        }
        $("#no-similar-app").click(function(e) {
            $("#similar-app").hide();
            $("#hlrs-office").val("");
            $("#hlrs-date").val("");
            $("#hlrs-action").val("");
            $("#similar-app").find("input, select").each(function(){
                $(this).removeAttr("required");
            });
        });


    });
</script>
<?= $this->endSection(); ?>