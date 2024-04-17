<?= $this->extend('layouts/nonAdminContainer'); ?>
<?= $this->section('content'); ?>

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
            <div class="card container col-lg-6 col-md-8 offset-lg-3 offset-md-2 my-5 p-5 p-md-10 border border-2 rounded position-relative">
                <div class="form-container">
                    <!-- here -->
                    <div class="py-2">
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <span class="svg-icon svg-icon-primary svg-icon-2hx">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                            <div class="ms-5">
                                <!--=============================================== HEADER TITLE ===============================================-->
                                <h1 class="">Mayor's Clearance Application</h1>

                                <!--=========================================== END OF HEADER TITLE ============================================-->
                            </div>
                        </div>
                        <hr class="mb-0">
                    </div>

                    <form action="" class="mt-3">

                        <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

                        <!-- <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Date Accomplished by Client</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="date" id="date" class="form-control form-control-lg form-control-solid" value="<?php echo date('Y-m-d'); ?>" disabled readonly>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div> -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="first_name" id="first-name" class="form-control form-control-lg form-control-solid" placeholder="First Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="middle_name" id="middle-name" class="form-control form-control-lg form-control-solid" placeholder="Middle Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="last_name" id="last-name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Last Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="address" id="address" class="form-control form-control-lg form-control-solid" placeholder="Address" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="separator my-10"></div>
                        <!-- <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Birth</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="birth_date" id="birth-date"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Date of Birth" value="">
                                </div>
                            </div> -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Purpose of Request</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="purpose_of_request" id="purpose-of-request" class="form-control form-control-lg form-control-solid" placeholder="Purpose of Request" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Type of Request</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type_or_request" id="new" value="new">
                                    <label class="form-check-label" for="new">
                                        New
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type_or_request" id="renewal" value="renewal">
                                    <label class="form-check-label" for="type-or-request">
                                        Renewal
                                    </label>
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6" id="new-company" style="display:none">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company / Agency</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="new_company" id="new-company" class="form-control form-control-lg form-control-solid" placeholder="Company / Agency" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6" id="position" style="display:none">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Position Applied For</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="position_applied" id="position-applied" class="form-control form-control-lg form-control-solid" placeholder="Position Applied For" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6" id="start-date" style="display:none">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Starting Date</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="date" name="starting_date" id="starting-date" class="form-control form-control-lg form-control-solid" placeholder="Starting Date" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6" id="renewal-request" style="display:none">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company / Agency</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="renewal_company" id="renewal-company" class="form-control form-control-lg form-control-solid" placeholder="Company / Agency" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6" id="present-pos" style="display:none">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Present Position</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="present_position" id="present-position" class="form-control form-control-lg form-control-solid" placeholder="Present Position" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6" id="date-renew" style="display:none">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Renewal</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="date" name="date_renewal" id="date-renewal" class="form-control form-control-lg form-control-solid" placeholder="Date of Renewal" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="separator my-10"></div>


                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Police Clearance Number / NBI</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="police_nbi" id="police-nbi" class="form-control form-control-lg form-control-solid" placeholder="Police Clearance Number / NBI" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date Issued</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="date" name="police_nbi_date" id="police-nbi-date" class="form-control form-control-lg form-control-solid" placeholder="" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Place Issued</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="police_nbi_place" id="police-nbi-place" class="form-control form-control-lg form-control-solid" placeholder="Place Issued" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">OR No.</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="or_number" id="or-number" class="form-control form-control-lg form-control-solid" placeholder="OR No." value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="separator my-10"></div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">CTC Number</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="ctc_number" id="ctc-number" class="form-control form-control-lg form-control-solid" placeholder="CTC Number" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date Issued</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="date" name="ctc_date" id="ctc-date" class="form-control form-control-lg form-control-solid" placeholder="" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Place Issued</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="ctc_place" id="ctc-place" class="form-control form-control-lg form-control-solid" placeholder="Place Issued" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        

                        <!--=================================================== END OF YOUR CODE ==============================================-->

                        <!--================================================ FORM ALERT ========================================================-->

                        <div class="separator my-10"></div>

                        <div class="alert alert-primary d-flex align-items-center p-5">
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
                                <h4 class="mb-1 text-primary">INSTRUCTIONS: </h4>
                                <span>Please fill-out this form legibly. Do not leave any items unanswered.
                                    Indicate "N/A" if not applicable. Rest assured that the personal information
                                    gathered throught this form will only  be accessed and used by the
                                    Public Employment Service Office to carry put this mandate. This includes
                                    submitting monthly reports to the Provicial Youth, Sports, and Public Employment Service
                                    Office and the Department of Labor and Employment.
                                </span>
                            </div>
                        </div>

                        <!--============================================= END OF FORM ALERT ====================================================-->

                        <!--=============================================== FORM BUTTONS ======================================================-->
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="submit" value="submit" class="btn btn-success mx-1 flex-grow-1">Submit Request</button>
                        </div>
                        <!--=========================================== END OF FORM BUTTONS ===================================================-->
                    </form>
                </div>

            </div>
        </div>

        <!-- END OF FORM -->
        
    </div>
</div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>

<script>

$(document).ready(function () {

    $("#renewal").click(function (e) { 
        $("#new-company").hide();
        $("#position").hide();
        $("#start-date").hide();
        $("#renewal-request").show();
        $("#present-pos").show();
        $("#date-renew").show();
        
    });

    $("#new").click(function (e) { 
        $("#new-company").show();
        $("#position").show();
        $("#start-date").show();
        $("#renewal-request").hide();
        $("#present-pos").hide();
        $("#date-renew").hide();
        
    });

});

</script>
<?= $this->endSection(); ?>