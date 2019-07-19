<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="product-area" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( 'post' === get_post_type() ) : ?>
        <?php endif; ?>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    <div class="product-text-fp">
        <div class="entry-meta-fp">
            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
        </div>
        <div class="entry-content-fp">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </div>
            <?php echo sprintf( '<div class="read-entry"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read Entry</div></a></div>'; ?>
    </div>
</div>