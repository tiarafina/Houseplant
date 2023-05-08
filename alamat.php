<!doctype html>
<html lang="en">

<head>
<?php
include "header.php"
?>
</head>


		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">My Orders</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Account</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">My Orders</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-4">
					<div class="container">
						<h3 class="d-none">Account</h3>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4">
										<div class="card shadow-none mb-3 mb-lg-0 border">
											<div class="card-body">
												<div class="list-group list-group-flush">	<a href="dashboardcust.php" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Dashboard <i class='bx bx-tachometer fs-5'></i></a>
													<a href="account-orders.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Orders <i class='bx bx-cart-alt fs-5'></i></a>
													<a href="account-downloads.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Downloads <i class='bx bx-download fs-5'></i></a>
													<a href="account-addresses.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Addresses <i class='bx bx-home-smile fs-5'></i></a>
													<a href="account-payment-methods.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Payment Methods <i class='bx bx-credit-card fs-5'></i></a>
													<a href="account-user-details.html" class="list-group-item active d-flex justify-content-between align-items-center">Account Details <i class='bx bx-user-circle fs-5'></i></a>
													<a href="#" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout <i class='bx bx-log-out fs-5'></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="card shadow-none mb-0 border">
											<div class="card-body">
												<form action="cekalamat.php" method="post" enctype="multipart/form-data">
													<div class="col-md-6">
														<label class="form-label">jalan</label>
													    <input type="text" name="jalan" id="jalan">
													</div>
													<div class="col-md-6">
														<label class="form-label">kota</label>
														<input type="text" name="kota" id="kota">
													</div>
													<div class="col-12">
														<label class="form-label">provinsi</label>
														<input type="text" name="provinsi" id="provinsi">
													</div>
													<div class="col-12">
														<button class="btn btn-dark btn-ecomm">Save</button>
														<class value="submit">													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
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
</body>

</html>