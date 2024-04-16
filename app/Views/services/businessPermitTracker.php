<?= $this->extend('layouts/main'); ?>

<?= $this->section('javascript'); ?>

<link href="<?=base_url()?>/public/assets/plugins/custom/jkanban/jkanban.bundle.css" rel="stylesheet" type="text/css" />

<style>
    .kanban-board{
        /* background: ; */
    }

    .kanban-container{
        justify-content: center;
    }
</style>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Business Permit Tracker</h1>
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
                    <span class="text-muted">Business Permit Tracker</span>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!-- asd -->
        </div>
    </div>
</div>

<!-- Card-table -->
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container ">
        <div class="card">
            <div class="card-body">
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
                        'id': '1',
                        'title': 'BPLO',
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
                            {
                                'title': '<span class="fw-bold">Buy Milk</span>'
                            }
                        ]
                    }, {
                        'id': '2',
                        'title': 'Engineering',
                        'class': 'fw-bold',
                        'item': [
                            {
                                'title': '<span class="fw-bold">Do Something!</span>'
                            },
                            {
                                'title': '<span class="fw-bold">Run?</span>'
                            }
                        ]
                    }, {
                        'id': '3',
                        'title': 'CPDC',
                        'class': 'fw-bold',
                        'item': [
                            {
                                'title': '<span class="fw-bold">Do Something!</span>'
                            },
                            {
                                'title': '<span class="fw-bold">Run?</span>'
                            }
                        ]
                    }, {
                        'id': '4',
                        'title': 'Fire Department',
                        'class': 'fw-bold',
                        'item': [
                            {
                                'title': '<span class="fw-bold">All right</span>'
                            },
                            {
                                'title': '<span class="fw-bold">Ok!</span>'
                            }
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

        // dropEl           
        
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