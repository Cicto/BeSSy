<?php if($userInformation->role != 5):?>
<div class="w-100 position-fixed bottom-0 position-relative"  style = "z-index: 99" >
    <div class = "p-3 bg-gray-200 border-top border-bottom border-gray-300 mt-5 d-flex flex-row scroll-x" id = "queued-calls">
        <div class = "p-5 w-100 d-flex flex-center queue-cover">
            <span class = "text-gray-600">No active queue</span>
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
        <source  type="audio/mp3" src="<?= base_url()?>/public/assets/sounds/call-ring.wav">
        Your browser does not support the audio element.
    </audio>
<?= $this->section('javascript'); ?>
<script>
    let audio = document.getElementById("myAudio");
    document.addEventListener("click", function() {
        audio.muted = false;
        audio.loop=true;
    });
    socket.emit('get-queue', (res) => {
        queueCall(res, '<?= $userInformation->dept_id?>');
    });
    socket.on('refresh-queue', (res) => {
        console.log('refreshed', '<?= $userInformation->dept_id?>');
        queueCall(res, '<?= $userInformation->dept_id?>');
    });
    socket.on('denied-call', (data) => {
        $('#call-modal').modal('hide');
        audio.pause();
        toastr.error('Call is denied by the other line.');
    });
    socket.on('accepted-call', (data) => {
        // $('#call-modal').modal('hide');
        window.open ('<?= base_url()?>'+'/chats/videoCall/'+data,"mywindow","menubar=0,resizable=0,width=700,height=600");
        audio.pause();
        $('#call-modal').modal('hide');
    });
    $(document).on('click', '#deny-call', function(){
        $('#call-modal').modal('hide');
        socket.emit('deny-call', room);
        audio.pause();
    });
    $(document).on('click', '.video-call-btn', function(){
        // window.open ('<?= base_url()?>'+'/chats/videoCall/'+this.dataset.convoId,"mywindow","menubar=0,resizable=0,width=700,height=600");
        room = this.dataset.convoId;
        socket.emit('join-room', this.dataset.convoId);
        
        socket.emit('send-call', this.dataset.convoId);
        audio.play();
        $('#call-modal').modal('show');
    });
</script>
<?= $this->endSection(); ?>
<?php endif?>