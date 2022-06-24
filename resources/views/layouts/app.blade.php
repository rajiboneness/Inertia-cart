<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('../img/fav_icon.png') }}">
        <title>Inertiacart | @yield('page')</title>

		 <!--CSS-->
		 <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
		 <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
		 <link href="{{ asset('css/aos.css') }}" rel="stylesheet" type="text/css">
		 <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
		 <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
	 </head>
       
    <body>
		<div class="upper-header d-none d-lg-block">
			<div class="container">
				<div class="row m-0">
					<div class="col-12 col-lg-6 p-0">
						<ul class="up_header">
							<li><a href="javascript:void(0);">Track Order</a></li>
							<li><a href="javascript:void(0);">Customer Support</a></li>
						</ul>
					</div>
					<div class="col-12 col-lg-6 p-0">
						<ul class="up_header justify-content-end">
							<li><a href="javascript:void(0);">Bulk Orders</a></li>
							<li><a href="javascript:void(0);">Corporate Sales</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark">
				<div class="container">
					<div class="header w-100">
						<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<i data-feather="menu"></i>
						</button> -->
						<a class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
							<i data-feather="menu"></i>
						  </a>
						<a class="navbar-brand" href="{{ route('front.home') }}"><img src="{{ asset('../img/logo.png') }}" width="195px"></a>
						<div class="position-relative resp_hide w-50">
							<input class="form-control d-none d-lg-block" type="search" placeholder="Search...">
							<button class="btn btn_search"><i data-feather="search"></i></button>
						</div>
						<div class="col_log ms-lg-auto">
							<ul class="coll_login"> 
								<li><a href="javascript:void(0);"><i data-feather="phone"></i><span>+91 1234567890<small>call us to place an order</small></span></a></li>
								<li><a href="javascript:void(0);"><i data-feather="user"></i> <span>Login / Signup</span></a></li>
								<li class="resp_search"><a href="javascript:void(0);"><i data-feather="search"></i></a></li>
								<li><a href="{{ route('front.cart.index') }}"><i data-feather="shopping-cart"></i><span class="order_count">02</span></a></li>

								<div class="resp_search_input">
									<input type="search" class="form-control" placeholder="search...">
								</div>
							</ul>
						</div>
					</div>
        <main>@yield('content')</main>
		<footer>
			<div class="container">
				<div class="row m-0 justify-content-between">
					<div class="col-6 col-lg-3">
						<div class="f-menu">
							<h6>Our Products</h6>
							<ul class="us_link">
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);"> Careers </a></li>
								<li><a href="javascript:void(0);">services</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Terms Of Service</a></li>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="f-menu">
							<ul class="us_link mt-0 mt-lg-5">
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);"> Careers </a></li>
								<li><a href="javascript:void(0);">services</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Terms Of Service</a></li>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="f-menu">
							<ul class="us_link mt-0 mt-lg-5">
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);"> Careers </a></li>
								<li><a href="javascript:void(0);">services</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Terms Of Service</a></li>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="f-menu">
							<ul class="us_link mt-0 mt-lg-5">
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);"> Careers </a></li>
								<li><a href="javascript:void(0);">services</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Terms Of Service</a></li>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="f-menu">
							<h6>Who we are</h6>
							<ul class="us_link">
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);"> Careers </a></li>
								<li><a href="javascript:void(0);">services</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="f-menu">
							<h6>Stores</h6>
							<ul class="us_link">
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);"> Careers </a></li>
								<li><a href="javascript:void(0);">services</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="f-menu">
							<h6>Helpful Links</h6>
							<ul class="us_link">
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);"> Careers </a></li>
								<li><a href="javascript:void(0);">services</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-3 border-lg-start">
						<div class="f-menu">
							<h6>Contact Us</h6>
							<p><i data-feather="phone" class="me-1"></i>+91 1234567890</p>
							<p><i data-feather="mail" class="me-1"></i>test@test.com</p>
							<p class="border-top pt-3 mt-3">
								<b>Follow us</b>
								<span class="d-block mt-3">
									<a href=""><i data-feather="facebook" class="me-1"></i></a>
									<a href=""><i data-feather="twitter" class="me-1"></i></a>
									<a href=""><i data-feather="instagram" class="me-1"></i></a>
								</span>
							</p>
						</div>
					</div>
					<div class="col-12 pt-3 border-top text-center">
						<p><small>Copyright © 2021 XYZ. All Rights Reserved</small></p>
					</div>
				</div>
			</div>
		</footer>


		<!--Script-->
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="https://unpkg.com/feather-icons"></script>
		<script type="text/javascript" src="{{ asset('./js/swiper-bundle.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

		<script>
			feather.replace()
		</script>
    </body>
</html>