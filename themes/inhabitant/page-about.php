<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header('about'); ?>

		<main id="main" class="site-main-alt" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(get_the_title()); ?>

			<?php endwhile; ?>

		</main>

<?php get_footer(); ?>