<!doctype html>
<html <?php language_attributes(); ?> class="no-js has-scroll-init has-scroll-smooth is-ready">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widthe=device-width, initial-scale=1.0">
	<title>NXTGEN</title>


<!-- <link rel="stylesheet" href="style.css"> -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>




	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div  id="web">
	<header id="navbar">
		<div class="container-fluid">
			<?php  $args = array(
			    'menu_class' => 'top_nav',        
			    'menu' => '(top_bar)'
			);
			wp_nav_menu( $args );  ?>
		</div>
	</header>

	<nav id="sec_nav">
		<div class="container-fluid">
		<div class="row cust_row" style="padding-top: 10px;">
			<div class="col-sm-4">
				<p class="logo"><a style="color: black;" href="http://nxtgencustom.com/">NXT<span class="text2">GEN</span></a></p>
			</div>

			<div class="col-sm-4">

				<?php 


				wp_nav_menu( array(
					'theme_location' => 'primary_menu',
						) );
						?>

			</div>

			<div class="col-sm-4" style="padding-top: 4px;">
				<ul class="right-nav">
					<li><a href="index.php/my-account/">
						<?php if(is_user_logged_in()){
							echo 'My Account' ;
						}else{
							echo 'Login' ;	
						} ?>
						
						 <img src="<?php echo get_template_directory_uri() ?>/assets/account.png" alt=""></a></li>
					<li>
						<a class="cart" href="index.php/cart/">
							<img src="<?php echo get_template_directory_uri() ?>/assets/cart.png" alt="">
							<div class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</div>
</nav>
</div>




<div id="mob">
	<div class="container-fluid">
		<div class="mob-nav">
			
			<div class="left-nav">
				<div class="hamburger">
				    <span></span>
				    <span></span>
				    <span></span>
				    <span></span>
				    <span></span>
				    <span></span>
				  </div>
			  <p class="logo"><a style="color: black;" href="http://nxtgencustom.com/">NXT<span class="text2">GEN</span></a></p>
			</div>

			<div class="right-nav">

					<li>
						<a href="index.php/my-account/">
						 <img src="<?php echo get_template_directory_uri() ?>/assets/account.png" alt=""></a>
					</li>
					
					<li>
						<a class="cart" href="index.php/cart/">
							<img src="<?php echo get_template_directory_uri() ?>/assets/cart.png" alt="">
							<div class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
						</a>
					</li>
				
			</div>
		</div>
	</div>




  <nav  class="main-nav">
    
   <?php  $args = array(
			    'menu_class' => 'top_nav',        
			    'menu' => '(top_bar)'
			);
			wp_nav_menu( $args );  ?>


				<?php 


				wp_nav_menu( array(
					'theme_location' => 'primary_menu',
						) );
						?>

</nav>




</div>


<style>
	#navbar {
  position: fixed; /* Make it stick/fixed */
  top: 0; /* Stay on top */
  width: 100%; /* Full width */
  transition: top 0.3s; /* Transition effect when sliding down (and up) */
    z-index: 999999;

}

#sec_nav{
position: fixed;
     top: 35px; 
    width: 100%;
    transition: top 0.3s;
    z-index: 999999999;
    height: 60px;
    background: white;
}

</style>


<script type="text/javascript">
	var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById("sec_nav").style.top = "+35px";

  } else {
  	
    document.getElementById("sec_nav").style.top = "0";

    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}

</script>

