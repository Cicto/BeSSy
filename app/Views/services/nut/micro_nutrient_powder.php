<?= $this->extend('layouts/noSideBarMain'); ?>
<?= $this->section('content'); ?>

<div class="position-fixed w-100 h-100 d-flex align-items-end" style="z-index: -10;">
    <div class="h-100 w-100 position-relative">
        <svg class="position-absolute opacity-25 bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#009ef7" fill-opacity="1"
                d="M0,128L60,154.7C120,181,240,235,360,245.3C480,256,600,224,720,176C840,128,960,64,1080,53.3C1200,43,1320,85,1380,106.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
        <svg class="position-absolute opacity-25 bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#009ef7" fill-opacity="1"
                d="M0,160L60,160C120,160,240,160,360,181.3C480,203,600,245,720,266.7C840,288,960,288,1080,277.3C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
        <svg class="position-absolute opacity-25 bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#009ef7" fill-opacity="1"
                d="M0,320L60,288C120,256,240,192,360,181.3C480,171,600,213,720,197.3C840,181,960,107,1080,112C1200,117,1320,203,1380,245.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row mx-3 m-md-0">
                <div
                    class="card container col-lg-6 col-md-8 offset-lg-3 offset-md-2 my-5 p-5 p-md-10 border border-2 rounded position-relative">
                    <div class="form-container">
                        <!-- here -->
                        <div class="py-2">
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-primary svg-icon-2hx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                                                fill="currentColor" />
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="ms-5">
                                    <!--=============================================== HEADER TITLE ===============================================-->
                                    <h1 class="">MNP - (Micro Nutrient Powder)</h1>
                                    <span class="form-label text-muted">
                                        Nutrtion Office
                                    </span>
                                    <!--=========================================== END OF HEADER TITLE ============================================-->
                                </div>
                            </div>
                            <hr class="mb-0">
                        </div>

                        <form action="" class="mt-3" id="nutrition-counseling-form">

                            <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name of
                                    Requestor</label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <input type="text" name="first_name" id="first-name"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="First Name" value="">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <input type="text" name="middle_name" id="middle-name"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Middle Name" value="">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <input type="text" name="last_name" id="last-name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Last Name" value="">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <input type="text" name="suffix" id="suffix"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Suffix" value="">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Birth</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="birth_date" id="birth-date"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Date of Birth" value="">
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Age</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="age" id="age"
                                        class="form-control form-control-lg form-control-solid" placeholder="Age"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Gender</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="gender" id="gender" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact Number</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="contact_number" id="contact-number"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Contact Number" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="address" id="address"
                                        class="form-control form-control-lg form-control-solid" placeholder="Address"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Country</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="country" id="country"
                                        class="form-control form-control-lg form-control-solid" placeholder="Country"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Zip Code</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="zip_code" id="zip-code"
                                        class="form-control form-control-lg form-control-solid" placeholder="Zip Code"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date and time you need
                                    the Service:</label>

                                <div class="col-lg-4 fv-row">
                                    <input type="date" name="date" id="date"
                                        class="form-control form-control-lg form-control-solid" placeholder="Date"
                                        value="">
                                </div>

                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <input type="time" name="time" id="time"
                                        class="form-control form-control-lg form-control-solid" placeholder="Time"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="separator my-10"></div>


                            <!--=================================================== END OF YOUR CODE ==============================================-->

                            <!--================================================ FORM ALERT ========================================================-->

                            <div class="separator my-10"></div>


                            <!--============================================= END OF FORM ALERT ====================================================-->



                            <!--=============================================== FORM BUTTONS ======================================================-->
                            <div class="d-flex justify-content-center">
                                <button type="button" onclick="history.back()"
                                    class="btn btn-secondary mx-1">Cancel</button>
                                <button type="button" data-bs-toggle="modal" id="review-button"
                                    data-bs-target="#review-modal" class="btn btn-primary mx-1 flex-grow-1">Submit
                                    Request</button>
                                <!-- <button type="submit" name="submit" value="submit"
                                    class="btn btn-primary mx-1 flex-grow-1" >Submit Request.</button> -->
                            </div>
                            <!--=========================================== END OF FORM BUTTONS ===================================================-->

                            <!--=============================================== FORM REVIEW MODAL ======================================================-->


                            <div class="modal fade" id="review-modal" tabindex="-1" aria-labelledby=""
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="review-modal-title">Review your Information
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Name:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_name" id="review-name"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Date of
                                                    Birth:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_date_of_birth"
                                                        id="review-date-of-birth"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Age:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_age" id="review-age"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Gender:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_gender" id="review-gender"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Contact
                                                    Number:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_contact_number"
                                                        id="review-contact-number"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Address:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_address" id="review-address"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Country:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_country" id="review-country"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Zip
                                                    Code:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_zip_code" id="review-zip-code"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Date and time
                                                    you needed the service:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_date_and_time"
                                                        id="review-date-and-time"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" value="submit"
                                                class="btn btn-success mx-1 flex-grow-1">Submit Request</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!--=========================================== END OF FORM REVIEW MODAL ===================================================-->
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
    $(document).ready(function () {

        $("#review-button").click(function () {
            $("#review-name").val($("#first-name").val() + " " + $("#middle-name").val() + " " + $(
                "#last-name").val() + " " + $("#suffix").val());

           
            $("#review-date-of-birth").val($("#birth-date").val());
            $("#review-age").val($("#age").val());
            $("#review-gender").val($("#gender").val());
            $("#review-contact-number").val($("#contact-number").val());
            $("#review-address").val($("#address").val());
            $("#review-country").val($("#country").val());
            $("#review-zip-code").val($("#zip-code").val());
            $("#review-date-and-time").val($("#date").val() + " " + $("#time").val());

        });

        // $('#nutrition-counseling-form input').blur(function () {
        //     if ($(this).val().length === 0) {
        //         $(this).val("N/A");
        //     }
        // });

    });
    const department_id = 0
</script>
<script src="<?= base_url()?>/public/assets/js/services/form-misc.js"></script>
<?= $this->endSection(); ?>