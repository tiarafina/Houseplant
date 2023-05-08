<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/logo.png" type="image/" />
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
	<title>Houseplants</title>
</head>

<body>

	<b class="screen-overlay"></b>
		<!--start top header wrapper-->
		<div class="header-wrapper">
			<div class="top-menu border-bottom">
				<div class="container">
					<nav class="navbar navbar-expand">
						<div class="shiping-title text-uppercase font-13 d-none d-sm-flex">Welcome to Houseplants!</div>
						<ul class="navbar-nav">
								<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
									<div class="lang d-flex gap-1">
									</div>
								</a>
							</li>
						</ul>
						<ul class="navbar-nav social-link ms-lg-2 ms-auto">
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="header-content pb-3 pb-md-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-4 col-md-auto">
							<div class="d-flex align-items-center">
								<div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
								</div>
								<div class="logo d-none d-lg-flex">
									<a href="index.html">
										<img src="assets/images/logo-icon.png" class="logo-icon" alt="" />
									</a>
								</div>
							</div>
						</div>
						<div class="col col-md order-4 order-md-2">
							<div class="input-group flex-nowrap px-xl-4">
								<input type="text" class="form-control w-100" placeholder="Search for Products">
								<select class="form-select flex-shrink-0" aria-label="Default select example" style="width: 10.5rem;">
								<option selected>All Categories</option>
									<option value="1">Bunga</option>
									<option value="2">Daun</option>
									<option value="3">Akar</option>
                                    <option value="4">Pohon</option>
                                    <option value="5">Pupuk</option>
								</select>	<span class="input-group-text cursor-pointer bg-transparent"><i class='bx bx-search'></i></span>
							</div>
						</div>
						<div class="col-4 col-md-auto order-2 order-md-4">
							<div class="top-cart-icons float-end">
								<nav class="navbar navbar-expand">
									<ul class="navbar-nav ms-auto">
										<li class="nav-item"><a href="account-dashboard.html" class="nav-link cart-link"><i class='bx bx-user'></i></a>
										</li>
										<li class="nav-item"><a href="wishlist.html" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
										</li>
										<li class="nav-item dropdown dropdown-large"><a href="keranjang.php"></a>
											<a href="keranjang.php" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown">
												<i class='bx bx-shopping-bag'></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:;">
													<div class="cart-header">
														<p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
													</div>
												</a>
												<div class="d-grid p-3 border-top">	<a href="javascript:;" class="btn btn-dark btn-ecomm">CHECKOUT</a>
												</div>
											</div>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
			<div class="primary-menu border-top">
				<div class="container">
					<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
						<div class="offcanvas-header">
							<button class="btn-close float-end"></button>
							<h5 class="py-2">Navigation</h5>
						</div>
						<ul class="navbar-nav">
							<li class="nav-item active"> <a class="nav-link" href="index.php">Home </a> 
							</li>
							<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Categories <i class='bx bx-chevron-down'></i></a>
								<div class="dropdown-menu dropdown-large-menu">
									<div class="row">
										<div class="col-md-4">
											<ul class="">
												<li><a href="#">Bunga</a>
												</li>
												<li><a href="#">Akar</a>
												</li>
												<li><a href="#">Daun</a>
												</li>
												<li><a href="#">Pohon</a>
												</li>
												<li><a href="#">Pupuk</a>
												</li>
											</ul>
										</div>
										<!-- end col-3 -->
									</div>
									<!-- end row -->
								</div>
								<!-- dropdown-large.// -->
							</li>
							<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Shop  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
                                </i><a class="dropdown-item" href="viewproduq.php">Product</a>
										<ul class="submenu dropdown-menu">
											<li>
										
										</ul>
									</li>
									<li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop Pages <i class='bx bx-chevron-right float-end'></i></a>
										<ul class="submenu dropdown-menu">
											<li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a>
											</li>
											<li><a class="dropdown-item" href="checkout-details.html">Checkout Details</a>
											</li>
											<li><a class="dropdown-item" href="checkout-shipping.html">Checkout Shipping</a>
											</li>
											<li><a class="dropdown-item" href="checkout-payment.html">Checkout Payment</a>
											</li>
											<li><a class="dropdown-item" href="checkout-review.html">Checkout Review</a>
											</li>
											<li><a class="dropdown-item" href="checkout-complete.html">Checkout Complete</a>
											</li>
											<li><a class="dropdown-item" href="order-tracking.html">Order Tracking</a>
											</li>
											<li><a class="dropdown-item" href="product-comparison.html">Product Comparison</a>
											</li>
										</ul>
									</li>
									<li><a class="dropdown-item" href="signin.php">Sign In</a>
									</li>
									<li><a class="dropdown-item" href="authentication-signup.html">Sign Up</a>
									</li>
									</li>
								</ul>
							</li>
							<li class="nav-item"> <a class="nav-link" href="../blog/refisiblog.php">Artikel </a> 
                            </li>
							<li class="nav-item"> <a class="nav-link" href="../forumdis.php">Forum diskusi</a> 
                            </li>
							<li class="nav-item"> <a class="nav-link" href="about-us.html">About Us </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="contact-us.html">Contact Us </a> 
							</li>
							<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">My Account  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
									<li><a class="drom" pdown-itehref="account-dashboard.html">Dashboard</a>
									</li>
									<li><a class="dropdown-item" href="account-downloads.html">Downloads</a>
									</li>
									<li><a class="dropdown-item" href="account-orders.html">Orders</a>
									</li>
									<li><a class="dropdown-item" href="account-payment-methods.html">Payment Methods</a>
									</li>
									<li><a class="dropdown-item" href="detilcust.php">User Details</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!--end top header wrapper-->
