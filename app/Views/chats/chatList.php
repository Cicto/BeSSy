<?= $this->extend('layouts/nonAdminContainer'); ?>
<?= $this->section('content'); ?>
<div id="kt_app_toolbar" class="app-toolbar pb-3 pb-lg-6">
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

<div id="kt_app_content" class="app-content flex-column-fluid h-100">
    <div id="kt_app_content_container" class="app-container container-fluid h-100 pb-10" >
        <div class="row h-100">
            <div class="col-md-5 col-lg-4 col-sm-5 col-xs-5 mb-5 mb-md-0 min-h-500px">
                <div class="card card-flush h-100">
                    <div class="card-header" hidden>
                        <div class="card-title">
                            <span class = "fw-bold text-gray-700">Inbox</span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="mb-6">
                            <input type="text" class="form-control form-control-solid" placeholder="Search Client" id="convo-table-filterhead">
                        </div>
                        <div class="flex-grow-1 position-relative">
                            <div class="position-absolute h-100 w-100" style="overflow-y: scroll;">
                                <table class = "table w-100 " id = "convo-table">
                                    <thead hidden>
                                        <!-- <th class="filterhead"></th> -->
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 col-sm-7 col-xs-7 align-self-stretch min-h-750px">
                <div class="card h-100">
                    <div id = "convo-cover" class = "d-flex flex-center flex-column position-absolute h-100 w-100 bg-light-primary rounded border border-primary" style = "z-index: 99">
                        <span class="svg-icon svg-icon-primary svg-icon-2hx">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="currentColor"/>
                                <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="currentColor"/>
                            </svg>
                        </span>
                        <span class = "text-primary mt-3">Select a conversation.</span>
                    </div>
                    <div class="card-header p-5 py-0">
                        <div class="card-title">
                            <div class = "d-flex flex-row">
                                <!-- <div class = "symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="<?= base_url()?>/public/assets/media/avatars/default-avatar.png" class="w-100px ms-n1 border me-2 rounded" alt="">
                                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                </div> -->
                                <span class = "d-flex flex-column align-self-end">
                                    <span class = "fw-bold fs-2">Client Name Here</span>
                                    <span class = "fs-8 text-gray-600"> Client</span>
                                </span>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <a class = "btn btn-link btn-color-primary me-5" id = "video-call-btn" data-convo-id = "0">
                                <i class="fa-solid fa-video fs-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body position-relative"  id="messages-container">
                        <div class="position-absolute h-100 w-100 top-0 start-0 p-5" style="overflow-y: scroll; z-index: 10;">
                            <div id="messages-placeholder" class="h-100" hidden>
                                <div class="d-flex flex-center flex-column h-100">
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx mb-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="currentColor"/>
                                            <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <span class = "text-gray-400">Send a chat to start conversation.</span>
                                </div>
                            </div>
                            <div id="messages" class = "h-100 pt-5" hidden>
                            </div>
                        </div>
                        <!-- <div class = "d-flex flex-center ">
                            <span class = "text-gray-400 fs-8 text-hover-primary cursor-pointer">See more</span>
                        </div> -->
                    </div>
                    <div class="card-footer p-5">
                        <div class="d-flex align-items-center me-2">
                            <div class="dropzone dropzone-queue mb-2" id="upload-file">
                                <!--begin::Controls-->
                                <div class="dropzone-panel mb-lg-0 mb-3">
                                    <a class="dropzone-select me-2 fs-7 fw-semibold btn btn-sm btn-light-primary ps-4">
                                        <i class="bi bi-paperclip fs-4" style="transform: rotate(45deg);"></i> Send file
                                    </a>
                                    <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                                </div>
                            </div>
                        </div>
                        <div class=" w-100">
                            <form id = "chat-form" class = "input-group input-group-solid">
                                <input type="hidden" class = "form-control" name = "convo_id" value = "">
                                <textarea class="form-control rounded-start" data-kt-autosize="true" name = "message" id = "message"></textarea>
                                <span class="input-group-text border-0 d-flex">
                                    <button class = "align-self-end btn btn-link btn-color-primary btn-active-color-primary p-0 m-0 mb-1" class = "submit">
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
        </div>
    </div>
</div>

<div class="modal fade " tabindex="-1" id="call-modal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-transparent h-50">
            <div class="modal-header border-0 bg-white d-flex flex-center h-lg-100px bg-success py-10">
                <h3 class="modal-title ">
                    <span class = "fa fa-phone text-white fs-3hx"></span>
                </h3>
            </div>

            <div class="modal-body rounded-bottom bg-white d-flex flex-center flex-column h-lg-200px ">
                <span class = "text-gray-700 fw-bold">Other line is ringing</span>
                <span class = "text-gray-400 fs-8">Waiting for [Client Name]'s response.</span>
            </div>

            <div class="modal-footer d-flex flex-center p-0 border-0 pt-3 ">
                <div class="row w-100 p-0">
                    <div class="col-12 p-0 pe-3">
                        <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal" id = "deny-call">
                            <span class = "fa fa-close"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<audio id="myAudio" muted>
    <source  type="audio/mp3" src="<?= base_url()?>/public/assets/sounds/waiting.wav">
    Your browser does not support the audio element.
</audio>
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
<script src = "<?= base_url()?>/public/assets/js/socket-io.js"></script>
<script src = "<?= base_url()?>/public/assets/js/chat.js"></script>
<script>
    let _convoObj, room = 0;
    $(document).ready(function(){
        var audio = document.getElementById("myAudio");
        
        document.addEventListener("click", function() {
            audio.muted = false;
            audio.loop=true;
        });

        socket.on('receive-message', (data) => {
            console.log(data);
            receivedMessage(data);
        });
        socket.on('denied-call', (data) => {
            $('#call-modal').modal('hide');
            toastr.error('Call is denied by the other line.');

        });
        socket.on('accepted-call', (data) => {
            // $('#call-modal').modal('hide');
            window.open ('<?= base_url()?>'+'/chats/videoCall/'+data,"mywindow","menubar=0,resizable=0,width=700,height=600");
            audio.pause();
            $('#call-modal').modal('hide');
        });

        const dropzone = document.querySelector('#upload-file');
        var myDropzone = new Dropzone('#upload-file', { // Make the whole body a dropzone
            url: "<?= base_url()?>/chats/uploadFile/"+room, // Set the url for your upload script location
            paramName: 'file',
            parallelUploads: 20,
            createImageThumbnails: false,
            previewsContainer: false,
            maxFilesize: 1, // Max filesize in MB
            clickable: '#upload-file' + " .dropzone-select" // Define the element that should be used as click trigger to select files.
        });
        
        convoTable = $('#convo-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ordering: false,
            bInfo : false,
            paging: false,
            ajax: '<?= base_url()?>/chats/getConvoList',
            createdRow: function (row, data, rowIndex) {
                $(row).attr({'data-convo-id': data['convo_id']}).addClass(`pointer convo-container`);
                $(row).attr({'data-name': data['actor']});
            },
            columns: [{
                data: 'actor',
                render: function (data, type, full) {
                    return `
                    <div class="d-flex p-0 m-0 pointer">
                        <div class="symbol symbol-45px symbol-circle me-3 border">
                            <img src="<?= base_url()?>/public/assets/media/avatars/default-avatar.png" class="" alt="">
                        </div>
                        <div class="me-2 d-flex flex-column text-start flex-self-align-bottom">
                            <span class="text-gray-700 fs-4 fw-bold">${data}</span>
                            <span class="text-gray-400 fs-8">Just a sample message</span>
                        </div>
                    </div>
                    `;
                }
            }],
            initComplete: function (settings, json) {
                var indexColumn = 0;

                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement("input");

                    $(input).attr('placeholder', 'Search Client')
                        .addClass('form-control form-control-solid')
                        .appendTo($('.filterhead:eq(' + indexColumn + ')').empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });

                    indexColumn++;
                });
            },
            drawCallback: function( settings ) {
                _convoObj = settings.json.data;
            }
        });

        $('#convo-table').on('click', '.convo-container', function(){
            socket.emit('join-room', this.dataset.convoId);
            room = this.dataset.convoId;
            myDropzone.options.url = "<?= base_url()?>/chats/uploadFile/"+room;
            $('[name="convo_id"]').val(this.dataset.convoId);
            $('#video-call-btn').attr('data-convo-id', this.dataset.convoId);
            
            $('#convo-cover').remove();
            ajaxRequest(
                '<?= base_url()?>/chats/getChats',
                'GET',
                {convoId: this.dataset.convoId}, 
                data => {
                    $('#messages').html('').attr("hidden", true);
                    $('#messages-placeholder').removeAttr("hidden");
                    if(!data.error){
                        $('#messages-placeholder').attr("hidden", true);
                        $('#messages').removeAttr("hidden").html('');
                        plotMessages(data, <?= user_id()?>, $('#messages'));
                        setTimeout(() => {
                            
                            $('#messages')[0].scrollTop = $('#messages')[0].scrollHeight;
                        }, 500);
                    }
                    
                    
                }
            );
        });

        $("#convo-table-filterhead").on('keyup', function () {
            convoTable.search($(this).val(), false, false, true).draw();
        });

        $('#chat-form').submit(function(){
            event.preventDefault();
            let message = $('#message').val();
            if(message != ''){
                ajaxRequest('<?= base_url()?>/chats/insertChat', 'POST', $(this).serialize(), data => {
                    if(!data.error){
                        $('#message').val('');
                        socket.emit('send-message', data, $('[name="convo_id"]').val());
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

        $(document).on('click', '#video-call-btn', function(){
            // window.open ('<?= base_url()?>'+'/chats/videoCall/'+this.dataset.convoId,"mywindow","menubar=0,resizable=0,width=700,height=600");
            socket.emit('send-call', this.dataset.convoId);
            audio.play();
            $('#call-modal').modal('show');
        });

        $(document).on('click', '#deny-call', function(){
            $('#call-modal').modal('hide');
            socket.emit('deny-call', room);
        });
    })
</script>
      
<?= $this->endSection(); ?>