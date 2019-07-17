<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="taxonomy">
	<div class="tax-container">
		<div class="shop-title">
			<h1><?php single_term_title(); ?></h1>
		</div>
		<div class="tax-nav">
			<?php the_archive_description(); ?>
		</div>
	</div>

	<div id="primary" class="content-taxonomy">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content-product', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

	</div><!-- #primary -->
</div>
<?php get_footer(); ?>