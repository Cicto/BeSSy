<?php
    
?>

<?= $this->extend('layouts/emptyMain'); ?>
<?= $this->section('css'); ?>
<style>
    #user-photo-preview{
        opacity: 1;
        transition: 0.1s;
    }

    label[for="user-photo-input"]:hover #user-photo-preview{
        opacity: 0.5;
    }

    .cropper-container{
        height: 50vh !important;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid">
        <div class="bg-primary rounded border border-primary" style="overflow: hidden;">
            <div class="row m-0">
                <div class="col-md-10 p-5 d-flex flex-column justify-content-center">
                    <h1 class="text-light">Welcome to BESSY!</h1>
                    <p class="text-light ps-5">
                        Before you can access the online services of BESSY, please ensure you have filled out the required personal information form. <br>
                        This step is essential to provide you with a personalized and secure experience.
                    </p>
                </div>
                <div class="col-2 d-none d-md-block">
                    <img src="<?=base_url()?>/public/assets/media/illustrations/sigma-1/16.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-3 d-flex flex-column gap-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <label for="user-photo-input" class="d-inline-block p-2 rounded-4 bg-light pointer">
                                <img src="<?=base_url()?>/public/assets/media/avatars/default-avatar.png?<?=date('c')?>" class="img-fluid rounded-4 user-avatar" id="user-photo-preview" alt="User Photo">
                            </label>
                            <input type="file" id="user-photo-input" accept="image/*" hidden>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form role="form" id="user-info-form" class="form" method="POST">
                                <div class="mb-13 text-center">
                                    <h1 class="mb-3 modal-title"><?= $title ?></h1>
                                    <div class="text-muted fw-semibold fs-5 ">If you are experiencing problem, please contact
                                    <a href="#" class="fw-bold link-primary">System Administrator</a>.</div>
                                </div>
                                
                                <div class="separator separator-dashed my-10"></div>
                                
                                <input type="number" class="d-none" id="user_id" name="user_id" value="">

                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="mb-8 text-left">
                                            <h3 class="mb-3">Personal Information</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-2 required">First name</label>
                                            <input type="text" class="form-control form-control-solid" id="firstname" name="firstname" value="" placeholder="Enter First name" required>
                                        </div>
                                        <div class="w-100 mb-5">
                                            <div class="d-flex justify-content-between">
                                                <label class="fs-6 fw-semibold mb-2 optional">Middle name</label>
                                                <div class="px-2" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="If you don't have a middle name, leave this field blank."><i class="fas fa-info-circle"></i></div>
                                            </div>
                                            <input type="text" class="form-control form-control-solid" id="middlename" name="middlename" value="" placeholder="Enter Middle name">
                                        </div>
                                        <div class="row">
                                            <div class="col-8 mb-5">
                                                <label class="fs-6 fw-semibold mb-2 required">Last name</label>
                                                <input type="text" class="form-control form-control-solid" id="lastname" name="lastname" value="" placeholder="Enter Last name" required>
                                            </div>
                                            <div class="col-4 mb-5">
                                                <label class="fs-6 fw-semibold mb-2">Suffix</label>
                                                <input type="text" class="form-control form-control-solid" id="suffix" name="suffix" value="" placeholder="Jr., Sr., etc...">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-5">
                                                <label class="optional fs-6 fw-semibold mb-2 required">Birthdate</label>
                                                <input type="date" class="form-control form-control-solid" id="birthdate" name="birthdate" value="" placeholder="Enter Birthdate" required> 
                                            </div>
                                            <div class="col-6 mb-5">
                                                <label class="optional fs-6 fw-semibold mb-2 required">Contact Number</label>
                                                <input type="text" class="form-control form-control-solid" id="contact-number" name="contact_number" value="" placeholder="09__-___-____"> 
                                            </div>
                                        </div>
                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-2 required">Barangay</label>
                                            <select class="form-select form-select-solid" id="barangay" name="barangay" data-control="select2" data-placeholder="Select Barangay" required>
                                                <option></option>
                                                <?php if($barangays): foreach ($barangays as $key => $barangay): ?>
                                                <option value="<?=$barangay->brgyDesc?>"><?=$barangay->brgyDesc?></option>
                                                <?php endforeach; endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-10">
                                    <div class="col-md-3">
                                        <div class="mb-8 text-left">
                                        </div>
                                    </div>
                                    <div class="col-md-9 d-flex">
                                        <button type="reset" class="btn btn-light-danger w-lg-200px me-3">Reset</button>
                                        <button type="submit" class="btn btn-primary flex-grow-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cropper-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Image Cropper</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="rounded overflow-hidden">
                    <img id="cropper-image" class="w-100 bg-danger">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="cropper-modal-upload">Upload photo</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script>
    $(function () {
        // User Info Form
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

        Inputmask({
            "mask" : "\\0\\999-999-9999"
        }).mask("#contact-number");

        $("#user-info-form").submit(function (e) { 
            e.preventDefault();
            const form_data = $(this).serializeArray();

            form_data.push({name: "role", value: 5});
            form_data.push({name: "dept_id", value: 0});

            ajaxRequest(
                "<?=base_url()?>/users/addUserInfo/<?=$user_id?>",
                "POST",
                form_data,
                function(data){
                    console.log(data)
                    if(data.error){ errorAlert("Error", data.message); return; }
                    successAlert("Success", "Profile successfully updated", "success", function(){
                        window.location.replace("<?=base_url()?>/");
                    });
                }
            )

        });
        
        // User Photo
        const cropper_modal = bootstrap.Modal.getOrCreateInstance("#cropper-modal");
        let cropper;

        $("#user-photo-input").change(function(){
            cropper_modal.hide();
            const image = document.querySelector("#cropper-image");
            const [file] = this.files
            console.log(file)
            if (file) {
                image.src = URL.createObjectURL(file)
            }

            cropper = new Cropper(image, {
                aspectRatio: 1 / 1,
                dragMode: "move",
                viewMode: 1,
                background: false,
                minContainerWidth: 450,
                minContainerHeight: 420,
                cropBoxMovable: false,
                cropBoxResizable: false,
            });
            cropper.reset()
            cropper_modal.show();
            
        })

        $("#cropper-modal").on("hidden.bs.modal", function(){
            cropper.destroy()
        })
        
        $("#cropper-modal-upload").click(function(){
            const cropped_canvas = cropper.getCroppedCanvas();
            const canvas_blob = cropped_canvas.toBlob(function(blob){
                const file = new File([blob], ".png", {type: "image/png"});
                const form_data = new FormData();
                form_data.append("file", file); 

                $.ajax({
                    url : "<?=base_url()?>/users/uploadUserPhoto/",
                    type: "POST",
                    data : form_data,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success:function(data, textStatus, jqXHR){
                        console.log(data)
                        cropper_modal.hide();

                        if(data.error){ errorAlert("Error", data.message); return; }

                        successAlert();
                        $(".user-avatar").attr("src", `<?=base_url()?>/public/assets/media/avatars/${data.file_name}?${new Date()}`);
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        errorAlert();
                    }
                });
            });
        })
        
    });
</script>
<?= $this->endSection(); ?>
