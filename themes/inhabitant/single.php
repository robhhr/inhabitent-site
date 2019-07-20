<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content-single' ); ?>
				<div class="social-buttons-blog">
					<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-facebook-f"></i>Like</div></a></div>'; ?>
					<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-twitter"></i>Tweet</div></a></div>'; ?>
					<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-pinterest"></i>Pin</div></a></div>'; ?>
				</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
