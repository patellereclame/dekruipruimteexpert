<?php /* Template Name: Front-page */ ?>

<body onload="myFunction()" style="margin:0;">
	 <div id="loader"></div>
	  <div style="display:none;" id="myDiv" class="animate-bottom">

<?php get_header(); ?>


		<header id="masthead" class="site-header" role="banner">
<div class="row">
			<div class="header-titles">
					<h1 class="company-name">De Kruipruimte Expert</h1>
					<h2 class="company-description">voor de inspectie van uw kruipruimte</h2>
			</div>
		</div>
							<div class="full-height header-overlay">
								<div class="header-tekst">
							<?php
								$page_id = 18; //ID of page from your WP admin panel
									$page_data = get_page( $page_id );
									echo $page_data->post_content; // Show page content
			?>
		</div>
					<a href="#"><button class="direct-contact">Neem contact op</button></a>
		</div>


		</header><!-- .site-header -->

<div class="image-container-logo-trans">
<div class="section">
 <div class="container-images">
 		<div class="container">
 			<div class="row">
 				<div class="content">
					<div class="col-xs-6 col-md-12 first-text">

 			<!--loop begins here -->
 <?php

		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;


		endwhile;
?>


					</div>
 				</div>
 			</div>
 		</div>
	</div>
</div>

<div class="section dark-green">
	<div class="container">
		<div class="row">
			<div class="example-images col-md-3"><img src="<?php echo get_stylesheet_directory_uri();?>/images/vocht.png" width="150px" height="auto"/><h3 class="sample">Vocht</h3></div>
			<div class="example-images col-md-3"><img src="<?php echo get_stylesheet_directory_uri();?>/images/betonrot.png" width="150px" height="auto"/><h3 class="sample">Betonrot</h3></div>
			<div class="example-images col-md-3"><img src="<?php echo get_stylesheet_directory_uri();?>/images/verzakkingen.png" width="150px" height="auto"/><h3 class="sample">Verzakking</h3></div>
			<div class="example-images col-md-3"><img src="<?php echo get_stylesheet_directory_uri();?>/images/muis.png" width="150px" height="auto"/><h3 class="sample">Ongedierte</h3></div>
		</div>
	</div>
</div>

 <div class="section">
 	<div class="container">
 		<div class="row">
			<h2 class="about col-md-12">Herkenbare mogelijke problemen</h2>
		</div>
		<div class="row">
 			<div class="text col-xs-6 col-md-6">
 <?php
 		$page_id = 11; //ID of page from your WP admin panel
 			$page_data = get_page( $page_id );
 			echo $page_data->post_content; // Show page content
 							?>

 			</div>

			<div class="text col-xs-6 col-md-6">
<?php
		$page_id = 43; //ID of page from your WP admin panel
			$page_data = get_page( $page_id );
			echo $page_data->post_content; // Show page content
							?>

			</div>
			<div class="read-more right col-md-12"><a href="http://localhost:8888/kruipruimte"><button>Lees meer</button></a>
 		</div>
 	</div>
 </div>
</div>


<div class="image-section"></div>



<div class="section">
	<div class="container">
		<div class="row">
			<div class="text col-md-12">
			<?php
					$page_id = 63; //ID of page from your WP admin panel
						$page_data = get_page( $page_id );
						echo $page_data->post_content; // Show page content
						?>
					</div>
				</div>
			</div>
		</div>





<?php get_footer(); ?>
