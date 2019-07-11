<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="shop-container">
		<div class="shop-intro">
			<h1>Shop stuff</h1>
			<ul class="taxonomies">
				<li>Do</li>
				<li>Eat</li>
				<li>Sleep</li>
				<li>Wear</li>
			</ul>
		</div>
		<main class="product-container">

		<?php 
		// the query
		$the_query = new WP_Query( array(
			'post_type' => 'product',
			'posts_per_page' => 16,
		)); 
		?>

		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<?php get_template_part( 'template-parts/content-product' ); ?>
			<?php the_title(); ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php __('No News'); ?></p>
		<?php endif; ?>

				

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
