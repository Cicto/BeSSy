<form role="form" id="sample-form" class="needs-validation user-form form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" novalidate>
    <input type="hidden" class="form-control form-control-sm" id="service_id" name="service_id" value = "<?= $serviceId ?>"> 

    <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-1">
            <span class="required">Sample Field</span>
        </label>
        <input type="text" class="form-control" placeholder="Enter Value" name="dept_alias"
            id="dept_alias" value="">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        <label class="d-flex align-items-center fs-6 fw-semibold mb-1">
            <span class="required">Sample Name</span>
        </label>
        <input type="text" class="form-control" placeholder="Enter Value" name="department_name"
            id="department_name" value="">
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>

    <div class="separator separator-dashed my-7"></div>
    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 px-5 py-2">
    
        <div class="d-flex flex-stack flex-grow-1">
            <!--begin::Content-->
            <div class="fw-semibold fs-7">
                <h6 class="fw-bold"><i class="fas fa-exclamation-circle text-dark"></i> Reminders</h6>
                <div class=" text-gray-700">Please verify informations before submitting this form.
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <div class="text-center">
        <!-- <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button> -->
        <button type="submit" id="" class="btn btn-primary form-btn">Submit</button>
    </div>
</form>

<?= $this->section('javascript'); ?>
<script>
    $(document).ready(function(){

        $(document).on('submit', '#sample-form', function(){

            event.preventDefault();

            $.post('<?=base_url()?>/external/submitSample', {formDetails: $(this).serializeArray(), 'service_id' : $('#service_id').val()}, (data, status) => {

                console.log(data);
                if(!data.result){
                    Swal.fire({
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    setTimeout(() => {
                        location.href = '<?= base_url()?>/external/transactions';
                    }, 3000);

                }
                else{
                    Swal.fire({
                        icon: 'error',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            });


        });

    });
</script>
<?= $this->endSection(); ?>