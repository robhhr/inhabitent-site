<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>

		<main class="adventure-post" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_post_thumbnail(); ?>
			<div class="adventures-single-post">
				<h1 class="adventure-title">
					<?php the_title(); ?>
				</h1>
				<div class="postedby-adventures">
					<?php red_starter_posted_by(); ?>
				</div>
				<?php the_content(); ?>
				<div class="social-buttons-blog">
					<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-facebook-f"></i>Like</div></a></div>'; ?>
					<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-twitter"></i>Tweet</div></a></div>'; ?>
					<?php echo sprintf( '<div class="social-more"><a href="%s" rel="bookmark"><div class="button-blog">', esc_url( get_permalink() )).'<i class="fa fa-pinterest"></i>Pin</div></a></div>'; ?>
				</div>	
				<?php endwhile; ?>
			</div>

		</main>

<?php get_footer(); ?>