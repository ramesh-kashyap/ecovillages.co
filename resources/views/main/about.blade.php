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
						<h4>About Us</h4>
					</div>
					<ul>
						<li><a href="{{route('index')}}"><img src="{{asset('')}}assets/images/breadcumb-text-shape.png" alt="">Ecovillages</a></li>
						<li>Abour Us</li>
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
<!-- Strat Echofy About Area -->
<!--==================================================-->
<div class="about-area home-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="about-thumb">
					<img src="{{asset('')}}assets/images/home1/WhatsApp Image 1404-05-03 at 15.17.18 copy.jpeg" style="width: 374px;"  alt="">

					<!-- <div class="about-video">
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=e6R6VsgD8yQ&amp;amp;t=179s"><i class="bi bi-play"></i></a>
					</div> -->
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="about-right">
					<div class="section-title left">
						<h4><img src="{{asset('')}}assets/images/section-shape.png" alt="">Get to know Ecovillages</h4>
						<h1>Manjot Singh Benipal </h1>
						<!-- <h1>Forever Green Future</h1> -->
					</div>
				    <div class="about-text">
				    	<span><img src="{{asset('')}}assets/images/shape.png" alt=""></span><a href="#">Entrepreneur | Poultry Farming Pioneer | Youth Icon</a>
				    </div>

				    <p class="about-desc">Manjot Singh Benipal embarked on his entrepreneurial journey at the young age of 19,
launching a poultry farming venture in 2013 with just 200 chickens. Despite initial resistance
from his family, his perseverance—fueled by his grandfather’s support—helped him
overcome early challenges. Through relentless hard work and strategic expansion, Manjot
scaled his business to over 2 lakh chicks, partnering with leading companies and launching a
transport service to support the industry.</p>

                    <div class="about-list-item">
                    	<ul>
                    		<li><i class="bi bi-check"></i>Today, he is not only a successful poultry farmer but also a youth icon, empowering nearly 50
families across Ludhiana and Ropar to start their own farms. With a vision to establish 1000
antibiotic-free farms and supply quality chicken to the Indian Army, Manjot is leading a
movement toward sustainable and responsible poultry farming in India./li>
                    	</ul>
                    </div>
                    <div class="about-single-box">
	                    <!-- <div class="about-author-box">
	                    	 <div class="about-author">
	                    	 	<img src="{{asset('')}}assets/images/about-one-img-1.jpg" alt=""width="60"height="60" style="border-radius: 50%;">
	                    	 </div>
	                    	 <div class="about-author-content">
	                    	 	<h4>shyam lal</h4>
	                    	 	<p></p>
	                    	 </div>
	                    </div> -->
		                <div class="echofy-button">
							<a href="#">More About <img src="assets/images/button-shape.png" alt=""></a>
							<img class="two" src="{{asset('')}}assets/images/button-shape-2.png" alt="">
						</div>
                    </div>	
                    <div class="about-shape-1">
                    	<img src="{{asset('')}}assets/images/home1/about-shape-1.png" alt="">
                    </div>                   
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy About Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Strat Echofy Counter Area -->
<!--==================================================-->
<div class="counter-area">
	<div class="container">
		<div class="row">
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="{{asset('')}}assets/images/counter-icon-1.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">{{$contents->member}}</h4>
		    			<span>+</span>
		    			<p>Team Member</p>
		    		</div>
		    	</div>
		    </div>		  
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="{{asset('')}}assets/images/counter-icon-2.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">{{$contents->work}}</h4>
		    			<span>+</span>
		    			<p>Complete Works</p>
		    		</div>
		    	</div>
		    </div>		   
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="{{asset('')}}assets/images/counter-icon-3.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">{{$contents->award}}</h4>
		    			<p>Award Wining</p>
		    		</div>
		    	</div>
		    </div>		   
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="{{asset('')}}assets/images/home1/counter-icon-4.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">{{$contents->average}}</h4>
		    			<p>Avg Ratings</p>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Counter Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Strat Echofy Process Area -->
<!--==================================================-->
<div class="process-area">
	<div class="container">
		<div class="row align-items-center" id="poress-row">
			<div class="col-lg-6 col-md-12">
				<div class="porcess-thumb">
					<img src="{{asset('')}}assets/images/home1/napier.jpg"  style="
    width: 363px;
"alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="process-left">
					<div class="section-title left">
						<h4><img src="{{asset('')}}assets/images/home1/section-shape.png" alt="">Contact Us </h4>
						<h1>Fresh Environmental</h1>
						<h1>Plant & Safe Trees</h1>
						<p class="section-desc">
						Eco Village is a diversified enterprise committed to
sustainable living and rural empowerment. Our
operations span across Napier grass farming, cow dairy
farming, and biomass pellet production, promoting eco-
friendly energy and agriculture.We also offer a wide range of organic products through our
online store, provide holistic wellness via our Ayurvedic medicine,
and support businesses with innovative payment solutions. At Eco
Village, we blend tradition with technology to build a greener,
healthier future.
						</p>
												<h3>VISION</h3>

												<P>To cultivate a sustainable future where nature, health,
and innovation thrive in harmony — starting with Napier
grass and growing into a holistic ecosystem of organic
farming, ethical animal husbandry, Ayurvedic wellness,
and inclusive financial solutions.</P>
												<h3>MISSION</h3>
												<P>Eco Village is committed to harnessing the power of Napier grass to
promote sustainable agriculture, nourish livestock, and restore the
environment. We aim to grow into a diverse, eco-conscious enterprise
by integrating ethical cow farming, authentic Ayurvedic medicine,
innovative payment systems for rural communities, and regenerative
organic farming practices — creating value for people, animals, and
the planet.</P>

					</div>
					<div class="echofy-button">
						<a href="{{route('contact-us')}}">Contact Us <img src="{{asset('')}}assets/images/button-shape.png" alt=""></a>
						<img class="two" src="{{asset('')}}assets/images/button-shape-2.png" alt="">
					</div>
					<div class="process-shape">
	                     <img src="{{asset('')}}assets/images/home1/about-shape-2.png" alt="">
	                </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Process Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Echofy Brand Area Home-Two -->
<!--==================================================-->
<!-- <div class="brand-area home-two">
	<div class="container">
		<div class="row">
		   <div class="brand-list-2 owl-carousel">
			   <div class="col-md-12">
			   	   <div class="single-brand-box">
			   	   	   <img src="{{asset('')}}assets/images/brand-1.png" alt="">
			   	   </div>
			   </div>				  
			    <div class="col-md-12">
			   	   <div class="single-brand-box">
			   	   	   <img src="{{asset('')}}assets/images/brand-2.png" alt="">
			   	   </div>
			   </div>				   
			   <div class="col-md-12">
			   	   <div class="single-brand-box">
			   	   	   <img src="{{asset('')}}assets/images/brand-3.png" alt="">
			   	   </div>
			   </div>				   
			   <div class="col-md-12">
			   	   <div class="single-brand-box">
			   	   	   <img src="{{asset('')}}assets/images/brand-1.png" alt="">
			   	   </div>
			   </div>				   
			    <div class="col-md-12">
			   	   <div class="single-brand-box">
			   	   	   <img src="{{asset('')}}assets/images/brand-4.png" alt="">
			   	   </div>
			   </div>
		    </div>
		</div>
    </div>
</div> -->
<!--==================================================-->
<!-- End Echofy Brand Area Home-Two -->
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



<!--==================================================-->
<!-- Strat Echofy Text Area Home Two-->
<!--==================================================-->
<div class="marquee home-two">
  <div class="marquee-content scroll">
     <div class="text-block">Ultimate Ecovillages</div>     
   </div>
  <div class="marquee-content scroll">
    <div class="text-block">Ultimate Ecovillages</div>
  </div>
    <div class="marquee-content scroll">
       <div class="text-block">Ultimate Ecovillages</div>
    </div>
</div>
<!--==================================================-->
<!-- Strat Echofy Text Area Home Two-->
<!--==================================================-->



<!--==================================================-->
<!-- Strat Echofy Testimonial Area-->
<!--==================================================-->
<!-- <div class="testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4><img src="{{asset('')}}assets/images/home1/section-shape.png" alt="">Testimonials</h4>
					<h1>Clients Best Feedback About</h1>
					<h1>Echofy Provission</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="testimonial-list-1 owl-carousel">
			    <div class="col-lg-12">
				<div class="single-testimonial-box">
					<div class="testi-qutoe">
						<img src="{{asset('')}}assets/images/home1/testi-quote.png" alt="">
					</div>
					<div class="testi-author">
						<div class="testi-author-thumb">
							<img src="{{asset('')}}assets/images/home1/testi-author-1.png" alt="">
						</div>
						<div class="testi-author-content">
							<div class="testi-author-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
							<h4>Anjelina Watson</h4>
							<p>UI/UX Designer</p>
						</div>
					</div>
					<p class="testi-desc">
						“Competently cultivate worldwide e-tailers through to principles
                        professionally engineer high-payoff deliverables without excet
                        Rapidiously network effective”
					</p>
					<div class="what-for-comment">
						<p>Service Quality</p>
					</div>
				</div>
			    </div>			    
			    <div class="col-lg-12">
				    <div class="single-testimonial-box">
					<div class="testi-qutoe">
						<img src="{{asset('')}}assets/images/home1/testi-quote.png" alt="">
					</div>
					<div class="testi-author">
						<div class="testi-author-thumb">
							<img src="{{asset('')}}assets/images/home1/testi-author-2.png" alt="">
						</div>
						<div class="testi-author-content">
							<div class="testi-author-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-half"></i></li>
								</ul>
							</div>
							<h4>John D. Alexon</h4>
							<p>Web Developer</p>
						</div>
					</div>
					<p class="testi-desc">
						“Competently cultivate worldwide e-tailers through to principles
                        professionally engineer high-payoff deliverables without excet
                        Rapidiously network effective”
					</p>
					<div class="what-for-comment">
						<p>Supports</p>
					</div>
				    </div>
			    </div>
			</div>
		</div>
	</div>
	<div class="testi-shape">
		<img src="{{asset('')}}assets/images/home1/testi-shape.png" alt="">
	</div>
</div> -->
<!--==================================================-->
<!-- Strat Echofy Testimonial Area-->
<!--==================================================-->


@include('layouts.mainsite.footer')