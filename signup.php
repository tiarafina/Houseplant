<!doctype html>
<html lang="en">
<?php
include "header.php"
?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Houseplants</title> 
</head>



<body>	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Sign Up</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Sign Up</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-0 py-lg-5">
					<div class="container">
						<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
							<div class="row row-cols-1 row-cols-lg-1 row-cols-xl-2">
								<div class="col mx-auto">
									<div class="card mb-0">
										<div class="card-body">
											<div class="border p-4 rounded">
												<div class="text-center">
													<h3 class="">Sign Up</h3>
													<p>Already have an account? <a href="login.php">Sign in here</a>
													</p>
												</div>
												<div class="d-grid">
													<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
														<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
														<span>Sign Up with Google</span>
														</span>
													</a> <a href="javascript:;" class="btn btn-white"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
												</div>
												<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
													<hr/>
												</div>
												<div class="form-body">
                                                    <form action="cekregist.php" method="post" enctype="multipart/form-data">
														<div class="col-sm-6">
															<label for="username" class="form-label">Username</label>
															<input type="text" name="username" id="username">
														</div>
														<div class="col-sm-6">
															<label for="password" class="form-label">Password</label>
															<input type="password" name="password" id="password">
														</div>
														<div class="col-12">
															<label for="nama" class="form-label">Nama</label>
															<input type="text" name="nama" id="nama">
														</div>
														<div class="col-12">
															<label for="email" class="form-label">Email</label>
															<input type="email" name="email" id="email">
                                                        </div>
														<div class="col-12">
															<label for="nohp" class="form-label">No Hp</label>
                                                            <input type="text" name="nohp" id="nohp">
														</div>
														<div class="mb-3 row">
														<label for="jenis kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
															<div class="col-sm-10">
															<select class="form-control" name="jk" id="jk">
																<option value="">- Jenis Kelamin -</option>
																<option value="0">Wanita</option>
																<option value="1" >Pria</option>
															</select>
															</div>
														</div>
														<div class="col-sm-10">
														<select class="form-control" name="gakses" id="gakses">
															<option value="">- Sebagai -</option>
															<option value="0">Customer</option>
															<option value="1" >Toko</option>
														</select>
														</div>
														<div class="col-12">
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
																<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
															</div>
														</div>
														<div class="col-12">
															<div class="d-grid">
																<button type="submit" class="btn btn-dark"><i class='bx bx-user'></i>Sign up</button>
                                                                <class value="submit">
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end row-->
						</div>
					</div>
				</section>
				<!--end shop cart-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<footer>
			<section class="py-4 border-top bg-light">
				<div class="container">
					<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
						<div class="col">
							<div class="footer-section1 mb-3">
								<h6 class="mb-3 text-uppercase">Contact Info</h6>
								<div class="address mb-3">
									<p class="mb-0 text-uppercase">Address</p>
									<p class="mb-0 font-12">123 Street Name, City, Australia</p>
								</div>
								<div class="phone mb-3">
									<p class="mb-0 text-uppercase">Phone</p>
									<p class="mb-0 font-13">Toll Free (123) 472-796</p>
									<p class="mb-0 font-13">Mobile : +91-9910XXXX</p>
								</div>
								<div class="email mb-3">
									<p class="mb-0 text-uppercase">Email</p>
									<p class="mb-0 font-13">mail@example.com</p>
								</div>
								<div class="working-days mb-3">
									<p class="mb-0 text-uppercase">WORKING DAYS</p>
									<p class="mb-0 font-13">Mon - FRI / 9:30 AM - 6:30 PM</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="footer-section2 mb-3">
								<h6 class="mb-3 text-uppercase">Shop Categories</h6>
								<ul class="list-unstyled">
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Jeans</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> T-Shirts</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sports</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Shirts & Tops</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Clogs & Mules</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sunglasses</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Bags & Wallets</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sneakers & Athletic</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Electronis</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Furniture</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-section3 mb-3">
								<h6 class="mb-3 text-uppercase">Popular Tags</h6>
								<div class="tags-box"> <a href="javascript:;" class="tag-link">Cloths</a>
									<a href="javascript:;" class="tag-link">Electronis</a>
									<a href="javascript:;" class="tag-link">Furniture</a>
									<a href="javascript:;" class="tag-link">Sports</a>
									<a href="javascript:;" class="tag-link">Men Wear</a>
									<a href="javascript:;" class="tag-link">Women Wear</a>
									<a href="javascript:;" class="tag-link">Laptops</a>
									<a href="javascript:;" class="tag-link">Formal Shirts</a>
									<a href="javascript:;" class="tag-link">Topwear</a>
									<a href="javascript:;" class="tag-link">Headphones</a>
									<a href="javascript:;" class="tag-link">Bottom Wear</a>
									<a href="javascript:;" class="tag-link">Bags</a>
									<a href="javascript:;" class="tag-link">Sofa</a>
									<a href="javascript:;" class="tag-link">Shoes</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="footer-section4 mb-3">
								<h6 class="mb-3 text-uppercase">Stay informed</h6>
								<div class="subscribe">
									<input type="text" class="form-control radius-30" placeholder="Enter Your Email" />
									<div class="mt-2 d-grid">	<a href="javascript:;" class="btn btn-dark btn-ecomm radius-30">Subscribe</a>
									</div>
									<p class="mt-2 mb-0 font-13">Subscribe to our newsletter to receive early discount offers, updates and new products info.</p>
								</div>
								<div class="download-app mt-3">
									<h6 class="mb-3 text-uppercase">Download our app</h6>
									<div class="d-flex align-items-center gap-2">
										<a href="javascript:;">
											<img src="assets/images/icons/apple-store.png" class="" width="160" alt="" />
										</a>
										<a href="javascript:;">
											<img src="assets/images/icons/play-store.png" class="" width="160" alt="" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<hr/>
					<div class="row row-cols-1 row-cols-md-2 align-items-center">
						<div class="col">
							<p class="mb-0">Copyright © 2021. All right reserved.</p>
						</div>
						<div class="col text-end">
							<div class="payment-icon">
								<div class="row row-cols-auto g-2 justify-content-end">
									<div class="col">
										<img src="assets/images/icons/visa.png" alt="" />
									</div>
									<div class="col">
										<img src="assets/images/icons/paypal.png" alt="" />
									</div>
									<div class="col">
										<img src="assets/images/icons/mastercard.png" alt="" />
									</div>
									<div class="col">
										<img src="assets/images/icons/american-express.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</section>
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
	<!--Password show & hide js -->
	<script src="assets/js/show-hide-password.js"></script>
</body>

</html>