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
                        <table class = "table w-100" >
                            <thead>
                                <tr>
                                    <th class = "fw-bold fs-2 text-gray-700">Inbox</th>
                                </tr>
                            </thead>
                            <tbody class = "p-3">
                                <tr class = "individual-chat-container" data-status = "active" >
                                    <td class = "border-bottom rounded p-5 mb-1 d-flex flex-stack" >
                                        <div class = "d-flex flex-row ">
                                            <img src="<?= base_url()?>/public/assets/media/avatars/default-avatar.png" class="w-60px ms-n1 border border-gray-600 me-2 rounded " alt="" style = "white-space: nowrap; text-overflow: ellipsis;">
                                            <span class = "d-flex flex-column align-self-end overflow-hidden">
                                                <span class = "fw-bold fs-2 "> Egie Santos</span>
                                                <span class = "fs-8 w-50" style = "white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"> Lorem ipsum dolor sit amet conseelit minima ea.</span>
                                            </span>
                                        </div>
                                        <div class = "d-flex ">
                                            <span class = "d-flex flex-column align-self-end overflow-hidden align-self-end text-end">
                                                <span class = "fw-bold fs-7 "> 12:00PM</span>
                                                <span class = "fw-semibold fs-8 "> 2024-01-01</span>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class = "" data-status = "inactive">
                                    <td class = "border-bottom rounded p-5 mb-1 d-flex flex-stack" >
                                        <div class = "d-flex flex-row ">
                                            <img src="<?= base_url()?>/public/assets/media/avatars/default-avatar.png" class="w-60px ms-n1 border border-gray-600 me-2 rounded " alt="" style = "white-space: nowrap; text-overflow: ellipsis;">
                                            <span class = "d-flex flex-column align-self-end overflow-hidden">
                                                <span class = "fw-bold fs-2 "> Bianca Redge  Santos</span>
                                                <span class = "fs-8 w-50" style = "white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"> Lorem ipsum dolor sit amet conseelit minima ea.</span>
                                            </span>
                                        </div>
                                        <div class = "d-flex ">
                                            <span class = "d-flex flex-column align-self-end overflow-hidden align-self-end text-end">
                                                <span class = "fw-bold fs-7 "> 12:00PM</span>
                                                <span class = "fw-semibold fs-8 "> 2024-01-01</span>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class = "" data-status = "inactive">
                                    <td class = "border-bottom rounded p-5 mb-1 d-flex flex-stack" >
                                        <div class = "d-flex flex-row ">
                                            <img src="<?= base_url()?>/public/assets/media/avatars/default-avatar.png" class="w-60px ms-n1 border border-gray-600 me-2 rounded " alt="" style = "white-space: nowrap; text-overflow: ellipsis;">
                                            <span class = "d-flex flex-column align-self-end overflow-hidden">
                                                <span class = "fw-bold fs-2 "> Jayson Kalbo Santos</span>
                                                <span class = "fs-8 w-50" style = "white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"> Lorem ipsum dolor sit amet conseelit minima ea.</span>
                                            </span>
                                        </div>
                                        <div class = "d-flex ">
                                            <span class = "d-flex flex-column align-self-end overflow-hidden align-self-end text-end">
                                                <span class = "fw-bold fs-7 "> 12:00PM</span>
                                                <span class = "fw-semibold fs-8 "> 2024-01-01</span>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <?= $this->include('partials/chatBox');?>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chat-modal">
    Launch demo modal
</button>
<div class="modal fade bg-body" tabindex="-1" id="chat-modal">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <div class="modal-title">
                    <div class = "d-flex flex-row">
                        <div class = "symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="<?= base_url()?>/public/assets/media/avatars/default-avatar.png" class="w-100px ms-n1 border me-2 rounded" alt="">
                            <!-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div> -->
                        </div>
                        <span class = "d-flex flex-column align-self-end">
                            <span class = "fw-bold fs-2"> Egie Santos</span>
                            <span class = "fs-8 text-gray-600"> Client</span>
                        </span>
                    </div>
                </div>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-color-danger ms-2 d-flex align-self-start" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body" id = "chat-body">
                <div class="d-flex justify-content-start mb-10">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol symbol-40px">
                                <img alt="Pic" src="<?= base_url()?>/public/assets/media/avatars/300-25.jpg">
                            </div>
                            <div class="ms-3 d-flex flex-column text-start">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-8 mb-1">1 Hour</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-gray-500 text-white fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-10">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3 d-flex flex-column text-end">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                <span class="text-muted fs-8 mb-1">2 Hours</span>
                                
                            </div>
                            <div class="symbol symbol-40px">
                                <img alt="Pic" src="<?= base_url()?>/public/assets/media/avatars/300-1.jpg">
                            </div>
                        </div>
                        <div class="p-5 rounded bg-primary text-white fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0 d-flex flex-start">
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-kt-initialized="1">
                        <i class="bi bi-paperclip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-kt-initialized="1">
                        <i class="bi bi-upload fs-3"></i>
                    </button>
                </div>
                <div class="input-group input-group-solid">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                    <span class="input-group-text border-0">
                        <button class = "btn btn-link btn-color-primary btn-active-color-primary p-0 m-0">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx" >
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style = "rotate: 45deg;">
                                    <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor"/>
                                    <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
      
<?= $this->endSection(); ?>

<?= $this->section('css'); ?>
<style>
    tr[data-status = "active"] td{
        background-color: var(--bs-primary);
        text: var(--bs-white);
    }

    tr[data-status = "inactive"] td:hover{
        background-color: var(--kt-primary-light);
    }

</style>
    
<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script>
    $(document).ready(function(){
        $(document).on('click', '.individual-chat-container', function(){

            $('#chat-modal').modal('show');
        });
    })
</script>
      
<?= $this->endSection(); ?>