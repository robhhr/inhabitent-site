<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="product-area" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'full' ) . esc_url( get_permalink() ); ?>

	<?php endif; ?>

	<?php the_title( sprintf( '<div class="product-text"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>'); ?>
</div>
