<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ecovillages</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets/img/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/animate.min.css">
	<link rel="stylesheet" href="{{asset('')}}assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/magnific-popup.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/dripicons.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/slick.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/meanmenu.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/default.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
</head>

<body>
	<!-- Cursor -->
	<div class="cursor js-cursor"></div>
	<!-- header -->
	<header class="header-area header">
		<div id="header-sticky" class="menu-area">
			<div class="container">
				<div class="second-menu">
					<div class="row align-items-center">
						<div class="col-xl-3 col-lg-3">
							<div class="logo">
								<a href="{{route('index')}}"><img src="{{asset('')}}assets/img/logo/ecovillage.png" alt="logo" width="150" style="margin-bottom: 10px;"></a>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">

							<div class="main-menu text-right text-xl-right">
								<nav id="mobile-menu">
									<ul>
										<li class="has-sub">
											<a href="{{route('index')}}">Home</a>

										</li>
										<li><a href="{{route('about-us')}}">About</a></li>
										<li><a href="{{route('services')}}">Services</a></li>
										<li><a href="{{route('partners')}}">Team</a></li>



										<li class="has-sub">
											<a href="#">Pages</a>
											<ul>
												<!-- <li><a href="">Gallery</a></li> -->

												<li><a href="{{route('faq')}}">Faq</a></li>
												<li><a href="{{route('blog-details')}}">Blog</a></li>


											</ul>
										</li>

										<li><a href="{{route('contact-us')}}">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
							<div class="login">
								<ul>
									<li><a href="#" class="menu-tigger"><i class="fal fa-search"></i></a></li>
									<li>
										<div class="second-header-btn">
											<a href="{{route('login')}}" class="btn">Login Now </a>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-12">
							<div class="mobile-menu"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header-end -->
	<!-- offcanvas-area -->
	<div class="offcanvas-menu">
		<span class="menu-close"><i class="fas fa-times"></i></span>
		<form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
			<input type="text" name="s" id="search" placeholder="Search" />
			<button><i class="fa fa-search"></i></button>
		</form>
		<div id="cssmenu3" class="menu-one-page-menu-container">
			<ul class="menu">
				<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('index')}}">Home</a></li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('about-us')}}">About Us</a></li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('services')}}">Services</a></li>
				<!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.">Pricing </a></li> -->
				<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('partners')}}">Team </a></li>
				<!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="">Cases Study</a></li> -->
				<!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li> -->
				<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('contact-us')}}">Contact</a></li>
			</ul>
		</div>
		<div id="cssmenu2" class="menu-one-page-menu-container">
			<ul id="menu-one-page-menu-12" class="menu">
				<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
			</ul>
		</div>
	</div>
	<div class="offcanvas-overly"></div>
	<!-- offcanvas-end -->