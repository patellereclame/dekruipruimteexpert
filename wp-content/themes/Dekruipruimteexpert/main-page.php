<?php /*Template name: main-page */

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<div class="section">
    <div class="container">
      <div class="row">
        <div class="content col-xs-8 col-md-10">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();


			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
    	</div>

  	</div>
<div class="col-md-2"></div>

	</div>
</div>


	</main><!-- .site-main -->



</div><!-- .content-area -->



<?php get_footer(); ?>
