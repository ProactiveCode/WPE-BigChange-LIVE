<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>
	<main id="primary" class="site-main search container">

	<?php
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'gutenberg-starter-theme' ), '<span>' . get_search_query() . '</span>' );
			?></h1>
		</header><!-- .page-header -->
		<div class="search__wrapper">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post(); ?>

			<a href="<?php echo get_the_permalink($post->ID); ?>" class="search__card card">
				<!-- <div class="card__image" style="background-image:url(<?php //echo get_the_post_thumbnail_url($post->ID); ?>);"></div> -->
				<div class="card__title">
					<h3><?php echo get_the_title($post->ID); ?></h3>
				</div>
				<div class="card__content">
					<p><?php echo wp_trim_words( get_the_excerpt($post->ID), 20, '' ); ?> [...]</p>
				</div>
				<!-- <div class="card__category"><?php //echo $catString; ?></div> -->
				<div class="card__link"><?php echo get_field('string_continue_reading', 'option'); ?></div>
			</a>

		<?php endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</main><!-- #primary -->

<?php
get_footer();
