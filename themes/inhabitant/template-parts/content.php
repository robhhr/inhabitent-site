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
		<?php the_excerpt(); ?>
	</div>

		<?php echo sprintf( '<div class="read-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read More <b>&rarr;</b></div></a></div>'; ?>
	
</article>