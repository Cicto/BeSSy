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
                                    <h1 class="">Informal Settler families (ISF) Survey Form</h1>
                                    <span class="form-label text-muted">
                                        Local Settlements and Sheltering Unit
                                    </span>
                                    <!--=========================================== END OF HEADER TITLE ============================================-->
                                </div>
                            </div>
                            <hr class="mb-0">
                        </div>

                        <form action="" class="mt-3" id="informal-settler-families-survey-form">

                            <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

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
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Birth</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="birth_date" id="birth-date"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Date of Birth" value="">
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Birth Place</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="birth_place" id="birth-place"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Birth Place" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Civil Status</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="civil_status" id="civil-status"
                                        required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="Single1">Single</option>
                                        <option value="Seperated">Seperated</option>
                                        <option value="Cohabitation (Live-in)">Cohabitation (Live-in)</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow/er">Widow/er</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Religion</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="religion" id="religion"
                                        class="form-control form-control-lg form-control-solid" placeholder="Religion"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Occupation</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="occupation" id="occupation"
                                        class="form-control form-control-lg form-control-solid" placeholder="Occupation"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Montly Income</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="montly_income" id="monthly-income"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Montly Income" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Educational
                                    Level</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="educational_level" id="educational-level" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="None">None</option>
                                        <option value="Kindergarten">Kindergarten</option>
                                        <option value="Elementary">Elementary</option>
                                        <option value="Junior High School">Junior High School</option>
                                        <option value="Senior High School">Senior High School</option>
                                        <option value="College">College</option>
                                        <option value="Vocational">Vocational</option>
                                        <option value="Post Graduate">Post Graduate</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="separator my-10"></div>
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Spouse Name</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="spouse_name" id="spouse-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Spouse Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Spouse Date of
                                    Birth</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="spouse_date_of_birth" id="spouse-date-of-birth"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Spouse Date of Birth" value="">
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Spouse
                                    Occupation</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="spouse_occupation" id="spouse-occupation"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Spouse Occupation" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Spouse Montly
                                    Income</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="spouse_monthly_income" id="spouse-monthly-income"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Spouse Monthly Income" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Spouse Educational
                                    Level</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="spouse_educational_level" id="spouse-educational-level"  required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="None">None</option>
                                        <option value="Kindergarten">Kindergarten</option>
                                        <option value="Elementary">Elementary</option>
                                        <option value="Junior High School">Junior High School</option>
                                        <option value="Senior High School">Senior High School</option>
                                        <option value="College">College</option>
                                        <option value="Vocational">Vocational</option>
                                        <option value="Post Graduate">Post Graduate</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->


                            <div class="separator my-10"></div>

                            <div class="row mb-6">
                                <label class="col-lg-8 col-form-label required fw-semibold fs-6">Membership of any
                                    Organization</label>

                                <table id="household-members-info" class="table text-center">

                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Sex</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Relationship</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Civil Status</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="household_members_info">
                                            <td>
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid household-member-name"
                                                    placeholder="Name" value=""></td>

                                            <td>
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid household-member-sex"
                                                    placeholder="Sex" value=""></td>

                                            <td>
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid household-member-age"
                                                    placeholder="Age" value=""></td>

                                            <td>
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid household-member-relationship"
                                                    placeholder="Relationship" value=""></td>
                                            <td>
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid household-member-occupation"
                                                    placeholder="Occupation" value=""></td>
                                            <td>
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid household-member-civil-status"
                                                    placeholder="Civil Status" value=""></td>

                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm delete_row"
                                                    style="padding-left:1.8rem;"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td colspan="7"><button type="button" class="btn btn-sm btn-primary w-100"
                                                    id="household-member-info-button"><i
                                                        class="fa-sharp fa-solid fa-plus"></i>ADD</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- <hr> -->

                            <div class="separator my-10"></div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Length of Residency at
                                    Present Address</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="length_of_residency_at_present_address"
                                        id="length-of-residency-at-present-address"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Length of Residency at Present Address" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact No.</label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="contact_no" id="contact-no"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Contact No." value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">House
                                    Description</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="house_description" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="1">Shanty</option>
                                        <option value="2">Row House</option>
                                        <option value="3">Up and Down</option>
                                        <option value="4">Bungalow</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Mode of Waste
                                    Disposal</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="mode_of_waste_disposal" required="">
                                        <option selected="" value="" disabled>Type of Garbage Collection</option>
                                        <option value="1">City Collection</option>
                                        <option value="2">Baranggay Collection</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Material</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="material" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="1">Makeshift</option>
                                        <option value="2">Light Material</option>
                                        <option value="3">Concrete</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Toilet Facility</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="civil_status" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="1">Water-sealed, sewer septic tank, used exclusively by household
                                        </option>
                                        <option value="2">Water-sealed, sewer septic tank, shared with other household
                                        </option>
                                        <option value="3">Water-sealed, other depository, used exclusively by household
                                        </option>
                                        <option value="4">Closed pit</option>
                                        <option value="5">Open pit</option>
                                        <option value="6">Others (pail system, and others)</option>
                                        <option value="7">None</option>

                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Type of
                                    Ownership</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="type_of_ownership" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="1">Owner</option>
                                        <option value="2">Renter</option>
                                        <option value="3">Sharer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Water Sources</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="water_source" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="1">BAWASA</option>
                                        <option value="2">Deep Well</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <div class="row mb-8">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Other Comment/s</label>

                                <div class="col-lg-8 fv-row">
                                    <textarea name="other_comments" id="other-comments"
                                        class="form-control form-control-lg form-control-solid w-100" rows="5"
                                        placeholder="Other Comment/s"></textarea>
                                </div>
                            </div>
                            <!-- <hr> -->

                            <!-- <hr> -->


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
                                    class="btn btn-primary mx-1 flex-grow-1">Submit Request.</button> -->
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
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Address:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_address" id="review-address"
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
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Birth
                                                    Place:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_birth_place" id="review-birth-place"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Civil
                                                    Status:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_civil_status"
                                                        id="review-civil-status"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label
                                                    class="col-sm-4 col-form-label fw-semibold fs-6">Religion:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_religion" id="review-religion"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label
                                                    class="col-sm-4 col-form-label fw-semibold fs-6">Occupation:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_occupation" id="review-occupation"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label
                                                    class="col-sm-4 col-form-label fw-semibold fs-6">Monthly Income:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_monthly_income" id="review-monthly-income"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label
                                                    class="col-sm-4 col-form-label fw-semibold fs-6">Educational Level:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_educational_level" id="review-educational-level"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="separator my-10"></div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Spouse Name:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_spouse_name" id="review-spouse-name"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Spouse Date of Birth:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_spouse_date_of_birth" id="review-spouse-date-of-birth"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Spouse Occupation:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_spouse_occupation" id="review-spouse-occupation"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Spouse Monthly Income:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_spouse_monthly_income" id="review-spouse-monthly-income"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="" value="" disabled>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <label class="col-sm-4 col-form-label fw-semibold fs-6">Spouse Educational Level:</label>
                                                <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="review_spouse_educational_level" id="review-spouse-educational-level"
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
    const department_id = 0

    $(document).ready(function () {
        $("#household-member-info-button").click(function () {
            $(`<tr class="household_members_info">
                                            <td>
                                                <input type="text"
                                            
                                                    class="form-control form-control-sm form-control-solid household-member-name"
                                                    placeholder="Name" value=""></td>

                                            <td>
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid household-member-sex"
                                                    placeholder="Sex" value=""></td>

                                            <td>
                                                <input type="text" 
                                                    class="form-control form-control-sm form-control-solid household-member-age"
                                                    placeholder="Age" value=""></td>

                                            <td>
                                                <input type="text" 
                                                    
                                                    class="form-control form-control-sm form-control-solid household-member-relationship"
                                                    placeholder="Relationship" value=""></td>
                                            <td>
                                                <input type="text"
                                                    
                                                    class="form-control form-control-sm form-control-solid household-member-occupation"
                                                    placeholder="Occupation" value=""></td>
                                            <td>
                                                <input type="text"
                                                    
                                                    class="form-control form-control-sm form-control-solid household-member-civil-status"
                                                    placeholder="Civil Status" value=""></td>

                                            <td>
                                            <button type="button" class="btn btn-danger btn-sm delete_row" style="padding-left:1.8rem;" ><i class="fa-solid fa-trash"></i></button></td>        
                                        </tr><button type="button" class="btn btn-sm btn-primary w-100"
                                                    id="household-member-info-button"><i class="fa-sharp fa-solid fa-plus"></i>ADD</button>`)
                .insertBefore($(this).closest("tr"));

        });;


        $("#household-members-info").on('click', '.delete_row', function () {
            $(this).closest("tr").remove();
            console.log("DELETE");
        });


        $("#informal-settler-families-survey-form").submit(function (e) {

            e.preventDefault();
            var household = [];
            console.table($(this).serializeArray());
            $("#household-members-info tbody").find("tr").each(function (index, element) {

                household.push({
                    "household-member-name": $(this).find(".household-member-name")
                        .val(),
                    "household-member-sex": $(this).find(".household-member-sex").val(),
                    "household-member-age": $(this).find(".household-member-age").val(),
                    "household-member-relationship": $(this).find(
                        ".household-member-relationship").val(),
                    "household-member-occupation": $(this).find(
                        ".household-member-occupation").val(),
                    "household-member-civil-status": $(this).find(
                        ".household-member-civil-status").val()

                });

            });

            console.log(household);
        });


        $("#review-button").click(function () {
            $("#review-name").val($("#first-name").val() + " " + $("#middle-name").val() + " " + $(
                "#last-name").val() + " " + $("#suffix").val());
            $("#review-address").val($("#address").val());
            $("#review-date-of-birth").val($("#birth-date").val());
            $("#review-birth-place").val($("#birth-place").val());
            $("#review-civil-status").val($("#civil-status").val());
            $("#review-religion").val($("#religion").val());

            $("#occupation").each(function () {
                if (!$(this).val()) {
                    $("#review-occupation").val("N/A");
                } else {
                    $("#review-occupation").val($("#occupation").val());
                }
            });

            $("#monthly-income").each(function () {
                if (!$(this).val()) {
                    $("#review-monthly-income").val("N/A");
                } else {
                    $("#review-monthly-income").val($("#monthly-income").val());
                }
            });
            
            $("#review-educational-level").val($("#educational-level").val());
            $("#review-spouse-date-of-birth").val($("#spouse-date-of-birth").val());
            
            $("#spouse-occupation").each(function () {
                if (!$(this).val()) {
                    $("#review-spouse-occupation").val("N/A");
                } else {
                    $("#review-spouse-occupation").val($("#spouse-occupation").val());
                }
            });

            $("#spouse-monthly-income").each(function () {
                if (!$(this).val()) {
                    $("#review-spouse-monthly-income").val("N/A");
                } else {
                    $("#review-spouse-monthly-income").val($("#spouse-monthly-income").val());
                }
            });


            $("#review-spouse-educational-level").val($("#spouse-educational-level").val());

        });


    });
</script>
<script src="<?= base_url()?>/public/assets/js/services/form-misc.js"></script>
<?= $this->endSection(); ?>