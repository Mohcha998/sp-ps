<script>

    var inputHp = document.querySelector("#hp");
    var intelInputNumber = window.intlTelInput(inputHp, {
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


    function nameValidation() {
        var nameValue = $('#name').val();
        var nameElement = document.getElementById('name');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (nameValue.length <= 0) {
            $('#div-name-validation').show();
            nameElement.style.borderColor = badColor;
        } else {
            $('#div-name-validation').hide();
            nameElement.style.borderColor = goodColor;
        }
    }

    function usiaValidation() {
        var usiaValue = $('#usia').val();
        var usiaElement = document.getElementById('usia');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (usiaValue.length <= 0) {
            $('#div-usia-validation').show();
            usiaElement.style.borderColor = badColor;
        } else {
            $('#div-usia-validation').hide();
            usiaElement.style.borderColor = goodColor;
        }
    }
    
    function psaValidation() {
        var psValue = $('#psaselect').val();
        var psElement = document.getElementByID('psaselect');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (nameValue.length <= 0) {
            $('#div-name-validation').show();
            nameElement.style.borderColor = badColor;
        } else {
            $('#div-name-validation').hide();
            nameElement.style.borderColor = goodColor;
        }
    }

    var isPhoneValid;
    function phoneValidation() {
        isPhoneValid = $('#phone-value-validation').val();
        var phone = document.getElementById('hp');
        var validationMessage = document.getElementById('phone-validation-message');
        var goodColor = "#66cc66";
        var badColor = "red";
        var firstNumber = phone.value[0];

        var countryData = intelInputNumber.getSelectedCountryData();
        if (phone.value.length == 1 && phone.value[0] != '+') {
            if (firstNumber == '0') {
                var mobile = "+" + countryData.dialCode;
                $('#hp').val(mobile);
            } else {
                var mobile = "+" + countryData.dialCode + phone.value;
                $('#hp').val(mobile);
            }
        }

        if (phone.value.length >= 8 && phone.value.length <= 15 && firstNumber != '0' && phone.value.startsWith("+") &&
            phone.value[3] != '0') {
            phone.style.borderColor = goodColor;
            validationMessage.style.color = goodColor;
            validationMessage.innerHTML = "";
            isPhoneValid = "true";
        } else if (phone.value.length == 0) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP harus diisi"
            isPhoneValid = "false";
            return
        } else if (firstNumber == '0') {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP tidak bisa dimulai dengan angka 0"
            isPhoneValid = "false";
            return
        } else if (!phone.value.startsWith("+")) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP harus diawali kode negara"
            isPhoneValid = "false";
            return
        } else if (phone.value[3] == 0) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP tidak bisa dimulai dengan angka 0"
            isPhoneValid = "false";
            return
        } else if (phone.value.length > 0 && phone.value.length < 8) {
            phone.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "HP minimal 8 karakter"
            isPhoneValid = "false";
            return
        }
    }

    var isEmailValid;
    function emailValidation() {
        isEmailValid = $('#email-value-validation').val();
        var email = document.getElementById('email');
        var validationMessage = document.getElementById('email-validation-message');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
            email.style.borderColor = goodColor;
            validationMessage.style.color = goodColor;
            validationMessage.innerHTML = "";
            isEmailValid = "true";
        } else if (email.value.length == 0) {
            email.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com"
            isEmailValid = "false";
            return
        } else {
            email.style.borderColor = badColor;
            validationMessage.style.color = badColor;
            validationMessage.innerHTML = "Harap masukkan Email dengan format yang benar. Contoh : budi@gmail.com"
            isEmailValid = "false";
            return
        }
    }
    // js validation
    

    
    // validasi button 
    $("#btn-submit-atas-modal").click(function(e) {
        e.preventDefault();
        var id_buku = 'PSA';
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = intelInputNumber.getNumber();
        var countryData = intelInputNumber.getSelectedCountryData();
        $('#country-code').val("+" + countryData.dialCode);
        var aff = "<?= (!empty($_GET['ref'])) ? $_GET['ref'] : '' ?>";
        var link ="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>";
        var source = "<?= (!empty($_GET['source'])) ? $_GET['source'] : 'DIRECT' ?>";
        var code = 'merch';
        var campaign = 'LP-Public-Speaking-Academy'

        var branch = '-';
        var program_mr = '-'

        // $('#form-lp').attr('action', newUrl);

        if (name != '' && $('#hp').val() != '' && isPhoneValid == "true" && email != '' && isEmailValid ==
            "true" && campaign != '') {
            $('#modal_psa_atas').modal('show');
        
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

    // Function Change Result
    function changeResult(type,data){
        $("#result-type").val(type);
        $("#result-data").val(JSON.stringify(data));
    }
    // Function Change Result

    // Function Snap
    function showSnap(token) {
        snap.pay(token, {
            onSuccess: function(result){
                changeResult('success', result);
                console.log(result.status_message);
                console.log(result);
                $("#payment-form").submit();
            },
            onPending: function(result){
                changeResult('pending', result);
                console.log(result.status_message);
                $("#payment-form").submit();
            },
            onError: function(result){
                changeResult('error', result);
                console.log(result.status_message);
                $("#payment-form").submit();
            }
        });
    }
    // Function Snap
    
    // function getPaymentLink
    function getPaymentLink(name, phone, email, cabang) {

        dataCustomer.name = name;
        dataCustomer.phone = phone;
        dataCustomer.email = email;
        dataCustomer.cabang = "Usia : " + cabang;

        item.id = 191;
        item.judul = "M1 Webinar";
        item.harga = 10000;
        item.jumlah = 1;
        dataProduk.push(item);

        dataPembayaran.push(dataCustomer);
        dataPembayaran.push(dataProduk);
                
        $.ajax({
            url: urlSnap,
            type: "POST",
            data: JSON.stringify(dataPembayaran),
            dataType: "json",
            success: function(response) {
                console.log('payment');
                console.log(response);
                var link = response.redirect_url;
                  
                showSnap(response.token);

                sendDataCustomer(link);
                
            },
            error: function(e) {
                console.log(e.responseText);
                alert(e.responseText);

            }
        });        
    }
    // tutup function getPaymentLink
    
    // function sendDataCustomer untuk kirim data ke M1
    function sendDataCustomer(link) {
        var dataPeserta = {
			nama: dataCustomer.name,
			hp: dataCustomer.phone,
            email: dataCustomer.email,
            information: dataCustomer.cabang,
            orderId: dataCustomer.order_id,
            share: "<?= (!empty($_GET['share'])) ? $_GET['share'] : 'copy' ?>",
            aff: dataCustomer.aff,
            source: typeSource,
            url: link
        };

        var dataTransaksi = {
            dataPeserta: dataPeserta,
            dataProduct: dataProduk
        }

        console.log(dataTransaksi);

        $.ajax({
            url: "https://m1salesforce.com/receive_data_sp",
            type: "POST",
            data: JSON.stringify(dataTransaksi),
            dataType: "json",
            success: function(response) {
                console.log(response);
            },
            error: function(e) {
                console.log(e.responseText);
                alert(e.responseText);
            }
        });  
    }
    // tutup fucntion sendDataCustomer
    
    // submit button 
    $("#btn-submit-atas").click(function(e) {
        e.preventDefault();
        var id_buku = 'PS';
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = intelInputNumber.getNumber();
        var countryData = intelInputNumber.getSelectedCountryData();
        $('#country-code').val("+" + countryData.dialCode);
        var aff = "<?= (!empty($_GET['ref'])) ? $_GET['ref'] : '' ?>";
        var link ="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>";
        var source = "<?= (!empty($_GET['source'])) ? $_GET['source'] : 'DIRECT' ?>";
        var code = 'program';
        var campaign = 'LP-Public-Speaking-Academy'
        var share = "<?= (!empty($_GET['share'])) ? $_GET['share'] : '' ?>";
        var branch = '-';
        var program_mr = '-'
        var cabang = $("#usia").val();
        // var url = "https://merryrianalearningcentre.com/thanks/";
        // var newUrl = url + "&Name=" + name + "&Phone=" + $('#hp').val() + "&Email=" + email;
        // $('#form-lp').attr('action', url);

        if (name != '' && $('#hp').val() != '' && isPhoneValid == "true" && email != '' && isEmailValid ==
            "true" && campaign != '' && cabang != ''  && cabang != 0) {
            $('#btn-waiting').show();
            $("#btn-submit-atas").hide();
            // AJAX MIDTRANS
            
            getPaymentLink(name,phone,email,cabang);


            if (aff == '') {
                
                //  $.ajax({
                //         url: "https://m1salesforce.com/receive_data_mrdl/get_data_lp",
                //         type: 'POST',
                //         dataType: 'json',
                //         data: {
                //             'name': name,
                //             'phone': $('#hp').val(),
                //             'email': email,
                //             'subkategori_id': "59",
                //             'merch_id': "0",
                //             'source': share,
                //             'type' : source,
                //             'fighter_id': 'MRG00001',
                //             'information': cabang,
                //             'url': null
                //         },
                //         success: function(result) {
                //             console.log("test m1sf");
                //             }
                //         });
                        
                   $.ajax({
                    url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'name': name,
                        'email': email,
                        'phone': phone,
                        'programs': "m1webinar",
                        'jumlahmodul': cabang,
                        'source': link,
                        'campaign': 'LP-M1-Webinar',
                        'type' : source,
                        'code': code
                    },
                    success: function(result) {
                        console.log("bisa");
                                                // $("#form-lp")[0].submit();
                        // window.location.replace('https://merryrianalearningcentre.com/thanks/');
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log("error");
                    }
                });
  

            } else {
                // $.ajax({
                //     url: "https://m1salesforce.com/receive_data_mrdl/get_data_lp",
                //     type: 'POST',
                //     dataType: 'json',
                //     data: {
                //         'name': name,
                //         'phone': $('#hp').val(),
                //         'email': email,
                //         'subkategori_id': "59",
                //         'merch_id': "0",
                //         'source': share,
                //         'type' : source,
                //         'fighter_id': aff,
                //         'information': cabang,
                //         'url': null
                //     },
                //     success: function(result) {
                //         console.log("test m1sf");
                //         }
                //     });
                        
                 $.ajax({
                    url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'name': name,
                        'email': email,
                        'phone': phone,
                        'programs': "m1webinar",
                        'jumlahmodul': cabang,
                        'source': link,
                        'campaign': 'LP-M1-Webinar',
                        'type' : source,
                        'code': code,
                        'kode_referral' : aff
                    },
                    success: function(result) {
                        // $("#form-asli")[0].submit();
                        // window.location.replace('https://merryrianalearningcentre.com/thanks/');
                        console.log("bisa");
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log("error");
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
            } else if ($('#usia').val() == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usia harus diisi',
                })
                $("#usia").focus();
                usiaValidation();
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
    // submit button
    </script>