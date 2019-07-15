<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

	<header class="single-product-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>


		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div>
		<?php endif; ?>
	</header>

	<div class="product-content">
        <?php the_title( sprintf( '<h2 class="product-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
        <span class="product-price">$<?php echo number_format(get_post_custom()['price'][0], 2, '.', '');?></span>
        <?php the_content(); ?>
        <div class="social-buttons">
            <?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'<i class="fa fa-facebook-f"></i>Like</div></a></div>'; ?>
            <?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'<i class="fa fa-twitter"></i>Tweet</div></a></div>'; ?>
            <?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'<i class="fa fa-pinterest"></i>Pin</div></a></div>'; ?>
        </div>
    </div>