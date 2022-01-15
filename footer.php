<section style="margin-top:2%; margin:auto;background: #f3f3f3;">
	<div class="container-fluid" style="margin-bottom:2%;">
		<div class="last-section" >
			<!--<img src="<?php echo get_template_directory_uri() ?>/assets/NEXTGEN@1X.pngaa" alt="" style="width: 100%;">-->

				<h3 class="logo">NXT<span class="text2">GEN</span></h3>
				<div class="social_icon">
					<!--<img src="<?php echo get_template_directory_uri() ?>/assets/facebook_icon.png" alt="">-->
					<a href="https://www.youtube.com/channel/UC4q7KdUjQT6TkkN4h58lqaQ">
					    <img src="<?php echo get_template_directory_uri() ?>/assets/youtube_icon.png" alt="" style="margin:auto 1%;">
    				   </a>
					<a href="https://instagram.com/nxtgencustom" target="_blank">
					    <img src="<?php echo get_template_directory_uri() ?>/assets/instagram_icon.png" alt="">
					</a>
				</div>

				<hr class="footerhr" style="background-color: #000000;border: 1px solid #d5e9ff;    position: absolute; width: 100%;">
		</div>

		<div class="footer_menu container">
			<div class="row footer">
				<div class="col-sm-4">
					<h5>SHOP</h5>
					<ul class="footer_menu">
						<li><a href="">Shop Care</a></li>
						<li><a href="">Shop Accessories</a></li>
						<li><a href="">Sale</a></li>
						<li><a href="">Offers</a></li>
					</ul>
				</div>

				



				<div class="col-sm-4">
					<h5>INFORMATION</h5>
					   <?php  $args = array(
			    'menu_class' => 'footer_menu',        
			    'menu' => '(information)'
			);
			wp_nav_menu( $args );  ?>


				</div>






					<div class="col-sm-4">
					<h5>CUSTOMER SERVICE</h5>
					   <?php  
					   
					   
					   
					   $args = array(
			    'menu_class' => 'footer_menu',        
			    'menu' => '(customer_service)'
			);
			wp_nav_menu( $args );  ?>


				</div>
				
				<!--<div class="col-sm-3">-->
				<!--	<h5>SECURE SHOPPING</h5>-->

				<!--	<div class="secure_images">-->
				<!--		<img src="<?php echo get_template_directory_uri() ?>/assets/mastercard@1X.png" alt="">-->
				<!--		<img src="<?php echo get_template_directory_uri() ?>/assets/symbols@1X.png" alt="">-->
				<!--	</div>-->

				<!--	<div class="secure_images">-->

				<!--		<img src="<?php echo get_template_directory_uri() ?>/assets/paypal-logo@1X.png" alt="">-->
				<!--		<img src="<?php echo get_template_directory_uri() ?>/assets/symbols(1)@1X.png" alt="">-->
				<!--	</div>-->

					
				<!--</div>-->
			</div>

		</div>
	</div>
			<footer>
				Copyright 2021 -NXTGEN All Rights Reserved. Designed & Developed by Bew Digital.
			</footer>
</section>

<!-- <script type='text/javascript' src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js' id='scrolltrigger-js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js' id='gsap-js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js' id='scroll-js'></script>
<script type='text/javascript' src='https://www.marsrouge.com/wp-content/themes/mr3/assets/js/script.js?ver=5.7.1' id='script-js'></script>
 -->


<script>
	$(document).ready(function(){
        current = $(window).scrollTop();
if(current != 0){

    $(window).scrollTop(0);
    window.location.href='';

}
// console.log(current);
});
</script>

<?php wp_footer(); ?>
</body>
</html>


