<?= $this->extend('layouts/main'); ?>

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
</style>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Building Application Tracker</h1>
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
                    <span class="text-muted">Building Application Tracker</span>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center  gap-2 gap-lg-3">
            <!-- asd -->
        </div>
    </div>
</div>

<!-- Card-table -->
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
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">4</span>
                                <span class="text-gray-600 pt-1 fs-7">Ongoing Building Applications</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-flush h-100">
                        <div class="card-header py-5 ribbon ribbon-top ribbon-vertical">
                            <div class="ribbon-label bg-success">
                                <i class="fas fa-flag text-inverse-success fs-1"></i>
                            </div>
                            <div class="card-title d-flex flex-column">                
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">32</span>
                                <span class="text-gray-600 pt-1 fs-7">Finished Applications today</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-flush h-100">
                        <div class="card-header py-5 ribbon ribbon-top ribbon-vertical">
                            <div class="ribbon-label bg-info">
                                <i class="fas fa-paper-plane text-inverse-info fs-1"></i>
                            </div>
                            <div class="card-title d-flex flex-column">                
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">108</span>
                                <span class="text-gray-600 pt-1 fs-7">Messages Sent today</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-flush h-100">
                        <div class="card-header py-5 ribbon ribbon-top ribbon-vertical">
                            <div class="ribbon-label bg-danger">
                                <i class="fas fa-thumbs-down text-inverse-danger fs-1"></i>
                            </div>
                            <div class="card-title d-flex flex-column">                
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">95</span>
                                <span class="text-gray-600 pt-1 fs-7">Rejected Applications today</span>
                            </div>
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
                    <button type="button" class="btn btn-sm btn-light-primary btn-icon">
                        <span class="svg-icon svg-icon-muted svg-icon-2">
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






<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>

<script src="<?=base_url()?>/public/assets/plugins/custom/jkanban/jkanban.bundle.js"></script>

<script>
    $(function () {
        // // Select elements
        // const button = document.getElementById('kt_docs_toast_stack_button');
        // const container = document.getElementById('kt_docs_toast_stack_container');
        // const targetElement = document.querySelector('[data-kt-docs-toast="stack"]'); // Use CSS class or HTML attr to avoid duplicating ids

        // // Remove base element markup
        // targetElement.parentNode.removeChild(targetElement);

        // // Handle button click
        // button.addEventListener('click', e => {
        //     e.preventDefault();

        //     // Create new toast element
        //     const newToast = targetElement.cloneNode(true);
        //     container.append(newToast);

        //     // Create new toast instance --- more info: https://getbootstrap.com/docs/5.1/components/toasts/#getorcreateinstance
        //     const toast = bootstrap.Toast.getOrCreateInstance(newToast);

        //     // Toggle toast to show --- more info: https://getbootstrap.com/docs/5.1/components/toasts/#show
        //     toast.show();
        // });

        $("#application-search-bar").on("keyup", function(){
            if(this.value){
                $("#application-search-bar-clear").show()
                $("#application-search-bar-clear-placeholder").hide()
            }else{
                $("#application-search-bar-clear").hide()
                $("#application-search-bar-clear-placeholder").show()
            }
        })
        $("#application-search-bar-clear").click(function(){
            $("#application-search-bar").val('').trigger("keyup")
        })

        $("#tracker-boards").on("click", ".reject-application", function(){
            confirm("Caution", "Are you sure you would like to reject this application?", "warning")
        });
    });

    "use strict";

    // Class definition
    const jkanban_tracker_boards = function() {
        // Private functions
        const tracker_boards = function() {
            const kanban = new jKanban({
                element: '#tracker-boards',
                gutter: '0',
                widthBoard: '300px',
                boards: [{
                        'id': 'step-bplo',
                        'title': 'BPLO',
                        'class': '',
                        'item': [
                            {
                                'title': `
                                    <div class="d-flex">
                                        <div class="flex-grow-1 lh-sm">
                                            <div class="fw-bold">Sample Application</div>
                                            <small class="text-gray-700">Date: 04-04-2024 15:18:32</small>
                                        </div>
                                        <div class="">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-light-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item text-danger reject-application" href="#">Reject</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                `,
                                "class" : ["p-3"] 
                            },
                            {
                                'title': `
                                    <div class="d-flex">
                                        <div class="flex-grow-1 lh-sm">
                                            <div class="fw-bold">Sample Application</div>
                                            <small class="text-gray-700">Date: 04-04-2024 15:18:32</small>
                                        </div>
                                        <div class="">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-light-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Reject</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                `,
                                "class" : ["p-3"] 
                            }
                        ]
                    }, {
                        'id': 'step-engineering',
                        'title': 'Engineering',
                        'class': 'fw-bold',
                        'item': [
                            {
                                'title': `
                                    <div class="d-flex">
                                        <div class="flex-grow-1 lh-sm">
                                            <div class="fw-bold">Sample Application</div>
                                            <small class="text-gray-700">Date: 04-04-2024 15:18:32</small>
                                        </div>
                                        <div class="">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-light-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Reject</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                `,
                                "class" : ["p-3"] 
                            },
                        ]
                    }, {
                        'id': 'step-cpdc',
                        'title': 'CPDC',
                        'class': 'fw-bold',
                        'item': [
                            {
                                'title': `
                                    <div class="d-flex">
                                        <div class="flex-grow-1 lh-sm">
                                            <div class="fw-bold">Sample Application</div>
                                            <small class="text-gray-700">Date: 04-04-2024 15:18:32</small>
                                        </div>
                                        <div class="">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-light-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Reject</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                `,
                                "class" : ["p-3"] 
                            },
                        ]
                    }, {
                        'id': 'step-fire-department',
                        'title': 'Fire Department',
                        'class': 'fw-bold',
                        'item': [
                        ]
                    }, {
                        'id': 'step-finished',
                        'title': 'Finished',
                        'class': 'bg-light-success',
                        'item': [
                        ]
                    }
                ],
                dropEl : function (el, target, source, sibling) {
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

    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        jkanban_tracker_boards.init();
    });
</script>
<?= $this->endSection(); ?>