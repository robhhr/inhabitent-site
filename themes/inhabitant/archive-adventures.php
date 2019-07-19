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
				<!-- <div class="ad-text"> -->
					<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
				<!-- </div> -->
			</h2>
		</div>
	<?php endwhile; ?>
</div>

</div>

<?php get_footer(); ?>