<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-100 w-lg-500px p-10">
                
                    <form action="<?= base_url().route_to('register') ?>" method="post" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" id="sign-up-form">
                        <?= csrf_field() ?>
                        <div class=""> 
                            <a href="<?= base_url()?>" class="">
                                <img alt="Logo" src="<?= base_url()?>/public/assets/media/logos/bessy-mini-logo.png" class="h-60px h-lg-100px h-l-75px mb-5">
                            </a>
                        </div>
                        <div class="text-left mb-10">
                            <h1 class="text-gray-800 fw-bolder" style = "font-size: 30px">Sign up</h1>
                            <div class="text-gray-800 fw-semibold fs-6 mb-8">Baliwag e-Services System</div>
                        </div>
   
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <div class="fv-row mb-5 fv-plugins-icon-container">
                            <label for="login" class = "form-label fs-7"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" required>
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="fv-row mb-5 fv-plugins-icon-container">
                            <label for="login" class = "form-label fs-7"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-5 fv-plugins-icon-container" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <label for="login" class = "form-label fs-7"><?=lang('Auth.password')?></label>
                                    <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off" required>
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 pt-8" data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2 d-none"></i>
                                        <i class="bi bi-eye fs-2"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <small class="text-muted form-text">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</small>
                            <!--end::Hint-->
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        <!--end::Input group=-->
                        <!--end::Input group=-->
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <!--begin::Repeat Password-->
                            <label for="pass_confirm" class = "form-label fs-7"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off" required>
                            
                            <!--end::Repeat Password-->
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        <!--end::Input group=-->
                        <!--begin::Accept-->
                        <div class="form-check d-flex align-items-center justify-content-center mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="terms-and-condition-checkbox" required>
                            <label class="form-check-label form-text text-dark ms-2 mt-0 small" for="terms-and-condition-checkbox">
                                I agree with the <a href="#" data-bs-toggle="modal" data-bs-target="#terms-and-conditions-modal">Terms and Conditions</a>.
                            </label>
                        </div>
                        <!--end::Accept-->
                        <!--begin::Submit button-->
                        <div class="d-grid mb-5">
                            <button type="submit" class="btn btn-primary btn-block "><?=lang('Auth.register')?></button>
                        </div>
                        <!--end::Submit button-->
                        <!--begin::Sign up-->
                        <div class="text-gray-500 text-left fw-semibold fs-7">Already have an account?
                            <a href="<?=base_url()?>/login" class="link-primary fw-semibold">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="vh-100 d-flex flex-column w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 ">
            <div class="position-fixed h-100 p-5">
                <div class="d-none d-lg-flex flex-lg-row-fluid rounded-4 bg-primary h-100" 
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
    </div>
</div>

<div class="modal fade" tabindex="-1" id="terms-and-conditions-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms and Conditions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
            include 'terms_and_conditions.php';
        ?>
      </div>
      <div class="modal-footer text-end">
        <button type="button" class="mx-auto btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('javascript'); ?>
<script>
    $(function () {
    });
</script>
<?= $this->endSection() ?>