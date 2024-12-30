<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>> -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="assets/js/stylish-portfolio.min.js"></script>
<script src="assets/build/js/intlTelInput.js"></script>
<!--sweet alert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    let showToast = true;

    $(document).ready(function() {

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-left",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "preventDuplicates": true,
        }

        const toastMessage = "Baru saja mendaftar M1 Live Webinar";
        const breakTag = "<br/>";
        const registerTimeArray = [1, 2, 3, 4, 5, 6, 7];
        const cityArray = ["Jakarta", "Surabaya", "Medan", "Tangerang", "Yogyakarta", "Bandung", "Palembang", "Bali", "Bogor", "Semarang"];
        setInterval(() => {
            const selectedCityIndex = Math.floor(Math.random() * cityArray.length);
            const selectedCityValue = cityArray[selectedCityIndex];
            const selectedCityString = "Someone dari " + selectedCityValue + ", ID";
            const selectedRegisterTimeIndex = Math.floor(Math.random() * registerTimeArray.length);
            const selectedRegisterTimeValue = registerTimeArray[selectedRegisterTimeIndex];
            const selectedRegisterTimeString = '<span style="font-size: 10px">' + selectedRegisterTimeValue + ' ' + ((parseInt(selectedRegisterTimeValue) > 1) ? 'days' : 'day') + ' ago</span>';
            const fullMessage = toastMessage + breakTag + selectedRegisterTimeString;
            if (showToast === true) {
                toastr["info"](fullMessage, selectedCityString)
            }
        }, 15000);
    });

    function disableToast() {
        showToast = false;
    }
    
    // js validation
    $('.numeric').keyup(function(e) {
        if (/[^+\d]/g.test(this.value)) {
            this.value = this.value.replace(/[^+\d]/g, '');
        }
    });
</script>