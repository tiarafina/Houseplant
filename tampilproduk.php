<?php require 'koneksi.php'; 
include 'header.php';?>
<?php
$kodeproduk = $_GET['kodeproduk'];
// query ambil data
$ambil = $conn->query("SELECT * FROM produk WHERE kodeproduk='$kodeproduk'");
$detail = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($detail);
// echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/logo.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Detail</title>
</head>
<body>
<section class="kontent">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $detail["gambarproduk"];?>"width=350 height=250 alt="" class="image-responsive">
            </div>
            <div class="col-md-6">
                <h2><?php echo $detail["namaproduk"]?></h2>
                <h4>Rp. <?php echo number_format($detail["harga"]); ?></h4>
                <h6><?php echo $detail["kodekategori"]; ?></h6>
                <p><?php echo $detail["deskripsi"]; ?></p>
            </div>
            <div class="product-action mt-2">
                <div class="d-grid gap-2">
                    <a href="beli.php" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>