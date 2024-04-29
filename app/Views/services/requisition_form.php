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
                                    <h1 class="">Requisition Form</h1>
                                    <span class="form-label text-muted">
                                        Archive and Records Office
                                    </span>
                                    <!--=========================================== END OF HEADER TITLE ============================================-->
                                </div>
                            </div>
                            <hr class="mb-0">
                        </div>

                        <form action="" class="mt-3">

                            <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="date_today" id="date-today"
                                        class="form-control form-control-lg form-control-solid" placeholder="Date"
                                        value="" disabled>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>

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
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Affiliation</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="affiliation" id="affiliation"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Affiliation" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email Address</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="email_address" id="email-address"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Email Address" value="">
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
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Request</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="request" id="request" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="Motorcade">Motorcade</option>
                                        <option value="Gymnasium">Gymnasium</option>
                                        <option value="Vehicle">Vehicle</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6" id="request-vehicle" style="display:none;">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Vehicle</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="vehicle" id="vehicle"
                                        class="form-control form-control-lg form-control-solid" placeholder="Vehicle"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6" id="request-others" style="display:none;">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Others</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="others" id="others"
                                        class="form-control form-control-lg form-control-solid" placeholder="Others"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date and Time</label>

                                <div class="col-lg-4 fv-row">
                                    <input type="date" name="date_request" id="date-request"
                                        class="form-control form-control-lg form-control-solid" placeholder="Date"
                                        value="">
                                </div>

                                <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                    <input type="time" name="time_request" id="time-request"
                                        class="form-control form-control-lg form-control-solid" placeholder="Time"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="separator my-10"></div>
                            <div class="row mb-8">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Purpose</label>

                                <div class="col-lg-8 fv-row">
                                    <textarea name="purpose" id="purpose"
                                        class="form-control form-control-lg form-control-solid w-100" rows="5"
                                        placeholder="Purpose"></textarea>
                                </div>
                            </div>

                            <div class="row mb-8">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Submitted Documents</label>

                                <div class="col-lg-8 fv-row">
                                    <textarea name="submitted_documents" id="submitted-documents"
                                        class="form-control form-control-lg form-control-solid w-100" rows="5"
                                        placeholder="Submitted Documents"></textarea>
                                </div>
                            </div>

                            <div class="row mb-8">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Other Request</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="other_request" id="other-request"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Other Request" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="separator my-10"></div>


                            <!--=================================================== END OF YOUR CODE ==============================================-->

                            <!--================================================ FORM ALERT ========================================================-->



                            <div class="alert alert-primary d-flex align-items-center p-5">


                                <div class="d-flex flex-column">
                                    <span><input type="checkbox" name="consent_form_checkbox" id="consent-form-checkbox"
                                            disabled>
                                        I have read the <a data-bs-toggle="modal" data-bs-target="#consent-form-modal"
                                            class="text-decoration-underline">data privacy consent
                                            form</a>.</span>

                                    <!-- Modal -->
                                    <div class="modal fade " id="consent-form-modal" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"">
                                            <div class=" modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Privacy
                                                    Consent Form</h1>
                                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button> -->
                                            </div>
                                            <div class="modal-body" id="agreement">
                                                <p>The City of Baliwag is committed to safeguard all personal data
                                                    collected and held by it pursuant to the provisions
                                                    of the Data Privacy Act of 2012 (RA 10173) and it's implementing
                                                    Rules and Regulations (IRR).
                                                </p>
                                                <strong>Use</strong>
                                                <p> The collected personal information is utilized soleloy for
                                                    documentation and processing purpose within the municipality and
                                                    is not shared with any outside parties. They enable the LGU to
                                                    properly address the inquiries and requests, forward them to
                                                    appropriate internal units for action response, and provide
                                                    clients with approriate updates and advisories in a legitimate
                                                    format and in an orderly and timely manner.</p>
                                                <strong>Protection Measures</strong>
                                                <p> Only authorized LGU personnel has access to these personal
                                                    information, the exchange of which will be facilitated through email
                                                    and hard copy. They will be stored in a database for two years
                                                    (after inquiries, request are acted upon) afterwhich physical
                                                    records shall be disposed of through shredding, while digital files
                                                    shall be anonymized.</p>
                                                <strong>Access and Correction</strong>
                                                <p> You have the right to ask for a copy of any personal information we
                                                    hold
                                                    about you, as well as to ask for it to be corrected of you think it
                                                    is
                                                    wrong. To do so, please contact our Data Protection Officer, through
                                                    the
                                                    following email address: <a
                                                        href="mailto:archiveandrecords.baliwag@gmail.com"
                                                        class="text-decoration-underline">
                                                        archiveandrecords.baliwag@gmail.com</a></p>
                                                <strong>User's Consent</strong>
                                                <p> I have read the Institution's Data Privacy Statement and express my
                                                    consent for the City Government of Baliwag through this form
                                                    Application to collect, record, organize, update or modify,
                                                    retrieve, block, erase or destruct my personal data as part of my
                                                    information. I hereby affirm my right to be informed, object to
                                                    processing, access and rectify, suspend or withdraw my personal
                                                    data, and be indemnified in case of damages pursuant to the
                                                    provisions of the Republic Act No. 10173 of the Philipplines
                                                    ohterwise known as the Data privacy Act of 2012 and its
                                                    corresponding Implementing Rules and Regulations.</p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" id="modal-agree-button"
                                                    data-bs-dismiss="modal" disabled>Agree and Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>

                    <!--============================================= END OF FORM ALERT ====================================================-->

                    <!--=============================================== FORM BUTTONS ======================================================-->
                    <div class="d-flex justify-content-center">
                        <button type="button" onclick="history.back()" class="btn btn-secondary mx-1">Cancel</button>
                        <button type="button" data-bs-toggle="modal" id="review-button" data-bs-target="#review-modal"
                            class="btn btn-primary mx-1 flex-grow-1" disabled>Submit Request</button>
                        <!-- <button type="submit" name="submit" value="submit"
                                        class="btn btn-primary mx-1 flex-grow-1">Submit Request</button> -->
                    </div>
                    <!--=========================================== END OF FORM BUTTONS ===================================================-->

                    <!--=============================================== FORM REVIEW MODAL ======================================================-->


                    <div class="modal fade" id="review-modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="review-modal-title">Review your Information</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Date:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_date" id="review-date"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Name:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_name" id="review-name"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Contact Number:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_contact_number" id="review-contact-number"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Affiliation:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_affiliation" id="review-affiliation"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Email Address:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_email_address" id="review-email-address"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Address:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_address" id="review-address"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Request:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_request" id="review-request"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-request-vehicle" style="display:none;">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Type of
                                            Vehicle:</label>

                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review-vehicle" id="review-vehicle"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Vehicle" value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-request-other" style="display:none;">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Other:</label>

                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review-other" id="review-other"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Vehicle" value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Date and Time:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_date_and_time" id="review-date-and-time"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Purpose:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_purpose" id="review-purpose"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Submitted
                                            Documents:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_submitted_documents"
                                                id="review-submitted-documents"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                        <div class="row mb-6">
                                            <label class="col-sm-4 col-form-label fw-semibold fs-6">Other
                                                Request:</label>
                                            <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                <input type="text" name="review_other_request" id="review-other-request"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="" value="" disabled>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
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
        $('#request').on('change', function () {

            if ($(this).val() == "Vehicle") {
                $('#request-vehicle').show();
                $('#review-request-vehicle').show();
                $('#request-others').hide();
            } else if (($(this).val() == "Others")) {
                $('#request-others').show();
                $('#review-request-other').show();
                $('#request-vehicle').hide();
                $('#review-request-vehicle').hide();
            } else {
                $('#request-vehicle').hide();
                $('#request-others').hide();
                $('#review-request-vehicle').hide();
                $('#review-request-others').hide();
            }
        });

        $('#modal-agree-button').on('click', function () {
            $('#consent-form-checkbox').prop('checked', true);

        });

        $('.modal-body').scroll(function () {
            if ($('#agreement').height() != ($(this).scrollTop() + $(this).height())) {
                $('#modal-agree-button').removeAttr('disabled');
                $('#review-button').removeAttr('disabled');
            }
        });

        // $('.modal-body').scroll(function () {
        //     var disable = $('#agreement').height() != ($(this).scrollTop() + $(this).height());
        //     $('#modal-agree-button').prop('disabled', disable);
        // });

        $("#review-button").click(function () {
            $("#review-date").val($("#date-today").val());
            $("#review-name").val($("#first-name").val() + " " + $("#middle-name").val() + " " + $("#last-name").val() + " " + $("#suffix").val());
            $("#review-contact-number").val($("#contact-number").val());
            $("#review-affiliation").val($("#affiliation").val());
            $("#review-email-address").val($("#email-address").val());
            $("#review-address").val($("#address").val());
            $("#review-request").val($("#request").val());
            $("#review-vehicle").val($("#vehicle").val());
            $("#review-other").val($("#others").val());
            $("#review-date-and-time").val($("#date-request").val() + " " + $("#time-request").val());
            $("#review-purpose").val($("#purpose").val());
            $("#review-submitted-documents").val($("#submitted-documents").val());
            $("#review-other-request").val($("#other-request").val());
        });

        var now = new Date();
        var y = now.getFullYear();
        var m = now.getMonth() + 1;
        var d = now.getDate();

        m = m < 10 ? "0" + m : m;
        d = d < 10 ? "0" + d : d;

        document.querySelector("#date-today").value = y + "-" + m + "-" + d;

    });
    const department_id = 0
</script>
<script src="<?= base_url()?>/public/assets/js/services/form-misc.js"></script>
<?= $this->endSection(); ?>