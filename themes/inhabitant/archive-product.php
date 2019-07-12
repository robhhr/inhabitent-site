<?php
/*
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="shop-container">
	<?php if ( have_posts() ) : ?>

		<?php  post_type_archive_title();?>

	<?php endif; ?>
	
		<main class="product-container">

		<?php 
		// Product loop
		$the_query = new WP_Query( array(
			'post_type' => 'product',
			'order' => 'ASC',
			'posts_per_page' => 20,
		)); 
		?>

		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<?php get_template_part( 'template-parts/content-product' ); ?>			

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php __('No product found'); ?></p>
		<?php endif; ?>
		<!-- End loop -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>