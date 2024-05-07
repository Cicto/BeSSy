<?php if($userInformation->role == 5):?>
    <div id="chat-drawer" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#chat-drawer-btn" data-kt-drawer-close="#kt_drawer_example_basic_close" data-kt-drawer-width="{default:'100%', 'md': '500px'}">
        <div class="card h-100 w-100" style = "border-radius: 0px">
            <div class="card-header px-5 justify-content-start">
                <div class="card-toolbar me-5">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_example_dismiss_close" data-kt-drawer-dismiss="true">
                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"/>
                                <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="card-title">
                    <div class = "d-flex flex-row">
                        <!-- <div class = "symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="<?= base_url()?>/public/assets/media/avatars/default-avatar.png" class="w-100px ms-n1 border me-2 rounded" alt="">
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div> -->
                        
                        <span class = "d-flex flex-column align-self-end">
                            <span class = "fw-bold fs-2"> <?= ($departmentInfo != false) ? $departmentInfo[0]->dept_name : 'City Information Desk'?></span>
                            <span class = "fs-8 text-gray-600"> Active</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body p-5 scroll" id = "messages">
                <!-- <div class = "d-flex flex-center position-absolute top-0">
                    <span>See more</span>
                </div> -->
            </div>
            <div class="card-footer p-5 w-100">
                <div class="d-flex align-items-center me-2">
                    <div class="dropzone dropzone-queue mb-2" id="upload-file">
                        <!--begin::Controls-->
                        <div class="dropzone-panel mb-lg-0 mb-2">
                            <a class="dropzone-select me-2 fs-7 fw-semibold btn btn-sm btn-light-primary">
                                <i class="bi bi-paperclip fs-4" style="transform: rotate(45deg);"></i> Send file
                            </a>
                            <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                        </div>
                    </div>
                </div>
                <div class=" w-100">
                    <form id = "chat-form" class = "input-group input-group-solid w-100">
                        <input type="hidden" class = "form-control" name = "convo_id" value = "<?= $convoInfo ?>">
                        <textarea class="form-control rounded-start" data-kt-autosize="true" name = "message" id = "message"></textarea>
                        <span class="input-group-text border-0 d-flex">
                            <button class = "btn btn-link btn-color-primary btn-active-color-primary p-0 m-0 align-self-end mb-1" class = "submit">
                                <span class="svg-icon svg-icon-muted svg-icon-2hx" >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style = "rotate: 45deg;">
                                        <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor"/>
                                        <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor"/>
                                    </svg>
                                </span>
                            </button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " tabindex="-1" id="call-modal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-transparent h-50">
                <div class="modal-header border-0 bg-white d-flex flex-center h-lg-100px bg-success py-10">
                    <h3 class="modal-title ">
                        <span class = "fa fa-phone text-white fs-3hx" id = "icon-click"></span>
                    </h3>
                </div>

                <div class="modal-body rounded-bottom bg-white d-flex flex-center flex-column h-lg-200px ">
                    <span class = "text-gray-700 fw-bold">Incoming call</span>
                    <span class = "text-gray-400 fs-8">[Office name] wants to connect with you.</span>
                </div>

                <div class="modal-footer d-flex flex-center p-0 border-0 pt-3 ">
                    <div class="row w-100 p-0">
                        <div class="col-6 p-0 pe-3">
                            <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal" id = "deny-call">
                                <span class = "fa fa-close"></span>
                            </button>
                        </div>
                        <div class="col-6 p-0">
                            <button type="button" class="btn btn-success w-100" id = "accept-call">
                                <span class = "fa fa-phone"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <audio id="myAudio" muted>
        <source  type="audio/mp3" src="<?= base_url()?>/public/assets/sounds/call-ring.wav">
        Your browser does not support the audio element.
    </audio>
    <?= $this->section('css'); ?>
        <style>
            .dropzone .dz-preview{
                display: none !important;
            }
        </style>
    <?= $this->endSection(); ?>
    <?= $this->section('javascript'); ?>
    
    <script src="<?= base_url()?>/public/assets/js/socket-io.js"></script>
    <script src = "<?= base_url()?>/public/assets/js/chat.js"></script>
    <script src="https://meet.jit.si/libs/lib-jitsi-meet.min.js"></script>
    
    <script>
        var audio = document.getElementById("myAudio");
        
        document.addEventListener("click", function() {
            audio.muted = false;
            audio.loop=true;
        });

        $(document).ready(function () {
            const dropzone = document.querySelector('#upload-file');
            var myDropzone = new Dropzone('#upload-file', { // Make the whole body a dropzone
                url: "<?= base_url()?>/chats/uploadFile/"+<?= $convoInfo ?>, // Set the url for your upload script location
                paramName: 'file',
                parallelUploads: 20,
                createImageThumbnails: false,
                previewsContainer: false,
                maxFilesize: 1, // Max filesize in MB
                clickable: '#upload-file' + " .dropzone-select" // Define the element that should be used as click trigger to select files.
            });

            let room = <?= $convoInfo ?>;
            socket.emit('join-room', room);
            socket.on('receive-message', (data) => {
                console.log(data);
                receivedMessage(data);
            });
            socket.on('receive-call', (data) => {
                callModal('#call-modal', audio);
                $('#icon-click').click();
            });
            socket.on('denied-call', (data) => {
                $('#call-modal').modal('hide');
                toastr.error('Call is denied by the other line.');
                audio.pause();
            });
            ajaxRequest(
                '<?= base_url()?>/chats/getChats/'+room,
                'GET',
                {convoId: room}, 
                data => {
                    plotMessages(data, <?= user_id()?>, $('#messages'));
                }
            );

            $('#chat-form').submit(function(){
                event.preventDefault();
                let message = $('#message').val();
                if(message != ''){
                    ajaxRequest('<?= base_url()?>/chats/insertChat', 'POST', $(this).serialize(), data => {
                        if(!data.error){
                            $('#message').val('');
                            socket.emit('send-message', data, room);
                            myMessage(data);
                        }
                    });
                }   
            });

            myDropzone.on("success", function (file, response) {
                let data = JSON.parse(response);
                socket.emit('send-message', data, room);
                myMessage(data, true);
            });
            
            $(document).on('click', '#accept-call', function(){
                window.open ('<?= base_url()?>'+'/chats/videoCall/'+room,"mywindow","menubar=0,resizable=0,width=700,height=600");
                $('#call-modal').modal('hide');
                socket.emit('accept-call', room);
                audio.pause();
            });

            $(document).on('click', '#deny-call', function(){
                $('#call-modal').modal('hide');
                socket.emit('deny-call', room);
                audio.pause();
            });
        });
    </script>

    <?= $this->endSection(); ?>
<?php endif?>
