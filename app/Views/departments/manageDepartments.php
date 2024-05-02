<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage
                Departments</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Departments List</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#department-modal">
                <i class="fas fa-user-plus"></i> Add Department
            </button>
            <input type="checkbox" class="btn-check d-none" id="archive-toggle" autocomplete="off">
            <label class="btn btn-primary" for="archive-toggle"><i class="fas fa-archive"></i>Archived</label>


        </div>
    </div>
</div>

<!-- card-table -->
<div class="d-flex flex-column flex-column-fluid">

    <div id="kt_app_content_container" class="app-container ">
        <div class="row">
            <div class="col-7">
                <div class="card card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded border align-middle gs-7 gy-5 my-0" id="dept-table"
                            style="width: 100%">
                            <thead class="text-primary fw-bold border-bottom border-gray-200">
                                <tr>
                                    <th>Department Name</th>
                                    <th>Department Alias</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <th class="filterhead"></th>
                                    <th class="filterhead"></th>
                                    <th class=""></th>
                                </tr>
                            </thead>
                            <tbody> </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card  ">
                    <div class="card-header">
                        <h3 class="card-title primary">Services</h3>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-sm btn-success me-2" data-bs-toggle="modal" data-bs-target="#services-modal" id="add-services">
                            <i class="fa-solid fa-square-plus"></i> Add Services
                            </button>
                            <input type="checkbox" class="btn-check d-none" id="service-toggle" autocomplete="off">
                            <label class="btn btn-danger py-2 fs-6 fw-normal" for="service-toggle"><i class="fas fa-archive"></i>Archived</label>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded border align-middle gs-7 gy-5 my-0" id="service-table"
                            style="width: 100%">
                            <thead class="text-primary fw-bold border-bottom border-gray-200">
                                <tr>
                                    <th>Services</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <th class="filterhead"></th>
                                    <th class=""></th>
                                </tr>
                            </thead>
                            <tbody> </tbody>
                        </table>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</div>






<!-- Add Department -->
<div class="modal fade" tabindex="-1" id="department-modal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Department</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <section>
                    <form class="white" action="" method="POST" id="add-form">
                        <label class="form-label">Department Name: </label> <span id="error-name"
                            class="text-danger"></span>
                        <input type="text" name="department_name" id="department-name" class="form-control mb-3"
                            required>
                        <label class="form-label">Department Alias:</label>
                        <input type="text" name="department_alias" id="department-alias" class="form-control mb-3"
                            style="text-transform:uppercase" required>
                        <input type="submit" id="add-form-submit" class="d-none">
                    </form>
                </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <label for="add-form-submit" class="btn btn-primary" id="add-dept">Add</label>
            </div>
        </div>
    </div>
</div>

<!-- Edit Department -->
<div class="modal fade" tabindex="-1" id="edit-modal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Department</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <section>
                    <form class="white" id="update-form">
                        <label class="form-label">Department Name:</label>
                        <input type="text" name="department_name" id="dept-name-edit" class="form-control mb-3"
                            required>
                        <label class="form-label">Department Alias:</label>
                        <input type="text" name="department_alias" id="dept-alias-edit" class="form-control mb-3"
                            style="text-transform:uppercase" required>
                        <input type="text" name="department_alias" id="dept-id-edit" class="d-none" required>
                        <input type="submit" id="update-form-submit" class="d-none">
                    </form>
                </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <label for="update-form-submit" class="btn btn-primary" id="dept-update">Update</label>
            </div>
        </div>
    </div>
</div>

<!-- Add Services -->
<div class="modal fade" tabindex="-1" id="services-modal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Services</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <section>
                    <form class="white" action="" method="POST" id="add-service-form">
                        <label class="form-label">Service Name:</label>
                        <input type="text" name="department_service" id="department-service" class="form-control mb-3"
                            style="text-transform:uppercase" required>
                        <input type="submit" id="add-service-submit" class="d-none">
                    </form>
                </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <label for="add-service-submit" class="btn btn-primary" id="add-services">Add</label>
            </div>
        </div>
    </div>
</div>

<!-- Edit Services -->
<div class="modal fade" tabindex="-1" id="edit-services">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Services</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <section>
                    <form class="white" id="update-service">
                        <label class="form-label">Service Name:</label>
                        <input type="text" name="department_service" id="services-edit" class="form-control mb-3"
                            required>
                        <input type="submit" id="update-service-submit" class="d-none">
                    </form>
                </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <label for="update-service-submit" class="btn btn-primary" id="service-update">Update</label>
            </div>
        </div>
    </div>
</div>

<!-- Department Members -->





<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script>
    let dept_data;
    let dept_table;
    let employee_data;
    let employee_table;
    let deptartment_id;
    let services_id;

    $(document).ready(function () {
        //Data Table
            dept_table = $('#dept-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?= base_url()?>/departments/departmentsDataTable',
            columns: [{
                    data: 'dept_name',
                    render: function (data, type, full) {
                        return data.toLowerCase().split(' ').map(word => {
                            return word.charAt(0).toUpperCase() + word.slice(1);
                        }).join(' ');
                    }
                },
                {
                    data: 'dept_alias',

                },
                {
                    data: 'dept_id',
                    render: function (data, type, row) {
                        console.log(data);

                        console.log(row['deleted_at']);
                        row['deleted_at'] ? 'Archive' : 'Unarchive';
                        console.log(row['deleted_at'] ? 'Unarchive' : 'Archive');
                        return `<div class="dropdown ms-2">
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
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="dept-services"><i class="fa-solid fa-list"></i>Services</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="dept-edit"><i class="bi bi-pencil-square "></i> Edit</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="${row['deleted_at'] ? 'dept-unarchive' : 'dept-archive'}" ><i class="bi bi-archive"></i>${row['deleted_at'] ? 'Unarchive' : 'Archive'}</span>
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


        }).on('xhr.dt', function (e, settings, json, xhr) {
            console.log(json.data);
            dept_data = json.data;

        })
        //add-listener
        $('#add-form').submit(function (e) {
            e.preventDefault();
            const data = {
                'name': $('#department-name').val(),
                'alias': $('#department-alias').val(),
            };
            $.ajax({
                method: "POST",
                url: "departments/addDepartment",
                data: data,
                success: function (response) {
                    reloadDataTable(dept_table);
                    $('#department-modal').modal('hide');
                    $('#department-modal').find('input').val('');
                    successAlert('Success!', 'Department successfully added!', 'success');
                }
            });
        });

        //edit-listener
        $(document).on('click', '#dept-edit', function () {
            const info_modal = bootstrap.Modal.getOrCreateInstance('#edit-modal');
            let dept_id = this.dataset.id;
            $.ajax({
                type: "get",
                url: "<?= base_url()?>/departments/getDepartment/" + dept_id,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    const dept_info = response.data[0];
                    $('#dept-name-edit').val(dept_info.dept_name);
                    $('#dept-alias-edit').val(dept_info.dept_alias);
                    $('#dept-id-edit').val(dept_info.dept_id);
                }
            });
            info_modal.show();
        })


        //update department
        $('#update-form').submit(function (e) {
            e.preventDefault();
            let data = {
                'name_new': $('#dept-name-edit').val(),
                'alias_new': $('#dept-alias-edit').val(),
                'id_dept': $('#dept-id-edit').val(),
            };

            $.ajax({
                method: "POST",
                url: "<?=base_url()?>/departments/updateDepartment/" + $('#dept-id-edit').val(),
                data: data,
                success: function (response) {
                    reloadDataTable(dept_table);
                    $('#edit-modal').modal('hide');
                    successAlert('Success!', 'Department successfully updated!', 'success');

                }
            });
        });
        $(document).on('click', '#dept-archive', function () {
            let dept_id = this.dataset.id;
            confirm('Archive',
                'Are you sure you want to move this to archive?',
                'question',
                '<?=base_url()?>/departments/archiveDepartment/' + dept_id,
                'POST',
                null,
                function () {
                    reloadDataTable(dept_table);
                });
        });
        $('#archive-toggle').on('click', function () {
            console.log(this.checked);
            let archive_span = $('#dept-archive');
            if (this.checked) { //archived
                reloadDataTable(dept_table, '<?= base_url()?>/departments/departmentsDataTableArchive');

            } else { //not archived
                reloadDataTable(dept_table, '<?= base_url()?>/departments/departmentsDataTable');

            }
        });

        $(document).on('click', '#dept-unarchive', function () {
            let dept_id = this.dataset.id;
            confirm(
                'Remove from Archive',
                'Are you sure you want to remove this from archive?',
                'question',
                '<?=base_url()?>/departments/unarchiveDepartment/' + dept_id,
                'POST',
                null,
                function () {
                    reloadDataTable(dept_table);
                });
        });


        service_table = $('#service-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?= base_url()?>/departments/servicesDataTableSelect',
            columns: [
                {
                    data: 'service_name',

                },
                
                {
                    data: 'service_id',
                    render: function (data, type, row) {
                        console.log(data);

                        console.log(row['deleted_at']);
                        row['deleted_at'] ? 'Archive' : 'Unarchive';
                        console.log(row['deleted_at'] ? 'Unarchive' : 'Archive');
                        return `<div class="dropdown ms-2">
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
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="service-edit"><i class="bi bi-pencil-square "></i> Edit</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="${row['deleted_at'] ? 'service-unarchive' : 'service-archive'}" ><i class="bi bi-archive"></i>${row['deleted_at'] ? 'Unarchive' : 'Archive'}</span>
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


        }).on('xhr.dt', function (e, settings, json, xhr) {
            console.log(json.data);
            dept_data = json.data;

        })

    $(document).on('click', '#dept-services', function () { 
        let dept_id = this.dataset.id;
        department_id = dept_id;
        reloadDataTable(service_table, '<?= base_url()?>/departments/servicesDataTableSelect/' + dept_id);

    });



    $('#add-service-form').submit(function (e) {
        let dept_id = department_id
            e.preventDefault();
            const data = {
                'name': $('#department-service').val(),
            };
            $.ajax({
                method: "POST",
                url: "departments/addServices/" + dept_id,
                data: data,
                success: function (response) {
                    reloadDataTable(dept_table);
                    $('#services-modal').modal('hide');
                    $('#services-modal').find('input').val('');
                    successAlert('Success!', 'Service successfully added!', 'success');
                }
            });
        });

    
        $(document).on('click', '#service-edit', function () {
            const serv_modal = bootstrap.Modal.getOrCreateInstance('#edit-services');
            let service_id = this.dataset.id;
            services_id = service_id;
            console.log(service_id);
            $.ajax({
                type: "get",
                url: "<?= base_url()?>/departments/getServices/" + service_id,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    const service_info = response.data[0];
                    $('#services-edit').val(service_info.service_name);
                }
            });
            serv_modal.show();
        })

        $('#update-service').submit(function (e) {
            e.preventDefault();
            let data = {
                'service_name': $('#services-edit').val(),
            };

            $.ajax({
                method: "POST",
                url: "<?=base_url()?>/departments/updateServices/" + services_id,
                data: data,
                success: function (response) {
                    reloadDataTable(service_table);
                    $('#edit-services').modal('hide');
                    successAlert('Success!', 'Service successfully updated!', 'success');

                }
            });
        });

        $(document).on('click', '#service-archive', function () {
            let service_id = this.dataset.id;
            confirm('Archive',
                'Are you sure you want to move this service to archive?',
                'question',
                '<?=base_url()?>/departments/archiveService/' + service_id,
                'POST',
                null,
                function () {
                    reloadDataTable(service_table);
                });
        });

        $('#service-toggle').on('click', function () {
            console.log(this.checked);
            let archive_span = $('#service-archive');
            if (this.checked) { //archived
                reloadDataTable(service_table, '<?= base_url()?>/departments/servicesDataTableArchive/' + department_id);

            } else { //not archived
                reloadDataTable(service_table, '<?= base_url()?>/departments/servicesDataTableSelect/' + department_id);

            }
        });

        $(document).on('click', '#service-unarchive', function () {
            let serv_id = this.dataset.id;
            confirm(
                'Remove from Archive',
                'Are you sure you want to remove this from archive?',
                'question',
                '<?=base_url()?>/departments/unarchiveService/' + serv_id,
                'POST',
                null,
                function () {
                    reloadDataTable(service_table);
                });
        });
    

        




    });
</script>
<?= $this->endSection(); ?>