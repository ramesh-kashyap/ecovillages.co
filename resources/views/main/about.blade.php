@include('layouts.mainsite.header')

     <main>
            
           <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(../assets/img/bg/bdrc-bg.jpg)">
              
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>About Us</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- about-area -->
            <section class="about-area about-p pt-120 pb-120 p-relative fix">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h5>About Us</h5>
                                    <h2>Manjot Singh Benipal</h2>                                   
                                </div>
								
                                   <p >Manjot Singh Benipal embarked on his entrepreneurial journey at the young age of 19, launching a poultry farming venture in 2013 with just 200 chickens. Despite initial resistance from his family, his perseverance—fueled by his grandfather’s support—helped him overcome early challenges. Through relentless hard work and strategic expansion, Manjot scaled his business to over 2 lakh chicks, partnering with leading companies and launching a transport service to support the industry.</p>
                                    <p>Today, he is not only a successful poultry farmer but also a youth icon, empowering nearly 50 families across Ludhiana and Ropar to start their own farms. With a vision to establish 1000 antibiotic-free farms and supply quality chicken to the Indian Army, Manjot is leading a movement toward sustainable and responsible poultry farming in India.</p>
                                    
                            </div>
							
                        </div>
                         <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="{{asset('')}}assets/img/bg/manjot.jpeg" alt="img" style="    height: 570px;
    width: 675px;">   
                               
                               <div class="about-text second-about">
                                  <img src="{{asset('')}}assets/img/features/about-play.png" alt="img">   
                                </div>
                            </div>
                          
                        </div>
                        
					
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- testimonial-area -->
            <!-- <section class="testimonial-area pt-120 pb-100 p-relative fix"  style="background: url(../assets/img/bg/services-bg.png); background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title mb-50 wow fadeInDown animated text-center" data-animation="fadeInDown" data-delay=".4s">
                                <h5>Our Testimonial</h5>
                                <h2>
                                 What Our Clients Says
                                </h2>
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="{{asset('')}}assets/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Jina Nilson</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <p class="pt-10 pb-20"><img src="{{asset('')}}assets/img/testimonial/review-icon.png" alt="img"></p>
                                    <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="{{asset('')}}assets/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="{{asset('')}}assets/img/testimonial/testi_avatar_02.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Braitly Dcosta</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <p class="pt-10 pb-20"><img src="{{asset('')}}assets/img/testimonial/review-icon.png" alt="img"></p>
                                      <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="{{asset('')}}assets/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                  <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="{{asset('')}}assets/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Jina Nilson</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <p class="pt-10 pb-20"><img src="{{asset('')}}assets/img/testimonial/review-icon.png" alt="img"></p>
                                    <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="{{asset('')}}assets/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="{{asset('')}}assets/img/testimonial/testi_avatar_02.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Braitly Dcosta</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <p class="pt-10 pb-20"><img src="{{asset('')}}assets/img/testimonial/review-icon.png" alt="img"></p>
                                      <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="{{asset('')}}assets/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                 <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="{{asset('')}}assets/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Jina Nilson</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <p class="pt-10 pb-20"><img src="{{asset('')}}assets/img/testimonial/review-icon.png" alt="img"></p>
                                    <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="{{asset('')}}assets/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="{{asset('')}}assets/img/testimonial/testi_avatar_02.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Braitly Dcosta</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <p class="pt-10 pb-20"><img src="{{asset('')}}assets/img/testimonial/review-icon.png" alt="img"></p>
                                      <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="{{asset('')}}assets/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- testimonial-area-end -->         
             <!-- frequently-area -->
            <section class="faq-area pb-120 p-relative fix">
                <div class="container">
                    <div class="row justify-content-center">
                       
                        <div class="col-lg-6">
                               <div class="faq-wrap pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"  >
                                                   01 Cras turpis felis, elementum sed mi at arcu ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse show" 
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"  >
                                                   02 Vestibulum nibh risus, in neque eleifendulputate sem ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo"  >
                                                  03 Donec maximus, sapien id auctor ornare ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                              Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>               
                        </div>
					    <div class="col-lg-6">
                           <div class="section-title wow fadeInLeft animated mb-20" data-animation="fadeInDown animated" data-delay=".2s">
                               <h5>Our FAQ</h5>
                                <h2>Get every single answer here.</h2>                                
                            </div>
                            <p>Aliquam at magna et mi interdum rhoncus quis sit amet lorem. Mauris aliquet, nunc blandit viverra aliquam, odio quam ultrices felis, eget aliquam ipsum libero ut enim. Sed sodales, tortor eget lacinia lacinia.</p>
                            <p>usce vel pulvinar enim. Donec mollis augue sit amet venenatis eleifend. Duis nisl arcu, posuere nec ullamcorper nec, viverra nec nisi.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- frequently-area-end -->	
              <!-- newslater-area -->
            <section class="newslater-area pt-120 pb-200" style="background:url(..assets/img/bg/newslater-bg.png); background-repeat: no-repeat; background-size: contain;">
                <div class="container" >
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-7">
                            <div class="section-title newslater-title">
                                <div class="text">
                                    <h5>Newsletter</h5>
                                    <h2>Join Us & Get Special Offers From Us</h2>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                             <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                               <div class="form-group p-relative">
                                  <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                               </div>
                               <!-- /Form-email -->	
                            </form>
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->
           <!-- video-area -->
            <section id="video" class="video-area p-relative">
                <div class="container">
                     <div class="row">
                        <div class="col-12">
                            <div class="s-video-wrap" style="background-image:url(..assets/img/bg/video-img2.png)">
                                <div class="s-video-content text-center">
                                   <h6><a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><img src="{{asset('')}}assets/img/bg/play-button2.png" alt="circle_right"></a></h6> 
                                   
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- video-area-end -->
            <!-- <section class="team-area2 fix p-relative pt-120 pb-80">  
                  <div class="container">  
                    <div class="row">   
                        <div class="col-lg-12 p-relative">
                           <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                               <h5>Our Team</h5>
                                <h2>
                                    Our Expert Team
                                </h2>
                             
                            </div>
                        </div>                        
                         
                    </div>
                   <div class="row">                   
                        <div class="col-xl-3 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <a href="team-single.html"><img src="{{asset('')}}assets/img/team/team01.jpg" alt="img"></a>
                                        
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-single.html">Howard Holmes</a></h4>
                                    <p>CEO & Founder</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>                                                  
                                        </ul>       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <a href="team-single.html"><img src="{{asset('')}}assets/img/team/team02.jpg" alt="img"></a>
                                    </div>                                     
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-single.html">Ella Thompson</a></h4>
                                    <p>Dcfarm Team</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>                                                  
                                        </ul>          
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-3 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <a href="team-single.html"><img src="{{asset('')}}assets/img/team/team03.jpg" alt="img"></a>
                                    </div>
                                    
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-single.html">Vincent Cooper</a></h4>
                                    <p>Dcfarm Team</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>                                                  
                                        </ul>          
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-3 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <a href="team-single.html"><img src="{{asset('')}}assets/img/team/team04.jpg" alt="img"></a>
                                    </div>
                                
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-single.html">Danielle Bryant</a></h4>
                                    <p>Dcfarm Team</p>
                                    <div class="team-social">
                                       <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>                                                  
                                        </ul>       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- team-area-end --> 
            <!-- steps-area -->
            <section class="steps-area p-relative pb-120">
                <div class="container">
          
                    <div class="row align-items-center">
                        
                        <div class="col-lg-6 col-md-12">
                            <div class="wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="{{asset('')}}assets/img/features/about_img_04.png" alt="class image">
                            </div>
                           
                        </div>
                        
                       <div class="col-lg-6 col-md-12">
                           <div class="pl-60">
                            <div class="section-title mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h5>Our Steps</h5>
                                <h2>How We Work On Quality</h2>
                            </div>
                               
                            <ul>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="{{asset('')}}assets/img/icon/fea-icon04.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>Wind Solar Energy</h3>
                                            <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                             <div class="date-box"><img src="{{asset('')}}assets/img/icon/fea-icon05.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>Forest Planting</h3>
                                            <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                           <div class="date-box"><img src="{{asset('')}}assets/img/icon/fea-icon06.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>Recycling Agriculture</h3>
                                            <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                           </div>
                        </div>
						
                    </div>
                    
                </div>
            </section>
            <!-- steps-area-end -->
            
            <!-- brand-area -->
            <div class="brand-area pb-120">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('')}}assets/img/brand/b-logo1.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="{{asset('')}}assets/img/brand/b-logo2.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="{{asset('')}}assets/img/brand/b-logo3.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('')}}assets/img/brand/b-logo4.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="{{asset('')}}assets/img/brand/b-logo5.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('')}}assets/img/brand/b-logo1.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="{{asset('')}}assets/img/brand/b-logo2.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="{{asset('')}}assets/img/brand/b-logo3.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('')}}assets/img/brand/b-logo4.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="{{asset('')}}assets/img/brand/b-logo5.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->        
         
         
        </main>

@include('layouts.mainsite.footer')