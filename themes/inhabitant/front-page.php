<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>
<!-- Header -->
		<main id="main" class="site-main-fp" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="image-hero">
					<?php echo '<style type="text/css"> .image-hero { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-full.svg) !important; height: 250px !important; width: 250px !important; background-size: 100% !important; background-repeat: no-repeat; position: absolute; z-index: 100; top: 40%; left: 42%;}</style>';?>
				</div>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</main>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- Posts Loop -->
<div class="blog-front">
	<h1>Inhabitent Journal</h1>
	<div class="journal-front">
		<?php
		$shop_loop = new WP_Query( array(
			'post_type' => 'post',
			'order' => 'DESC',
			'posts_per_page' => 3,
		)); 
		?>

		<?php if ( $shop_loop->have_posts() ) : ?>
		<?php while ( $shop_loop->have_posts() ) : $shop_loop->the_post(); ?>
			
			<?php get_template_part( 'template-parts/content-posts-fp' ); ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php __('No post found'); ?></p>
		<?php endif; ?>
	</div>
</div>
<!-- End loop -->


<?php get_footer(); ?>
