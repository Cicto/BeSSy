<?= $this->extend('layouts/nonAdminContainer'); ?>
<?= $this->section('content'); ?>
<?php
$is_viewing = isset($transaction_info);
?>
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

        <!-- START OF FORM -->
        <div class="row m-md-0">
            <div class="card col-lg-8 col-md-8 my-5 p-5 p-md-10 border border-2 rounded">
                <div class="form-container">
                    <!-- here -->
                    <div class="py-2">
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <span class="svg-icon svg-icon-primary svg-icon-2hx">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                            <div class="ms-5">
                                <!--=============================================== HEADER TITLE ===============================================-->
                                <h1 class="">Request for Certification of Birth</h1>
                                <span class="form-label text-muted">
                                    Local Civil Registrar
                                </span>
                                <!--=========================================== END OF HEADER TITLE ============================================-->
                            </div>
                        </div>
                        <hr class="mb-0">
                    </div>

                    <form id="bc-form" class="mt-3">

                        <!--=============================================== PUT YOUR CODE INSIDE THIS =========================================-->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>

                            <div class="col-lg-8">
                                <div class="row">

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="first_name" value="<?= $is_viewing ? $transaction_info->first_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="first-name" class="form-control form-control-lg form-control-solid" placeholder="First Name" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="middle_name" value="<?= $is_viewing ? $transaction_info->middle_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="middle-name" class="form-control form-control-lg form-control-solid" placeholder="Middle Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="last_name" value="<?= $is_viewing ? $transaction_info->last_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="last-name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Last Name" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Place of Birth</label>

                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="birth_place" value="<?= $is_viewing ? $transaction_info->birth_place : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="birth-place" class="form-control form-control-lg form-control-solid" placeholder="Place of Birth" value="" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Birth</label>

                            <div class="col-lg-8 fv-row">
                                <input type="date" name="birth_date" value="<?= $is_viewing ? $transaction_info->birth_date : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="birth-date" class="form-control form-control-lg form-control-solid" placeholder="Date of Birth" value="" required>
                            </div>
                        </div>

                        <div class="separator my-10"></div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Mother's Maiden
                                Name:</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="mothers_first_name" value="<?= $is_viewing ? $transaction_info->mothers_first_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="mothers-first-name" class="form-control form-control-lg form-control-solid" placeholder="Mother's First Name" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="mothers_middle_name" value="<?= $is_viewing ? $transaction_info->mothers_middle_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="mothers-middle-name" class="form-control form-control-lg form-control-solid" placeholder="Mother's Middle Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="mothers_last_name" value="<?= $is_viewing ? $transaction_info->mothers_last_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="mothers-last-name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Mother's Last Name" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Father's Name</label>

                            <div class="col-lg-8">
                                <div class="row">

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="fathers_first_name" value="<?= $is_viewing ? $transaction_info->fathers_first_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="fathers-first-name" class="form-control form-control-lg form-control-solid" placeholder="Father's First Name" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="fathers_middle_name" value="<?= $is_viewing ? $transaction_info->fathers_middle_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="fathers-middle-name" class="form-control form-control-lg form-control-solid" placeholder="Father's Middle Name" value="">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <input type="text" name="fathers_last_name" value="<?= $is_viewing ? $transaction_info->fathers_last_name : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="fathers-last-name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Father's Last Name" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Requester:</label>

                            <div class="col-lg-8 fv-row">
                                <select class="form-select form-select-solid" name="requester" id="requester" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> data-control="select2" data-placeholder="Requester" required>
                                    <option selected="" value="" disabled>Requester</option>
                                    <option value="1" value="<?= $is_viewing ? $transaction_info->requester : "" ?>" <?= $is_viewing && $transaction_info->requester == "1" ? 'selected' : '' ?>>Document Owner</option>
                                    <option value="2" value="<?= $is_viewing ? $transaction_info->requester : "" ?>" <?= $is_viewing && $transaction_info->requester == "2" ? 'selected' : '' ?>>Spouse</option>
                                    <option value="3" value="<?= $is_viewing ? $transaction_info->requester : "" ?>" <?= $is_viewing && $transaction_info->requester == "3" ? 'selected' : '' ?>>Parent</option>
                                    <option value="4" value="<?= $is_viewing ? $transaction_info->requester : "" ?>" <?= $is_viewing && $transaction_info->requester == "4" ? 'selected' : '' ?>>Sons/Daughters</option>
                                    <option value="5" value="<?= $is_viewing ? $transaction_info->requester : "" ?>" <?= $is_viewing && $transaction_info->requester == "5" ? 'selected' : '' ?>>Authorized Representative of the Owner</option>
                                </select>
                                <div class="form-text text-end">
                                    If the requester is not the document owner him/herself, they must provide an
                                    authorization letter upon taking the requested document.
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6" style="display:none;" id="auth-person">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name of the Authorized Person:</label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" name="authorized_person" value="<?= $is_viewing ? $transaction_info->purpose : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="authorized-person" class="form-control form-control-lg form-control-solid" placeholder="Name of Authorized Person" value="" required>
                            </div>
                        </div>

                        <!-- UPLOADING FILE -->
                        <div class="row mb-6" style="display:none;" id="file-upload">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Upload a file:</label>
                            <div class="col-lg-8 fv-row">
                                <input type="file" name="file_upload" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="upload-file" accept="image/*" class="form-control" placeholder="">
                                <img id="image-preview"  src="<?= base_url() ?>/public/user_file_uploads/<?= $is_viewing ? $transaction_info->req_filename : "default-avatar.png" ?>" class="form-control form-control-transparent">
                            </div>
                        </div>
                        <!-- END OF UPLOADING FILE -->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Purpose:</label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" name="purpose" value="<?= $is_viewing ? $transaction_info->purpose : "" ?>" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> id="purpose" class="form-control form-control-lg form-control-solid" placeholder="Purpose" value="" required>
                            </div>
                        </div>

                        <div class="row mb-8">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Remarks:</label>

                            <div class="col-lg-8 fv-row">
                                <textarea name="remarks" value="" id="remarks" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?> class="form-control form-control-lg form-control-solid w-100" rows="5" placeholder="Remarks...">
                                    <?= $is_viewing ? $transaction_info->remarks : "" ?>
                                </textarea>
                            </div>
                        </div>

                        <input type="text" name="service_id" value="<?= $service->service_id ?>" class="d-none">

                        <input type="text" name="req_filename" value="<?= $is_viewing ? $transaction_info->req_filename : "" ?>" id="req-filename" class="d-none">



                        <!--=================================================== END OF YOUR CODE ==============================================-->

                        <!--================================================ FORM ALERT ========================================================-->

                        <div class="separator my-10"></div>

                        <div class="alert alert-primary d-flex align-items-center p-5">
                            <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor">
                                    </rect>
                                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor">
                                    </rect>
                                </svg>
                            </span>

                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-primary">Note: </h4>
                                <span>Requester can either be the document owner, spouse of owner (if married), with
                                    authorization letter - parent, sons/daughters or an authorized representative of
                                    the owner.</span>
                            </div>
                        </div>

                        <!--============================================= END OF FORM ALERT ====================================================-->

                        <!--=============================================== FORM BUTTONS ======================================================-->
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success mx-1 flex-grow-1 <?= $is_viewing ? "update" : "submit" ?>-btn" <?= $is_viewing ? ($status->status == 0 ? " " : "disabled") : " " ?>><?= $is_viewing ? "Update" : "Submit" ?> Request</button>
                        </div>
                        <!--=========================================== END OF FORM BUTTONS ===================================================-->
                    </form>
                </div>
                <!-- END OF FORM -->
            </div>

            <div class="container col-lg-4 col-md-4 my-5 p-5 p-md-8">


                <div class="alert alert-primary d-flex align-items-center p-5">
                    <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                        </svg>
                    </span>

                    <div class="d-flex flex-column">
                        <h4 class="mb-1 text-primary">REQUIREMENTS: </h4>
                        <span> Requirements for requesting Birth Certificate:</span>
                        <div class="d-flex flex-column">
                            <li class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-5"></span>

                            </li>
                            <li class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-5"></span>

                            </li>
                            <li class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-5"></span>

                            </li>
                        </div>
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
    let image_file;
    var image = $("#image-preview");
    $(document).ready(function() {

        $('#upload-file').change(function(e) {
            const [file] = this.files;
            const form_data = new FormData();
            form_data.append("file", file);
            image_file = form_data;
        });

        $("#bc-form").submit(function(e) {
            e.preventDefault();
            <?php if ($is_viewing) : ?>
                <?php if ($status->status == 0) : ?>
                    const form_data_update = $(this).serializeArray();
                    let endpoint = "<?= base_url() ?>/lcr/updateBirtCertificate/<?= $transaction_info->bc_id ?>";
                    console.table($(this).serializeArray());
                    $.ajax({
                        type: "post",
                        url: "<?= base_url() ?>/lcr/uploadFiles",
                        success: function(data) {
                            const filename = data.filename;
                            form_data_update.push({
                                name: 'req_filename',
                                value: filename
                            });
                            console.log(filename);
                            confirm(
                                'Wait!',
                                'Are you sure you want to update the form?',
                                'question', endpoint,
                                "POST",
                                form_data_update,
                                function(response) {
                                    console.log(response);
                                    if (!response.error) {
                                        successAlert('Form successfully updated.', 'Form successfully updated.',
                                            'success');
                                    } else {
                                        errorAlert('Error',
                                            'There is an error during updating the form.',
                                            'warning');
                                    }
                                }
                            );
                        },
                        error: function(error) {
                            errorAlert('Error',
                                error,
                                'warning');
                        },
                        dataType: "JSON",
                        data: image_file,
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                <?php endif; ?>


            <?php else : ?>
                let endpoint = "<?= base_url() ?>/lcr/addBirthCertificate";
                const form_data = $(this).serializeArray();
                console.table($(this).serializeArray());
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/lcr/uploadFiles",
                    success: function(data) {
                        const filename = data.filename;
                        form_data.push({
                            name: 'req_filename',
                            value: filename
                        });
                        console.log(filename);
                        confirm(
                            'Wait!',
                            'Are you sure you want to submit the form?',
                            'question', endpoint,
                            "POST",
                            form_data,
                            function(response) {
                                console.log(response);
                                if (!response.error) {
                                    successAlert('Form successfully submitted.', 'Form successfully submitted.',
                                        'success');
                                    $("#bc-form")[0].reset();
                                    image.removeAttr('src');
                                    image.show();
                                } else {
                                    errorAlert('Error',
                                        'There is an error during submitting the form.',
                                        'warning');
                                }
                            }
                        );
                    },
                    error: function(error) {
                        errorAlert('Error',
                            error,
                            'warning');
                    },
                    dataType: "JSON",
                    data: image_file,
                    cache: false,
                    contentType: false,
                    processData: false
                });

            <?php endif; ?>

        });

        $("#requester").change(function(e) {
            console.log($("#requester").val());
            if ($('#requester').val() != "1") {
                $("#auth-person").show();
                $("#file-upload").show();
                $("#auth-person").find("input, select").each(function() {
                    $(this).attr("required", true);
                });
            } else {
                $("#auth-person").hide();
                $("#file-upload").hide();
                $("#authorized-person").val("");
                $("#auth-person").find("input, select").each(function() {
                    $(this).removeAttr("required");
                });
            }
            e.preventDefault();

        });

        var selected_option = $('#requester option:selected').val();
        console.log(selected_option);
        if (selected_option == "1" || selected_option == "") {
            $("#auth-person").hide();
            $("#file-upload").hide();
        } else {

            $("#auth-person").show();
            $("#file-upload").show();
        }

    });
</script>
<?= $this->endSection(); ?>