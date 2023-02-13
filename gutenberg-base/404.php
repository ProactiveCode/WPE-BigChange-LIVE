<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>
	
	<main id="primary" class="site-main container">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gutenberg-starter-theme' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content page-404">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gutenberg-starter-theme' ); ?></p>

				<?php
					get_search_form();
				?>

				<div class="page-404__related">
					<h2>Recent Posts</h2>

					<?php 
						$query_vars['post_type'] = 'post';
						$query_vars['posts_per_page'] = 3;

						$query = new WP_Query( $query_vars );

						if($query->have_posts()) { ?>
							<div class="page-404__related-wrapper">
								<?php while ( $query->have_posts() ) {
									$query->the_post();
									$categories = wp_get_post_categories(get_the_ID());
									$catString = '';
									foreach($categories as $cat){
										$category = get_category($cat);
										$catString .= '<p tabindex="0" data-href="' . get_permalink(1267) . '?catid=' . $category -> term_id . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
									} ?>

									<a href="<?php echo get_the_permalink($post->ID); ?>" class="page-404__card card">
										<div class="card__image" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);"></div>
										<div class="card__title">
											<h3><?php echo get_the_title($post->ID); ?></h3>
										</div>
										<div class="card__content">
											<p><?php echo wp_trim_words( get_the_excerpt($post->ID), 20, '' ); ?> [...]</p>
										</div>
										<!-- <div class="card__category"><?php //echo $catString; ?></div> -->
										<div class="card__link">Continue Reading</div>
									</a>
								<?php } ?>
							</div>
						<?php } else {
							$html_str = '<p class="no-posts">Sorry! There are currently no posts available.</p>';
						}

					?>
				</div>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #primary -->

<?php
get_footer();
