

<!--script for form and other-->
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

    var e = document.getElementById("source");

    function sourceValidation() {
    	var sourceValue = $('#source').val();
    	var sourceElement = document.getElementById('source');
    	var goodColor = "#66cc66";
    	var badColor = "red";
    
    	if (sourceValue == "") {
    		$('#div-source-validation').show();
    		sourceElement.style.borderColor = badColor;
    	} else {
    		$('#div-source-validation').hide();
    		sourceElement.style.borderColor = goodColor;
    	}
    }
    
    e.onchange=sourceValidation;
     
    
    function sourceOtherValidation() {
    	var sourceValue = $('#othersource').val();
    	var sourceElement = document.getElementById('othersource');
    	var goodColor = "#66cc66";
    	var badColor = "red";
    
    	if (sourceValue == "") {
    		$('#div-source-validation').show();
    		sourceElement.style.borderColor = badColor;
    	} else {
    		$('#div-source-validation').hide();
    		sourceElement.style.borderColor = goodColor;
    	}
    }

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
    
        function nameanakValidation() {
        var nameValue = $('#name_anak').val();
        var nameElement = document.getElementById('name_anak');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (nameValue.length <= 0) {
            $('#div-name-validation-anak').show();
            nameElement.style.borderColor = badColor;
        } else {
            $('#div-name-validation-anak').hide();
            nameElement.style.borderColor = goodColor;
        }
    }
    
    function usiaanakValidation() {
        var nameValue = $('#usia_anak').val();
        var nameElement = document.getElementById('usia_anak');
        var goodColor = "#66cc66";
        var badColor = "red";

        if (nameValue.length <= 0) {
            $('#div-name-validation-usia').show();
            nameElement.style.borderColor = badColor;
        } else {
            $('#div-name-validation-usia').hide();
            nameElement.style.borderColor = goodColor;
        }
    }

    function slValidation() {
        var psValue = $('#slselect').val();
        var psElement = document.getElementByID('slselect');
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
        
        var newsource = $('#source').val();
        
        var id_buku = 'PS';
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = intelInputNumber.getNumber();
        var src = $('#source').val();
        var countryData = intelInputNumber.getSelectedCountryData();
        $('#country-code').val("+" + countryData.dialCode);
        var aff = "<?= (!empty($_GET['ref'])) ? $_GET['ref'] : '' ?>";
        var source =
            "<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>";
        var code = 'merch';
        var campaign = 'LP-Life-And-Success'

        var branch = '-';
        var program_mr = '-'

        // $('#form-lp').attr('action', newUrl);

        if (name != '' && src != '' && $('#hp').val() != '' && isPhoneValid == "true" && email != '' && isEmailValid ==
            "true" && campaign != '' && newsource != "") {
            if(newsource == 'other'){
        		if ($("#othersource").val() == '') {
        			Swal.fire({
        				heightAuto: false,
        				icon: 'error',
        				title: 'Oops...',
        				text: 'Tulis Darimana Anda mengetahui program ini',
        			})
        			$("#othersource").focus();
        			sourceOtherValidation();
        		}else{
            		$('#modal_sl_atas').modal('show');
            	}
        	}
        	else{
        		$('#modal_sl_atas').modal('show');
        	}
        
        } else {
            if (newsource == '') {
            	Swal.fire({
            		heightAuto: false,
            		icon: 'error',
            		title: 'Oops...',
            		text: 'Source Harus Diisi',
            	})
            	$("#source").focus();
            	sourceValidation();
            }else if (name == '') {
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
        dataCustomer.cabang = cabang;
            
        var cabangmrlc;
        
        switch (cabang) {
            case "TP":
                cabangmrlc = "(PL)";
                break;
            case "SBY":
                cabangmrlc = "(Srby)";
                break;
            case "GS":
                cabangmrlc = "(GdS)";
                break;
            default:
                cabangmrlc = "(" + cabang + ")";
        }

        item.id = 192;
        item.judul = "PR-PS " + cabangmrlc;
        item.harga = 12000000;
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
    
        // function sendDataCustomer tanpa midtrans
    function sendDataCustomerTanpaM1(name, phone, email, cabang,link) {
        dataCustomer.name = name;
        dataCustomer.phone = phone;
        dataCustomer.email = email;
        dataCustomer.cabang = cabang;
            
        var cabangmrlc;
        
        switch (cabang) {
            case "TP":
                cabangmrlc = "(PL)";
                break;
            case "SBY":
                cabangmrlc = "(Srby)";
                break;
            case "GS":
                cabangmrlc = "(GdS)";
                break;
            default:
                cabangmrlc = "(" + cabang + ")";
        }
        
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
        
        item.id = 192;
        item.judul = "Public Speaking" + cabangmrlc;
        item.harga = 12000000;
        item.jumlah = 1;
        dataProduk.push(item);

        dataPembayaran.push(dataCustomer);
        dataPembayaran.push(dataProduk);

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
    // tutup fucntion sendDataCustomer tanpa midtrans
    
  $(document).ready(function(){
    $('#site').on('change', function() {
      if ( this.value == 'OS')
      {
        $(".cabanghp").show();
        $(".namausiaanak").show();
      }
      else
      {
        $(".cabanghp").show();
        $(".namausiaanak").show();
        // $(".cabanghp").hide();
        // $(".namausiaanak").show();
      }
    });
});
    // submit button 
    $("#btn-submit-atas").click(function(e) {
        e.preventDefault();
        
        var newsource = $('#source').val();
        if(newsource == 'other'){
        	newsource = $('#othersource').val();
        }

        var id_buku = 'PR-PS';
        var name = $('#name').val();
        var email = $('#email').val();
        var src = $('#source').val();
        var phone = intelInputNumber.getNumber();
        var countryData = intelInputNumber.getSelectedCountryData();
        $('#country-code').val("+" + countryData.dialCode);
        var aff = "<?= (!empty($_GET['ref'])) ? $_GET['ref'] : 'MRG00001' ?>";
        var source = "<?= (!empty($_GET['source'])) ? $_GET['source'] : 'DIRECT' ?>";
        var link =
            "<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>";
        var code = 'program';
        var campaign = 'LP-Piblic-Speaking'
        var share = "<?= (!empty($_GET['share'])) ? $_GET['share'] : '' ?>"; 
        var branch = '-';
        var program_mr = '-'
        var namaanak = $('#name_anak').val();
             var usiaanak = $('#usia_anak').val();
        var site = $("#site").val();
        if(site == "OS"){
            var cabang = $("#slselect").val();
        }else{
            var cabang =  "OL"
        }
        
        var url = "http://merryriana.com/thanks/?event=mrlc";
        var newUrl = url + "&Name=" + name + "&Phone=" + $('#hp').val() + "&Email=" + email;
        $('#form-lp').attr('action', url);


        if (name != '' && $('#hp').val() != '' && isPhoneValid == "true" && email != '' && isEmailValid ==
            "true" && campaign != ''  && site != '' && namaanak != '' && usiaanak != '' && cabang != '') {
            $('#btn-waiting').show();
            $("#btn-submit-atas").hide();
            
            if(site == "OS"){
                
                 // AJAX MIDTRANS
                
                // getPaymentLink(name,phone,email,cabang);
                
                 var product_id = 192;
                    
                        var productUrl = "https://m1salesforce.com/mrlc/order/detail?id=47";
                        var fullUrl = productUrl + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak + "&Ref=" + aff + "&Share=" + share;
                        
                $.ajax({
                url: "https://m1salesforce.com/receive_data_mrdl/get_data_lp",
                type: 'POST',
                dataType: 'json',
                data: {
                    'name': name,
                    'phone': $('#hp').val(),
                    'email': email,
                    'subkategori_id': "70",
                    'merch_id': "0",
                    'type':source,
                    'source': newsource,
                    'fighter_id': aff,
                    'url': fullUrl,
                    'information': cabang
                },
                success: function (result) {
                    if (aff == 'MRG00001') {
                        // $.ajax({
                        //     url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                        //     type: 'POST',
                        //     dataType: 'html',
                        //     data: {
                        //         'name': name,
                        //         'email': email,
                        //         'phone': $('#hp').val(),
                        //         'programs': "PR-PS",
                        //         'jumlahmodul': cabang,
                        //         'source': link,
                        //         'campaign': 'LP-Public-Speaking',
                        //         'type': source,
                        //         'code': code,
                        //         'kode_referral': "MRG00001",
                        //         'nama_anak': namaanak,
                        //         'usia_anak': usiaanak
                        //     },
                        //     success: function (result) {
                        //         console.log("bisa");
                        //         console.log("bisa tanpa aff");
                                
                        //         var url = "https://merryrianalearningcentre.com/order/program_rc/detail?id=47"; // URL nya sesuai produk
                        //         var new_url = url + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak+ "&Source=" + newsource;
                        //         console.log(new_url);
                        //         $('#form-lp').attr('action', new_url);
                        //         $("#form-lp").submit();
                        //     },
                        //     error: function (xhr, status, errorThrown) {
                        //         console.log(xhr, status, errorThrown);
                        //     }
                        // });
                        
                        var url = "https://merryrianalearningcentre.com/order/program_rc/detail?id=47"; // URL nya sesuai produk
                        var new_url = url + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak+ "&Source=" + newsource;
                        console.log(new_url);
                        $('#form-lp').attr('action', new_url);
                        $("#form-lp").submit();
                        
            
                    } else {
                        // $.ajax({
                        //     url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                        //     type: 'POST',
                        //     dataType: 'html',
                        //     data: {
                        //         'name': name,
                        //         'email': email,
                        //         'phone': $('#hp').val(),
                        //         'programs': "PR-PS",
                        //         'jumlahmodul': cabang,
                        //         'source': fullUrl,
                        //         'campaign': 'LP-Public-Speaking',
                        //         'type': source,
                        //         'code': code,
                        //         'kode_referral': aff,
                        //         'nama_anak': namaanak,
                        //         'usia_anak': usiaanak
                        //     },
                        //     success: function(result) {
                                
                       
                        // },
                        // error: function(xhr, status, errorThrown) {
                        //     console.log(xhr, status, errorThrown)
                        // }
                        // });
                           // redirect
                        console.log(result);
                        aff_id = result.aff_id;

                        var url = "https://m1salesforce.com/mrlc/order/detail?id=47";
                        var new_url = url + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak + "&Ref=" + aff + "&Share=" + share + "&Aff_id=" + aff_id;
                            
                        console.log("bisa");
                         setTimeout(function(){
                             
                        $('#form-asli').attr('action', new_url);
                        $("#form-asli").submit();
                        
                         }, 2000)
                      
                        
                    }
            
                },
                error: function (xhr, status, errorThrown) {
                    console.log(xhr, status, errorThrown);
                }
            });
            }else{
                
                // sendDataCustomerTanpaM1(name, phone, email, cabang,link)
                
                 var product_id = 192;
                    
                        var productUrl = "https://m1salesforce.com/mrlc/order/detail?id=47";
                        var fullUrl = productUrl + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak + "&Ref=" + aff + "&Share=" + share;
                        
                $.ajax({
                url: "https://m1salesforce.com/receive_data_mrdl/get_data_lp",
                type: 'POST',
                dataType: 'json',
                data: {
                    'name': name,
                    'phone': $('#hp').val(),
                    'email': email,
                    'subkategori_id': "68",
                    'merch_id': "0",
                    'type':source,
                    'source': src,
                    'fighter_id': aff,
                    'url': fullUrl,
                    'information': cabang
                },
                success: function (result) {
                    if (aff == 'MRG00001') {
                        // $.ajax({
                        //     url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                        //     type: 'POST',
                        //     dataType: 'html',
                        //     data: {
                        //         'name': name,
                        //         'email': email,
                        //         'phone': $('#hp').val(),
                        //         'programs': "PR-PS",
                        //         'jumlahmodul': cabang,
                        //         'source': link,
                        //         'campaign': 'LP-Public-Speaking',
                        //         'type': source,
                        //         'code': code,
                        //         'kode_referral': "MRG00001",
                        //         'nama_anak': namaanak,
                        //         'usia_anak': usiaanak
                        //     },
                        //     success: function (result) {
                        //         console.log("bisa");
                        //         console.log("bisa tanpa aff");
                        //         // var url = "https://merryrianalearningcentre.com/order/program_rc_online/detail?id=47";
                        //         var url = "https://merryrianalearningcentre.com/order/program_rc/detail?id=47"; // URL nya sesuai produk
                        //         var new_url = url + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak+ "&Source=" + newsource;
                        //         $('#form-lp').attr('action', new_url);
                        //         $("#form-lp").submit();
                        //     },
                        //     error: function (xhr, status, errorThrown) {
                        //         console.log(xhr, status, errorThrown);
                        //     }
                        // });
                        
                        console.log("bisa");
                        console.log("bisa tanpa aff");
                        // var url = "https://merryrianalearningcentre.com/order/program_rc_online/detail?id=47";
                        var url = "https://merryrianalearningcentre.com/order/program_rc/detail?id=47"; // URL nya sesuai produk
                        var new_url = url + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak+ "&Source=" + newsource;
                        $('#form-lp').attr('action', new_url);
                        $("#form-lp").submit();
            
                    } else {
                        
                        // $.ajax({
                        //     url: "https://api.merryriana.com/api/mrdl/form/insert_data_new_m1",
                        //     type: 'POST',
                        //     dataType: 'html',
                        //     data: {
                        //         'name': name,
                        //         'email': email,
                        //         'phone': $('#hp').val(),
                        //         'programs': "PR-PS",
                        //         'jumlahmodul': cabang,
                        //         'source': fullUrl,
                        //         'campaign': 'LP-Public-Speaking',
                        //         'type': source,
                        //         'code': code,
                        //         'kode_referral': aff,
                        //         'nama_anak': namaanak,
                        //         'usia_anak': usiaanak
                        //     },
                        //     success: function(result) {
                                
                       
                        // },
                        // error: function(xhr, status, errorThrown) {
                        //     console.log(xhr, status, errorThrown)
                        // }
                        // });
                           // redirect
                        console.log(result);
                        aff_id = result.aff_id;
    
                        var url = "https://m1salesforce.com/mrlc/order/detail?id=47";
                        var new_url = url + "&Name=" + name + "&Phone=" + phone + "&Email=" + email + "&Anak=" + namaanak + "&Usia=" + usiaanak + "&Ref=" + aff + "&Share=" + share + "&Aff_id=" + aff_id;
                            
                        console.log("bisa");
                        setTimeout(function(){
                             
                        $('#form-asli').attr('action', new_url);
                        $("#form-asli").submit();
                        
                         }, 2000)
                    }
            
                },
                error: function (xhr, status, errorThrown) {
                    console.log(xhr, status, errorThrown);
                }
            });
                
            }
        } else {
            if (name == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Nama lengkap harus diisi',
                })
                $("#name").focus();
                nameValidation();
            }  else if (site == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilih lokasi',
                })
                $("#site").focus();
            }else if (namaanak == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Nama lengkap anak harus diisi',
                })
                $("#name_anak").focus();
                nameanakValidation();
            } else if (usiaanak == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usia anak harus diisi',
                })
                $("#usia_anak").focus();
                usiaanakValidation();
            }else if (cabang == '') {
                Swal.fire({
                    heightAuto: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilih cabang',
                })
                $("#slselect").focus();
                slValidation();
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
    // submit button
    </script>