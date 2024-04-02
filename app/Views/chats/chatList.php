<?= $this->extend('layouts/nonAdminContainer'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?= $title?></h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted"><?= $title?></li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">New System</a> -->
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid bg-transparent">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <table class = "table table-row-dashed align-middle gs-0 gy-3 my-0">
                            <thead>
                                <tr>
                                    <th class = "fw-bold fs-3">Inbox</th>
                                </tr>
                            </thead>
                            <tbody class = "p-3">
                                <tr class = "rounded">
                                    <td class = "border p-5 mb-5 rounded">asdas</td>
                                </tr>
                                <tr class = "">
                                    <td class = "border p-5 mb-5">asdas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>