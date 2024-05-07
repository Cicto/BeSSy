<?= $this->extend('layouts/nonAdminContainer'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold flex-column justify-content-center my-0">Welcome, <?=$userInformation->firstname?> <?=$userInformation->lastname?></h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            
            <!-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">New System</a> -->
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid mb-5">
    <div id="kt_app_content_container" class="app-container container-fluid h-100">
        <div class="row gy-6">
            <div class="col-lg-4">
                <div class="card h-100 bg-primary">
                    <div class="card-body px-1 pb-0 d-flex flex-lg-column justify-content-between">
                        <div class="flex-grow-1">
                            <h1 class="text-light px-5 mb-4">Introducing <b> BeSSY! </b> </h1>
                            <p class="px-5 text-gray-200 mb-10 fw-semibold lh-sm text-end">Your Baliwag City Hall online companion</p>
                        </div>
                        <div class="d-flex justify-content-center w-50 w-md-100">
                            <img src="<?=base_url()?>/public/assets/media/illustrations/sigma-1/8.png" alt="Bessy" class="img-fluid w-75 w-lg-75 theme-light-show">
                            <img src="<?=base_url()?>/public/assets/media/illustrations/sigma-1/8-dark.png" alt="Bessy" class="img-fluid w-75 w-lg-75 theme-dark-show">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card h-100 hm-100px">
                    <div class="card-body d-flex align-items-center p-0 rounded overflow-hidden">
                        <div class="tns position-relative rounded overflow-hidden" id="tns-container" style="direction: ltr;">
                            <div class="" style="backdrop-filter: blur(8px);" data-tns="true" data-tns-autoplay="true" data-tns-nav="false" data-tns-nav-position="bottom" data-tns-prev-button="#slider-prev" data-tns-next-button="#slider-next" data-tns-mouse-drag="true" data-tns-controls="true">
                                <div class="rounded-2 overflow-hidden" style="background-image: url('<?=base_url()?>/public/assets/media/stock/900x600/51.jpg'); background-size: cover;">
                                    <div class="w-100 h-100 text-center d-flex align-items-center justify-content-center" style="backdrop-filter: blur(10px);">
                                        <img src="<?=base_url()?>/public/assets/media/stock/900x600/51.jpg" class="mw-100" alt="" />
                                    </div>
                                </div>
                                <div class="rounded-2 overflow-hidden" style="background-image: url('<?=base_url()?>/public/assets/media/stock/1600x800/img-2.jpg'); background-size: cover;">
                                    <div class="w-100 h-100 text-center d-flex align-items-center justify-content-center" style="backdrop-filter: blur(10px);">
                                        <img src="<?=base_url()?>/public/assets/media/stock/1600x800/img-2.jpg" class="mw-100" alt="" />
                                    </div>
                                </div>
                                <div class="rounded-2 overflow-hidden" style="background-image: url('<?=base_url()?>/public/assets/media/stock/600x400/img-5.jpg'); background-size: cover;">
                                    <div class="w-100 h-100 text-center d-flex align-items-center justify-content-center" style="backdrop-filter: blur(10px);">
                                        <img src="<?=base_url()?>/public/assets/media/stock/600x400/img-5.jpg" class="mw-100" alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="position-absolute d-flex justify-content-center align-items-center px-5 h-100 top-0 start-0">
                                <button class="btn btn-icon btn-active-color-light" id="slider-prev" aria-controls="tns1" tabindex="-1" data-controls="prev">
                                    <span class="svg-icon svg-icon-gray-200 svg-icon-3x">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(-1);">
                                            <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                            <div class="position-absolute d-flex justify-content-center align-items-center px-5 h-100 top-0 end-0">
                                <button class="btn btn-icon btn-active-color-light" id="slider-next" aria-controls="tns1" tabindex="-1" data-controls="prev">
                                    <span class="svg-icon svg-icon-gray-200 svg-icon-3x">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-2" hidden>
                <div class="card h-100" style="
                    background-position: 100% 50%;
                    background-image: url('<?=base_url()?>/public/assets/media/stock/900x600/42.png');
                    background-size: cover;
                ">
                    <div class="card-body d-flex flex-column justify-content-evenly">
                        <div class="bg-gray-200 p-2 rounded-circle position-relative mb-5">
                            <img src="<?=base_url()?>/public/assets/media/logos/baliwag-city-logo.png" alt="Baliwag City Logo" class="img-fluid">
                            <div class="position-absolute bottom-0 end-0 bg-gray-200 m-2 rounded-circle p-1">
                                <div class="bg-success p-2 rounded-circle"></div>
                            </div>
                        </div>

                        <h3>
                            Baliwag City Hall is currently
                            <span class="d-inline-block position-relative ">
                                <span class="d-inline-block mb-1 fw-bold text-success">
                                    online.
                                </span>

                                <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                            </span>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-12" hidden>
                <div class="card">
                    <div class="card-body">
                        <h1>Need Help?</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-content border-gray-900 my-15">
            <h1 class="text-nowrap text-gray-800">Baliwag City Hall Offices</h1>
        </div>
        <div class="row gy-5 justify-content-center">
            <?php if($activeDepartments): ?>
                <?php foreach($activeDepartments as $department): ?>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 mb-3">
                        <div class="card h-100 rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="illustration min-h-200px d-none d-md-flex align-items-center justify-content-center">
                                    <div class="min-h-150px min-w-150px bg-gray-200 rounded-circle"></div>
                                    <div class="symbol symbol-50px d-flex flex-center position-absolute">
                                        <span class="svg-icon svg-icon-muted svg-icon-5hx svg-icon-light">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="h-100 flex-grow-1 d-flex flex-column justify-content-between">
                                    <div class="">
                                        <h3 class="text-center text-primary"><?= $department->dept_alias?></h3>
                                        <p class="text-center fw-semibold text-gray-800"><?= $department->dept_name?></p>
                                    </div>
                                    <div class="text-center pt-5">
                                        <a href="<?= base_url()?>/services/departmentServices/<?= $department->dept_id?>" class="btn btn-primary">View Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 mb-3" hidden>
                        <a href="<?= base_url()?>/services/departmentServices/<?= $department->dept_id?>">
                            <div class = "p-5 rounded bg-city-blue mb-3 hover-elevate-up h-100 ">
                                <div class = "d-flex flex-row w-100 ">
                                    <div class="symbol symbol-50px me-3 d-flex flex-center">
                                        <span class="svg-icon svg-icon-muted svg-icon-3hx svg-icon-light">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <span class = "d-flex flex-column align-self-end overflow-hidden w-100">
                                        <span class = "fw-bold fs-1 text-white"><?= $department->dept_alias?></span>
                                        <span class = "fs-8 text-white" style = ""><?= $department->dept_name?></span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script>
    $(function () {
        
    });
</script>
<?= $this->endSection(); ?>