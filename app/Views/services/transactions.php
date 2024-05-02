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
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body">

                        <div class="btn-actions-container">

                        </div>

                        <!-- <h5 class="card-title">Special title treatment</h5> -->
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded border align-middle gs-7 gy-5 my-0" id="transactions-data-table" style="width: 100%">
                                <thead class="text-primary fw-bold border-bottom border-gray-200">
                                    <tr>
                                        <th>Service Name</th>
                                        <th>Created By</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class=""></th>
                                        <th class=""></th>
                                    </tr>
                                </thead>

                            </table>
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

        let table = $('#transactions-data-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            order: [[2, 'desc']],
            ajax: '<?= base_url()?>/applications/transactionsDataTables/',
            columns: [

                {
                    data: 'service_name',
                    render: function (data, display, row) {
                        return `<div class="symbol symbol-50px me-2ddd">
                                    <img src = "${base_url}/public/assets/media/avatars/default-avatar.png" class="ms-5 me-8">
                                </div><span class = "fw-bold text-gray-700">${data}</span>
                            `
                    }
                },
                {
                    data: 'actor',
                    render: (data, display, row) => {
                        return `<span class="badge badge-light-primary">${data}</span>`
                    }
                },
                {
                    data: 'created_at',
             
                },
                {
                    data: 'status',
                    render: (data, display, row) => {
                        if(row.status === "0"){
                            return `<span class="badge badge-light-secondary text-primary">Pending</span>`
                        }else if(row.status === "1"){
                            return `<span class="badge badge-light-success">Approved</span>`
                        }else{
                            return `<span class="badge badge-light-danger">Rejected</span>`
                        }
                        
                    }
                },
                {
                    data: 'transaction_id',
                    orderable: false,
                    "mRender": function (data, type, row) {
                        return `
                        <div class="dropdown ms-2">
                            
                            <button class="btn btn-sm btn-icon btn-light-primary btn-active-primary me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                    </svg>
                                </span>
                            </button>
                            <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" aria-labelledby="dropdownMenuButton" style="">

                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 view-btn"  href="<?= base_url()?>/applications/transactionPreview/${row.service_id}/${row.application_id}" target="_blank" data-id="${data}"  data-application = "${row.application_id}" data-service="${row.service_id}" >View</a>
                                </div>
                            </div>
                        </div>`;
                    }
                }
            ],
            initComplete: function (settings, json) {
                var indexColumn = 0;

                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement("input");

                    $(input).attr('placeholder', 'Search')
                        .addClass('form-control form-control-sm')
                        .appendTo($('.filterhead:eq(' + indexColumn + ')').empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });

                    indexColumn++;


                });

                _dataTablesObj = json.data;
            }
        });

        dataTablesButtonsHooks(table);


        $('#transactions-data-table').on('click', '.view-btn', function () {
            let application_id = this.dataset.application;
            let service_id = this.dataset.service;
            // console.log(application_id);
            // console.log(service_id);
            console.log('<?= base_url()?>/applications/transactionPreview/'+ service_id + '/' + application_id);
            
        });

    });
</script>
<?= $this->endSection(); ?>