<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5 class="yellow">Sitemap</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'new_menu_class' ) ); ?>
				</div>
			</div>
		</div>
<div class="rights">
	<p class="copyright">
		All rights are served to dekruipruimteexpert.nl
		<br>
		Desigend by <a href="https://Patelle.nl" target="_blank">Patelle Reclame</a>
	</p>

</div>

		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>





</div>
</div>
</body>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</html>
