<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<style>
	/* Center the loader */
	#loader {
	  position: absolute;
	  left: 50%;
	  top: 50%;
	  z-index: 1;
	  width: 150px;
	  height: 150px;
	  margin: -75px 0 0 -75px;
	  border: 10px solid #f3f3f3;
		background-image: url(/wp-content/themes/Dekruipruimteexpert/images/screenwaiter.png);
		background-position: fixed;
		background-size: cover;
	  border-radius: 50%;
	  border-top: 10px solid #00A19A;
	  width: 120px;
	  height: 120px;
		-webkit-animation: spin 2s linear infinite;
	  animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
	  0% { -webkit-transform: rotate(0deg); }
		25% {-webkit-transform: rotate(125deg);}
	  100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	  0% { transform: rotate(0deg) ease-out; border-top:10px solid #00A19A}
		10% { transform: rotate(30deg); border-top:10px solid #00847B}
		30% { transform: rotate(200deg); border-top:10px solid #00847B}
	  100% { transform: rotate(360deg); border-top:10px solid #00A19A}
	}

	/* Add animation to "page content" */
	.animate-bottom {
	  position: relative;
	  -webkit-animation-name: animatebottom;
	  -webkit-animation-duration: 1.3s;
	  animation-name: animatebottom;
	  animation-duration: 1.3s
	}

	@-webkit-keyframes animatebottom {
	  from { bottom:-100px; opacity:0 }
	  to { bottom:0px; opacity:1 }
	}

	@keyframes animatebottom {
	  from{ bottom:-100px; opacity:0 }
	  to{ bottom:0; opacity:1 }
	}

	#myDiv {
	  display: none;
	}
	</style>

</head>




<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
		<a class="navbar-brand" href="#"><img class="logo" src="/wp-content/themes/Dekruipruimteexpert/images/ddke.png"/></a>
	  <div class="container">


		<!-- Brand and toggle get grouped for better mobile display -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		</div>

			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'ul class'					=> 'justify-content-end',
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
		</div>
	</nav>





	<div id="content" class="site-content">
