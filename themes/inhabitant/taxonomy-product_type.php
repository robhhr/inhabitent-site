<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="shop-container">
	<div class="shop-title">
		<h1><?php single_term_title(); ?></h1>
	</div>
</div>

<?php the_archive_description(); ?>

	<div id="primary" class="content-taxonomy">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content-product', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
