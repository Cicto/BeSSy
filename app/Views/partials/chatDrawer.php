<?php if($userInformation->role == 5):?>
    <style>
        /* HTML: <div class="loader"></div> */
        .loader {
        display: inline-flex;
        gap: 5px;
        }
        .loader:before,
        .loader:after {
        content: "";
        width: 25px;
        aspect-ratio: 1;
        box-shadow: 0 0 0 3px inset #fff;
        animation: l4 1.5s infinite;
        }
        .loader:after {
        --s: -1;
        animation-delay: 0.75s
        }
        @keyframes l4 {
        0%     {transform:scaleX(var(--s,1)) translate(0) rotate(0)}
        16.67% {transform:scaleX(var(--s,1)) translate(-50%) rotate(0)}
        33.33% {transform:scaleX(var(--s,1)) translate(-50%) rotate(90deg)}
        50%,
        100%   {transform:scaleX(var(--s,1)) translate(0) rotate(90deg)}
        }
    </style>
    <div id="chat-drawer" class="bg-white pt-0" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#chat-drawer-btn" data-kt-drawer-close="#kt_drawer_example_basic_close" data-kt-drawer-width="500px">
        <div class="card h-100 w-100" style = "border-radius: 0px">

            <div class = "position-absolute w-100 h-100 d-flex flex-center flex-column d-none" style = "z-index: 99; background-color: #1321394a" id = "chat-box-cover">
                <div class="loader"></div>
                <span class = "text-white mt-5" id = "cover-message">Loading message</span>
            </div>
            <div class="card-header px-5">
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
            <div class="card-footer p-5">
                <div class="d-flex align-items-center me-2">
                    <div class="dropzone dropzone-queue mb-2" id="upload-file">
                        <!--begin::Controls-->
                        <div class="dropzone-panel mb-lg-0 mb-2">
                            <a class="dropzone-select me-2 fs-7 fw-semibold btn btn-sm btn-primary">
                                <i class="bi bi-upload fs-5"></i> Send File
                            </a>
                            <button class="me-2 fs-7 fw-semibold btn btn-sm btn-primary" id = "queue-a-call">
                                <i class="bi bi-telephone-outbound"></i> Request a call
                            </button>
                            <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                        </div>
                    </div>
                </div>
                <div class=" w-100">
                    <form id = "chat-form" class = "input-group input-group-solid w-100">
                        <input type="hidden" class = "form-control" name = "convo_id" value = "<?= $convoInfo ?>">
                        <textarea class="form-control" name = "message" id = "message"></textarea>
                        <span class="input-group-text border-0">
                            <button class = "btn btn-link btn-color-primary btn-active-color-primary p-0 m-0" class = "submit">
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
    <div class = "position-fixed bottom-0 w-100 text-end p-5 pb-20">
        <!-- <button class = "btn btn-primary bg-city-blue circle h-75px w-75px mb-5 me-5 shadow-sm" id = "chat-drawer-btn" style = "border-radius: 50%;">
            <span class="svg-icon svg-icon-muted svg-icon-2hx m-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="currentColor"/>
                    <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="currentColor"/>
                </svg>
            </span>
        </button> -->
        <div id="container-floating">
            <div class="nd3 nds bg-primary" id = "chat-drawer-btn">
                <p class="letter">
                    <span class = "svg-icon svg-icon-white svg-icon-2hx">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="currentColor"/>
                            <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="currentColor"/>
                        </svg>
                    </span>
                </p>
            </div>
            <div class="nd1 nds bg-primary border border-primary text-white" id = "queue-a-call">
                <p class="letter">
                    <i class = "fa-solid fa-video fs-2 text-white"></i>
                </p>
            </div>
            <div id="floating-button">
                <p class="plus">+</p>
                <img class="edit" src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
            </div>
        </div>
    </div>
        
<style>
    #floating-button{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #132139;
  position: fixed;
  bottom: 90px;
  right: 20px;
  cursor: pointer;
  box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 38px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}

#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 30px;
  z-index: 50px;
}

#container-floating:hover{
  height: 400px;
  width: 90px;
  padding: 30px;
}

#container-floating:hover .plus{
  animation: plus-in 0.15s linear;
  animation-fill-mode: forwards;
}

.edit{
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  padding: 0;
  opacity: 0;
  margin: auto;
  line-height: 65px;
  transform: rotateZ(-70deg);
  transition: all 0.3s;
  animation: edit-out 0.3s;
}

#container-floating:hover .edit{
  animation: edit-in 0.2s;
   animation-delay: 0.1s;
  animation-fill-mode: forwards;
}

@keyframes edit-in{
    from {opacity: 0; transform: rotateZ(-70deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

@keyframes edit-out{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(-70deg);}
}

@keyframes plus-in{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(180deg);}
}

@keyframes plus-out{
    from {opacity: 0; transform: rotateZ(180deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

.nds{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: fixed;
  z-index: 300;
  transform:  scale(0);
  cursor: pointer;
}

.nd1{
  /* background: #d3a411; */
  right: 20px;
  bottom: 165px;
  animation-delay: 0.2s;
    animation: bounce-out-nds 0.3s linear;
  animation-fill-mode:  forwards;
}

.nd3{
  /* background: #3c80f6; */
  right: 20px;
  bottom: 220px;
  animation-delay: 0.15s;
    animation: bounce-out-nds 0.15s linear;
  animation-fill-mode:  forwards;
}

.nd4{
  /* background: #ba68c8; */
  right: 40px;
  bottom: 240px;
  animation-delay: 0.1s;
    animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

@keyframes bounce-nds{
    from {opacity: 0;}
    to {opacity: 1; transform: scale(1);}
}

@keyframes bounce-out-nds{
    from {opacity: 1; transform: scale(1);}
    to {opacity: 0; transform: scale(0);}
}

#container-floating:hover .nds{
  
  animation: bounce-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

#container-floating:hover .nd3{
  animation-delay: 0.08s;
}
#container-floating:hover .nd4{
  animation-delay: 0.15s;
}
#container-floating:hover .nd5{
  animation-delay: 0.2s;
}

.letter{
  font-size: 23px;
  font-family: 'Roboto';
  color: white;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0;
  top: 0;
  bottom: 0;
  text-align: center;
  line-height: 40px;
}

.reminder{
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
  line-height: 40px;
}

.profile{
  border-radius: 50%;
  width: 40px;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  right: 20px;
}
</style>
    <?= $this->section('javascript'); ?>
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
            socket.emit('remove-to-queue', room, (res) => {
                queueCall(res.queue, '<?= $departmentInfo[0]->dept_id?>');
            });
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
                setTimeout(() => {
                    window.open ('<?= base_url()?>'+'/chats/videoCall/'+room,"mywindow","menubar=0,resizable=0,width=700,height=600");
                    $('#call-modal').modal('hide');
                    socket.emit('accept-call', room);
                    audio.pause();
                }, 1200);
            });

            $(document).on('click', '#deny-call', function(){
                $('#call-modal').modal('hide');
                socket.emit('deny-call', room);
                audio.pause();
            });

            $(document).on('click', '#queue-a-call', function(){
                $('#chat-box-cover').removeClass('d-none');
                $('#cover-message').text('You are being added to queue');
                let data = {
                    userId: '<?= user_id()?>',
                    room: room,
                    time: '<?= date('Y-m-d H:i:s')?>',
                    clientName: '<?= $userInformation->firstname.' '.$userInformation->lastname?>',
                    deptId: '<?= ($departmentInfo != false) ? $departmentInfo[0]->dept_id : 36 ?>'
                }
                socket.emit('add-to-queue', data, (res) => {
                    if(res.status){
                        setTimeout(() => {
                            $('#chat-box-cover').addClass('d-none');
                            toastr.success('You are added to queue.');
                            successAlert('You are queued!', 'Don\'t leave or reload this page to stay in queue. Thank you!');
                        }, 1500);
                    }else{
                        toastr.error('You are not allowed to queue, you have an existing one.');
                        setTimeout(() => {
                            $('#chat-box-cover').addClass('d-none');
                        }, 1500);
                    }
                });
            });
        });
    </script>

    <?= $this->endSection(); ?>
<?php endif?>
