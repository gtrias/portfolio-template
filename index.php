<?php get_header(); ?>
<div id="main-content" class="container">
		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
</div>
<?php get_footer(); ?>
