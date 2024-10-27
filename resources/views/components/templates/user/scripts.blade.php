<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{URL::to('/')}}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{URL::to('/')}}/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{URL::to('/')}}/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{URL::to('/')}}/assets/js/custom/landing.js"></script>
<script src="{{URL::to('/')}}/assets/js/custom/pages/pricing/general.js"></script>
<script src="{{URL::to('/')}}/vendor/sweetalert/custom.js"></script>
<!--end::Custom Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{URL::to('/')}}/assets/js/custom/authentication/sign-in/general.js"></script>
<script src="{{URL::to('/')}}/assets/js/custom/authentication/sign-up/general.js"></script>

<!--end::Javascript-->
@yield('scripts')
<!--end::Custom Javascript-->
<script>
    const clickAudio = document.getElementById('clickAudio');

    // Function to play click sound
    function playClickSound() {
        clickAudio.currentTime = 0; // Reset audio to start
        clickAudio.play();
    }

    // Apply the function to all elements with the class 'play-sound'
    document.querySelectorAll('.play-sound').forEach(element => {
        element.addEventListener('click', playClickSound);
    });
</script>

