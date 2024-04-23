<?= $this->extend('layouts/nonAdminContainer'); ?>

<?= $this->section('javascript'); ?>

<link href="<?=base_url()?>/public/assets/plugins/custom/jkanban/jkanban.bundle.css" rel="stylesheet" type="text/css" />

<style>
    .kanban-container .kanban-board{
        margin-right: 0 !important;
    }

    .kanban-container{
        justify-content: space-evenly;
        gap: 0.25rem;
    }

    .kanban-container .kanban-board-header{
        cursor: all-scroll;
    }
    
    .kanban-container::after{
        display: none;
    }

    .board-search{
        margin-top: -25px;
    }

    [data-id="step-finished"]{
        background: var(--kt-success-light) !important;
        /* border: 1px solid var(--kt-success); */
    }

    [data-id="step-finished"] > .kanban-board-header{
        pointer-events: none !important;
    }

    [data-id="step-finished"] > .kanban-board-header *{
        color: var(--kt-success) !important;
        font-weight: bold !important;
        
    }
    
    [data-id="step-finished"] > .kanban-drag .kanban-item{
        /* display: none; */
        animation: kanban-fadeout 0.5s ease 1s forwards;
    }

    @keyframes kanban-fadeout {
        from {opacity: 1;}
        to {opacity: 0;}
    }

    .offcanvas-icon::before{
        content: " ";
        position: absolute;
        width: 50%;
        height: 100%;
        background: inherit;
        top: 0;
        right: 100%;
        z-index: 10;
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%);
    }

    .offcanvas-icon::after{
        content: " ";
        position: absolute;
        width: 50%;
        height: 100%;
        filter: brightness(.8);
        background: inherit;
        top: 0;
        right: 100%;
        z-index: 5;
        clip-path: polygon(100% 0, 100% 100%, 0% 100%);
    }

    #finished-applications-drawer{
        background-color: var(--kt-app-bg-color);
        background-image: linear-gradient(0deg, rgba(var(--kt-success-rgb),0.2) 0%, var(--kt-app-bg-color) 30%);
    }

    #rejected-applications-drawer{
        background-color: var(--kt-app-bg-color);
        background-image: linear-gradient(0deg, rgba(var(--kt-danger-rgb),0.15) 0%, var(--kt-app-bg-color) 30%);
    }
</style>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6" data-bs-toggle="modal" data-bs-target="#sample">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Building Permit Application Tracker</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>/services" class="text-muted text-hover-primary">Services</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <span class="text-muted">Building Permit Application Tracker</span>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center  gap-2 gap-lg-3">
            <button type="button" id="add-building-permit-application-btn" class="btn btn-primary waves-effect waves-light float-right">
                <span class="svg-icon svg-icon-muted svg-icon-2 pe-0 me-0">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.75" d="M3 13V11C3 10.4 3.4 10 4 10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14H4C3.4 14 3 13.6 3 13Z" fill="currentColor"/>
                        <path d="M13 21H11C10.4 21 10 20.6 10 20V4C10 3.4 10.4 3 11 3H13C13.6 3 14 3.4 14 4V20C14 20.6 13.6 21 13 21Z" fill="currentColor"/>
                    </svg>
                </span>
                Add a Building Permit Application
            </button>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container position-relative">
        <!--begin::Button-->
        <button type="button" class="btn btn-primary d-none" id="kt_docs_toast_stack_button">Toggle Toast</button>
        <!--end::Button-->

        <div id="kt_docs_toast_stack_container" class="toast-container position-absolute top-0 end-0 p-3 z-index-3">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-kt-docs-toast="stack">
                <div class="toast-header">
                    <i class="ki-duotone ki-abstract-23 fs-2 text-success me-3"><span class="path1"></span><span class="path2"></span></i>
                    <strong class="me-auto">Keenthemes</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>

        <div class="mb-3 mb-lg-10">
            <div class="row gy-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-flush h-100">
                        <div class="card-header py-5">
                            <div class="card-title d-flex flex-column">                
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2" data-kt-countup="true" data-kt-countup-value="0" id="ongoing-building-permit-applications-count">4</span>
                                <span class="text-gray-600 pt-1 fs-7">Ongoing Building Permit Applications</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-flush h-100">
                        <div class="card-header py-5 ribbon ribbon-top ribbon-vertical">
                            <div class="ribbon-label bg-success pointer finished-applications-drawer-button">
                                <i class="fas fa-flag text-inverse-success fs-1 hover-elevate-up"></i>
                            </div>
                            <div class="card-title d-flex flex-column">                
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2" data-kt-countup="true" data-kt-countup-value="0" id="finished-applications-today-count">32</span>
                                <span class="text-gray-600 pt-1 fs-7">Finished Applications today</span>
                            </div>
                            <a href="#" class="fs-7 w-100 text-end finished-applications-drawer-button">View all</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-flush h-100">
                        <div class="card-header py-5 ribbon ribbon-top ribbon-vertical">
                            <div class="ribbon-label bg-info pointer">
                                <i class="fas fa-paper-plane text-inverse-info fs-1 hover-elevate-up"></i>
                            </div>
                            <div class="card-title d-flex flex-column">                
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2" data-kt-countup="true" data-kt-countup-value="0" id="messages-sent-today-count">108</span>
                                <span class="text-gray-600 pt-1 fs-7">Messages Sent today</span>
                            </div>
                            <a href="#" class="fs-7 w-100 text-end">View all</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-flush h-100">
                        <div class="card-header py-5 ribbon ribbon-top ribbon-vertical">
                            <div class="ribbon-label bg-danger pointer rejected-applications-drawer-button">
                                <i class="fas fa-thumbs-down text-inverse-danger fs-1 hover-elevate-up"></i>
                            </div>
                            <div class="card-title d-flex flex-column">                
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2" data-kt-countup="true" data-kt-countup-value="0" id="rejected-applications-today-count">95</span>
                                <span class="text-gray-600 pt-1 fs-7">Rejected Applications today</span>
                            </div>
                            <a href="#" class="fs-7 w-100 text-end rejected-applications-drawer-button">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header align-items-center">
                <div class="">
                    <h3 class="card-title">Application Boards</h3>
                    <p class="mb-0 text-gray-600 fs-7"><i class="fas fa-info-circle"></i> Each boards represents the step which the application is currently at. Drag each application to their current respective step/department</p>
                </div>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm bg-light-primary btn-icon rotate" data-kt-rotate="true" id="refresh-building-permit-applications" title="Refresh the boards">
                        <span class="svg-icon svg-icon-primary svg-icon-2 rotate-270">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.75" d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" fill="currentColor"/>
                                <path d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3 justify-content-center">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                        <div class="input-group input-group-solid mb-5 rounded overflow-hidden">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control form-control-solid" id="application-search-bar" placeholder="Search Applications"/>
                            <span class="input-group-text text-hover-dark pointer" id="application-search-bar-clear" style="display: none;"><i class="fas fa-times-circle opacity-50"></i></span>
                            <span class="input-group-text" id="application-search-bar-clear-placeholder"><i class="fas fa-times-circle opacity-0"></i></span>
                        </div>
                    </div>
                </div>
                <div id="tracker-boards" class=""></div>
            </div>
        </div>
    </div>
</div>

<!-- Building Permit Application Modal -->
<div class="modal fade" id="building-permit-application-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Building Permit Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="building-permit-application-form">
            <input type="number" name="bpa_id" id="bpa-id" class="d-none">

            <div class="mb-10">
                <label for="first-name" class="required form-label">Applicant Name</label>
                <input type="text" class="form-control form-control-solid mb-2" id="first-name" name="first_name" placeholder="First Name" required/>
                <input type="text" class="form-control form-control-solid mb-2" id="middle-name" name="middle_name" placeholder="Middle Name"/>
                <input type="text" class="form-control form-control-solid mb-1" id="last-name" name="last_name" placeholder="Last Name" required/>
                <div class="text-end pt-1 w-75 ms-auto fs-7 text-muted">
                        <i class="fas fa-info-circle"></i> If the applicant does not have a middle name please leave the field blank. 
                </div>
            </div>

            <div class="mb-10">
                <label for="contact-number" class="required form-label">Contact Number</label>
                <div class="input-group input-group-solid mb-5">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    <input type="text" class="form-control form-control-solid" id="contact-number" name="contact_number" placeholder="09__-___-____" required/>
                </div>

            </div>
            
            <div class="">
                <label for="application-description" class="form-label">Description</label>
                <textarea class="form-control form-control-solid" id="application-description" name="application_description" data-kt-autosize="true" placeholder="Brief description..." maxlength="500"></textarea>
                <div class="text-end pt-1">
                    <span class="rounded fs-7 p-1 px-2 text-gray-500 fw-semibold" style="background: #f5f8fa;" id="application-description-length-counter">0/500</span>
                </div>
            </div>

            <a href="#" class="btn btn-flex btn-light-danger w-100 px-6 mt-10" id="delete-building-permit-application" style="display: none;">
                <span class="svg-icon svg-icon-muted svg-icon-2hx">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
                    </svg>
                </span>

                <span class="d-flex flex-column align-items-start ms-2">
                    <span class="fw-bold">Delete Building Permit Application</span>
                    <span class="fs-7">This will remove this application from the board</span>
                </span>
            </a>

            <input type="submit" value="submit" id="building-permit-application-form-submit" class="d-none">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <label for="building-permit-application-form-submit" class="btn btn-primary">Submit Building Permit Application</label>
      </div>
    </div>
  </div>
</div>
<!--  -->

<!-- View Building Permit Application Modal -->
<div class="modal fade" id="view-building-permit-application-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Building Permit Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="view-building-permit-application-form">
            <div class="mb-10">
                <label for="first-name" class="required form-label">Applicant Name</label>
                <input type="text" class="form-control form-control-solid mb-2 pointer-default" name="first_name" placeholder="First Name" readonly/>
                <input type="text" class="form-control form-control-solid mb-2 pointer-default" name="middle_name" placeholder="Middle Name" readonly/>
                <input type="text" class="form-control form-control-solid mb-1 pointer-default" name="last_name" placeholder="Last Name" readonly/>
            </div>
    
            <div class="mb-10">
                <label for="contact-number" class="required form-label">Contact Number</label>
                <div class="input-group input-group-solid mb-5">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    <input type="text" class="form-control form-control-solid pointer-default" name="contact_number" placeholder="09__-___-____" readonly/>
                </div>
    
            </div>
            
            <div class="">
                <label for="application-description" class="form-label">Description</label>
                <textarea class="form-control form-control-solid pointer-default" name="application_description" data-kt-autosize="true" placeholder="Brief description..." maxlength="500" readonly></textarea>
                <div class="text-end pt-1">
                    <span class="rounded fs-7 p-1 px-2 text-gray-500 fw-semibold" style="background: #f5f8fa;" id="application-description-length-counter">0/500</span>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  -->

<!-- Finished Applications Offcanvas -->
<div id="finished-applications-drawer" class="flex-column border-bottom border-success border-2"
    data-kt-drawer="true"
    data-kt-drawer-activate="true"
    data-kt-drawer-toggle=".finished-applications-drawer-button"
    data-kt-drawer-close="#finished-applications-drawer-close"
    data-kt-drawer-width="{default:'90%', 'md': '60%', 'lg': '45%'}"
    >
    <div class="bg-white h-70px shadow-sm d-flex justify-content-between align-items-center">
        <div id="finished-applications-drawer-close" class="btn btn-icon btn-shadow shadow-sm btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px ms-3">
            <span class="svg-icon svg-icon-2" style="transform: scale(-1);">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor"></path>
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor"></path>
                </svg>
            </span>
        </div>

        <div class="bg-success d-flex justify-content-end align-items-center align-self-stretch p-5 px-10 position-relative offcanvas-icon">
            <i class="fas fa-flag text-inverse-success fs-2hx"></i>
        </div>
    </div>
    <div class="px-8">
        <div class="page-title py-6">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 mb-0">Finished Building Permit Applications</h1>
            <p class="fs-7 my-0 pt-1 text-muted">This is where all the finished building permit applications go</p>
        </div>

        <div class="card mb-8">
            <div class="card-body">
                <div class="input-group input-group-solid mb-5 rounded overflow-hidden">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control form-control-solid" id="finished-application-search-bar" placeholder="Search Finished Applications">
                </div>
                <table class="table gx-3 vertical-align-middle border rounded text-gray-800" id="finished-permits-table">
                    <thead class="bg-body border-bottom rounded-top">
                        <tr>
                            <th scope="col" class="text-nowrap fw-semibold">ID</th>
                            <th scope="col" class="text-nowrap fw-semibold">Applicant Name</th>
                            <th scope="col" class="text-nowrap fw-semibold d-none">Middle Name</th>
                            <th scope="col" class="text-nowrap fw-semibold d-none">Last Name</th>
                            <th scope="col" class="text-nowrap fw-semibold">Contact Number</th>
                            <th scope="col" class="text-nowrap fw-semibold">Date Finished</th>
                            <th scope="col" class="text-nowrap fw-semibold w-10px pointer-events-none"></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Rejected Applications Offcanvas -->
<div id="rejected-applications-drawer" class="flex-column border-bottom border-danger border-2"
    data-kt-drawer="true"
    data-kt-drawer-activate="true"
    data-kt-drawer-toggle=".rejected-applications-drawer-button"
    data-kt-drawer-close="#rejected-applications-drawer-close"
    data-kt-drawer-width="{default:'90%', 'md': '60%', 'lg': '45%'}"
    >
    <div class="bg-white h-70px shadow-sm d-flex justify-content-between align-items-center">
        <div id="rejected-applications-drawer-close" class="btn btn-icon btn-shadow shadow-sm btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px ms-3">
            <span class="svg-icon svg-icon-2" style="transform: scale(-1);">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor"></path>
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor"></path>
                </svg>
            </span>
        </div>

        <div class="bg-danger d-flex justify-content-end align-items-center align-self-stretch p-5 px-10 position-relative offcanvas-icon">
            <i class="fas fa-thumbs-down text-inverse-danger fs-2hx"></i>
        </div>
    </div>
    <div class="px-8">
        <div class="page-title py-6">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 mb-0">Rejected Building Permit Applications</h1>
            <p class="fs-7 my-0 pt-1 text-muted">This is where all the rejected building permit applications go</p>
        </div>

        <div class="card mb-8">
            <div class="card-body">
                <div class="input-group input-group-solid mb-5 rounded overflow-hidden">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control form-control-solid" id="rejected-application-search-bar" placeholder="Search Rejected Applications">
                </div>
                <table class="table gx-3 vertical-align-middle border rounded text-gray-800" id="rejected-permits-table">
                    <thead class="bg-body border-bottom rounded-top">
                        <tr>
                            <th scope="col" class="text-nowrap fw-semibold">ID</th>
                            <th scope="col" class="text-nowrap fw-semibold">Applicant Name</th>
                            <th scope="col" class="text-nowrap fw-semibold d-none">Middle Name</th>
                            <th scope="col" class="text-nowrap fw-semibold d-none">Last Name</th>
                            <th scope="col" class="text-nowrap fw-semibold">Contact Number</th>
                            <th scope="col" class="text-nowrap fw-semibold">Rejected by</th>
                            <th scope="col" class="text-nowrap fw-semibold">Date Rejected</th>
                            <th scope="col" class="text-nowrap fw-semibold w-10px pointer-events-none"></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--  -->

<div id="return-to-board-container" class="position-absolute bg-black bg-opacity-20 top-0 end-0" style="z-index: 1000; display: none; min-height: 100%;">
    <div class="h-100 d-flex justify-content-center align-items-start p-10" id="return-to-board">
        <div class="card w-50 overflow-hidden mt-10 shadow">
            <label class="card-header">
                <h3 class="card-title w-100 d-flex justify-content-center">Return to which board?</h3>
            </label>
            <div class="card-body p-0">
                <div class="list-group list-group-flush" id="return-to-board-group" data-bpa_id="0">
                    <a href="#" class="list-group-item border-secondary list-group-item-action return-to-board-item" data-current-department="bplo">BPLO</a>
                    <a href="#" class="list-group-item border-secondary list-group-item-action return-to-board-item" data-current-department="engineering">Engineering</a>
                    <a href="#" class="list-group-item border-secondary list-group-item-action return-to-board-item" data-current-department="cpdc">CPDC</a>
                    <a href="#" class="list-group-item border-secondary list-group-item-action return-to-board-item" data-current-department="fire-department">Fire Department</a>
                </div>
            </div>
            <div class="card-footer p-0">
                <button type="button" class="btn btn-light w-100 rounded-top-0" >Cancel</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>

<script src="<?=base_url()?>/public/assets/plugins/custom/jkanban/jkanban.bundle.js"></script>

<script>
    let building_permit_applications_boards, ongoing_applications;
    let finished_permits_table, finished_permits_table_data;
    let rejected_permits_table, rejected_permits_table_data;
    $(function () {
    // Miscellaneous
        renderOngoingApplications()

        const buidling_permit_application_modal = bootstrap.Modal.getOrCreateInstance("#building-permit-application-modal");
        const view_buidling_permit_application_modal = bootstrap.Modal.getOrCreateInstance("#view-building-permit-application-modal");
    //

    // Finished Applications
        
        const finished_applications_drawer = KTDrawer.getInstance($("#finished-applications-drawer")[0]);
        finished_applications_drawer.on("kt.drawer.hide", function(){
            $("#return-to-board-container").hide();
        })

        finished_permits_table = $("#finished-permits-table").DataTable({
            processing : true,
            serverSide : true,
            ajax : {
                url: "<?=base_url()?>/BPLO/getBuildingPermitApplicationsDataTable",
                type: 'POST', 
                data: { where_conditions : { "finished_at <>" : null } }
            },
            columns : [
                { data: "bpa_id" },
                { 
                    data: "first_name", 
                    render: function(data, type, row){
                        return `${row.first_name} ${row.middle_name} ${row.last_name}`;
                    }
                },
                { 
                    data: "middle_name",
                    className: "d-none"
                },
                { 
                    data: "last_name",
                    className: "d-none"
                },
                { 
                    data: "contact_number",
                },
                { data: "finished_at" },
                { 
                    data: "bpa_id", 
                    render: function(data, type, row){
                        return `
                        <div class="dropdown">
                            <button class="btn btn-icon btn-light-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" style="">
                                <li><a class="dropdown-item view-application" data-bpa_id="${data}" href="#">View</a></li>
                                <li><a class="dropdown-item return-application" data-bpa_id="${data}" href="#">Return to board</a></li>
                                <li><a class="dropdown-item text-danger delete-application" data-bpa_id="${data}" href="#">Delete</a></li>
                            </ul>
                        </div>`;
                    }
                },
            ]
        }).on('xhr.dt', function (e, settings, json, xhr) {
            finished_permits_table_data = json.data;
        })

        $("#finished-permits-table, #rejected-permits-table").on("click", ".view-application", function(){
            const bpa_id = $(this).data("bpa_id");
            let building_permit_application_data = searchArrayById(finished_permits_table_data, bpa_id, "bpa_id");
            if(!building_permit_application_data){
                building_permit_application_data = searchArrayById(rejected_permits_table_data, bpa_id, "bpa_id");
                console.log(building_permit_application_data)
            }
            resetForm("#view-building-permit-application-form");
            for (const name in building_permit_application_data) {
                if (Object.hasOwnProperty.call(building_permit_application_data, name)) {
                    const value = building_permit_application_data[name];
                    $("#view-building-permit-application-form").find(`[name="${name}"]`).val(value).trigger("change")
                }
            }
            view_buidling_permit_application_modal.show();
        });

        $("#finished-permits-table, #rejected-permits-table").on("click", ".return-application", function(){
            const bpa_id = $(this).data("bpa_id");
            const drawer = $(this).closest(".drawer");
            $("#return-to-board-group").data("bpa_id", bpa_id);
            $("#return-to-board-container").width(drawer.width()).height($(document).height()).fadeIn(100);
        });

        $("#return-to-board").on("click", function(e){
            if(e.target == this){
                $("#return-to-board-container").fadeOut(100);
            }
        })

        $(".return-to-board-item").click(function(){
            const current_department = this.dataset.currentDepartment;
            const bpa_id = $("#return-to-board-group").data("bpa_id");
            ajaxRequest(
                `<?=base_url()?>/BPLO/updateBuildingPermitApplication/${bpa_id}`, 
                "POST", 
                { 
                    current_department : current_department,
                    rejected_at : null,
                    finished_at : null
                }, 
                function(data){
                    if(data.error){
                        errorAlert("Error", data.message);
                        return;
                    }
                    reloadDataTable(finished_permits_table);

                    $("#return-to-board-container").fadeOut(100);
                    
                    successAlert("Success", "Building Permit Application successfully returned to the boards");
                    renderOngoingApplications();
                    $("#return-to-board-group").data("bpa_id", 0);
                }
            )
        })

        $("#finished-permits-table").on("click", ".delete-application", function(){
            const bpa_id = $(this).data("bpa_id");

            confirm("Caution", 
                "Are you sure you would like to delete this application?", 
                "warning", 
                `<?=base_url()?>/BPLO/updateBuildingPermitApplication/${bpa_id}`, 
                "POST", 
                { deleted_at : getCurrentDateTime()}, 
                function(data){
                    if(data.error){
                        errorAlert("Error", data.message);
                        return;
                    }
                    buidling_permit_application_modal.hide();
                    successAlert("Success", "Building Permit Application successfully deleted");
                    renderOngoingApplications();
                }
            )
        });

        $("#finished-application-search-bar").keyup(function (e) { 
            finished_permits_table.search(this.value).draw();
        });

        $(".finished-applications-drawer-button").click(function() {
            reloadDataTable(finished_permits_table)
        })

    //

    // Rejected Applications

        const rejected_applications_drawer = KTDrawer.getInstance($("#rejected-applications-drawer")[0]);
        rejected_applications_drawer.on("kt.drawer.hide", function(){
            $("#return-to-board-container").hide();
        })

        rejected_permits_table = $("#rejected-permits-table").DataTable({
            processing : true,
            serverSide : true,
            ajax : {
                url: "<?=base_url()?>/BPLO/getBuildingPermitApplicationsDataTable",
                type: 'POST', 
                data: { where_conditions : { "rejected_at <>" : null } }
            },
            columns : [
                { data: "bpa_id" },
                { 
                    data: "first_name", 
                    render: function(data, type, row){
                        return `${row.first_name} ${row.middle_name} ${row.last_name}`;
                    }
                },
                { 
                    data: "middle_name",
                    className: "d-none"
                },
                { 
                    data: "last_name",
                    className: "d-none"
                },
                { 
                    data: "contact_number",
                },
                { 
                    data: "current_department",
                    render: function(data, type, row){
                        const departments = {
                            "bplo": "BPLO",
                            "engineering": "Engineering",
                            "cpdc": "CPDC",
                            "fire-department": "Fire Department"
                        };

                        return departments[data];
                    }
                },
                { data: "rejected_at" },
                { 
                    data: "bpa_id", 
                    render: function(data, type, row){
                        return `
                        <div class="dropdown">
                            <button class="btn btn-icon btn-light-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" style="">
                                <li><a class="dropdown-item view-application" data-bpa_id="${data}" href="#">View</a></li>
                                <li><a class="dropdown-item return-application" data-bpa_id="${data}" href="#">Return to board</a></li>
                                <li><a class="dropdown-item text-danger delete-application d-none" data-bpa_id="${data}" href="#">Delete</a></li>
                            </ul>
                        </div>`;
                    }
                },
            ]
        }).on('xhr.dt', function (e, settings, json, xhr) {
            rejected_permits_table_data = json.data;
        });
        
        $("#rejected-application-search-bar").keyup(function (e) { 
            rejected_permits_table.search(this.value).draw();
        });

        $(".rejected-applications-drawer-button").click(function() {
            reloadDataTable(rejected_permits_table)
        })

        $("#refresh-building-permit-applications").click(function() {
            renderOngoingApplications();
        })
    //

    //Building Permit Application Form
        $("#add-building-permit-application-btn").click(function(){
            resetForm("#building-permit-application-form");
            $("#bpa-id").val('').trigger("change");
            buidling_permit_application_modal.show();
        })

        $("#bpa-id").on("change", function (e) { 
            if(this.value){
                $("#delete-building-permit-application").show();
                $('[for="building-permit-application-form-submit"]').text('Update Building Permit Application')
                return;
            }
            $("#delete-building-permit-application").hide();
            $('[for="building-permit-application-form-submit"]').text('Submit Building Permit Application')
        });

        Inputmask({
            "mask" : "\\0\\999-999-9999"
        }).mask("#contact-number");

        $("#application-description").on("input change", function(){
            const current_length = this.value.length;
            $("#application-description-length-counter").text(`${current_length}/500`)
        }).on("focusin", function(){
            $("#application-description-length-counter").css("background", "#eef3f7")
        }).on("focusout", function(){
            $("#application-description-length-counter").css("background", "#f5f8fa")
        });

        $("#building-permit-application-form").submit(function (e) { 
            e.preventDefault();
            const bpa_id = $("#bpa-id").val();
            const form_data = $(this).serialize();
            ajaxRequest(`<?=base_url()?>/BPLO/${bpa_id ?`updateBuildingPermitApplication/${bpa_id}` : "addBuildingPermitApplication"}`, 
                "POST", 
                form_data, 
                function(data){
                    if(data.error){
                        errorAlert("Error", data.message);
                        return;
                    }

                    successAlert("Success", "Building Permit Application successfully added");
                    renderOngoingApplications();
                    buidling_permit_application_modal.hide();
                }
            )
        });

        $("#delete-building-permit-application").click(function(){
            const bpa_id = $("#bpa-id").val();

            confirm("Caution", 
                "Are you sure you would like to delete this application?", 
                "warning", 
                `<?=base_url()?>/BPLO/updateBuildingPermitApplication/${bpa_id}`, 
                "POST", 
                { deleted_at : getCurrentDateTime()}, 
                function(data){
                    if(data.error){
                        errorAlert("Error", data.message);
                        return;
                    }
                    buidling_permit_application_modal.hide();
                    successAlert("Success", "Building Permit Application successfully deleted");
                    renderOngoingApplications();
                }
            )
        });
    //

    //Building Permit Application Boards
        $("#tracker-boards").on("click", ".view-application", function(){
            const kanban_item = $(this).closest(".kanban-item");
            const bpa_id = kanban_item.data("bpa_id");
            const building_permit_application_data = searchArrayById(ongoing_applications, bpa_id, "bpa_id");
            resetForm("#building-permit-application-form");
            for (const name in building_permit_application_data) {
                if (Object.hasOwnProperty.call(building_permit_application_data, name)) {
                    const value = building_permit_application_data[name];
                    $("#building-permit-application-form").find(`[name="${name}"]`).val(value).trigger("change")
                }
            }
            buidling_permit_application_modal.show();
        });

        $("#tracker-boards").on("click", ".reject-application", function(){
            const kanban_item = $(this).closest(".kanban-item");
            const bpa_id = kanban_item.data("bpa_id");
            
            confirm("Caution", 
                "Are you sure you would like to reject this application?", 
                "warning", 
                `<?=base_url()?>/BPLO/updateBuildingPermitApplication/${bpa_id}`, 
                "POST", 
                { rejected_at : getCurrentDateTime() }, 
                function(data){
                    if(data.error){
                        errorAlert("Error", data.message);
                        return;
                    }

                    successAlert("Success", "Building Permit Application successfully rejected");
                    renderOngoingApplications()
                }
            )
        });
    //

    //Building Permit Application Search
        $("#application-search-bar").on("keyup", function(){
            if(this.value){
                const search_key = this.value.toLowerCase();
                $("#application-search-bar-clear").show()
                $("#application-search-bar-clear-placeholder").hide()

                $("#tracker-boards").find(`.kanban-item`).hide();
                $("#tracker-boards").find(`[data-first_name*=${search_key}], [data-middle_name*=${search_key}], [data-last_name*=${search_key}], [data-application_description*=${search_key}]`).show();
            }else{
                $("#application-search-bar-clear").hide()
                $("#application-search-bar-clear-placeholder").show()
                $("#tracker-boards").find(`.kanban-item`).show();
            }
        })

        $("#application-search-bar-clear").click(function(){
            $("#application-search-bar").val('').trigger("keyup")
        })
    //
    
    });
// JKanban
    "use strict";

    const jkanban_tracker_boards = function() {
        // Private functions
        const tracker_boards = function() {
            building_permit_applications_boards = new jKanban({
                element: '#tracker-boards',
                gutter: '0',
                widthBoard: '300px',
                boards: [{
                        'id': 'step-bplo',
                        'title': 'BPLO',
                        'class': '',
                        'item': [],
                        'current_department': "asd"
                    }, {
                        'id': 'step-engineering',
                        'title': 'Engineering',
                        'class': 'fw-bold',
                        'item': [],
                        'current_department': "asd"
                    }, {
                        'id': 'step-cpdc',
                        'title': 'CPDC',
                        'class': 'fw-bold',
                        'item': [],
                        'current_department': "asd"
                    }, {
                        'id': 'step-fire-department',
                        'title': 'Fire Department',
                        'class': 'fw-bold',
                        'item': [],
                        'current_department': "asd"
                    }, {
                        'id': 'step-finished',
                        'title': 'Finished',
                        'class': 'bg-light-success',
                        'item': [],
                        'current_department': "asd"
                    }
                ],
                dropEl : function (el, target, source, sibling) {
                    if(target == source){ return; }

                    const current_board = $(target).closest(".kanban-board");
                    const current_board_id = current_board.data("id");
                    const current_department = current_board_id.substr(current_board_id.indexOf("-")+1);
                    const bpa_id = el.dataset.bpa_id;
                    
                    const update_data = { current_department : current_department};
                    if(current_department=="finished"){ 
                        update_data.finished_at = getCurrentDateTime(); 
                    }

                    ajaxRequest(
                        `<?=base_url()?>/BPLO/updateBuildingPermitApplication/${bpa_id}`, 
                        "POST", 
                        update_data, 
                        function(data){
                            if(data.error){
                                errorAlert("Error", data.message);
                                return;
                            }

                            renderOngoingApplications()
                        }
                    );

                    console.log('Send SMS Message to client');
                    console.log('Dropped element:', el);
                    console.log('Target column:', target);
                    console.log('Source column:', source);
                    console.log('Sibling element:', sibling);
                },
            });
        }

        return {
            // Public Functions
            init: function() {
                tracker_boards();
            }
        };
    }();

    KTUtil.onDOMContentLoaded(function() {
        jkanban_tracker_boards.init();
    });
//

//Board Functions
    function clearAllBoards(){
        $("#tracker-boards").find(".kanban-board").each(function (board_index, board) {
            $(board).find(".kanban-item").each(function (item_index, item) {
                const id = item.dataset.eid;
                building_permit_applications_boards.removeElement(id);
            });
        });
    }

    function renderOngoingApplications(){
        ajaxRequest("<?=base_url()?>/BPLO/getOngoingBuildingPermitApplications", 
            "GET", 
            null,
            function(data){
                
                clearAllBoards();
                renderPageStatistics();
                
                if(data.error){
                    // errorAlert("Error", data.message);
                    return;
                }

                ongoing_applications = data.data;
                ongoing_applications.forEach(building_permit_application => {
                    building_permit_applications_boards.addElement(`step-${building_permit_application.current_department}`, {
                        'title': `
                            <div class="d-flex">
                                <div class="flex-grow-1 lh-sm">
                                    <div class="fw-bold">${building_permit_application.first_name} ${building_permit_application.last_name}</div>
                                    <small class="text-gray-700">Date: ${building_permit_application.created_at}</small>
                                </div>
                                <div class="">
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-light-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item view-application" href="#">View</a></li>
                                            <li><a class="dropdown-item text-danger reject-application" href="#">Reject</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        `,
                        'class' : ["p-3"],
                        'id' : building_permit_application.bpa_id,
                        'bpa_id' : building_permit_application.bpa_id, 
                        'first_name' : building_permit_application.first_name.toLowerCase(), 
                        'middle_name' : building_permit_application.middle_name.toLowerCase(), 
                        'last_name' : building_permit_application.last_name.toLowerCase(), 
                        'application_description' : building_permit_application.application_description.toLowerCase()
                    },);
                });

            }
        )
    }

    const ongoing_building_permit_applications_count = new countUp.CountUp("ongoing-building-permit-applications-count");
    const finished_applications_today_count = new countUp.CountUp("finished-applications-today-count");
    const messages_sent_today_count = new countUp.CountUp("messages-sent-today-count");
    const rejected_applications_today_count = new countUp.CountUp("rejected-applications-today-count");
    function renderPageStatistics(){

        
        ajaxRequest("<?=base_url()?>/BPLO/getBuildingPermitStatistics", 
            "GET", 
            null, 
            function(data){
                if(data.error){ return; }
                const response = data.data;
                
                ongoing_building_permit_applications_count.update(response.ongoing)
                finished_applications_today_count.update(response.finished)
                rejected_applications_today_count.update(response.rejected)
            }
        );

    }
//

// Miscellaneous Functions

    function getCurrentDateTime(){
        const current_datetime = new Date();
        const Y_m_d = current_datetime.toISOString().slice(0, 10);
        const H = current_datetime.getHours();
        const i = `${current_datetime.getMinutes() < 10 ? '0'+current_datetime.getMinutes() : current_datetime.getMinutes()}`;
        const s = `${current_datetime.getSeconds() < 10 ? '0'+current_datetime.getSeconds() : current_datetime.getSeconds()}`;

        return `${Y_m_d} ${H}:${i}:${s}`;
    }
//
</script>
<?= $this->endSection(); ?>