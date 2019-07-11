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

		<?php if ( have_posts() ) : ?>

			<!-- <header class="product-header">
				 <?php /*
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				*/ ?>
			</header> -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-shop' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content-shop', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
