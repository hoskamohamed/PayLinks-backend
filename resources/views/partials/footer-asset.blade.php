<!-- jquery -->
<script src="{{ asset('frontend/js/jquery-3.6.0.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
<!-- swipper js -->
<script src="{{ asset('frontend/js/swiper.js') }}"></script>
<!-- odometer js -->
<script src="{{ asset('frontend/js/odometer.js') }}"></script>
<!-- viewport js -->
<script src="{{ asset('frontend/js/viewport.jquery.js') }}"></script>
<!-- nice select js -->
<script src="{{ asset('frontend/js/jquery.nice-select.js') }}"></script>
<!-- smooth scroll js -->
<script src="{{ asset('frontend/js/smoothscroll.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('backend/library/popup/jquery.magnific-popup.js') }}"></script>
<!-- Select 2 JS -->
<script src="{{ asset('backend/js/select2.js') }}"></script>

<script>
    var fileHolderAfterLoad = {};
</script>

<script src="https://cdn.appdevs.net/fileholder/v1.0/js/fileholder-script.js" type="module"></script>
<script type="module">
    import { fileHolderSettings } from "https://cdn.appdevs.net/fileholder/v1.0/js/fileholder-settings.js";
    import { previewFunctions } from "https://cdn.appdevs.net/fileholder/v1.0/js/fileholder-script.js";

    var inputFields = document.querySelector(".file-holder");
    fileHolderAfterLoad.previewReInit = function(inputFields){
        previewFunctions.previewReInit(inputFields)
    };

    fileHolderSettings.urls.uploadUrl = "{{ setRoute('fileholder.upload') }}";
    fileHolderSettings.urls.removeUrl = "{{ setRoute('fileholder.remove') }}";

</script>

<script>
    function fileHolderPreviewReInit(selector) {
        var inputField = document.querySelector(selector);
        fileHolderAfterLoad.previewReInit(inputField);
    }
</script>

<!-- main -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
