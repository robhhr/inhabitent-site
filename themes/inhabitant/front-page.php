<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>
<!-- Header -->
		<main id="main" class="site-main-fp" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="image-hero">
					<?php echo '<style type="text/css"> .image-hero { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-full.svg) !important; height: 250px !important; width: 250px !important; background-size: 100% !important; background-repeat: no-repeat; position: absolute; z-index: 100; top: 40%; left: 42%;}</style>';?>
				</div>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</main>

<!-- Taxonomy Section -->
	<h1 class="fp-header">Shop Stuff</h1>
<div class="tax-nav-fp">
		<?php 
		$args = array(
			'public'   => true,
  			'_builtin' => false,
		);
		$output = 'names';
		$link = 'and';
		$tax = get_taxonomies($args, $output, $link); 
		if  ($tax) {
  			foreach ($tax as $taxonomy ) {
    		$terms = get_terms($taxonomy);
			foreach ( $terms as $term) { ?>
				<ul class="tax-fp">
					<li class="tax-li">
						<img src="<?php echo get_template_directory_uri()."/images/product-type-icons/".$term->slug.".svg"; ?>" />
						<div class="tax-text"><?php echo $term->description ?></div>
						<div class="read-more-tx">
						<a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo $term->name." Stuff"; ?></a>
						</div>
					</li>
				</ul>
			<?php }}} ?>
</div>

<!-- Posts Loop -->
<div class="blog-front">
	<h1 class="fp-header">Inhabitent Journal</h1>
	<div class="journal-front">
		<?php
		$shop_loop = new WP_Query( array(
			'post_type' => 'post',
			'order' => 'DESC',
			'posts_per_page' => 3,
		)); 
		?>

		<?php if ( $shop_loop->have_posts() ) : ?>
		<?php while ( $shop_loop->have_posts() ) : $shop_loop->the_post(); ?>
			
			<?php get_template_part( 'template-parts/content-posts-fp' ); ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php __('No post found'); ?></p>
		<?php endif; ?>
	</div>
</div>
<!-- End loop -->

<section class="adventures-section">
<!-- Adventures Loop -->
<div class="adventures-title">
	<h1 class="fp-header">Latest Adventures</h1>
</div>
<!-- <div class="adventures-fp"> -->
<div class="product-container-ad-fp">
    <?php
    $adventure_posts = get_posts(array(
        'post_type' => 'adventures',
        'posts_per_page' => 4,
        'order' => 'DESC',
        ));
		?>
		<?php foreach ($adventure_posts as $post) : setup_postdata( $post ); ?>
		<article class="entry-title-fp-ad" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( sprintf( '<a href="%s" class="ad-link-fp" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<?php endif; ?>
					<?php echo sprintf( '<a href="%s" rel="bookmark"><div class="read-more-ad-fp">', esc_url( get_permalink() )).'Read More</div></a>'; ?>
		</article>
		<?php endforeach;?>
		<?php wp_reset_postdata(); ?>
		<a href="<?php echo get_post_type_archive_link('adventures') ?>" rel="bookmark"><div class="more-ad-fp">More Adventures</div></a>
</div>
</section>

<?php get_footer(); ?>