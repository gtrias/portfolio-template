<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo" class="sixteen columns">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'portfolio-theme_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'portfolio-theme' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'portfolio-theme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'portfolio-theme' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
// with jQuery
jQuery(document).ready(function($){
    $('#content').masonry({
      gutter: 20,
      columnWidth: 20,
      itemSelector: '.post'
    });
});
</script>

</body>
</html>
