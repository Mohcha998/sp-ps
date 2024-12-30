<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Thank You Page - Merry Riana Group</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Untuk Whatsapp start -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Untuk Whatsapp end -->

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '246338667501384');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=246338667501384&ev=PageView&noscript=1"
/></noscript>
<script>
                    	fbq('track', 'InitiateCheckout', { 
                    		value: 99000,
                    		currency: 'IDR',
                    		content_name: 'Sesi Perkenalan Public Speaking'
                        	});
                    </script>
                    <noscript>
                    	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=246338667501384&ev=InitiateCheckout&value=99000&currency='IDR'&content_name=Sesi Perkenalan Public Speaking&noscript=1" />
                    </noscript>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #my_centered_buttons {
            display: flex;
            justify-content: center;
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">

</head>

<body>
    <form class="form-signin">
        <div class="text-center mb-4 bg-atas">
            <img class="mb-4" src="https://merryrianalearningcentre.com/assets/img/mrlc.png" alt="" width="100" height="100">
            <h1 id="terima-kasih" class="h3 mb-3 font-weight-bold">Terima Kasih!</h1>
            <h3 id="keterangan">Mohon selesaikan pembayaran kamu dalam waktu 1 x 24 jam.<br/>Seat Terbatas <span style="color: red"></span>!</h3>

            <hr style=" margin-top: 3rem !important ; margin-bottom: 3rem !important ;">
            <h4 id="instruksi">Setelah ini, kamu akan terima WhatsApp & Email tentang Prosedur Pembayaran. <br/>Kamu bisa cek di bagian Inbox / Spam / Promotions.</h4>
            <h4 id="selesaikan">Kamu juga bisa selesaikan pembayaran kamu dengan klik link di bawah ini.</h4>
            <a id="link"></a>

        </div>

        <div class="text-center">
  
            <h1 class="h3 mb-3 mt-3 font-weight-normal" id="cek-email">Dapatkan Inspirasi Setiap Hari dan Tetap Terhubung Bersama Social
                Media Miss Merry Riana!</h1>
            <div class="a2a_kit a2a_kit_size_64 a2a_default_style a2a_follow" id="my_centered_buttons">
                <a class="a2a_button_twitter" data-a2a-follow="MerryRiana"></a>
                <a class="a2a_button_facebook" data-a2a-follow="MerryRiana"></a>
                <a class="a2a_button_instagram" data-a2a-follow="MerryRiana"></a>
                <a class="a2a_button_youtube" data-a2a-follow="merryrianashow"></a>
            </div>
        </div>

        <p class="mt-5 mb-3 text-muted text-center">&copy; Merry Riana Learning Centre - 2020</p>

    </form>


    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <script>
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        
        console.log(urlParams);
        
        if(urlParams.has('transaction_status')) {
            var transactionStatus = urlParams.get('transaction_status');
            var instruksi = document.getElementById("instruksi");
            var selesaikan = document.getElementById("selesaikan");
            var link = document.getElementById("link");
            var linkPembayaran = '<?= isset($_GET['link_pembayaran']) ? urldecode($_GET['link_pembayaran']) : null ?>';
            link.innerHTML = linkPembayaran;
            link.href = linkPembayaran;
            if(transactionStatus == 'settlement' || transactionStatus == 'success' || transactionStatus == 'capture') {
                var keterangan = document.getElementById("keterangan");
                keterangan.innerHTML = "Pembayaran berhasil.";
            
                instruksi.style.display = "none";
                selesaikan.style.display = "none";
                link.style.display = "none";
                
            } else if(transactionStatus == 'cancel' || transactionStatus == 'deny' || transactionStatus == 'expire') {
                var keterangan = document.getElementById("keterangan");
                keterangan.innerHTML = "Pembayaran gagal.";
                var terimaKasih = document.getElementById("terima-kasih");
                terimaKasih.style.color = "red";
                
                instruksi.style.display = "none";
                selesaikan.style.display = "none";
                link.style.display = "none";
            }
        }
        
        if(urlParams.has('red')) {
            var cekEmail = document.getElementById("cek-email");
            cekEmail.innerHTML = "Silahkan cek Email Anda untuk mengakses Video Stairway to Success by Merry Riana";
            var keterangan = document.getElementById("keterangan");
            keterangan.style.visibility = "hidden";
        }
    </script>

</body>

</html>