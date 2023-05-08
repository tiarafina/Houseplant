<!doctype html>
<html lang="en">

<head>
<?php
include "header.php";
?>
</head>


		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Sign in</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Sign In</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="">
					<div class="container">
						<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
							<div class="row row-cols-1 row-cols-xl-2">
								<div class="col mx-auto">
									<div class="card">
										<div class="card-body">
											<div class="border p-4 rounded">
												<div class="text-center">
													<h3 class="">Sign in</h3>
													<p>Don't have an account yet? <a href="signup.php">Sign up here</a>
													</p>
												</div>
												<div class="d-grid">
													<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
														<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
														<span>Sign in with Google</span>
														</span>
													</a> <a href="javascript:;" class="btn btn-white"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
												</div>
													<form class="form-login" method="POST" action="ceklogin1.php">
														<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
															<hr/>
														</div>
														<div class="form-body">
													<form class="row g-3">
														<div class="col-12">
															<input type="text" name="username" placeholder="masukkan username">
														</div>
														<div class="col-12">
															<input type="password" name="password" placeholder=" masukan password">
															<div class="input-group" id="show_hide_password">
															</div>
															<div class="mb-3 row">
														
													
														<div class="col-12">
															<div class="d-grid">
																<input type="submit" name="submit" value="login">
													</forms>
															</div>
															</div>
														</div>
															</div>
															</div>
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
			</div>
		</div>
		
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