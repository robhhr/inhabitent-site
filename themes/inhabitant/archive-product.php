<?php
/*
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="shop-container">

	<?php if ( have_posts() ) : ?>
		<div class="shop-title">
			<h1>Shop Stuff</>
		</div>
		
	<div class="tax-nav">
		<?php 
			$args = array(
				'public'   => true,
  				'_builtin' => false,
			);
			$output = 'names';
			$link = 'and';
			$tax = get_taxonomies($args, $output, $link); 
			if  ($tax) {
  				foreach ($tax as $taxonomy ) {
    			$terms = get_terms($taxonomy);
				foreach ( $terms as $term) { ?>
				
					<ul>
						<li>
						<a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo $term->name; ?></a>
						</li>
					</ul>
				<?php }}} ?>
	</div>

	<?php endif; ?>


		<main class="product-container">

		<?php 
		// Product loop
		$shop_loop = new WP_Query( array(
			'post_type' => 'product',
			'order' => 'ASC',
			'posts_per_page' => 20,
		)); 
		?>

		<?php if ( $shop_loop->have_posts() ) : ?>
		<?php while ( $shop_loop->have_posts() ) : $shop_loop->the_post(); ?>
			
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