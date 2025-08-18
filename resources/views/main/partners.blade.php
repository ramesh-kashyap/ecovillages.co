@include('layouts.mainsite.header')


<!--==================================================-->
<!-- Start Echofy Breadcumb Area -->
<!--==================================================-->
<div class="breadcumb-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 text-center">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h4>Meet Our Team</h4>
					</div>
					<ul>
						<li><a href="{{route('index')}}"><img src="assets/images/breadcumb-text-shape.png" alt="">Ecovillages</a></li>
						<li>Our Team</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Breadcumb Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Strat Echofy Team Area-->
<!--==================================================-->
<div class="team-area inner">
	<div class="container">
		<div class="row">
		   <div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4><img src="{{asset('')}}assets/images/section-shape.png" alt="">Our Team</h4>
					<h1>Meet Our Dedicated Members</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/about-one-img-1.jpg" alt=""style="border-radius: 60%;width: 260px;height: 260px;">
					</div>
					<div class="team-content">
						<h4>Narshi</h4>
						<p></p>
						<div class="team-social-icon">
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
			<div class="col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
                       <img src="{{asset('')}}assets/images/home1/team2.jpg" alt=""style="border-radius: 60%;width: 260px;height: 260px;">

					</div>
					<div class="team-content">
						<h4>Raghav Joshi</h4>
						<p></p>
						<div class="team-social-icon">
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
			<div class="col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="{{asset('')}}assets/images/home1/team3.jpg" alt=""style="border-radius: 60%;width: 260px;height: 260px;">
					</div>
					<div class="team-content">
						<h4>Ram Lal</h4>
						<p></p>
						<div class="team-social-icon">
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
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Brand Area-->
<!--==================================================-->

@include('layouts.mainsite.footer')
