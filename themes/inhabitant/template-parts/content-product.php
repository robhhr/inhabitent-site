<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<a href="<?php echo esc_url( get_permalink()) ?>" class="product-area" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
	
	<?php sprintf( '<span href="%s" rel="bookmark">'.the_post_thumbnail( 'full' ),esc_url( get_permalink() ).'</span>') ?>
	
	<?php endif; ?>

	<?php the_title( sprintf( '<div class="product-text"><span href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</span></div>'); ?>
</a>