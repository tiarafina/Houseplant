<?php require 'koneksi.php'; ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
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
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Forum Diskusi</title>
</head>
<header> <?php include_once "header.php"; ?> </header>
<body>	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start top header wrapper-->

		<!--start page wrapper -->
		
				<!--end breadcrumb-->
				<!--start page content-->
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-9">
								<div class="blog-right-sidebar p-3">
									<div class="card mb-4">
                                        <a href="diskusi.php"><button>Upload Forum</a></button></br>
                                        <?php 
                                            $sql = "SELECT*FROM forumdiskusi";
                                            $result = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_assoc($result)) { ?>
                                        <a href="viewgambar.php?idforum=<?php echo $row['idforum']; ?>">
										<?php echo "<img src='$row[gambar]' width=600 height=400 />";?>
											<div class="list-inline">	<a href="javascript:;" class="list-inline-item"><i class='bx bx-user me-1'></i><?php echo $row['username']; ?></a>
												<a href="javascript:;" class="list-inline-item"><i class='bx bx-calendar me-1'></i><?php echo $row['tglforum']; ?></a>
											</div>
											<h4 class="mt-4"> <?php echo $row['judul']; ?></h4>
                                            <a href="viewgambar.php?idforum=<?php echo $row['idforum']; ?>">
                                                <p>Readmore</p>
                                            </a>
                                            
										</div>
									</div>
				<!--end start page content-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<footer>
			<?php require_once "footer.php";?>
		</footer>
		<!--end footer section-->
		
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
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
    <!-- <?php } ?> -->
</body>

</html>