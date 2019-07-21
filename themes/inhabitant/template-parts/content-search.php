<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-search">
		<?php the_title( sprintf( '<h2 class="entry-title-search"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php echo sprintf( '<div class="read-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read More <b>&rarr;</b></div></a></div>'; ?>

</article><!-- #post-## -->
