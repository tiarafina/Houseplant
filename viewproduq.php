
<?php include "header.php"; ?>
<a href="index.php"><img src="image/back.jpg" width=30></a></br></br>
<?php require 'koneksi.php'; ?>
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
	<meta charset="utf-8">
	<title>Produk</title>
</head>
<body>
<section class="py-4">
	<div class="container">
		<div class="row">
			<?php 
				$sql = "SELECT*FROM produk LIMIT 4";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) { ?>
					<div class="column">
						<div class="card rounded-0 product-card">
							<div class="card-header bg-transparent border-bottom-0">
							</br><h4> <?php echo $row['namaproduk']; ?></h4>
								<h6><?php echo "Rp. ". $row['harga']; ?></h6>

									<p><?php echo "<img src='$row[gambarproduk]' width=350 height=250 />";?></p>
									<a href="ratingg/index.php?kodeproduk=<?php echo $row['kodeproduk']; ?>">
										<p>Detil Produk</p>
									</a>
									<!-- <a href="product-details.php">
										<img src="assets/images/products/01.png" class="card-img-top" alt="...">
									</a> -->
									<div class="card-body">
										<div class="product-info">
											<a href="javascript:;">
												<h6 class="product-name mb-2"><?php echo $row['namaproduk']; ?></h6>
											</a>
									<div class="d-flex align-items-center">

									</div>
									<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>
										<i class="bx bxs-star text-warning"></i>
										<i class="bx bxs-star text-warning"></i>
										<i class="bx bxs-star text-warning"></i>
										<i class="bx bxs-star text-warning"></i>
									</div>
									
									<div class="d-flex align-items-center justify-content-end gap-3">
										<a href="javascript:;">
											<div class="product-wishlist"> <i class='bx bx-heart'></i>
											</div>
										</a>
									</div>
									<div class="product-action mt-2">
										<div class="d-grid gap-2">
											<a href="beli.php?kodeproduk=<?php echo $row['kodeproduk']; ?>"></a>
											<a href="beli.php?kodeproduk=<?php echo $row['kodeproduk']; ?>" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
											<a href="tampilproduk.php?kodeproduk=<?php echo $row['kodeproduk']; ?>" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
										</div>
										</div>
									
							</div>
						</div>
					</div> 	
			<?php } ?>
		</div>						
	</div>	
								
</body>
</html>
