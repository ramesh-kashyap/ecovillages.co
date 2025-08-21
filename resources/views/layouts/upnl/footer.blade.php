
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://starcodekh.github.io/index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('')}}users/vendor/global/global.min.js"></script>
	<script src="{{asset('')}}users/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="{{asset('')}}users/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="{{asset('')}}users/vendor/apexchart/apexchart.js"></script>
	
	<script src="{{asset('')}}users/vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{asset('')}}users/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<!-- <script src="{{asset('')}}users/js/dashboard/dashboard-1.js"></script> -->
	
	<script src="{{asset('')}}users/vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="{{asset('')}}users/js/custom.min.js"></script>
	<script src="{{asset('')}}users/js/dlabnav-init.js"></script>
	<script src="{{asset('')}}users/js/demo.js"></script>
    <!-- <script src="{{asset('')}}users/js/styleSwitcher.js"></script> -->
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'dark';
				new dlabSettings(dlabSettingsOptions);
			},1500)
		});
		
	</script>

</body>
</html>