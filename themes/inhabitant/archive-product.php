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

		<?php 
			$args = array(
				'public'   => true,
  				'_builtin' => false,
			);
			$output = 'names';
			$link = 'and';
			$taxs = get_taxonomies($args, $output, $link); 
			if  ($taxs) {
  				foreach ($taxs  as $taxonomy ) {
    			$terms = get_terms($taxonomy);
        		foreach ( $terms as $term) {
		?>
					<ul class="tax-nav">
						<li>
							<a href="#"><?php echo $term->name; ?></a>
						</li>
					</ul>
				<?php }}} ?>

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
		<?php the_posts_pagination(array(
			'mid_size' => 2,
			'prev_text' => __( 'Back', 'textdomain' ),
    		'next_text' => __( 'More, more, more............', 'textdomain' )
		)) ?>
		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php __('No product found'); ?></p>
		<?php endif; ?>
		<!-- End loop -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>