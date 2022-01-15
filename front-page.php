<?php get_header(); ?>


<script>
    var sec_nav= document.getElementById('sec_nav').offsetHeight;
sec_nav = sec_nav +20 ; 
    $("#web").css("height", sec_nav);

</script>


<section class="banner">
    <div class="banner-inner">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>


            <div class="carousel-inner">
              <div class="item active">
                <img src="<?php echo get_template_directory_uri() ?>/assets/ban1.jpeg" style="width:100%;">
              </div>

              <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/ban2.jpeg" style="width:100%;">
              </div>
            
              <!--<div class="item">-->
              <!--  <img src="<?php echo get_template_directory_uri() ?>/assets/31193-min.jpg" style="width:100%;">-->
              <!--</div>-->
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</section>








<section class="waterweb" style="margin: -0.6% auto 0% auto;">

	<div class="row">
		
		<div class="col-sm-6">
			<div class="gen" style="float: right;">
				<img class="white_gen" src="<?php echo get_template_directory_uri() ?>/assets/gen.png" alt=""> 
				<span class="gen_text">100% Genuine Products </span>
				<img class="genimg_2" src="<?php echo get_template_directory_uri() ?>/assets/gen2.png">
			</div>
		</div>
			<div class="col-sm-6">
			<div class="gen">
				<img class="white_gen" src="<?php echo get_template_directory_uri() ?>/assets/gen3_white.png" alt=""> 
				<span class="gen_text">Easy Returns & Delivery </span>
				<img class="genimg_2" src="<?php echo get_template_directory_uri() ?>/assets/gen3.png">
			</div>
		</div>

	</div>

</section>



<section class="watermob">

    <div class="row">
        
        <div class="col-sm-6">
            <div class="gen">
                <img class="white_gen_top" src="<?php echo get_template_directory_uri() ?>/assets/gen.png" alt=""> 
                <span class="gen_text">100% Genuine Products </span>
                <img class="genimg_2_top" src="<?php echo get_template_directory_uri() ?>/assets/gen2.png">
            </div>

        </div>
            <div class="col-sm-6">
            <div class="gen">
                <img class="white_gen_bot" src="<?php echo get_template_directory_uri() ?>/assets/gen3.png">
                <span class="gen_text">Easy Returns & Delivery </span>
                <img class="genimg_2_bot" src="<?php echo get_template_directory_uri() ?>/assets/gen3_white.png" alt=""> 
            </div>
        </div>

    </div>

</section>












<br>

<section style="background: #f7f7f7;padding: 4%;">
	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-5 about_col5">
				<div class="row">
					<div class="col-sm-12" >
						<img src="<?php echo get_template_directory_uri() ?>/assets/about2.jpeg" alt="" style="box-shadow:2px 1px 13px -3px;    width: 100%;">
					</div>

				</div>
			</div>
			


			<div class="col-sm-6 about parent">

                <div class="child">
                    
    				<div class="about_link">
    					<a href="">About Us</a>
    				</div>

    				<h3>Good Business</h3>

    				<p class="about1">"Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Et dicta ad doloribus nisi modi eveniet nam, earum. Veniam, corrupti, soluta cum cupiditate, totam nobis doloremque id adipisci maxime autem optio!"</p>

                    <p class="about2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam magnam nostrum officia enim labore sequi iste molestiae, alias nemo quis reprehenderit doloremque laudantium ut ea ad distinctio praesentium numquam, aliquam.</p>

    				<div><a href="" class="btn btn-dark">More About Us</a></div>
                </div>
			</div>
		</div>
	</div>
</section>









<br><br><br><br>









<style>
.recent_products .row:nth-child(2){
        flex-direction: row-reverse!important;
        margin:60px auto;
}


.recent_products .row:nth-child(2) .sale_high {
    position: absolute;
    left: -4px;
    top: -8px;
    font-size: 18px;
    letter-spacing: 2px;
    color: #f44336;
    font-weight: 400;
    font-family: "Libre Franklin";
}
.recent_products .row:nth-child(2) .sale_border {
    position: absolute;
    left: -18px;
    top: -34px;
}
</style>
 
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->







<section>
    
    <div class="container recent_products">

<?php

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 3,
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ){ 
    
        $loop->the_post();
        global $product;

    ?>
    
    

        <div class="row">
            <div class="col-sm-6 specific">
                <p class="about_link"><a href="">Shoe Care</a></p>
                <h3 class="subhead"><?php echo get_the_title(); ?></h3>
                <p class="desc"><?php echo $product->get_short_description(); ?> </p>
                <div><a href="<?php echo get_permalink(); ?>" class="btn btn-dark">Buy Now</a></div>
                <br><br>

            </div>
            <div class="col-sm-6">
                <div class="product_box">
                    <?php echo woocommerce_get_product_thumbnail(); ?>
                    <img class="sale_border" src="<?php echo get_template_directory_uri() ?>/assets/sale_border.png" alt="">
                    <span class="sale_high">SALE</span>
                </div>
                <!--<p class="shadow"><img src="<?php echo get_template_directory_uri() ?>/assets/product_shadow.png" alt=""></p>-->

            </div>

        </div>
        <?php 
    }
    wp_reset_query();
?>




    </div>

</section>




<br><br><br><br>


<section style="overflow-x:hidden;">
    <div class="parent_back_name">
        <ul  class="back_name">            
            <?php for ($i=0; $i < 30; $i++) {  ?>
                     <li>NXTGEN</li>
            <?php } ?>
   

        </ul>
    </div>

    <div  class="parent_back_name">
        <ul  class="back_name_right">            
            <?php for ($i=0; $i < 30; $i++) {  ?>
                     <li>NXTGEN</li>
            <?php } ?>
   
        </ul>
    </div>


</section>





<br><br>



<section>
    <?php
    
    // echo do_shortcode('[jr_instagram id="1"]');
    
    ?>
</section>




<br><br>

<script>



// Can also be used with $(document).ready()
$(document).ready(function() {
  $('.featured-product-slider').flexslider({
    animation: "slide",
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a")
  });
});







var current = $(window).scrollTop();
var total = $(window).height() - current;

var ele = $(".back_name");
var ele2 = $(".back_name_right");

var currPosition = ele.position().left - 1000;
var currPosition2 = ele2.position().left + 800;
</script>

<style>
    

@media (max-width: 767px){
</style>    
<script>
    var currPosition = ele.position().left - 1500;
    var currPosition2 = ele2.position().left + 0;
</script>
<style>
}
</style>
<script>
var trackLength = 300;

$(window).scroll(function (event) {
    current = $(window).scrollTop();

// console.log(current);

    var newPosition = trackLength * (current/total)
    ele.css({left:currPosition+newPosition+'px'});
    ele2.css({left:currPosition2-newPosition+'px'});

});
</script>

<?php get_footer(); ?>
