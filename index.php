<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php' ?>

<style>
    .large-text {
        font-size: 24px;
        font-family: "Open Sans", Sans-serif;
        color: #000;
    }

    .small-text {
        font-size: 20px;
        font-family: Nunito, Sans-serif;
        color: #000;
    }

    @media (min-width: 769px) {
        .div-sticky {
            display: block;

        }

        .desktop {
            display: block;
        }

        .mobile {
            display: none;
        }

        .whats-app {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 50px;
            right: 15px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            margin-right: 20px;
        }

        .my-float {
            margin-top: 16px;
        }
    }

    .align-left {
        text-align: left;
    }

    .align-center {
        text-align: center;
    }

    .mobile-padding {
        display: none;
    }

    @media (max-width: 768px) {
        /*.div-sticky {*/
        /*    display: none;*/
        /*}*/

        .number-progress {
            display: none;
        }

        .desktop {
            display: none;
        }

        .mobile {
            display: block;
        }

        .style-judul {
            font-size: 25px;
        }

        .mobile-padding {
            display: block;
        }

        .whats-app {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 130px;
            right: 15px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            margin-right: 10px;
        }

        .my-float {
            margin-top: 16px;
        }
    }

    @media only screen and (max-width: 600px) {
        body {
            margin: 1px;
            padding: 1px;
        }
    }

    td {
        vertical-align: top;
    }

    #main-course_120:active {
        color: white;
    }

    #main-course_120:visited {
        color: white;
    }

    #main-course_120:hover {
        color: white;
    }

    .custom-spinner {
        width: 18px;
        height: 18px;
        vertical-align: baseline;
        margin-right: 2px;
        border-width: 3px;
    }

    .mobile-headline {
        padding: 0 !important;
    }
</style>

<body id="page-top" style="min-width: 100%;">

    <!-- Header -->
    <header class="mastheads warna-bg-abu" style="padding-top: 2rem; padding-bottom: 2rem;min-height: 20rem;">
        <div class="text-center my-auto" style="padding-left: 15px; padding-right: 15px;">
            <div class="row">
                <div class="col-md-12 desktop">
                    <div class="row">
                        <div class="col-md-8 align-left">
                            <h2 class="mb-4 mt-4 style-judul" style="font-size: 35px;">HARUS TUNGGU MALU DULU BARU BELAJAR? JANGAN DONK, SEGERA CARI RAHASIANYA!!!</h2>
                            <h3>74% orang atau artinya 2 dari 3 orang mengalami rasa takut atau gugup saat harus bicara di depan umum, apapun alasan nya, belum ada persiapan, tiba-tiba blank, bicara terbata-bata. Celakanya semakin kita bingung semakin ditertawakan oleh Audience. Apakah problem ini pernah atau harus dialami oleh anak Anda terlebih dahulu baru cari solusi?</h3><br />
                            <h3>Sesi Perkenalan : <span id="tanggal-webinar">
                                    <div class="spinner-border custom-spinner"></div>Loading...
                                </span><br />
                                (Dibawakan oleh Merry Riana Associate Trainer)</h3>
                            <h3>Apakah Anda ingin anak Anda belajar dari Ms. Merry Riana?</h3>
                            <a href="#form-abu" style="padding-left: 36px; padding-right: 36px; background-color: #572a32 ; color: white;" class="btn btn-lg buttonss mb-4"><i class="far fa-hand-point-right"></i> Ya Saya Mau!</a><br />
                            <!--<div style="display: none;" class="free-ticket mb-4">-->
                            <!--    <h3 style="color: #ae0001;">Free 1 Ticket Online Inspirafest 2022 (senilai Rp.100.000)</h3>-->
                            <!--    <h4 style="color: red;">* Jika melakukan pembayaran s/d tanggal 10 Agustus 2022 pk 23:59 WIB</h4>-->
                            <!--</div>-->
                            <h4><i class="far fa-user mr-2 mb-4"></i>479 Peserta Terdaftar</h4>
                        </div>
                        <div class="col-md-4 text-center">
                            <img class="img-fluid" src="assets/img/Logo_Public_Speaking-01.png" width="70%" alt="Logo Merry Riana School Of Public Speaking" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mobile">
                    <img class="img-fluid header-pic" src="assets/img/Logo_Public_Speaking-01.png" loading="lazy" style="max-width: 45%;" alt="Logo Merry Riana School Of Public Speaking">
                    <div class="align-left">
                        <!--                  <h3 class="mb-4 mt-4 style-judul" style="font-size: 30px;">NO. 1 PUBLIC SPEAKING FOR KIDS AND TEENS</h3>-->
                        <!--<h4>Tidak ada lagi rasa grogi, takut, cemas berlebih, dan malu saat berbicara di depan banyak orang. Belajar Public Speaking dengan mudah & menyenangkan.</h4>-->
                        <h3 class="mb-4 mt-4 style-judul" style="font-size: 35px;">HARUS TUNGGU MALU DULU BARU BELAJAR? JANGAN DONK, SEGERA CARI RAHASIANYA!!!</h3>
                        <h4>74% orang atau artinya 2 dari 3 orang mengalami rasa takut atau gugup saat harus bicara di depan umum, apapun alasan nya, belum ada persiapan, tiba-tiba blank, bicara terbata-bata. Celakanya semakin kita bingung semakin ditertawakan oleh Audience. Apakah problem ini pernah atau harus dialami oleh anak Anda terlebih dahulu baru cari solusi?</h4><br />
                        <h4>Sesi Perkenalan :<br />
                            <span id="tanggal-webinar-mobile">
                                <div class="spinner-border custom-spinner"></div>Loading...
                            </span>
                            <br />(Dibawakan oleh Merry Riana Associate Trainer)
                        </h4>
                        <a href="#form-abu" style="padding-left: 36px; padding-right: 36px; background-color: #572a32 ; color: white;" class="btn btn-lg buttonss my-4"><i class="far fa-hand-point-right"></i> Daftar Sekarang</a>
                        <!--<div style="display: none;" class="free-ticket mb-4">-->
                        <!--    <h3 style="color: #ae0001;">Free 1 Ticket Online Inspirafest 2022 (senilai Rp.100.000)</h3>-->
                        <!--    <h4 style="color: red;">* Jika melakukan pembayaran s/d tanggal 10 Agustus 2022 pk 23:59 WIB</h4>-->
                        <!--</div>-->
                        <h4><i class="far fa-user mr-2 mb-4"></i>479 Peserta Terdaftar</h4><br />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- Section Content -->
    <div class="row mt-3">
        <div class="col-lg-9 col-sm-12">

            <!-- Video Ads -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="warna-background" style="background-color: white;">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-10 mx-auto">
                                    <div class="" style="position:relative; padding-bottom: 56.25%;">
                                        <iframe title="Video Profile Merry Riana Public Speaking" width="" height="" src="https://www.youtube.com/embed/1d-_torm4Q8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Ads -->

            <div class="row">
                <div class="warna-bg-putih" style="padding: 15px;">
                    <div class="container">
                        <div class="row">
                            <div class="desktop">
                                <div class="container">
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Tidak dapat dipungkiri, di era yang sangat luar biasa penuh kompetisi ini, setiap orang berusaha lebih unggul dibandingkan orang lainnya.</h1>
                                    <h1 class="style-judul mb-3" style="font-size: 20px">Apapun profesinya, pelajar, mahasiswa, accountant, peneliti, pengarang buku, ahli IT, sales, kaum profesional lainnya, harus berusaha “menjual” diri mereka dengan berbagai kemampuannya tersebut agar dapat unggul dalam merebut setiap kesempatan yang ada.</h1>
                                    <h1 class="style-judul mb-3" style="font-size: 20px">Kabar baiknya hal tersebut hanya membutuhkan skill Public Speaking yang mumpuni. Sayangnya tidak banyak lembaga pendidikan yang menyediakan pembelajaran Public Speaking yang relevan, langsung dapat digunakan dalam kehidupan sehari-hari tapi juga menyenangkan.</h1>
                                    <h1 class="style-judul mb-3" style="font-size: 20px">Merry Riana School of Public Speaking jawabannya!!! Semakin dini anak Anda menguasai skill Public Speaking, semakin besar kesempatan yang mereka peroleh meraih kesuksesan di dalam sekolah dan kehidupannya.</h1>
                                    <div class="col-md-12 text-center">
                                        <!--DESKTOP_POSTER_1_04032022-->
                                        <!--ADS_SP PS-landscape.jpg-->
                                        <!--../../assets/img/program/program_12_cabang/PS_landscape.jpg-->
                                        <!--../../assets/img/program/program_ps.png-->
                                        <!--../../assets/img/sp/ps/MRLC_SP PS-landscape.jpg-->
                                        <!--<img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_12_cabang/PS_landscape.jpg" width="85%" alt="Poster Public Speaking" loading="lazy">-->
                                        <!--sementara-->
                                        <!--<img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_17_cab/SP PS-landscape.jpg" width="85%" alt="Poster Public Speaking" loading="lazy">-->
                                        <img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_18_cabang/SP PS-landscape.jpg" width="85%" alt="Poster Public Speaking" loading="lazy">
                                        <!--sementara-->
                                    </div>
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Kelas Public Speaking dari Merry Riana telah berhasil mengubah ribuan anak menjadi lebih percaya diri dan kini giliran anak Anda membuktikannya!!!</h1>
                                    <!--<h1 class="style-judul mb-2" style="font-size: 20px">Kini giliran anak Anda membuktikannya!!!</h1>-->
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Seorang Public Speaker handal mampu mengendalikan rasa takut saat mereka harus bicara di depan umum, bukan membiarkan rasa takut tersebut yang mengendalikan mereka.</h1>
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Oleh karena itu Miss Merry Riana merancang sebuah program untuk membantu anak Anda bukan hanya meningkatkan kepercayaan dirinya tetapi juga menjadi seorang yang menguasai panggungnya.</h1>
                                </div>
                                <!--editdidi04072024-->
                                <div style="padding-top: 1rem; padding-bottom: 1rem; background-color: #572a32 ">
                                    <div class="container mt-2">
                                        <div class="">
                                            <h1 class="style-judul text-white" style="font-size: 20px">1. Apakah anak Anda masih tidak percaya diri jika berhadapan dengan banyak orang ?</h1>
                                            <h1 class="style-judul text-white" style="font-size: 20px">2. Apakah Anda ingin anak Anda mampu mengendalikan rasa takutnya dan mampu mengungkapkan ide-ide hebat mereka dengan penuh percaya diri ?</h1>
                                            <h1 class="style-judul text-white" style="font-size: 20px">3. Apakah Anda ingin anak Anda berlatih Public Speaking dalam lingkungan yang positif dan menyenangkan ?</h1>
                                            <h1 class="style-judul text-white" style="font-size: 24px">Jika jawabannya YA, maka Merry Riana School of Public Speaking adalah jawabannya.</h1>
                                        </div>
                                    </div>
                                </div>
                                <!--editdidi04072024-->
                            </div>
                            <div class="mobile">
                                <!--<div class="container">-->
                                <!--    <p class="enrolling text-left">Di era masa kini, nilai sekolah memang penting, wawasan yang luas memang harus, namun apa jadinya kalau anak Anda nilainya bagus, berwawasan luas tapi TIDAK BERANI BERBICARA DI DEPAN UMUM ?</p>-->
                                <!--    <p class="enrolling text-left">Apapun cita-cita & pekerjaan anak Anda di masa depan, hal pertama yang harus anak Anda kuasai adalah kemampuan berbicara di depan umum (Public Speaking). Semakin anak Anda menguasai Public Speaking, semakin besar kesempatan yang dimiliki mereka menuju kesuksesan.</p>-->
                                <!--../../assets/img/program/program_12_cabang/PS_square.jpg-->
                                <!--../../assets/img/mobile/SP PS-square.jpg-->
                                <!--<img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_12_cabang/PS_square.jpg" width="100%" alt="Poster Public Speaking" loading="lazy">-->
                                <!--sementara-->
                                <!--        <img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_17_cab/SP PS -square.jpg" width="100%" alt="Poster Public Speaking" loading="lazy">-->
                                <!--sementara-->
                                <!--    <p class="enrolling text-left">Sebelum Anda mengikuti Sesi Perkenalan ini, apakah Anda tahu bahwa Merry Riana School Of Public Speaking telah mengubah hidup ribuan anak menjadi lebih percaya diri.</p>-->
                                <!--    <p class="enrolling text-left">Menurut lembaga survey di Amerika, 74% orang di dunia mengalami Glossophobia, yaitu rasa takut berlebihan berbicara di depan umum!</p>-->
                                <!--    <p class="enrolling text-left">Namun bedanya, Public Speaker yang handal mampu mengendalikan rasa takutnya dan bukannya membiarkan rasa takut yang mengendalikan mereka.</p>-->
                                <!--    <p class="enrolling text-left">Oleh karena itu, Miss Merry Riana merancang sebuah program untuk membantu anak Anda melatih kemampuan Public Speaking sehingga mereka bisa mengendalikan rasa takutnya.</p>-->
                                <!--    <p class="enrolling text-left">1. Apakah anak Anda tidak percaya diri jika berhadapan dengan banyak orang ?</p>-->
                                <!--    <p class="enrolling text-left">2. Apakah Anda ingin anak Anda bisa mengendalikan rasa malu dan berani menyampaikan pendapatnya ?</p>-->
                                <!--    <p class="enrolling text-left">3. Apakah Anda ingin anak Anda belajar Public Speaking dengan lingkungan yang positif atau menyenangkan ?</p>-->
                                <!--    <p class="enrolling text-left">Jika Anda ingin anak Anda menjadi lebih percaya diri dan menguasai keterampilan Public Speaking, maka Merry Riana School Of Public Speaking adalah jawabannya</p>-->
                                <!--</div>-->
                                <div class="container">
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Tidak dapat dipungkiri, di era yang sangat luar biasa penuh kompetisi ini, setiap orang berusaha lebih unggul dibandingkan orang lainnya.</h1>
                                    <h1 class="style-judul mb-3" style="font-size: 20px">Apapun profesinya, pelajar, mahasiswa, accountant, peneliti, pengarang buku, ahli IT, sales, kaum profesional lainnya, harus berusaha “menjual” diri mereka dengan berbagai kemampuannya tersebut agar dapat unggul dalam merebut setiap kesempatan yang ada.</h1>
                                    <h1 class="style-judul mb-3" style="font-size: 20px">Kabar baiknya hal tersebut hanya membutuhkan skill Public Speaking yang mumpuni. Sayangnya tidak banyak lembaga pendidikan yang menyediakan pembelajaran Public Speaking yang relevan, langsung dapat digunakan dalam kehidupan sehari-hari tapi juga menyenangkan.</h1>
                                    <h1 class="style-judul mb-3" style="font-size: 20px">Merry Riana School of Public Speaking jawabannya!!! Semakin dini anak Anda menguasai skill Public Speaking, semakin besar kesempatan yang mereka peroleh meraih kesuksesan di dalam sekolah dan kehidupannya.</h1>
                                    <div class="col-md-12 text-center">
                                        <!--DESKTOP_POSTER_1_04032022-->
                                        <!--ADS_SP PS-landscape.jpg-->
                                        <!--../../assets/img/program/program_12_cabang/PS_landscape.jpg-->
                                        <!--../../assets/img/program/program_ps.png-->
                                        <!--../../assets/img/sp/ps/MRLC_SP PS-landscape.jpg-->
                                        <!--<img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_12_cabang/PS_landscape.jpg" width="85%" alt="Poster Public Speaking" loading="lazy">-->
                                        <!--sementara-->
                                        <!--<img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_17_cab/SP PS-landscape.jpg" width="85%" alt="Poster Public Speaking" loading="lazy">-->
                                        <img class="img-fluid mb-3 text-center" src="../../assets/img/program/program_18_cabang/SP PS-landscape.jpg" width="85%" alt="Poster Public Speaking" loading="lazy">
                                        <!--sementara-->
                                    </div>
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Kelas Public Speaking dari Merry Riana telah berhasil mengubah ribuan anak menjadi lebih percaya diri dan kini giliran anak Anda membuktikannya!!!</h1>
                                    <!--<h1 class="style-judul mb-2" style="font-size: 20px">Kini giliran anak Anda membuktikannya!!!</h1>-->
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Seorang Public Speaker handal mampu mengendalikan rasa takut saat mereka harus bicara di depan umum, bukan membiarkan rasa takut tersebut yang mengendalikan mereka.</h1>
                                    <h1 class="style-judul mb-2" style="font-size: 20px">Oleh karena itu Miss Merry Riana merancang sebuah program untuk membantu anak Anda bukan hanya meningkatkan kepercayaan dirinya tetapi juga menjadi seorang yang menguasai panggungnya.</h1>
                                    <!--editdidi04072024-->
                                    <div style="padding-top: 1rem; padding-bottom: 1rem; background-color: #572a32 ">
                                        <div class="container mt-2">
                                            <div class="">
                                                <h1 class="style-judul text-white" style="font-size: 20px">1. Apakah anak Anda masih tidak percaya diri jika berhadapan dengan banyak orang ?</h1>
                                                <h1 class="style-judul text-white" style="font-size: 20px">2. Apakah Anda ingin anak Anda mampu mengendalikan rasa takutnya dan mampu mengungkapkan ide-ide hebat mereka dengan penuh percaya diri ?</h1>
                                                <h1 class="style-judul text-white" style="font-size: 20px">3. Apakah Anda ingin anak Anda berlatih Public Speaking dalam lingkungan yang positif dan menyenangkan ?</h1>
                                                <h1 class="style-judul text-white" style="font-size: 24px">Jika jawabannya YA, maka Merry Riana School of Public Speaking adalah jawabannya.</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <!--editdidi04072024-->
                                </div>
                            </div>
                        </div>
                        <!-- Benefit Row -->
                        <div class="row">
                            <div class="col-md-12 mx-auto mt-5">
                                <h1 class="style-judul text-center">MANFAAT MENGIKUTI KELAS PUBLIC SPEAKING UNTUK ANAK ANDA</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center mt-4">
                                <table style="font-size: 24px; color: black; vertical-align: top; font-family: Nunito, Sans-serif;">
                                    <tr>
                                        <td><i class="fas fa-check mr-2" style="color: #572a32 ;"></td>
                                        <td>Meningkatkan Self-Confidence sehingga lebih aktif di sekolah dan di organisasi </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-check mr-2" style="color: #572a32 ;"></td>
                                        <td>Meningkatkan kemampuan bersosialisasi</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-check mr-2" style="color: #572a32 ;"></td>
                                        <td>Menunjang prestasi akademis karena bisa langsung diaplikasikan di sekolah (presentasi, pidato, memimpin organisasi, menjadi ketua, dll)</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-check mr-2" style="color: #572a32 ;"></td>
                                        <td>Memberikan nilai lebih untuk anak Anda dibanding anak rata-rata lainnya</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-check mr-2" style="color: #572a32 ;"></td>
                                        <td>Mempersiapkan anak Anda sedini mungkin untuk bersaing di dunia kerja maupun dunia bisnis di masa depan</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 align-self-center mt-4">
                                <img class="img-fluid mb-4" src="assets/img/SP_FOTO_Activity_PS_1.png" width="100%" style="max-width: 600px; display: block; margin: 0 auto;" alt="Activity 1 Public Speaking" loading="lazy">
                            </div>
                        </div>
                        <div class="row pt-2 pb-5 mx-auto">
                            <div class="col-md-12 mx-auto text-center">
                                <h1 class="style-judul mb-2" style="font-size: 20px">Dan masih ada begitu banyak manfaat lainnya yang anak-anak Anda rasakan ketika menguasai keterampilan Public Speaking.</h1>
                                <br />
                                <a href="#form-abu" style="padding-left: 36px; padding-right: 36px; background-color: #572a32 ; color: white;" class="btn btn-lg buttonss"><i class="far fa-hand-point-right"></i> Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-6 mt-3 mb-3 mobile-headline" style="padding:0px; !important"> -->
                            <div class="col-md-6 mt-3 mb-3 mobile-headline">
                                <img class="img-fluid mb-2" src="../../assets/img/3c.png" width="83%" style="max-width: 900px; display: block; margin: 0 auto;" alt="Poster Life And Success" Loading="Lazy">
                            </div>
                            <!--<div class="col-md-6 mt-3 mb-3 desktop-headline">-->
                            <!--    <img class="img-fluid mb-2" src="../../assets/img/3c.png" width="83%" style="max-width: 900px; display: block; margin: 0 auto;" alt="Poster Life And Success" Loading="Lazy">-->
                            <!--</div>-->
                            <!--tambahdidi 04072024-->
                            <div class="col-md-6 mt-4 align-left">
                                <p class="enrolling text-left small-text contentp">Apa yang membuat pembelajaran di Merry Riana School of Public Speaking ini sangat powerful? <b>JAWABANNYA</b> adalah karena program ini memiliki 3 value yang kami tanamkan dalam diri Students kami yang disebut sebagai 3C.</p>
                            </div>
                            <div class="col-md-12" style="padding-left:30px;">
                                <p class="enrolling text-left small-text contentp"><b>1. CONFIDENCE</b><br>Dengan mengikuti program ini, anak Anda akan memiliki kepercayaan diri yang tentu saja akan berpengaruh juga ke dalam seluruh aspek kehidupannya. </p>
                                <p class="enrolling text-left small-text contentp"><b>2. CHAMPION</b><br>Anak Anda juga bisa mengaplikasikan semua materi yang sudah ia pelajari di program ini dalam kehidupannya, hingga di manapun ia berada ia bisa menjadi seorang pemenang. </p>
                                <p class="enrolling text-left small-text contentp"><b>3. COMMUNITY</b><br>Di program ini anak Anda juga akan berada di tengah lingkungan yang positif, dengan teman-teman yang saling memberikan support, sama-sama belajar dan bertumbuh menjadi pribadi yang lebih baik lagi.</p>
                            </div>
                            <!--tambahdidi 04072024-->
                        </div>
                        <!-- End Benefit Row -->
                    </div>
                </div>
            </div>
            <!-- Testimony Row -->
            <div class="row">
                <div>
                    <div style="padding-top: 2rem; padding-bottom: 2rem; background-color: #572a32 ">
                        <div class="container text-center">
                            <h1 class="style-judul text-white">Sebelum mendaftar, dengar apa kata mereka yang sudah bergabung dengan<br />MERRY RIANA SCHOOL OF PUBLIC SPEAKING</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img class="img-fluid mb-4" src="assets/img/SP_FOTO_Activity_PS_2.png" width="85%" style="max-width: 600px; display: block; margin: 0 auto;" alt="Activity 1 Public Speaking" loading="lazy">
                        </div>
                        <div class="col-md-6 align-self-center">
                            <img class="img-fluid mb-4" src="assets/img/SP_FOTO_Activity_PS_3.png" width="85%" style="max-width: 600px; display: block; margin: 0 auto;" alt="Activity 1 Public Speaking" loading="lazy">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="warna-bg-putih">
                            <div class="cs_row_five pl-4 pr-3 ">
                                <div class="student_feedback_container b0p0">
                                    <h3 class="aii_title">Ratings</h3>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="s_feeback_content">
                                                <ul class="skills">
                                                    <li class="list-inline-item">Stars 5</li>
                                                    <div class="sonny_progressbar" data-width="100">
                                                        <p class="title number-progress">100 %</p>
                                                        <div class="bar-container " style="background-color:#572a32 ;height:30px;">
                                                            <span class="backgroundBar"></span>
                                                            <span class="targetBar" style="width:100%; background-color:#CCC;"></span>
                                                            <span class="bar" style="width: 100%;"></span>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="skills">
                                                    <li class="list-inline-item">Stars 4</li>
                                                    <div class="sonny_progressbar" data-width="0">
                                                        <p class="title number-progress">0 %</p>
                                                        <div class="bar-container " style="background-color:#E0E0E0;height:30px;">
                                                            <span class="backgroundBar"></span>
                                                            <span class="targetBar" style="width:100%;background-color:#CCC;"></span>
                                                            <span class="bar" style="background-color: rgb(36, 65, 231); opacity: 1; width: 0%;"></span>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="skills">
                                                    <li class="list-inline-item">Stars 3</li>
                                                    <div class="sonny_progressbar" data-width="0">
                                                        <p class="title number-progress">0 %</p>
                                                        <div class="bar-container " style="background-color:#E0E0E0;height:30px;">
                                                            <span class="backgroundBar"></span>
                                                            <span class="targetBar" style="width:100%;background-color:#CCC;"></span>
                                                            <span class="bar" style="background-color: rgb(36, 65, 231); opacity: 1; width: 0%;"></span>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="skills">
                                                    <li class="list-inline-item">Stars 2</li>
                                                    <div class="sonny_progressbar" data-width="0">
                                                        <p class="title number-progress">0 %</p>
                                                        <div class="bar-container " style="background-color:#E0E0E0;height:30px;">
                                                            <span class="backgroundBar"></span>
                                                            <span class="targetBar" style="width:100%;background-color:#CCC;"></span>
                                                            <span class="bar" style="background-color: rgb(36, 65, 231); opacity: 1; width: 0%;"></span>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="skills">
                                                    <li class="list-inline-item">Stars 1</li>
                                                    <div class="sonny_progressbar" data-width="0">
                                                        <p class="title number-progress">0 %</p>
                                                        <div class="bar-container " style="background-color:#E0E0E0;height:30px;">
                                                            <span class="backgroundBar"></span>
                                                            <span class="targetBar" style="width:100%;background-color:#CCC;"></span>
                                                            <span class="bar" style="background-color: rgb(36, 65, 231); opacity: 1; width: 0%;"></span>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="align-self-center text-center" style="background-color: #eeeeee; border-radius: 10px;padding: 10px">
                                                <div>
                                                    <h1>5 Rating</h1>
                                                    <div style="color:#572a32 ;">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>Course rating</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="warna-bg-putih">
                            <div class="cs_row_five pl-4 pr-3 ">
                                <div class="student_feedback_container b0p0">
                                    <h3 class="aii_title">Reviews</h3>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <img class="img-circle rounded-circle img-fluid" src="assets/img/testimony/1_Ruth_Gracia.png" style="width: 80px" alt="Testimoni Program Merry Riana School Of Public Speaking dari Ruth Gracia">
                                    </div>
                                    <div class="col">
                                        <h4>Ruth Gracia (16 th)</h4>
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <p>
                                            Kelas Public Speaking banyak banget manfaatnya, terutama dalam hal percaya diri. Manfaat yang sudah diterapin adalah saat presentasi pelajaran di kelas, bisa menjadi contoh bagi teman-teman sekelas dan saat sekolah mengadakan acara, selalu dipercayakan untuk menjadi MC. Terimakasih untuk Miss Merry Riana dan para coach. Pesanku buat yang belum ikutan MRLC, yuk ikut!
                                        </p>
                                        <!--<button type="button" onclick="openModal('jevan')" class="btn btn-outline-danger"><i class="far fa-play-circle mr-1"></i>Video Review</button>-->
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <img class="img-circle rounded-circle img-fluid" src="assets/img/testimony/2_Richey_austin.png" style="width: 80px" alt="Testimoni Program Merry Riana School Of Public Speaking dari Rivaldo">
                                    </div>
                                    <div class="col">
                                        <h4>Richey Austin (13 th)</h4>
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <p>
                                            Saya telah menyelesaikan kelas Public Speaking. Sangat senang dengan suasana belajarnya, apalagi di bimbing oleh coach-coach yang baik dan hebat. Teman-teman di MRLC juga sangat support. Setelah ikut selama 2 tahun, saya menjadi lebih percaya diri terutama saat sedang presentasi di sekolah. Buat kalian diluar sana yang ingin tampil percaya diri, ayo ikut kelas Public Speaking di MRLC!!
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <img class="img-circle rounded-circle img-fluid" src="assets/img/testimony/3_malika_aina.png" style="width: 80px" alt="Testimoni Program Merry Riana School Of Public Speaking dari Malika Aina">
                                    </div>
                                    <div class="col">
                                        <h4>Malika Aina (15 th)</h4>
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <p>
                                            Jadi dulu aku benar-benar demam panggung banget, terus akhirnya aku les di MRLC. Terasa banget perbedaannya. Sekarang aku jadi percaya diri kalau di depan panggung dan juga mengerti cara jadi public speaker yang baik dan benar. Yeaayyy! Terimakasih MRLC. “Kalian harus banget ikut les disini karena ga bakal nyesel dan bagus banget buat ningkatin skill public speaking kalian!!”
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <img class="img-circle rounded-circle img-fluid" src="assets/img/testimony/4_michelle_ellaine.png" style="width: 80px" alt="Testimoni Program Merry Riana School Of Public Speaking dari Michelle Ellaine">
                                    </div>
                                    <div class="col">
                                        <h4>Michelle Ellaine (17 th)</h4>
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <p>
                                            Coachnya baik dan sabar banget, bisa ketemu banyak teman-teman baru juga di MRLC. Aku jadi lebih pede buat ngomong di depan umum dan jadi lebih enak di denger kata-katanya. Buat kalian, gabung aja, ini banyak bantu kalian terutama di bidang public speaking!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimony Row -->
            <!-- Support Row -->
            <div class="row">
                <div class="col-md-12 warna-bg-abu pl-3" style="padding-top: 2rem; padding-bottom: 1rem;">
                    <div class="container">
                        <div class="row" style="padding-top: 1rem; padding-bottom: 3rem;">
                            <h1 class="style-judul text-center pl-3 pr-3" style="font-size: 30px;">Di Sesi Perkenalan Merry Riana School of Public Speaking, anak Anda akan belajar tentang</h1>
                            <div class="row mt-4">
                                <div class="col-md-4 text-center mb-4">
                                    <img class="img-fluid" src="assets/img/1_fbc.png" width="100%" alt="full body communication" loading="lazy">
                                </div>
                                <div class="col-md-4 text-center mb-4">
                                    <img class="img-fluid" src="assets/img/2_rs.png" width="100%" alt="Rising Star" loading="lazy">
                                </div>
                                <div class="col-md-4 text-center mb-4">
                                    <img class="img-fluid" src="assets/img/3_lpf.png" width="100%" alt="Langsung Praktek" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12 mx-auto text-center">
                                <a href="#form-abu" style="padding-left: 36px; padding-right: 36px; background-color: #ae0001; color: white;" class="btn buttonss btn-lg my-4"><i class="far fa-hand-point-right"></i> Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Support Row -->
            <!-- Video Testimony Row -->
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="warna-background" style="background-color: white;">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-10 mx-auto">
                                    <div class="" style="position:relative; padding-bottom: 56.25%;">
                                        <iframe title="Video Testi Merry Riana Public Speaking" width="" height="" src="https://www.youtube.com/embed/WtH_fBQ1eSA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ends Video Testimony Row -->
            <!-- CTA Row -->
            <div class="row mt-2" style="background-color: #572a32 ;">
                <div class="col-md-12">
                    <div style="padding-top: 2rem; padding-bottom: 2rem; background-color: #572a32 ;">
                        <div class="container text-center">
                            <h1 class="style-judul text-white">Dapatkan kesempatannya di Sesi Perkenalan & Trial Class Merry Riana School Of Public Speaking sekarang juga!</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding: 0px">
                    <div class="warna-bg-putih" style="padding-top: 2rem; padding-bottom: 2rem;">
                        <div class="container">
                            <div class="row text-center">
                                <!--sementara-->
                                <!--<div class="desktop">-->
                                <!--    <img class="img-fluid" src="../../assets/img/sp/ps/DESKTOP_SP_HARGA SP PS_04032022.jpg" width="78%" alt="Harga Spesial Sesi Perkenalan" />-->
                                <!--</div>-->
                                <!--<div class="mobile">-->
                                <!--    <img class="img-fluid" src="assets/img/mobile/MOBILE_SP_HARGA_SP PS-min.png" width="90%" alt="Harga Spesial Sesi Perkenalan" />-->
                                <!--</div>-->
                                <!--sementara-->
                                <div class="col-md-6 mt-4 mx-auto text-center">
                                    <a href="#form-abu" style="padding-left: 36px; padding-right: 36px; background-color: #572a32 ; color: white;" class="btn btn-lg buttonss"><i class="far fa-hand-point-right"></i> Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Row -->
        <!-- Sticky Row -->
        <!--<a class="whats-app" href="#" onclick="window.open('https://api.whatsapp.com/send?phone=6287829992888&text=Hallo kak! Saya ingin bertanya mengenai Public Speaking')" target="_blank">-->
        <!--    <i class="fa fa-whatsapp my-float"></i>-->
        <!--</a>-->

        <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
        <!--  <div class="modal-dialog">-->
        <!--    <div class="modal-content">-->
        <!--      <div class="modal-header">-->
        <!--          <h5 class="modal-title">Detail Information</h5>-->
        <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--          <span aria-hidden="true">&times;</span>-->
        <!--        </button>-->
        <!--      </div>-->
        <!--      <div class="modal-body">-->
        <!--        <form>-->
        <!--            <div class="form-group">-->
        <!--                <label>Nama Lengkap</label>-->
        <!--                <input type="text" id="namaLengkap" name="namalengkap" class="form-control" placeholder="Nama Lengkap"/>-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label>HP</label>-->
        <!--                <input type="text" id="noHP" name="nomorhp" class="form-control" placeholder="No. HP"/>-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label>Domisili</label>-->
        <!--                <input type="text" id="domisiliWA" name="domisiliWA" class="form-control" placeholder="Domisili"/>-->
        <!--            </div>-->
        <!--<div class="form-group">-->
        <!--    <label>Email</label>-->
        <!--    <input type="text" id="Email" name="email" class="form-control" placeholder="Email"/>-->
        <!--</div>-->
        <!--        </form>-->
        <!--      </div>-->
        <!--      <div class="modal-footer">-->
        <!--        <button type="button" class="btn btn-success" id="send-wa">Send</button>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<a  class="whats-app" href="#" data-toggle="modal" data-target="#exampleModal"  target="_blank">-->
        <!--    <i class="fa fa-whatsapp my-float"></i>-->
        <!--</a>-->

        <div class="col-lg-3 div-sticky">
            <div class="desktop" style="position:sticky;top:6rem;z-index:1000;margin-right:10px;">
                <div class="instructor_pricing_widget">
                    <div class="instructor_price">
                        <div class="price" style="margin-right: 0px; margin-top: 0px; width: auto;">
                            <div class="price__container" style="height: auto;">
                                <div class="price__container-price"><span class="currency__symbol">Rp</span>99.000</div>
                                <small><span class="currency__symbol">Rp</span>199.000</small>
                            </div>
                        </div>
                        <div id="stock" style="color: #572a32 ; margin-top: 0px;">Sisa <span>8 Slot</span>!</div>
                        <div class="text-danger" style="color: #572a32 ;">
                            <div id="countdownx" class="offer-countdown" style="color: #572a32 ; margin: 10px;">Diskon Segera Berakhir <br> <span id="countdown-timer">05:18:49</span></div>
                        </div>
                        <a class="buy_button cart_btnss" id="main-course_120" href="#form-abu">
                            <span class="font-weight-bold"> DAFTAR <span class="pl-1 flaticon-right-arrow-1"></span></span>
                        </a>
                        <!--<div style="display: none;" class="free-ticket">-->
                        <!--    <h6 style="color: #ae0001;">Free 1 Ticket Online Inspirafest 2022</h6>-->
                        <!--    <h6 style="color: #ae0001;">(senilai Rp.100.000)</h6>-->
                        <!--    <h6 style="color: red;">* Jika melakukan pembayaran s/d tanggal 10 Agustus 2022 pk 23:59 WIB</h6>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="mobile" style="position:sticky;top:6rem;z-index:1000;">
                <div class="instructor_price">
                    <div class="price" style="margin-right: 0px; margin-top: 0px; width: auto;">
                        <div class="price__container" style="height: auto;">
                            <div class="price__container-price"><span class="currency__symbol">Rp</span>99.000</div>
                            <small><span class="currency__symbol">Rp</span>199.000</small>
                        </div>
                    </div>
                    <div id="stock" style="color: #572a32 ; margin-top: 0px;">Sisa <span>8 Slot</span>!</div>
                    <div class="text-danger" style="color: #572a32 ;">
                        <div id="countdownx" class="offer-countdown" style="color: #572a32 ; margin: 10px;">Diskon Segera Berakhir <br> <span id="countdown-timer">05:18:49</span></div>
                    </div>
                    <a class="buy_button cart_btnss" style="text-align:center;" id="main-course_120" href="#form-abu">
                        <span class="font-weight-bold"> DAFTAR <span class="pl-1 flaticon-right-arrow-1"></span></span>
                    </a>
                    <!--<h6 style="color: #ae0001;">Free 1 Ticket Online Inspirafest 2022</h6>-->
                    <!--<h6 style="color: #ae0001;">(senilai Rp.100.000)</h6>-->
                    <!--<h6 style="color: red;">* Jika melakukan pembayaran s/d tanggal 10 Agustus 2022 pk 23:59 WIB</h6>-->
                </div>
            </div>
            <script>
                var stockMin = 5;
                var stockMax = 15;
                var stockValue = Math.floor(Math.random() * (stockMax - stockMin) + stockMin);
                document.querySelector('#stock').innerHTML = 'Sisa <span>' + stockValue + ' Slot</span>!';

                var countdownDays = +2 * 24 * 60 * 60;
                var countdownHours = +0 * 60 * 60;
                var countdownMinutes = +0 * 60;
                var totalCountDown = countdownDays + countdownHours + countdownMinutes;
                var countdownUpdatedTime = +1621590210;
                // var countdownUpdatedTime = parseInt(new Date().getTime());
                // var countdownUpdatedTime = +1621566000;
                // var futureDate = new Date(currentDate + 10*60000);
                while ((countdownUpdatedTime + totalCountDown) < 1622106378) {
                    // while ((countdownUpdatedTime + totalCountDown) < futureDate.getTime()) {
                    countdownUpdatedTime += totalCountDown;
                }
                var countdownTime = (countdownUpdatedTime + totalCountDown) - 1622106378;
                // var countdownTime = (countdownUpdatedTime + totalCountDown) - futureDate.getTime();
                (function startCountdown(duration) {
                    var display = document.querySelector('#countdownx');
                    var timer = duration;
                    var days, hoursLeft, hours, minutesLeft, minutes, seconds;
                    var interval = setInterval(function() {
                        days = parseInt(timer / 24 / 60 / 60, 10);
                        if (days > 0) {
                            display.innerHTML = '<strong>' + (days + 1) + '</strong> Hari Lagi Diskon Berakhir';
                            return;
                        }

                        hoursLeft = parseInt(timer - (days * 86400), 10);
                        hours = parseInt(hoursLeft / 3600, 10);
                        minutesLeft = parseInt(hoursLeft - (hours * 3600), 10);
                        minutes = parseInt(minutesLeft / 60, 10);
                        seconds = parseInt(timer % 60, 10);

                        days = days < 10 ? '0' + days : days;
                        hours = hours < 10 ? '0' + hours : hours;
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        seconds = seconds < 10 ? '0' + seconds : seconds;

                        // display.innerHTML = 'Diskon Segera Berakhir <br/> <span>' + hours + ':' + minutes + ':' + seconds + '</span>';
                        if (--timer < 0) {
                            timer = totalCountDown;
                        }
                    }, 1000);
                })(countdownTime);
            </script>
        </div>
    </div>
    <!-- End Sticky Row -->
    <!-- Form Row -->
    <div class="warna-bg-abu" id="form-abu">
        <div class="container py-4">
            <h2 class="mb-4 style-judul-form" id="title_registration_bottom">
                Silakan isi data diri Anda,<br /> sebelum melanjutkan.</h2>
            <div class="row justify-content-center" id="form-bawah">
                <div class="col-md-7">
                    <?php include 'include/registration_bawah.php' ?>
                </div>
            </div>
            <div class="mt-5 text-center col-12">
                <div class="af-element privacyPolicy w-100" style="text-align: center;margin-top:0px;">
                    <p style="font-family:'Open-sans', Sans-serif !important">Untuk mengetahui info lebih lanjut, hubungi:<br>Telp : (021) 5010 0576<br>WA : +62 878 2999 2888</p>
                    <p class="text-center" style="font-size:14px;color:black;font-family:'Open-sans', Sans-serif !important">We respect your <a href="https://www.aweber.com/permission.htm" style="color: #000" target="_blank" rel="nofollow">email privacy</a></p>
                    <!--<p class="text-center" style="font-size:14px;color:black;font-family:'Open-sans', Sans-serif !important">Copyright © 2020 PT Merry Riana Learning Centre. All Rights Reserved.</p>-->
                    <p class="text-center" style="font-size:14px;color:black;font-family:'Open-sans', Sans-serif !important">Copyright © 2020 PT Merry Riana Edukasi. All Rights Reserved.</p>
                    <p>Please read <a href="https://merryrianalearningcentre.com/termsuser/">Terms & Conditions</a>. <a href="https://merryrianalearningcentre.com/privacypolicy/">Privacy & Policy.</a></p>
                </div>
            </div>
            <div class="mobile-padding" style="height: 200px">

            </div>
        </div>
    </div>
    <!-- End Form Row -->
    <!-- Modal -->
    <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="video-container">
                        <iframe id="video-review" title="Video Testi Merry Riana Merry Riana School Of Public Speaking" width="800" height="" src="https://www.youtube.com/embed/ycxHJYHgMuM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FORM MIDTRANS REDIRECT-->

    <form id="payment-form" method="post" action="https://merryrianalearningcentre.com/sp-ps/thanks/thanks-mrlc/">
        <input type="hidden" name="result_type" id="result-type" value="">
        <input type="hidden" name="result_data" id="result-data" value="">
    </form>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <?php include 'include/footer.php'; ?>

    <!-- international phone -->
    <!--<script src="js/intlTelInput.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Script Snap JS -->
    <?php $aff = (!empty($_GET['ref'])) ? $_GET['ref'] : null; ?>
    <?php if ($aff == "" || $aff == null || $aff == 'MRG00001') { ?>
        <!--mrdl-->
        <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-6qLFQEqlHZbVS92m"></script>
    <?php } else { ?>
        <!-- m1 -->
        <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-s37TjiIpP7nb5J1u"></script>
    <?php } ?>
    <!-- Tutup Script Snap JS -->

    <!--sweet alert-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--./close sweet alert-->

    <script>
        // let waNama = document.getElementById('namaLengkap')
        // let waHP = document.getElementById('noHP')
        // let waDomisili = document.getElementById('domisiliWA')
        // // let waEmail = document.getElementById('Email')

        // let send = document.getElementById('send-wa')

        // send.addEventListener('click', function() {
        //     let linkWA = `https://api.whatsapp.com/send?phone=6287829992888&text=Hallo%20kak%21%0A%0A`
        //     linkWA += "Nama%20Lengkap%20%3A%20%2A"+ waNama.value 
        //     linkWA += "%2A%0ANo.%20HP%20%3A%20%2A" + waHP.value
        //     linkWA += "%2A%0ADomisili%20%3A%20%2A" + waDomisili.value 
        //     // linkWA += "%2A%0AEmail%20%3A%20%2A" + waEmail.value 
        //     linkWA += `%2A%0A%0ASaya%20ingin%20bertanya%20mengenai%20Public%20Speaking%20`
        //     console.log(linkWA)
        //     // console.log(waNama.value)
        //     window.open(linkWA,'_blank')
        // })
    </script>

    <script>
        $(document).ready(function() {

            //     var endDateString = "Aug 11, 2023 23:59:59";
            //     var nowDate = new Date().getTime();
            //     var freeTicketDueDate = new Date(endDateString).getTime();
            //     var selisihWaktu = nowDate - freeTicketDueDate;
            //     console.log(selisihWaktu);
            //     if (selisihWaktu <= 0) {
            //         Swal.fire({
            //             padding: 0,
            //             imageUrl: 'https://merryrianalearningcentre.com/assets/img/if_2023.jpeg',
            //             showConfirmButton: false,
            //             //   imageWidth: 400,
            //             //   imageHeight: 200,
            //             width: '800px',
            //             imageAlt: 'IF',
            //             // background: 'transparent',
            //         })
            //     }
            // });

            var endDateString = "Oct 30, 2024 23:59:59";
            var nowDate = new Date().getTime();
            var freeTicketDueDate = new Date(endDateString).getTime();
            var selisihWaktu = nowDate - freeTicketDueDate;
            console.log(selisihWaktu);

            if (selisihWaktu <= 0) {
                Swal.fire({
                    padding: 0,
                    imageUrl: 'https://inspirafest.id/main/assets/img/endgame/posterif_28okt.jpeg',
                    showConfirmButton: false,
                    width: '500px',
                    imageAlt: 'IF',
                    background: 'transparent',
                    // willClose: () => {
                    //     // Redirect ke link ketika popup ditutup
                    //     window.location.href = "https://example.com"; // Ganti dengan link tujuan
                    // }
                });

                // Atau jika ingin redirect saat gambar diklik
                $('.swal2-image').on('click', function() {
                    window.location.href = "https://inspirafest.id"; // Ganti dengan link tujuan
                });
            }
        });
    </script>
    <script>
        (function() {
            // your page initialization code here
            // the DOM will be available here
            getScheduleMrpsa();

            // var endDateString = "Aug 10, 2022 23:59:59";
            // var nowDate = new Date().getTime();
            // var freeTicketDueDate = new Date(endDateString).getTime();
            // var selisihWaktu = nowDate - freeTicketDueDate;
            // console.log(selisihWaktu);
            // if (selisihWaktu <= 0) {
            //     $('.free-ticket').show();
            // } else {
            //     $('.free-ticket').hide();
            // }
        })();

        // Generate kode pembayaran dan url payment api
        var dt = new Date();
        var affiliate = "<?php echo (!empty($_GET['ref'])) ? $_GET['ref'] : "MRG00001"; ?>";
        var kodeAwal;
        var rand;
        var typeSource;
        // var urlSnap = "https://payment.merryriana.com/kulinerenam/invoice/xendit_product_kuliner_enam";
        var urlSnap = "https://payment.m1academy.com/mredelapan/invoice/xendit_sp_mre_delapan";
        var kodeAwal = 'M1ID-';
        var rand = (Math.floor(Math.random() * 10 ** 7)).toString();

        if (affiliate != 'MRG00001') {
            kodeAwal = 'M1ID-';
            rand = (Math.floor(Math.random() * 10 ** 7)).toString();
            // urlSnap = "https://payment.merryriana.com/kulinerenam/invoice/xendit_product_kuliner_enam";
            urlSnap = "https://payment.m1academy.com/mrlcempatbelas/invoice/xendit_product_m1";
            typeSource = 'LPAFF';
        } else {
            kodeAwal = 'MRLCID-';
            rand = (Math.floor(Math.random() * 10 ** 5)).toString();
            // urlSnap = "https://payment.merryriana.com/mrlcempat/invoice/xendit_sp_mrlc_empat";
            urlSnap = "https://payment.m1academy.com/mredelapan/invoice/xendit_sp_mre_delapan";
            typeSource = "<?php echo (!empty($_GET['source'])) ? $_GET['source'] : "DIRECT"; ?>";
            if (typeSource == 'LINK') {
                typeSource = 'DIRECT';
            }

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
        var dataProdukMidtrans = [];

        // tutup Deklarasi object data pembayaran

        function toggleAccordion(accordionId) {
            console.log(accordionId);
            if (!$("#" + accordionId).hasClass("show")) {
                $("#" + accordionId).collapse("show");
                $("#" + accordionId + "Caret").removeClass("fa-caret-right");
                $("#" + accordionId + "Caret").addClass("fa-caret-down");
            } else {
                $("#" + accordionId).collapse("hide");
                $("#" + accordionId + "Caret").addClass("fa-caret-right");
                $("#" + accordionId + "Caret").removeClass("fa-caret-down");
            }
        }

        var dateString = "May 27, 2021 19:00:00";
        var startDate = new Date().getTime()
        var futureDate = new Date(startDate + 10 * 60000);
        // var endDate = new Date(dateString).getTime();
        var endDate = new Date(futureDate).getTime();
        var countDownDate = new Date(futureDate).getTime();
        var x = setInterval(function() {
            var now = new Date().getTime();
            var isStarted = (now > startDate && now < endDate) ? true : false;
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1500 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var availableSeat = Math.ceil((distance / (1000 * 60 * 60)) / 2);

            var dayString = ((days < 10) ? "0" + days : days);
            var hourString = ((hours < 10) ? "0" + hours : hours);
            var minuteString = ((minutes < 10) ? "0" + minutes : minutes);
            var secondString = ((seconds < 10) ? "0" + seconds : seconds);

            if (distance > 0) {
                // document.getElementById("day-value").innerHTML = dayString;
                // document.getElementById("hour-value").innerHTML = hourString;
                // document.getElementById("hour-value").innerHTML = availableSeat;
                // document.getElementById("minute-value").innerHTML = minuteString;
                // document.getElementById("second-value").innerHTML = secondString;

                document.getElementById('countdown-timer').innerHTML = minuteString + ':' + secondString;
            }
        }, 1000);

        const arrayVideo = {
            jevan: 'https://www.youtube.com/embed/K3U9HmdUfKQ?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            rivaldo: 'https://www.youtube.com/embed/UCcmAqeGK6U?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            theresia: 'https://www.youtube.com/embed/AMQNRbgFN0E?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            elaine: 'https://www.youtube.com/embed/5SlO22S-Y7M?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            nicole: 'https://www.youtube.com/embed/csECAHcuQiA?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            khezia: 'https://www.youtube.com/embed/AYiWwsJ-vn0?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            marvela: 'https://www.youtube.com/embed/PFg0qlZ3mf8?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            benaya: 'https://www.youtube.com/embed/k-b3a_w3Zjk?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            gendis: 'https://www.youtube.com/embed/IMtuXN1oFV0?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1',
            michele: 'https://www.youtube.com/embed/VCqkCdGaydE?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1'

        };

        function openModal(name) {
            const videoUrl = arrayVideo[name];
            document.getElementById('video-review').src = videoUrl;
            $('#modalVideo').modal('show');
        }

        $('#modalVideo').on('hidden.bs.modal', function() {
            document.getElementById('video-review').src = '';
        });

        function getScheduleMrpsa() {
            $('#tanggal-webinar').html('Sabtu, 10.00 WIB');
            $('#tanggal-webinar-mobile').html('Sabtu, 10.00 WIB');
            $.ajax({
                url: "https://m1salesforce.com/api/leads/customer/mrlc/get_schedule_ps",
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    // console.log(result);

                    if (result.schedule) {
                        $('#tanggal-webinar').html(result.jadwal + ', 10.00 - 12.30 WIB');
                        $('#tanggal-webinar-mobile').html(result.jadwal + ', 10.00 - 12.30 WIB');
                    } else {
                        $('#tanggal-webinar').html('Sabtu, 10.00 WIB');
                        $('#tanggal-webinar-mobile').html('Sabtu, 10.00 WIB');
                    }
                },
                error: function(xhr, status, errorThrown) {
                    console.log(xhr, status, errorThrown);
                }
            });
        }
    </script>
    <?php include 'include/script_atas.php' ?>
    <?php include 'include/script_bawah.php' ?>
    <?php include 'include/script_bawahdua.php' ?>

</body>

</html>