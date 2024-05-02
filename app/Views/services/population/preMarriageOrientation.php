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
                                <h1 class="">Application for Pre-Marriage Orientation and Counseling Seminar</h1>
                                <span class="form-label text-muted">
                                    City Population Office
                                </span>
                                <!--=========================================== END OF HEADER TITLE ============================================-->
                            </div>
                        </div>
                        <hr class="mb-0">
                    </div>

                    <form class="mt-3" id="pre-marriage-form">

                        <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name of
                                Requestor</label>

                            <div class="col-lg-8">
                                <div class="row">

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="last_name" value="<?= $is_viewing ? $transaction_info->last_name : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="last-name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Last Name" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="first_name" value="<?= $is_viewing ? $transaction_info->first_name : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="first-name" class="form-control form-control-lg form-control-solid" placeholder="First Name" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="middle_name" value="<?= $is_viewing ? $transaction_info->middle_name : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="middle-name" class="form-control form-control-lg form-control-solid" placeholder="Middle Name" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="suffix" value="<?= $is_viewing ? $transaction_info->suffix : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="suffix" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Suffix" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- <hr> -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Birth</label>

                            <div class="col-lg-8 fv-row">
                                <input type="date" name="birth_date" value="<?= $is_viewing ? $transaction_info->birth_date : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="birth-date" class="form-control form-control-lg form-control-solid" placeholder="Date of Birth" required>
                            </div>
                        </div>
                        <!-- <hr> -->
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Age</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="age" value="<?= $is_viewing ? $transaction_info->age : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="age" class="form-control form-control-lg form-control-solid" placeholder="Age" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!-- <hr> -->
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Gender</label>

                            <div class="col-lg-8 fv-row">
                                <select class="form-select form-control form-control-solid" name="gender" <?= ! $is_viewing ? "" : "disabled" ?> id="gender" data-control="select2" data-placeholder="Select your Gender" required>
                                    <option selected="" required disabled>Select your Gender</option>
                                    <option value="Male" value="<?= $is_viewing ? $transaction_info->gender : "" ?>" <?= $is_viewing && $transaction_info->gender == "Male" ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" value="<?= $is_viewing ? $transaction_info->gender : "" ?>" <?= $is_viewing && $transaction_info->gender == "Female" ? 'selected' : '' ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <!-- <hr> -->
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact Number</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="contact_number" value="<?= $is_viewing ? $transaction_info->contact_number : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="contact-number" class="form-control form-control-lg form-control-solid" placeholder="Contact Number" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!-- <hr> -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="address" value="<?= $is_viewing ? $transaction_info->address : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="address" class="form-control form-control-lg form-control-solid" placeholder="Address" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!-- <hr> -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Country</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="country" value="<?= $is_viewing ? $transaction_info->country : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="country" class="form-control form-control-lg form-control-solid" placeholder="Country" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!-- <hr> -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Zip Code</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="zip_code" value="<?= $is_viewing ? $transaction_info->zip_code : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="zip-code" class="form-control form-control-lg form-control-solid" placeholder="Zip Code" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!-- <hr> -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date and time you need
                                the Service:</label>

                            <div class="col-lg-4 fv-row">
                                <input type="date" name="date" value="<?= $is_viewing ? $transaction_info->date : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="date" class="form-control form-control-lg form-control-solid" placeholder="Date" required>
                            </div>

                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                <input type="time" name="time" value="<?= $is_viewing ? $transaction_info->time : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="time" class="form-control form-control-lg form-control-solid" placeholder="Time" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6" hidden>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="services" value="<?= $is_viewing ? $transaction_info->services : "" ?>" <?= ! $is_viewing ? "" : "disabled" ?> id="services" class="form-control form-control-lg form-control-solid" value="1">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <input type="number" name="service_id" value="<?= $service->service_id ?>" class="d-none" required>

                        <div class="separator my-10"></div>


                        <!--=================================================== END OF YOUR CODE ==============================================-->

                        <!--=============================================== FORM BUTTONS ======================================================-->
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="submit" <?= ! $is_viewing ? "" : "disabled" ?> value="submit" class="btn btn-success mx-1 flex-grow-1">Submit Request</button>
                        </div>
                        <!--=========================================== END OF FORM BUTTONS ===================================================-->
                    </form>
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
                        <span> Requirements for requesting Pre-Marriage Orientation and Counseling Seminar:</span>
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
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>

<script>
    $(document).ready(function() {

        $("#pre-marriage-form").submit(function(e) {
            e.preventDefault();
            console.table($(this).serializeArray());
            confirm(
                'Wait!',
                'Are you sure you want to submit the form?',
                'question',
                "<?= base_url() ?>/population/addPopComServices",
                "POST",
                $(this).serializeArray(),
                function(response) {
                    console.log(response);
                    if (!response.error) {
                        successAlert('Form successfully submitted.', 'Form successfully submitted.',
                            'success');
                        $("#pre-marriage-form")[0].reset();
                    } else {
                        errorAlert('Error',
                            'There is an error during submitting the form.',
                            'warning');
                    }
                });

        });

        Inputmask({
            "mask": "9999-999-9999",
            "placeholder": "0900-000-0000",
        }).mask("#contact-number");



    });
</script>
<?= $this->endSection(); ?>