<?php
/*
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="shop-container">

<div class="shop-title">
	<h1>Latest Adventures</h1>
</div>

<div class="product-container-ad">
	<?php while ( have_posts() ) : the_post(); ?>
		<div>
			<h2 class="entry-title-fp">
				<?php the_post_thumbnail(); ?>
					<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
			</h2>
			<?php echo sprintf( '<div class="read-more-ad"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read More</div></a></div>'; ?>
		</div>
	<?php endwhile; ?>
</div>

</div>

<?php get_footer(); ?>