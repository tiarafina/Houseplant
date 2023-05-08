<?php require 'config.php'; 
include '../header.php';?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	plugins-->
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
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Blog Houseplants</title>
</head>
<body>	<b class="screen-overlay"></b>
	<!--wrapper-->

		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<div class="breadcrumb-title pe-3">Blog</div>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="../index.php"> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="#">Blog</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start page content-->
				<section class="py-4">
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-9">
								<div class="blog-right-sidebar p-3">
									<div class="card mb-4">
										<?php 
										$sql = "SELECT * FROM blogg";
										$result = mysqli_query($conn, $sql);
										while($row = mysqli_fetch_array($result)) { ?>
										<?php echo "<img src='image/blog/$row[image]'";?>
										<div class="card-body">
											<div class="list-inline">	<a href="javascript:;" class="list-inline-item"><i class='bx bx-user me-1'></i><?php echo $row['pengarangb']; ?></a>
												<a href="javascript:;" class="list-inline-item"></a>
												<a href="javascript:;" class="list-inline-item"><i class='bx bx-calendar me-1'></i> <?php echo $row['tanggalb']; ?></a>
											</div>
											<h4 class="mt-4"><?php echo $row['judulb']; ?></h4>
											<p><?php echo substr($row['isib'], 0,50); ?></p>
												<a href="detaill.php?detail=<?php echo $row['idb']; ?>" class="btn btn-dark btn-ecomm">Read More <i class='bx bx-chevrons-right' ></i></a>
												<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</section>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->


		
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	<!--end wrapper-->
	
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
	<p>
		
	</p>
	<a href=test.php class="btn btn-dark btn-ecomm">Tambah Blog <i class='bx bx-chevrons-right' ></i></a>
</body>
</html>
</html>