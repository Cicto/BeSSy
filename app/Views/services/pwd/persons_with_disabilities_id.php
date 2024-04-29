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
                                    <h1 class="">Request for Persons with Disability ID</h1>
                                    <span class="form-label text-muted">
                                        Persons With Disability Affairs Office
                                    </span>
                                    <!--=========================================== END OF HEADER TITLE ============================================-->
                                </div>
                            </div>
                            <hr class="mb-0">
                        </div>

                        <form action="" class="mt-3">

                            <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Application
                                    for:</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="application_for" id="applicantion-for"
                                        required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="New Applicant">New Applicant</option>
                                        <option value="Renewal">Renewal</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date Applied</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="date_applied" id="date-applied"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Date Applied" disabled value="">
                                </div>
                            </div>
                            <!-- <hr> -->
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
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Birth</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="birth_date" id="birth-date"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Date of Birth" value="">
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
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Civil Status</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="civil_status" id="civil-status"
                                        required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="Single">Single</option>
                                        <option value="Seperated">Seperated</option>
                                        <option value="Cohabitation">Cohabitation (Live-in)</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow/er">Widow/er</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Type of
                                    Disability</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="type_of_disability"
                                        id="type-of-disability" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="Deaf or Hard of Hearing">Deaf or Hard of Hearing</option>
                                        <option value="Intellectual Disability">Intellectual Disability</option>
                                        <option value="Learning Disability">Learning Disability</option>
                                        <option value="Mental Disability">Mental Disability</option>
                                        <option value="Physical Disability (Orthopedic)">Physical Disability
                                            (Orthopedic)</option>
                                        <option value="Psychosocial Disability">Psychosocial Disability</option>
                                        <option value="Speech and Languange Impairment">Speech and Languange Impairment
                                        </option>
                                        <option value="Visual Disability<">Visual Disability</option>
                                        <option value="Cancer (RA11215)">Cancer (RA11215)</option>
                                        <option value="Rare Disease (RA19747)">Rare Disease (RA19747)</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Cause of
                                    Disability</label>

                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="cause_of_disability"
                                        id="cause-of-disability" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="Congenital / Inborn">Congenital / Inborn</option>
                                        <option value="Acquired">Acquired</option>
                                    </select>
                                </div>


                            </div>
                            <!-- <hr> -->
                            <div class="row mb-6" id="congenital-inborn-types" style="display:none">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"
                                    id="congenital-inborn-label">Congenital / Inborn</label>
                                <div class="col-md-8 fv-row">
                                    <select class="form-select form-control form-control-solid"
                                        aria-label="Default select example" name="congenital_inborn"
                                        id="congenital-inborn" required="">
                                        <option selected="" value="" disabled>Choose a type</option>
                                        <option value="Autism">Autism</option>
                                        <option value="ADHD">ADHD</option>
                                        <option value="Cerebral Palsy">Cerebral Palsy</option>
                                        <option value="Down Syndrome">Down Syndrome</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="acquired-types" style="display:none">
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Acquired</label>
                        <div class="col-md-8 fv-row">
                            <select class="form-select form-control form-control-solid"
                                aria-label="Default select example" name="acquired" id="acquired" required="">
                                <option selected="" value="" disabled>Choose a type</option>
                                <option value="Chronic Illness">Chronic Illness</option>
                                <option value="Cerebral Palsy">Cerebral Palsy</option>
                                <option value="Injury">Injury</option>
                            </select>
                        </div>
                    </div>
                    <!-- <hr> -->


                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Residence
                            Address</label>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="house_no_and_street" id="house-no-and-street"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="House No. and Street" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="baranggay" id="baranggay"
                                        class="form-control form-control-lg form-control-solid" placeholder="Baranggay"
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="municipality" id="municipality"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Municipality / City" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="province" id="province"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Province" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="region" id="region"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Region" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="contact-details">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Contact Details</label>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="landline_no" id="landline-no"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Landline No." value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="mobile_no" id="mobile-no"
                                        class="form-control form-control-lg form-control-solid" placeholder="Mobile No."
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="email_address" id="email-address"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Email Address" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Educational
                            Attainment</label>

                        <div class="col-lg-8 fv-row">
                            <select class="form-select form-control form-control-solid"
                                aria-label="Default select example" name="educational_attainment"
                                id="educational-attainment" required="">
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

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status of
                            Employement</label>

                        <div class="col-lg-8 fv-row">
                            <select class="form-select form-control form-control-solid"
                                aria-label="Default select example" name="requester" id="status-of-employment"
                                required="">
                                <option selected="" value="" disabled>Choose a type</option>
                                <option value="Employed">Employed</option>
                                <option value="Unemployed">Unemployed</option>
                                <option value="Self-Employed">Self-Employed</option>
                            </select>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="category-of-employment-row" style="display:none;">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Category of
                            Employement</label>

                        <div class="col-lg-8 fv-row">
                            <select class="form-select form-control form-control-solid"
                                aria-label="Default select example" name="category_of_employment"
                                id="category-of-employment" required="">
                                <option selected="" value="" disabled>Choose a type</option>
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="types-of-employment-row" style="display:none;">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Types of
                            Employment</label>

                        <div class="col-lg-8 fv-row">
                            <select class="form-select form-control form-control-solid"
                                aria-label="Default select example" name="requester" id="types-of-employment"
                                required="">
                                <option selected="" value="" disabled>Choose a type</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Seasonal">Seasonal</option>
                                <option value="Casual">Casual</option>
                                <option value="Emergency">Emergency</option>
                            </select>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="occupation" style="display:none;">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Occupation</label>

                        <div class="col-lg-8 fv-row">
                            <select class="form-select form-control form-control-solid"
                                aria-label="Default select example" name="occupation_type" id="occupation-type"
                                required="">
                                <option selected="" value="" disabled>Choose a type</option>
                                <option value="Managers">Managers</option>
                                <option value="Professionals">Professionals</option>
                                <option value="Technicians and Associate Profesionals">Technicians and Associate
                                    Profesionals</option>
                                <option value="Clerical Support Workers">Clerical Support Workers</option>
                                <option value="Service and Sales Workers">Service and Sales Workers</option>
                                <option value="Skilled Agricultural, Forestry and Fishery Workers">Skilled Agricultural,
                                    Forestry and Fishery Workers</option>
                                <option value="Craft and Related Trade Workers">Craft and Related Trade Workers</option>
                                <option value="Plant and machine Operators and Assemblers">Plant and machine Operators
                                    and Assemblers</option>
                                <option value="Elementary Occupations">Elementary Occupations</option>
                                <option value="Armed Forces Occupations">Armed Forces Occupations</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="other-occupation-row" style="display:none;">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Other</label>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="other_occupation" id="other-occupation"
                                class="form-control form-control-lg form-control-solid" placeholder="Other" value="">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="separator my-10"></div>
                    <div class="row mb-6" id="organization-information">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Organization
                            Information</label>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="organization_affiliated" id="organization-affiliated"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Organization Affiliated" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="contact_person" id="contact-person"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Contact Person" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="office_address" id="office-address"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Office Address" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="telephone_no" id="telephone-no"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Telephone No." value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="id-reference-no">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">ID Reference
                            No.</label>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="sss_no" id="sss-no"
                                        class="form-control form-control-lg form-control-solid" placeholder="SSS No."
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="gsis_no" id="gsis-no"
                                        class="form-control form-control-lg form-control-solid" placeholder="GSIS No."
                                        value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="pagibig_no" id="pagibig-no"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Pag-ibig No." value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="psn_no" id="psn-no"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="PSN No." value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="philhealth_no" id="philhealth-no"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Philhealth No." value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="separator my-10"></div>


                    <div class="row mb-6" id="fathers-name">
                        <label class="col-lg-12 col-form-label fw-semibold fs-6">Family
                            Background</label>
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Father's Name:</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="fathers_first_name" id="fathers-first-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Father's First Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="fathers_middle_name" id="fathers-middle-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Father's Middle Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="fathers_last_name" id="fathers-last-name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Father's Last Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6" id="mothers-name">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Mother's Name:</label>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="mothers_first_name" id="mothers-first-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Mother's First Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="mothers_middle_name" id="mothers-middle-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Mother's Middle Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="mothers_last_name" id="mothers-last-name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Mother's Last Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="row mb-6" id="family-background-guardian">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Guardian</label>

                        <div class="col-lg-8">
                            <div class="row">

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="family_background_guardian_first_name"
                                        id="family-background-guardian-first-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Guardian's First Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="family_background_guardian_middle_name"
                                        id="family-background-guardian-middle-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Guardian's Middle Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="family_background_guardian_last_name"
                                        id="family-background-guardian-last-name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Guardian's Last Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="separator my-10"></div>

                    <div class="row mb-6">
                        <label class="col-lg-12 col-form-label required fw-semibold fs-6">Accomplised By</label>
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Applicant</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="applicant_first_name" id="applicant-first-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Applicant's First Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="applicant_middle_name" id="applicant-middle-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Applicant's Middle Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="applicant_last_name" id="applicant-last-name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Applicant's Last Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Guardian</label>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="accomplished_by_guardian_first_name"
                                        id="accomplished-by-guardian-first-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Guardian's First Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="accomplished_by_guardian_middle_name"
                                        id="accomplished-by-guardian-middle-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Guardian's Middle Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="accomplished_by_guardian_last_name"
                                        id="accomplished-by-guardian-last-name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Guardian's Last Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Representative</label>

                        <div class="col-lg-8">
                            <div class="row">

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="representative_first_name" id="representative-first-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Representative's First Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="representative_middle_name" id="representative-middle-name"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Representative's Middle Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="representative_last_name" id="representative-last-name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Representative's Last Name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="separator my-10"></div>
                    <div class="row mb-6" id="physician-info">
                        <label class="col-lg-12 col-form-label fw-semibold fs-6">Name of Certifying
                            Physician</label>
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">License No.</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="license_no" id="license-no"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="License No." value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Physician's Name</label>

                            <div class="col-lg-8">
                                <div class="row">

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="physician_first_name" id="physician-first-name"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Physician's First Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="physician_middle_name" id="physician-middle-name"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Physician's Middle Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="physician_last_name" id="physician-last-name"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Physician's Last Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->

                    <!--=================================================== END OF YOUR CODE ==============================================-->

                    <!--================================================ FORM ALERT ========================================================-->

                    <div class="separator my-10"></div>

                    <div class="alert alert-primary d-flex align-items-center p-5">
                        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor">
                                </rect>
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                                    fill="currentColor">
                                </rect>
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                                    fill="currentColor">
                                </rect>
                            </svg>
                        </span>

                        <div class="d-flex flex-column">
                            <h4 class="mb-1 text-primary">For New Applicant: </h4>
                            <span>1. Accomplished PWD-AF</span>
                            <span>2. Certification of Apparent of Disability by issuing officer OR:</span>
                            <span>3. Certification of Non-Apparent Disability by licensed physician </span>
                            <span>4. Two (2) 1x1 recent pictures with name and signature at the back</span>
                            <span>5. One (1) Valid government ID/or Voters ID Certificate (for children)</span>
                        </div>
                    </div>

                    <!--============================================= END OF FORM ALERT ====================================================-->

                    <!--=============================================== FORM BUTTONS ======================================================-->
                    <div class="d-flex justify-content-center">
                        <button type="button" onclick="history.back()" class="btn btn-secondary mx-1">Cancel</button>
                        <button type="button" data-bs-toggle="modal" id="review-button" data-bs-target="#review-modal"
                            class="btn btn-primary mx-1 flex-grow-1">Submit
                            Request</button>
                        <!-- <button type="submit" name="submit" value="submit"
                                    class="btn btn-primary mx-1 flex-grow-1" >Submit Request.</button> -->
                    </div>
                    <!--=========================================== END OF FORM BUTTONS ===================================================-->

                    <!--=============================================== FORM REVIEW MODAL ======================================================-->


                    <div class="modal fade" id="review-modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
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
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Application
                                            for:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_applicantion_for"
                                                id="review-applicantion-for"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Date Applied:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_date_applied" id="review-date-applied"
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
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Date of
                                            Birth:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_date_of_birth" id="review-date-of-birth"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Gender:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_gender" id="review-gender"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Civil Status:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_civil_status" id="review-civil-status"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Type of
                                            Disability:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_type_of_disability"
                                                id="review-type-of-disability"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Cause of
                                            Disability:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_cause_of_disability"
                                                id="review-cause-of-disability"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-congenital-inborn" style="display:none;">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Congenital / Inborn
                                            Type:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_congenital_inborn_types"
                                                id="review-congenital-inborn-types"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-acquired" style="display:none;">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Acquired Type:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_acquired_types" id="review-acquired-types"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Residence
                                            Address:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_residence_address"
                                                id="review-residence-address"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-landline-number-row">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Landline
                                            Number:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_landline_number" id="review-landline-number"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-mobile-number-row">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Mobile Number:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_mobile_number" id="review-mobile-number"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-email-address-row">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Email Address:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_email_address" id="review-email-address"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Educational
                                            Attainment:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_educational_attainment"
                                                id="review-educational-attainment"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Status of
                                            Employement:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_status_of_employment"
                                                id="review-status-of-employment"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-category-of-employment-row" style="display:none;">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Category of
                                            Employment:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_category_of_employment"
                                                id="review-category-of-employment"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-types-of-employment-row" style="display:none;">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Types of
                                            Employment:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_types_of_employment"
                                                id="review-types-of-employment"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-occupation-row" style="display:none;">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Occupation:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_occupation" id="review-occupation"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6" id="review-occupation-other-row" style="display:none;">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Other:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_occupation_other"
                                                id="review-occupation-other"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="separator my-10"></div>
                                    <div class="row mb-6">
                                        <label class="col-sm-12 col-form-label fw-semibold fs-6">Organization
                                            Information</label>
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Organization
                                            Affiliation:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_organization_affiliated"
                                                id="review-organization-affiliated"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Contact Person:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_contact_person" id="review-contact-person"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Office Address:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_office_address" id="review-office-address"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Telephone No.:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_telephone_no" id="review-telephone-no"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="separator my-10"></div>

                                    <div class="row mb-6">
                                        <label class="col-sm-12 col-form-label fw-semibold fs-6">ID Reference
                                            No.:</label>
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">SSS No.:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_sss_no" id="review-sss-no"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">GSIS No.:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_gsis_no" id="review-gsis-no"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Pag-ibig No.:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_pagibig_no" id="review-pagibig-no"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">PSN No.:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_psn_no" id="review-psn-no"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Philhealth No.:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_philhealth_no" id="review-philhealth-no"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="separator my-10"></div>

                                    <div class="row mb-6">
                                        <label class="col-sm-12 col-form-label fw-semibold fs-6">Family
                                            Background:</label>
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Father's Name:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_fathers_name" id="review-fathers-name"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Mother's Name:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_mothers_name" id="review-mothers-name"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Guardian:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_family_background_guardian"
                                                id="review-family-background-guardian"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="separator my-10"></div>

                                    <div class="row mb-6">
                                        <label class="col-sm-12 col-form-label fw-semibold fs-6">Accomplised By:</label>
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Applicant:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_applicant_name" id="review-applicant-name"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Guardian:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_accomplished_by_guardian"
                                                id="review-accomplished-by-guardian"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Representative:</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_representative_name"
                                                id="review-representative-name"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="separator my-10"></div>

                                    <div class="row mb-6">
                                        <label class="col-sm-12 col-form-label fw-semibold fs-6">Name of Certifying
                                            Physician</label>
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">License No.</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_physician_license_no"
                                                id="review-physician-license-no"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-sm-4 col-form-label fw-semibold fs-6">Physician's Name</label>
                                        <div class="col-sm-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="review_physician_name" id="review-physician-name"
                                                class="form-control form-control-sm form-control-solid" placeholder=""
                                                value="" disabled>
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
        $('#cause-of-disability').on('change', function () {

            if ($(this).val() == "Congenital / Inborn") {
                $('#congenital-inborn-types').show();
                $('#review-congenital-inborn').show();
                $('#acquired-types').hide();
                $('#review-acquired').hide();
            } else {
                $('#acquired-types').show();
                $('#review-acquired').show();
                $('#congenital-inborn-types').hide();
                $('#review-congenital-inborn').hide();
            }
        });

        $('#status-of-employment').on('change', function () {
            if ($(this).val() == "Employed" || $(this).val() == "Self-Employed") {
                $('#category-of-employment-row').show();
                $('#review-category-of-employment-row').show();
                $('#review-types-of-employment-row').show();
                $('#types-of-employment-row').show();
                $('#review-occupation-row').show();
                $('#occupation').show();
            } else {
                $('#category-of-employment-row').hide();
                $('#review-category-of-employment-row').hide();
                $('#types-of-employment-row').hide();
                $('#review-types-of-employment-row').hide();
                $('#review-occupation-row').hide();
                $('#occupation').hide();
            }

        });

        $('#occupation-type').on('change', function () {

            if ($(this).val() == "Other") {
                $('#other-occupation-row').show();
                $('#review-occupation-other-row').show();
            } else {
                $('#other-occupation-row').hide();
                $('#review-occupation-other-row').hide();
            }
        });



        $("#review-button").click(function () {

            $("#review-applicantion-for").val($("#applicantion-for").val());
            $("#review-date-applied").val($("#date-applied").val());
            $("#review-name").val($("#first-name").val() + " " + $("#middle-name").val() + " " + $(
                "#last-name").val() + " " + $("#suffix").val());
            $("#review-date-of-birth").val($("#birth-date").val());
            $("#review-gender").val($("#gender").val());
            $("#review-civil-status").val($("#civil-status").val());
            $("#review-type-of-disability").val($("#type-of-disability").val());
            $("#review-cause-of-disability").val($("#cause-of-disability").val());
            $("#review-congenital-inborn-types").val($("#congenital-inborn").val());
            $("#review-acquired-types").val($("#acquired").val());
            $("#review-residence-address").val($("#house-no-and-street").val() + " " + $(
                "#baranggay").val() + " " + $("#municipality").val() + ", " + $(
                "#province").val() + ", Region " + $("#region").val());

            $("#contact-details input").each(function () {
                if (!$(this).val()) {
                    $(this).val("N/A");
                }
            });

            $("#review-landline-number").val($("#landline-no").val());
            $("#review-mobile-number").val($("#mobile-no").val());
            $("#review-email-address").val($("#email-address").val());
            $("#review-educational-attainment").val($("#educational-attainment").val());
            $("#review-status-of-employment").val($("#status-of-employment").val());
            $("#review-category-of-employment").val($("#category-of-employment").val());
            $("#review-types-of-employment").val($("#types-of-employment").val());
            $("#review-occupation").val($("#occupation-type").val());
            $("#review-occupation-other").val($("#other-occupation").val());

            $("#organization-information input").each(function () {
                if (!$(this).val()) {
                    $(this).val("N/A");
                }
            });

            $("#review-organization-affiliated").val($("#organization-affiliated").val());
            $("#review-contact-person").val($("#contact-person").val());
            $("#review-office-address").val($("#office-address").val());
            $("#review-telephone-no").val($("#telephone-no").val());

            $("#id-reference-no input").each(function () {
                if (!$(this).val()) {
                    $(this).val("N/A");
                }
            });

            $("#review-sss-no").val($("#sss-no").val());
            $("#review-gsis-no").val($("#gsis-no").val());
            $("#review-pagibig-no").val($("#pagibig-no").val());
            $("#review-psn-no").val($("#psn-no").val());
            $("#review-philhealth-no").val($("#philhealth-no").val());

            $("#fathers-name input").each(function () {
                if (!$(this).val()) {
                    $("#review-fathers-name").val("N/A");
                } else {
                    $("#review-fathers-name").val($("#fathers-first-name").val() + " " + $(
                            "#fathers-middle-name").val() + " " + $("#fathers-last-name")
                        .val());
                }
            });

            $("#mothers-name input").each(function () {
                if (!$(this).val()) {
                    $("#review-mothers-name").val("N/A");
                } else {
                    $("#review-mothers-name").val($("#mothers-first-name").val() + " " + $(
                            "#mothers-middle-name").val() + " " + $("#mothers-last-name")
                        .val());
                }
            });


            $("#family-background-guardian input").each(function () {
                if (!$(this).val()) {
                    $("#review-family-background-guardian").val("N/A");
                } else {
                    $("#review-family-background-guardian").val($(
                        "#family-background-guardian-first-name").val() + " " + $(
                        "#family-background-guardian-middle-name").val() + " " + $(
                        "#family-background-guardian-last-name").val());
                }
            });

            $("#review-applicant-name").val($("#applicant-first-name").val() + " " + $(
                "#applicant-middle-name").val() + " " + $("#applicant-last-name").val());

            $("#review-accomplished-by-guardian").val($("#accomplished-by-guardian-first-name").val() +
                " " + $("#accomplished-by-guardian-middle-name").val() + " " + $(
                    "#accomplished-by-guardian-last-name").val());

            $("#review-representative-name").val($("#representative-first-name").val() +
                " " + $("#representative-middle-name").val() + " " + $(
                    "#representative-last-name").val());


            $("#physician-info input").each(function () {
                if (!$(this).val()) {
                    $("#review-physician-license-no").val("N/A");
                    $("#review-physician-name").val("N/A");
                } else {
                    $("#review-physician-license-no").val($("#license-no").val());
                    $("#review-physician-name").val($("#physician-first-name").val() + " " + $(
                            "#physician-middle-name").val() + " " + $(
                            "#physician-last-name")
                        .val());
                }
            });

        });




        var now = new Date();
        var y = now.getFullYear();
        var m = now.getMonth() + 1;
        var d = now.getDate();

        m = m < 10 ? "0" + m : m;
        d = d < 10 ? "0" + d : d;

        document.querySelector("#date-applied").value = y + "-" + m + "-" + d;

    });




    const department_id = 0
</script>
<script src="<?= base_url()?>/public/assets/js/services/form-misc.js"></script>
<?= $this->endSection(); ?>