<?= $this->extend('layouts/blank'); ?>
<?= $this->section('content'); ?>
    <div id="jitsi-container" style="height: 600px;"></div>

<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script src="https://meet.jit.si/external_api.js"></script>
<!-- <script src = "<?= base_url()?>/public/assets/js/video-call.js"></script> -->
<script>
    $(document).ready(function(){
        const domain = 'meet.jit.si';
        const options = {
            roomName: 'Video Conference Room', // Specify your room name
            width: 800,
            height: 600,
            parentNode: document.querySelector('#jitsi-container'),
            userInfo: {
                displayName: 'YourDisplayName' // Specify your display name
            },
            configOverwrite: { 
                disableDeepLinking: true, // Disable deep linking to prevent redirect to login page
                prejoinPageEnabled: false,
            },
            interfaceConfigOverwrite: {
                // Hide lobby screen and prejoin screen
                prejoinPageEnabled: false,
                enableNoAudioDetection: false,
                enableNoisyMicDetection: false,
                disableRemoteMute: true,
                TOOLBAR_BUTTONS: [
                'microphone', 'camera', 'closedcaptions', 'desktop', 'fullscreen',
                'fodeviceselection', 'hangup', 'profile', 'chat', 'recording',
                'livestreaming', 'etherpad', 'sharedvideo', 'settings', 'raisehand',
                'videoquality', 'filmstrip', 'feedback', 'stats', 'shortcuts',
                'tileview', 'videobackgroundblur', 'download', 'help', 'mute-everyone',
                'e2ee'
                ]
            }
        };

        const api = new JitsiMeetExternalAPI(domain, options);

    });
</script>
<?= $this->endSection(); ?>