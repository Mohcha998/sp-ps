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
    

    
    // validasi button 
    $("#btn-submit-bawah-modal").click(function(e) {
        e.preventDefault();
        var id_buku = 'PS';
        var name = $('#name-bawah').val();
        var email = $('#email-bawah').val();
           var phone = intelInputNumberBawah.getNumber();
        var countryData = intelInputNumberBawah.getSelectedCountryData();
        $('#country-code-bawah').val("+" + countryData.dialCode);
        var aff = "<?= (!empty($_GET['ref'])) ? $_GET['ref'] : '' ?>";
        var source =
            "<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>";
        var code = 'program';
        var campaign = 'LP-Public-Speaking'

        var branch = '-';
        var program_mr = '-'

        // $('#form-lp').attr('action', newUrl);

        if (name != '' && $('#hp-bawah').val() != '' && isPhoneValidBawah == "true" && email != '' &&
            isEmailValidBawah == "true" && campaign != '' ) {
            $('#modal_sl_bawah').modal('show');
        
        } else {
            if (name == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Nama Lengkap harus diisi',
                })
                $("#name").focus();
                nameValidation();
            } else if ($('#hp').val() == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'HP harus diisi',
                })
                $("#hp").focus();
                phoneValidation();
            } else if (isPhoneValid == "false") {
                var phone = $('#hp').val();
                var firstNumber = phone[0];
                var errorText = '';
                if (firstNumber == '0') {
                    errorText = 'HP tidak bisa dimulai dengan angka 0';
                } else if (!phone.startsWith("+")) {
                    errorText = 'HP harus diawali kode negara';
                } else if (phone[3] == 0) {
                    errorText = 'HP tidak bisa dimulai dengan angka 0';
                } else if (phone.length > 0 && phone.length < 8) {
                    errorText = 'HP minimal 8 karakter';
                }
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: errorText,
                })
                $("#hp").focus();
            } else if (email == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com',
                })
                $("#email").focus();
                emailValidation();
            } else if (isEmailValid == "false") {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com',
                })
                $("#email").focus();
            }
        }
    });
    // validasi button

    

    $("#btn-submit-bawah").click(function(e) {
        e.preventDefault();
        var id_buku = 'SL';
        var name = $('#name-bawah').val();
        var email = $('#email-bawah').val();
        var phone = intelInputNumberBawah.getNumber();
        var countryData = intelInputNumberBawah.getSelectedCountryData();
        $('#country-code-bawah').val("+" + countryData.dialCode);
        var aff = "<?= (!empty($_GET['ref'])) ? $_GET['ref'] : '' ?>";
        var source =
            "<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>";
        var code = 'program';
        var campaign = 'LP-Smart-Learning'

        var branch = '-';
        var program_mr = '-'
        var cabang = $(".sl_bawah").val();
        
        var url = "http://merryriana.com/thanks/?event=mrlc";
        var newUrl = url + "&Name=" + name + "&Phone=" + $('#hp').val() + "&Email=" + email;
        $('#form-lp-bawah').attr('action', url);

        if (name != '' && $('#hp-bawah').val() != '' && isPhoneValidBawah == "true" && email != '' &&
            isEmailValidBawah == "true" && campaign != '' && $(".sl_bawah").val() != '') {
            $('#btn-waiting-bawah').show();
            $("#btn-submit-bawah").hide();

            if (aff == '') {
                
                $.ajax({
                    url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'name': name,
                        'email': email,
                        'phone': $('#hp-bawah').val(),
                        'programs': "SL",
                        'jumlahmodul': cabang,
                        'source': source,
                        'campaign': 'LP-Smart-Learning',
                        'type' : 'DIRECT',
                        'code': code
                    },
                    success: function(result) {
                        console.log("bisa");
                        window.location.replace('http://merryriana.com/thanks/?event=mrlc');
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log("error");
                    }
                });
                //////
                
                $.ajax({
                    url: "http://leads.merryriana.com/post_data/input_merch_web",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'id_buku': id_buku,
                        'name': name,
                        'email': email,
                        'phone': $('#hp-bawah').val(),
                        'shipping_details': '-',
                        'source': source,
                        'code': code,
                        'campaign': campaign
                    },
                    success: function(result) {
                        console.log(result);
                        $("#form-lp-bawah")[0].submit();
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log(xhr, status, errorThrown);
                    }
                });

                
            } else {
                $.ajax({
                    url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'name': name,
                        'email': email,
                        'phone': $('#hp-bawah').val(),
                        'programs': "SL",
                        'jumlahmodul': cabang,
                        'source': source,
                        'campaign': 'LP-Smart-Learning',
                        'type' : 'LPAFF',
                        'code': code,
                        'kode_referral' : aff
                    },
                    success: function(result) {
                        window.location.replace('http://merryriana.com/thanks/?event=mrlc');
                        console.log("bisa");
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log("error");
                    }
                });
                /////////////
                
                $.ajax({
                    url: "http://leads.merryriana.com/post_data/",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'name': name,
                        'email': email,
                        'phone': $('#hp-bawah').val(),
                        'branch': branch,
                        'program_mr': program_mr,
                        'source': source,
                        'code': code,
                        'campaign': campaign,
                        'referral': aff
                    },
                    success: function(result) {
                        console.log(result)
                        $("#form-asli-bawah")[0].submit();
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log(xhr, status, errorThrown);
                        $("#form-asli-bawah")[0].submit();
                    }
                });

                  
            }
        } else {
            if (name == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Nama Lengkap harus diisi',
                })
                $("#name-bawah").focus();
                nameValidationBawah();
            }  else if ($('.sl_bawah').val() == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'cabang harus diisi',
                })
                $(".sl_bawah").focus();
            }else if ($('#hp-bawah').val() == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'HP harus diisi',
                })
                $("#hp-bawah").focus();
                phoneValidationBawah();
            } else if (isPhoneValidBawah == "false") {
                var phone = $('#hp-bawah').val();
                var firstNumber = phone[0];
                var errorText = '';
                if (firstNumber == '0') {
                    errorText = 'HP tidak bisa dimulai dengan angka 0';
                } else if (!phone.startsWith("+")) {
                    errorText = 'HP harus diawali kode negara';
                } else if (phone[3] == 0) {
                    errorText = 'HP tidak bisa dimulai dengan angka 0';
                } else if (phone.length > 0 && phone.length < 8) {
                    errorText = 'HP minimal 8 karakter';
                }
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: errorText,
                })
                $("#hp-bawah").focus();
            } else if (email == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com',
                })
                $("#email-bawah").focus();
                emailValidationBawah();
            } else if (isEmailValidBawah == "false") {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com',
                })
                $("#email-bawah").focus();
            }
        }
    });
    </script>