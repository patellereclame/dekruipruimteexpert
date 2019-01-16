<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container">
	<div class="row">
	<header class="entry-header col-md-4">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail();
?>
<div class="post-thumbnail">
<?php

if (class_exists('MultiPostThumbnails')) :

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');

endif;

if (class_exists('MultiPostThumbnails')) :

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image');

endif;

if (class_exists('MultiPostThumbnails')) :

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fourth-image');

endif;




 ?>
</div>
	</header><!-- .entry-header -->

	<div class="entry-content col-md-8">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
</div>
</div>
</article><!-- #post-## -->
