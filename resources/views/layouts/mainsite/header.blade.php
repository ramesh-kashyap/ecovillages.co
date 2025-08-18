<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ecovillages </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">

	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/owl.carousel.min.css" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/animate.css" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/animated-text.css" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/all.min.css" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/flaticon.css" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/theme-default.css" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/owl.transitions.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{asset('')}}venobox/venobox.css" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/style.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="{{asset('')}}assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

	<!-- loder -->
	<!--<div class="loader-wrapper">-->
	<!--	<span class="loader"></span>-->
	<!--	<div class="loder-section left-section"></div>-->
	<!--	<div class="loder-section right-section"></div>-->
	<!--</div>-->


	<!--==================================================-->
	<!-- Start Echofy Top Header Area -->
	<!--==================================================-->
	<!-- <div class="top-header-area" style="background-color:#000;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="top-header-info">
						<ul>
							<li><i class="bi bi-geo-alt" style="color:white;"></i>New market Sandigo - California</li>
							<li><i class="bi bi-envelope-open" style="color:white;"></i> ecovillages@gmail.com</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="top-header-right">
						<div class="top-header-contact">
							<span><i class="bi bi-telephone-fill" style="color:white;"></i>+123 (4567) 890</span>
						</div>
						<div class="top-header-social-icon">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--==================================================-->
	<!-- End Echofy Top Header Area -->
	<!--==================================================-->



	<!--==================================================-->
	<!-- Start Echofy Header Area -->
	<!--==================================================-->
	<div class="header-area" id="sticky-header" >
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<div class="header-logo">
						<a href="{{route('index')}}"><img src="{{asset('')}}assets/images/ecovillage.png" style="width: 140px;height:60px;filter:'brightnesh(0.55) invert(0)'" alt="ecovillage"></a>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="header-menu">
						<ul>
							<li class="menu-item-has-children"><a href="{{route('index')}}">Home</a>

							</li>
							<li><a href="{{route('about-us')}}">About</a></li>
							<!-- <li class="menu-item-has-children"><a href="#">Service<i class="fas fa-chevron-down"></i></a>
                           <ul class="sub-menu">
					      	  <li><a href="service.html">Service</a></li>
					      	  <li><a href="service-details.html">Service Details</a></li>
						   </ul>
						</li> -->
							<li class="menu-item-has-children"><a href="#">Services<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<!-- <li><a href="about.html">About</a></li> -->
									<li><a href="{{route('services')}}">Service</a></li>
									<li><a href="{{route('partners')}}">Team</a></li>
									<li><a href="{{route('faq')}}">Faqs</a></li>
									<li><a href="{{route('blog-details')}}">Blogs</a></li>
								</ul>
							</li>
							<!-- <li class="menu-item-has-children"><a href="#">Blog<i class="fas fa-chevron-down"></i></a>
                           <ul class="sub-menu">
					      	  <li><a href="blog-grid.html">Blog Grid</a></li>
					      	  <li><a href="blog-list.html">Blog List</a></li>
					      	  <li><a href="blog-2column.html">Blog 2column</a></li>
					      	  <li><a href="blog-details.html">Blog Details</a></li>
						   </ul>
						</li> -->
							<li><a href="{{route('contact-us')}}">Contact</a></li>
						</ul>
						<div class="header-secrch-icon search-box-outer">
							<a href="#"><i class="bi bi-search"></i></a>
						</div>
						<div class="header-button">
						
							<a href="{{ route('login') }}">Log in Now</a>
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
		  <!--  							<div class="col-lg-3">-->
				<!--	<div class="header-logo">-->
				<!--		<a href="{{route('index')}}"><img src="{{asset('')}}assets/images/ecovillage.png" style="width: 60px;height:60px;filter:'brightnesh(0.55) invert(0)'" alt="ecovillage"></a>-->
				<!--	</div>-->
				<!--</div>-->
			<nav class="header-menu">

				<ul class="nav_scroll">
					<li class="menu-item-has-children"><a href="{{route('index')}}">Home</a>

					</li>
					<li><a href="{{route('about-us')}}">About</a></li>
					<!-- <li class="menu-item-has-children"><a href="#">Service</a>
                   <ul class="sub-menu">
			      	  <li><a href="service.html">Service</a></li>
			      	  <li><a href="service-details.html">Service Details</a></li>
				   </ul>
				</li> -->
					<li class="menu-item-has-children"><a href="#">Services</a>
						<ul class="sub-menu">
							<!-- <li><a href="about.html">About</a></li> -->
							<li><a href="{{route('services')}}">Service</a></li>
							<li><a href="{{route('partners')}}">Team</a></li>
							<li><a href="{{route('faq')}}">Faqs</a></li>
                         	<li><a href="{{route('blog-details')}}">Blogs</a></li>
						</ul>
					</li>
					<!-- <li class="menu-item-has-children"><a href="#">Blog</a>
                   <ul class="sub-menu">
			      	  <li><a href="blog-grid.html">Blog Grid</a></li>
			      	  <li><a href="blog-list.html">Blog List</a></li>
			      	  <li><a href="blog-2column.html">Blog 2column</a></li>
			      	  <li><a href="blog-details.html">Blog Details</a></li>
				   </ul>
				</li> -->
					<li><a href="{{route('contact-us')}}">Contact</a></li>
										<li><a href="{{route('register')}}">Register </a></li>

					<li><a href="{{route('login')}}">Login </a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Main Menu Area -->
	<!--==================================================-->