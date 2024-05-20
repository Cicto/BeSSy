<?= $userInformation->role == 5 ? $this->extend('layouts/nonAdminContainer') : $this->extend('layouts/main'); ?>
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
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?= $title ?></h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted"><?= $title ?></li>
            </ul>
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
                                <img src="<?=base_url()?>/public/assets/media/avatars/<?=$userInformation->user_photo ? $userInformation->user_photo : "default-avatar.png"?>?<?=date('c')?>" class="img-fluid rounded-4 user-avatar" id="user-photo-preview" alt="User Photo">
                            </label>
                            <input type="file" id="user-photo-input" accept="image/*" hidden>
                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="d-flex flex-column gap-5">
                                <button class="btn btn-light-danger w-100" id="change-password-button"><i class="fas fa-unlock-alt"></i> Change Password</button>
                                <button class="btn btn-light btn-color-gray-600 w-100" id="deactivate-account-button"><i class="fas fa-user-slash"></i> Deactivate Account</button>
                            </div>
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
                                
                                <input type="number" class="d-none" id="user_id" name="user_id" value="<?=$userInformation->user_id?>">
                                
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="mb-8 text-left">
                                            <h3 class="mb-3">Account Information</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-1 required">Email</label>
                                            <input type="email" class="form-control form-control-solid w-100" placeholder="Enter Email" name="email" id="email" value="<?=$userInformation->email?>" required>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                        <div class="w-100 mb-5">
                                            <div class="d-flex justify-content-between">
                                                <label class="fs-6 fw-semibold mb-1 required">Username</label>
                                                <div class="px-2" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Profile username only allows alphanumeric characters, periods and underscores"><i class="fas fa-info-circle"></i></div>
                                            </div>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Username" name="username" id="username" value="<?=$userInformation->username?>" required>
                                            </div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <?php if($userInformation->role == 1):?>
                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-1 required">Department</label>
                                            <select name="dept_id" id="dept_id" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a Department" required>
                                                <option></option>
                                                <?php foreach ($departments as $department) : ?>
                                                    <option value="<?= $department->dept_id ?>" <?= $department->dept_id == $userInformation->dept_id ? "selected" : "" ?>><?= $department->dept_name ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>

                                        <?php endif;?>

                                    </div>
                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="mb-8 text-left">
                                            <h3 class="mb-3">Personal Information</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-2 required">First name</label>
                                            <input type="text" class="form-control form-control-solid" id="firstname" name="firstname" value="<?=$userInformation->firstname?>" placeholder="Enter First name" required>
                                        </div>
                                        <div class="w-100 mb-5">
                                            <div class="d-flex justify-content-between">
                                                <label class="fs-6 fw-semibold mb-2 optional">Middle name</label>
                                                <div class="px-2" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="If you don't have a middle name, leave this field blank."><i class="fas fa-info-circle"></i></div>
                                            </div>
                                            <input type="text" class="form-control form-control-solid" id="middlename" name="middlename" value="<?=$userInformation->middlename?>" placeholder="Enter Middle name">
                                        </div>
                                        <div class="row">
                                            <div class="col-8 mb-5">
                                                <label class="fs-6 fw-semibold mb-2 required">Last name</label>
                                                <input type="text" class="form-control form-control-solid" id="lastname" name="lastname" value="<?=$userInformation->lastname?>" placeholder="Enter Last name" required>
                                            </div>
                                            <div class="col-4 mb-5">
                                                <label class="fs-6 fw-semibold mb-2">Suffix</label>
                                                <input type="text" class="form-control form-control-solid" id="suffix" name="suffix" value="<?=$userInformation->suffix?>" placeholder="Jr., Sr., etc...">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-5">
                                                <label class="optional fs-6 fw-semibold mb-2 required">Birthdate</label>
                                                <input type="date" class="form-control form-control-solid" id="birthdate" name="birthdate" value="<?=$userInformation->birthdate?>" placeholder="Enter Birthdate" required> 
                                            </div>
                                            <div class="col-6 mb-5">
                                                <label class="optional fs-6 fw-semibold mb-2 required">Contact Number</label>
                                                <input type="text" class="form-control form-control-solid" id="contact-number" name="contact_number" value="<?=$userInformation->contact_number?>" placeholder="09__-___-____"> 
                                            </div>
                                        </div>
                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-2 required">Barangay</label>
                                            <select class="form-select form-select-solid" id="barangay" name="barangay" data-control="select2" data-placeholder="Select Barangay" required>
                                                <option></option>
                                                <?php if($barangays): foreach ($barangays as $key => $barangay): ?>
                                                <option value="<?=$barangay->brgyDesc?>" <?= $barangay->brgyDesc == $userInformation->barangay ? "selected" : "" ?> ><?=$barangay->brgyDesc?></option>
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
                                        <button type="reset" class="btn btn-light-danger w-lg-200px me-3" id="cancel-user-info-form">Cancel</button>
                                        <button type="submit" class="btn btn-primary flex-grow-1">Save Changes</button>
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

<div class="modal fade" id="change-password-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="current-password-section">
                    <label class="fs-6 fw-semibold mb-1 required">Current Password</label>
                    <div class="input-group input-group-solid">
                        <input type="password" class="form-control form-control-solid" placeholder="Password" id="current-password">
                            <span class="input-group-text pointer" data-my-toggle="password" data-password-target="#current-password"><i class="fas fa-eye"></i></span>
                    </div>
                    <input type="checkbox" id="is-authenticated" hidden readonly>
                </div>
                
                <form id="change-password-form" style="display: none;">
                    <div class="mb-5">
                        <label class="fs-6 fw-semibold mb-1 required">New Password</label>
                        <div class="input-group input-group-solid">
                            <input type="password" class="form-control form-control-solid" placeholder="Password" name="new_password" id="new-password">
                            <span class="input-group-text pointer" data-my-toggle="password" data-password-target="#new-password"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="fs-6 fw-semibold mb-1 required">Repeat Password</label>
                        <div class="input-group input-group-solid">
                            <input type="password" class="form-control form-control-solid" placeholder="Password" name="repeat_password" id="repeat-password">
                            <span class="input-group-text pointer" data-my-toggle="password" data-password-target="#repeat-password"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <input type="submit" value="submit" id="change-password-form-submit" hidden>
                </form>

                <div class="alert alert-danger align-items-center mt-5 mb-0" id="change-password-error-container" style="display: none;">
                    <div class="d-flex">
                        <i class="fas fa-exclamation-triangle fs-1 text-danger"></i>
                        <div class="px-3"><b>Error: </b> <span id="change-password-error">Incorrect password</span></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <label for="change-password-form-submit" class="btn btn-primary flex-grow-1">Submit</label>
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

        $("#username").on("input", function(){
            const userInput = this.value;
            const regex = /^[a-zA-Z0-9._]*$/;

            if (!regex.test(userInput)) {
                event.target.value = userInput.replace(/[^a-zA-Z0-9._]/g, '');
            }
        });

        Inputmask({
            "mask" : "\\0\\999-999-9999"
        }).mask("#contact-number");

        $("#user-info-form").submit(function (e) { 
            e.preventDefault();
            const form_data = $(this).serializeArray();

            form_data.push({name: "role", value: <?=$userInformation->role?>});
            form_data.push({name: "dept_id", value: <?=$userInformation->dept_id?>});

            ajaxRequest(
                "<?=base_url()?>/users/updateUser",
                "POST",
                form_data,
                function(data){
                    if(data.error){ errorAlert("Error", data.message); return; }
                    successAlert("Success", "Profile successfully updated");
                }
            )

        });
        
        $("#cancel-user-info-form").click(function(){
            history.back();
        })
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
                const file = new File([blob], "<?=$userInformation->username?>.png", {type: "image/png"});
                const form_data = new FormData();
                form_data.append("file", file); 

                $.ajax({
                    url : "<?=base_url()?>/users/uploadUserPhoto/<?=$userInformation->user_id?>",
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
        
        // Change Password
        const change_password_modal = bootstrap.Modal.getOrCreateInstance("#change-password-modal");

        $("#change-password-modal").on("hidden.bs.modal", function(){
            $("#change-password-error-container").hide();
            $(`label[for="change-password-form-submit"]`).text("Authenticate");
            $("#current-password").val('');
            $("#new-password").val('');
            $("#repeat-password").val('');
            $("#is-authenticated").prop("checked", false)
        })

        $("#change-password-modal").on("input", `[type="password"]`, function(){
            $("#change-password-error-container").hide()
        })

        $(`[data-my-toggle="password"]`).click(function(){
            const password_field = $(this.dataset.passwordTarget);
            const is_visible = password_field.attr("type") == "text";
            $(this).find(".fas").toggleClass(`fa-eye fa-eye-slash`);
            if(is_visible){
                password_field.attr("type", "password");
            }else{
                password_field.attr("type", "text")
            }
        })
        
        $("#change-password-button").click(function(){
            change_password_modal.show()
            $(`label[for="change-password-form-submit"]`).text("Authenticate");
        })
        
        $("#change-password-form").submit(function (e) { 
            e.preventDefault();
            if(!$("#is-authenticated").prop("checked")){
                if(!$("#current-password").val()){
                    $("#change-password-error-container").show()
                    $("#change-password-error").text("No password entered")
                    return;
                }
                ajaxRequest(
                    "<?=base_url()?>/users/authenticateUser",
                    "POST",
                    [{  name: "password", value: $("#current-password").val() }],
                    data => {
                        if(data.error){
                            $("#change-password-error-container").show()
                            $("#change-password-error").text(data.result)
                            return;
                        }
                        $("#current-password-section").slideUp(400, function(){
                            $("#change-password-form").slideDown()
                        })
                        $(`label[for="change-password-form-submit"]`).text("Change Password");
                        $("#is-authenticated").prop("checked", true);
                    }
                )
            }else{
                const new_password = $("#new-password").val();
                const repeat_password = $("#repeat-password").val();

                if(new_password.length < 8){
                    $("#change-password-error-container").show();
                    $("#change-password-error").text("Password must be at least 8 characters");
                    return;
                }

                if(new_password !== repeat_password){
                    $("#change-password-error-container").show();
                    $("#change-password-error").text("Entered passwords do not match");
                    return;
                }

                ajaxRequest(
                    "<?=base_url()?>/users/updateUserPassword",
                    "POST",
                    $(this).serialize(),
                    data => {
                        if(data.error){
                            $("#change-password-error-container").show()
                            $("#change-password-error").text(data.message)
                            return;
                        }
                        successAlert("Success", "Password successfully updated");

                        $("#change-password-form").slideUp(400, function(){
                            $("#current-password-section").slideDown()
                        })

                        $(`label[for="change-password-form-submit"]`).text("Authenticate");
                        change_password_modal.hide()
                    }
                )
            }
        });

        // Deactivate Account
        $("#deactivate-account-button").click(function(){
            confirm(
                "Caution", 
                "You are about to deactivate this account. Are you sure you would like to proceed?", 
                "warning", 
                "<?=base_url()?>/users/deactivateUser", 
                "POST", 
                null, 
                data => {
                    if(data.error){ errorAlert("Error", data.message)}
                    successAlert("Success", "Account successfully deactivated", "success", ()=>{
                        window.location.replace("<?=base_url()?>/logout");
                    })
                }
            )
        })
    });
</script>
<?= $this->endSection(); ?>
