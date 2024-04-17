<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-100 w-lg-500px p-10">
                
                    <form action="<?= route_to('forgot') ?>" method="post" class = "form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_in_form">
                        <?= csrf_field() ?>
                        <div class="">
                            <a href="<?= base_url()?>" class="">
                                <img alt="Logo" src="<?= base_url()?>/public/assets/media/logos/bessy-mini-logo.png" class="h-60px h-lg-100px h-l-75px mb-5">
                            </a>
                        </div>
                        <h1 class="text-gray-800 fw-bolder mb-8" style="font-size: 30px">Forgot Your Password?</h1>
                        
                        
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <p class="text-gray-700"><?=lang('Auth.enterEmailForInstructions')?></p>

                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email" class="form-label fs-7 text-gray-600"><?=lang('Auth.emailAddress')?></label>
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block w-100"><?=lang('Auth.sendInstructions')?></button>

                    </form>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 m-5 rounded-4 bg-primary" 
            style=" -background: rgb(23,157,73);
                    -background: linear-gradient(135deg, rgba(23,157,73,1) 0%, rgba(32,53,106,1) 100%); 
                    background-image: url('<?=base_url()?>/public/assets/media/misc/auth-bg.png');
                ">
            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                <a href="#" class="mb-0 text-center">
                    <img alt="Logo" src="<?= base_url()?>/public/assets/media/logos/bessy-mini-logo.png" class="h-60px h-lg-300px" style="filter: brightness(200);">
                </a>
                <h1 class="d-none d-lg-block text-white fw-semibold text-center display-5 mb-7">Baliwag e-Services System</h1>
                <div class="d-none d-lg-block w-75 mx-auto text-white fs-base text-center">
                    Baliwag e-Services System is a user-friendly system that allows individuals to engage in real-time 
                    conversations with dedicated government employees. Whether citizens have inquiries about 
                    existing services, need assistance in finding city informations, or wish to get in touch of city hall departments, 
                    BESSY streamlines the entire experience for you.
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('javascript'); ?>

<script>

<?= $this->endSection() ?>
