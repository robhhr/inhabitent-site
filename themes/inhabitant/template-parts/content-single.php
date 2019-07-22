<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><div class="int-text"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<div class="post-info">
		<p>Posted in &rarr; <?php the_category('<p>'); ?></p><span></span>
		<p><?php the_tags('Tagged &rarr; '); ?></p>
	</div>

	<div class="social-buttons-blog">
		<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-facebook-f"></i>Like</div></a></div>'; ?>
		<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-twitter"></i>Tweet</div></a></div>'; ?>
		<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-pinterest"></i>Pin</div></a></div>'; ?>
	</div>	
</article>