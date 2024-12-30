<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php' ?>
<style>
    .li-nomor:before {
        content: none !important;
    }
</style>

<body id="page-top">

    <!-- Header -->
    <header class="mastheads" style="padding-top: 2rem;padding-bottom:1rem !important;);">
        <div class="" style="background-color: #fff">
            <div class="container text-white">
                <div class="row mt-3 mb-3">
                    <div class="col-md-12 my-auto">
                        <img src="assets/img/HP/MRLC.png" alt="" style="width: 15%;">
                        <img src="https://merryrianalearningcentre.com/assets/img/sp/ps/Logo%20Public%20Speaking-01.png" alt="" style="width: 20%;" class="float-right">
                    </div>
                </div>
            </div>
        </div>

        <div class="warna-bg-abu">
            <div class="container py-4">
                <h2 class="mb-4 style-judul-form" id="title_registration_bottom">
                    Silakan isi data diri Anda,<br /> sebelum melanjutkan.</h2>
                <div class="row justify-content-center" id="form-atas">
                    <div class="col-md-7">
                        <?php include 'include/registration_atas.php' ?>
                    </div>
                </div>
            </div>


            <div class="">
                <div class="container ">
                    <div class="mt-2 text-center col-12">
                        <div class="af-element privacyPolicy w-100" style="text-align: center;margin-top:0px;">
                            <p style="font-family:'Open-sans', Sans-serif !important">Untuk mengetahui info lebih lanjut, hubungi:<br>Telp : (021) 5010 0576<br>WA : +62 878 2999 2888</p>
                            <p class="text-center" style="font-size:14px;color:black;font-family:'Open-sans', Sans-serif !important">We respect your <a href="https://www.aweber.com/permission.htm" style="color: #000" target="_blank" rel="nofollow">email privacy</a></p>
                            <p class="text-center" style="font-size:14px;color:black;font-family:'Open-sans', Sans-serif !important">Copyright © 2020 PT Merry Riana Learning Centre. All Rights Reserved.</p>
                            <p>Please read <a href="https://merryrianalearningcentre.com/termsuser/">Terms & Conditions</a>. <a href="https://merryrianalearningcentre.com/privacypolicy/">Privacy & Policy.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FORM MIDTRANS REDIRECT-->
        <form id="payment-form" method="post" action="https://merryrianalearningcentre.com/thanks/thanks-mrlc/">
            <input type="hidden" name="result_type" id="result-type" value="">
            <input type="hidden" name="result_data" id="result-data" value="">
        </form>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php include 'include/footer.php'; ?>

        <script>
            $(document).ready(function() {
                tableSchedule()
            })

            $("#source").change(function() {
                if ($('#source').val() == "other") {
                    $("#div_anothersource").css("display", "block");
                    $("#othersource").attr("required", true);
                } else {
                    $("#div_anothersource").css("display", "none");
                    $("#othersource").attr('required', false);
                    // $('#div_anothersource').show('slide',{direction:'up'},500);
                }
            });
            // Generate kode pembayaran dan url payment api
            var dt = new Date();
            var affiliate = "<?php echo (!empty($_GET['ref'])) ? $_GET['ref'] : "MRG00001"; ?>";
            var kodeAwal;
            var rand;
            var typeSource;

            if (affiliate != 'MRG00001') {
                kodeAwal = 'M1ID-';
                rand = (Math.floor(Math.random() * 10 ** 7)).toString();
                urlSnap = "https://merryriana.com/server_api/payment_snap";
                typeSource = 'LPAFF';
            } else {
                kodeAwal = 'MRLCID-';
                rand = (Math.floor(Math.random() * 10 ** 5)).toString();
                urlSnap = "https://merryriana.com/server_api/payment_sp_mrlc";
                typeSource = "<?php echo (!empty($_GET['source'])) ? $_GET['source'] : "DIRECT"; ?>";

            }
            var year = dt.getFullYear().toString().substr(2, 2);
            var month = (dt.getMonth() + 1).toString().padStart(2, "0");
            var day = dt.getDate().toString().padStart(2, "0");
            var kodePembayaran = kodeAwal + year + month + day + rand;
            // tutup Generate kode pembayaran dan url payment api

            // Deklarasi object data customer
            var dataCustomer = {
                id_buku: "-",
                name: "",
                email: "",
                phone: "",
                shipping_details: null,
                catatan: "catatan",
                source: "m1sf",
                code: "merch",
                campaign: "merch-m1",
                aff: affiliate,
                order_id: kodePembayaran
            };
            // tutup Deklarasi object data customer

            // Deklarasi object data pembayaran
            var item = {};
            var dataProduk = [];
            var dataPembayaran = [];

            // tutup Deklarasi object data pembayaran
            // url: "https://m1salesforce.com/receive_data_mrlc/get_all_sp_signup/" + 58,
            function tableSchedule() {
                $.ajax({
                    url: "https://m1salesforce.com/receive_data_mrlc/get_all_sp_signup/" + 141,
                    type: "get",
                    dataType: "json",
                    success: function(response) {
                        $('#schedule').empty();
                        $('#schedule').append(`
                    <option value="">Pilih Salah Satu</option>
                `);
                        var no = 1;
                        $.each(response, function(index, element) {
                            console.log(index, element);
                            if (element.id == '75') {
                                element.name = element.name.replace("Kamis");
                            }
                            $('#schedule').append(`
                    <option value="` + element.id + `">` + element.name + `</option>
                `);
                        });
                        console.log(response);
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
            }
        </script>
        <?php include 'include/script_atas.php' ?>

</body>

</html>