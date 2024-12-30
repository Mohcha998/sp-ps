<script>
    var inputHpBawah = document.querySelector("#hp-bawah");
    var intelInputNumberBawah = window.intlTelInput(inputHpBawah, {
        initialCountry: "id",
        formatOnDisplay: false,
        //   separateDialCode: true,
        geoIpLookup: function(callback) {
            $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        utilsScript: "assets/build/js/utils.js"
    });

    function nameValidationBawah() {
        var nameValue = $('#name-bawah').val();
        var nameElement = document.getElementById('name-bawah');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (nameValue.length <= 0) {
            $('#div-name-validation-bawah').show();
            nameElement.style.borderColor = badColor;
        } else {
            $('#div-name-validation-bawah').hide();
            nameElement.style.borderColor = goodColor;
        }
    }

    //Validasi Telepon
    var isPhoneValidBawah;

    function phoneValidationBawah() {
        isPhoneValidBawah = $('#phone-value-validation-bawah').val();
        var phone = document.getElementById('hp-bawah');
        var validationMessage = document.getElementById('phone-validation-message-bawah');
        var goodColor = "#66cc66";
        var badColor = "red";
        var firstNumber = phone.value[0];

        var countryData = intelInputNumber.getSelectedCountryData();
        if (phone.value.length == 1 && phone.value[0] != '+') {
            if (firstNumber == '0') {
                var mobile = "+" + countryData.dialCode;
                $('#hp-bawah').val(mobile);
            } else {
                var mobile = "+" + countryData.dialCode + phone.value;
                $('#hp-bawah').val(mobile);
            }
        }

        if (phone.value.length >= 8 && phone.value.length <= 15 && firstNumber != '0' && phone.value.startsWith("+") &&
            phone.value[3] != '0') {
            phone.style.borderColor = goodColor;
            validationMessage.style.color = goodColor;
            validationMessage.innerHTML = "";
            isPhoneValidBawah = "true";
        } else if (phone.value.length == 0) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP harus diisi"
            isPhoneValidBawah = "false";
            return
        } else if (firstNumber == '0') {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP tidak bisa dimulai dengan angka 0"
            isPhoneValidBawah = "false";
            return
        } else if (!phone.value.startsWith("+")) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP harus diawali kode negara"
            isPhoneValidBawah = "false";
            return
        } else if (phone.value[3] == 0) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP tidak bisa dimulai dengan angka 0"
            isPhoneValidBawah = "false";
            return
        } else if (phone.value.length > 0 && phone.value.length < 8) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP minimal 8 karakter"
            isPhoneValidBawah = "false";
            return
        }
    }

    var isEmailValidBawah;

    function emailValidationBawah() {
        isEmailValidBawah = $('#email-value-validation-bawah').val();
        var email = document.getElementById('email-bawah');
        var validationMessage = document.getElementById('email-validation-message-bawah');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
            email.style.borderColor = goodColor;
            validationMessage.style.color = goodColor;
            validationMessage.innerHTML = "";
            isEmailValidBawah = "true";
        } else if (email.value.length == 0) {
            email.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com"
            isEmailValidBawah = "false";
            return
        } else {
            email.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com"
            isEmailValidBawah = "false";
            return
        }
    }
</script>