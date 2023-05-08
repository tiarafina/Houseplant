<?php 
session_start();
//koneksi ke database
include 'koneksi.php';
include 'header.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<title>HousePlants</title>
</head>
<body>

	<!-- <pre><?php print_r($_SESSION) ?></pre> -->
	<section class="riwayat">
		<div class="container">
			<h3>Riwayat Belanja <?php echo $_SESSION["username"] ?></h3>
		</div>

		<table >
			<thead>
				<tr>
					<th class="col-12 col-lg-2">Nama Pembayar</th>
					<th class="col-12 col-lg-2">Status</th>
					<th class="col-12 col-lg-2">Total bayar</th>
					<!-- <th class="col-12 col-lg-3">username</th> -->
					</tr>
				</thead>
				<tbody>
				 <?php 
				//mendapatkan username pelanggan dari session
				$username_pelanggan = $_SESSION['username'];
				$sql = "SELECT * FROM pembayaran WHERE username= '$username_pelanggan'";
				$result =  mysqli_query($conn, $sql);
				while($row = mysqli_fetch_array($result)) { ?>
				<tr>
					<td> <?php echo $row['namabyr'] ?></td>
					<td> <?php echo $row['status_byr']; ?></td>
					<td>Rp. <?php echo number_format($row['jumlahbyr']) ; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		
	</section>
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>

</body>
</html>