<?php 
/**
* Template Name: Careers
*/

get_header(); ?>


<main id="primary" class="main careers">
<?php $heros = get_field('hero');
		$heroCount = count($heros);
		if($heros) { ?>
			<div class="hero <?php if(get_the_ID() == 1277) { echo 'hero--no-mobile'; } ?>">
				<?php if($heroCount > 1) { ?> 
					<div class="hero__dots-container">
						<div class="hero__dots">
							<?php for ($i=0; $i < $heroCount; $i++) { ?>
								<button role="button" class="hero__dot"><span></span><span class="offscreen">Go to slide <?php echo $i+1; ?></span></button>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<div class="hero__wrapper <?php if($heroCount > 1) { echo 'owl-carousel'; } ?><?php if($hero['drop_padding']) { echo ' hero__drop-btm-pad'; } ?>">
					<?php $count = 1; foreach ($heros as $hero) { ?>
						<?php if($hero['mobile_background_image']) { ?>
						<style>
							@media screen and (max-width: 767px) {
								.hero__bg {
									background-image: url("<?php echo $hero['mobile_background_image']['url']; ?>") !important;
									background-position: center !important;
									background-size: 100% !important;
								}
							}
						</style>
						<?php } ?>
						<div class="hero__banner hero__banner--<?php echo $count; ?> <?php if(!$hero['foreground_image']) { ?> hero__banner--no-fg <?php } ?> <?php if($hero['show_logos_banner'] && $hero['logos_banner']) { echo 'hero__banner--logos'; } ?> <?php if(!$hero['text']) { echo 'hero__banner--only-title'; } ?><?php if($hero['drop_background_image_below_menu']) { ?> hero__bg--below_menu<?php } ?><?php if($hero['text_background_square']) { ?> hero__bg--square<?php } ?><?php if($hero['drop_padding']) { ?> hero__drop-btm-pad<?php } ?><?php if($hero['smaller']) { ?> hero__banner--small<?php } ?> <?php echo $hero['extra_classes']; ?>">
							<?php if($hero['background_max_width']) { ?>
								<div class="hero__bg-color <?php if($hero['background_colour']) { echo 'hero__bg-color-overwrite'; } ?>" style="<?php if($hero['background_colour']) { echo 'background-color: ' . $hero['background_colour'] . ';'; } else { echo 'background-color: #429bcb;'; }?>"></div>
							<?php } ?>
							<div class="hero__bg <?php if($hero['hide_overlay']) { ?> hero__bg--no-overlay <?php } ?> <?php if($hero['background_max_width']) { ?> hero__bg--max-width <?php } ?>" style="background-image: url('<?php echo $hero['background_image']['url']; ?>'); <?php if($hero['background_position'] !== 'center') { echo 'background-position: ' . $hero['background_position'] . ';'; }?> <?php if($hero['background_colour']) { echo 'background-color: ' . $hero['background_colour'] . ';'; }?> <?php if($hero['background_size']) { echo 'background-size: ' . $hero['background_size'] . ';'; }?>"></div>
							<?php if($hero['image_caption']) { ?>
							<div class="hero__caption">
								<p><?php echo $hero['image_caption']; ?></p>
							</div>
							<?php } ?>
							<div class="container">
								<div class="hero__content-wrapper <?php if(!$hero['text']) { echo 'hero__content-wrapper--only-title'; } ?><?php if($hero['white_background']) { echo 'hero__content-wrapper--white-bg'; } ?><?php if($hero['text_background_square']) { ?> hero__bg--square<?php } ?>  <?php if($hero['icon']) { ?> hero__content-wrapper--no-marg <?php } ?>">
									<?php if($hero['icon']) { ?>
										<div class="hero__icon">
											<img src="<?php echo $hero['icon']['url']; ?>" alt="<?php echo $hero['icon']['alt']; ?>">
										</div>
									<?php } ?>
									<?php if($hero['pre-title']) { ?>
										<div class="hero__pre-title">
											<p><?php echo $hero['pre-title']; ?></p>
										</div>
									<?php } ?>
									<div class="hero__title">
										<?php 
										$h = 'h1';
										if($count > 1) {
											$h = 'h2';
										} ?>
										<<?php echo $h; ?> class="<?php if($hero['smaller_title']) { echo 'smaller-h1'; }?>"><?php if($hero['title']) { echo $hero['title']; } else { echo the_title(); } ?></<?php echo $h; ?>>
									</div>
									<?php if($hero['text']) { ?>
									<div class="hero__text">
										<?php echo $hero['text']; ?>
									</div>
									<?php } ?>
								</div>
							</div>
							<?php if($hero['foreground_image']) { ?>
							<div class="hero__foreground-wrapper">
								<div class="hero__foreground-image">
									<img loading="lazy" src="<?php echo $hero['foreground_image']['url']; ?>" alt="<?php echo $hero['foreground_image']['alt']; ?>">
								</div>
							</div>
							<?php } ?>
							<?php if($hero['show_logos_banner'] && $hero['customise_logos_banner'] && $hero['logos_banner']) { ?>
								<div class="hero__logos-wrapper">
									<div class="hero__logos container owl-carousel <?php if(!$hero['foreground_image']) { echo 'hero__logos--full'; }?>">
										<?php $logos = $hero['logos_banner'];
										if($logos) { ?>
											<?php foreach ($logos as $logo) { ?>
												<div class="hero__logo">
													<img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>" class="<?php echo $logo['logo_orientation']; ?>">
												</div>
											<?php } ?>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
							<?php if($hero['show_logos_banner'] && get_field('logos') && !$hero['customise_logos_banner']) { ?>
								<div class="hero__logos-wrapper">
									<div class="hero__logos container owl-carousel <?php if(!$hero['foreground_image']) { echo 'hero__logos--full'; }?>">
										<?php $logos = get_field('logos');
										if($logos) { ?>
											<?php foreach ($logos as $logo) { ?>
												<div class="hero__logo">
													<img loading="lazy" src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>" class="<?php echo $logo['logo_orientation']; ?>">
												</div>
											<?php } ?>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php $count++; } ?>
				</div>
			</div>
		<?php } ?>
    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>

	<script src='https://www.workable.com/assets/embed.js' type='text/javascript'></script><script type='text/javascript' charset='utf-8'>
	whr(document).ready(function(){whr_embed(509618, {detail: 'titles', base: 'jobs', zoom: 'country', grouping: 'departments'});});</script>
	<div id="whr_embed_hook" class="container"></div>

		<?php $query_vars['post_type'] = 'vacancies';
		$query_vars['order'] = 'ASC';
		$query_vars['posts_per_page'] = -1;
		$query_vars['post_status'] = 'publish';
		$link = $_POST['url'];
		
		$blogid = 1; //default UK
		if( strpos( $link, '/fr/' ) !== false ) {
			$blogid = 6;
		}

		if( strpos( $link, '/cy/' ) !== false ) {
			$blogid = 7;
		}

		if( strpos( $link, '/us/' ) !== false ) {
			$blogid = 8;
		}

		if( strpos( $link, '/nz/' ) !== false ) {
			$blogid = 9;
		}

		if( strpos( $link, '/au/' ) !== false ) {
			$blogid = 10;
		}

		switch_to_blog($blogid);
		$ajax_query = new WP_Query( $query_vars );
		$posts = $ajax_query->posts;

		if($ajax_query->have_posts()) { ?>
			<h2 class="container whr-group">Other Vacancies</h2>
				<div class="container job-listing-container">
			<?php while ( $ajax_query->have_posts() ) {
				$ajax_query->the_post();
				$location = get_the_terms( $post->ID, 'locations' );
				$locationString = '';
				
				foreach ($location as $loc) {
					$locationString .= $loc -> name . ', ';
				}

				$locationString = rtrim($locationString, ", ");
				$time = time_elapsed_string(get_the_date());

				?>

				<div class="new-job-listing">
						<div class="new-job-listing__title">
							<h3><a href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
						</div>
					<div class="new-job-listing__loc-time">
						<div class="new-job-listing__location">
							<p>Location: <?php echo $locationString; ?></p>
						</div>
						<div class="new-job-listing__time">
							<p>Created Date: <?php echo $time; ?></p>
						</div>
					</div>
				</div>
		<?php }
		} ?>
	</div>

    <?php 
    // $terms = get_terms( array(
    //     'taxonomy' => 'JobCategories',
    //     'hide_empty' => false,
    // ));

    ?>

    <?php // if($terms) { ?>
        <!-- <div class="careers__categories">
            <?php //foreach ($terms as $term) { 
                //$image = get_field('image', 'term_' . $term -> term_id); ?>
                
                <div class="careers__category">
                    <div class="careers__category-wrapper container container--1000">
                        <div class="careers__category-image">
                            <img src="<?php //echo $image['url']; ?>" alt="<?php //echo $image['alt']; ?>">
                        </div>
                        <div class="careers__category-content">
                            <div class="careers__category-title">
                                <h3><?php //echo $term -> name; ?></h3>
                            </div>
                            <div class="careers__category-desc">
                                <p><?php //echo $term -> description; ?></p>
                            </div>
                            <div class="careers__category-link">
                                <a href="#listings" class="btn-normal apply" data-term="<?php //echo $term -> term_id; ?>"><?php //echo get_field('string_apply_for_roles', 'option'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php //} ?>            
        </div>
    <?php //} ?> -->
<!-- 
    <div class="careers__job-section container container--1000">
        <div class="careers__filters" id="listings">
            <div class="careers__categories-select">
                <?php //
                // $locations = get_terms( array(
                //     'taxonomy' => 'locations',
                //     'hide_empty' => false,
                //     'orderby' => 'name',
                //     'order' => 'DESC'
                // ));

                //if($terms) { ?>
                    <div class="careers__title">
                        <p><?php //echo get_field('string_department_role_function', 'option'); ?></p>
                    </div>
                    <?php //foreach ($terms as $term) { ?>
                        <label class="checkbox-container"><?php //echo $term -> name; ?>
                            <input class="category" data-sector="<?php //echo $term -> term_id; ?>" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    <?php //} ?>
                <?php //} ?>
            </div>
            <div class="careers__locations">
                <?php //if($locations) { ?>
                    <div class="careers__title">
                        <p><?php //echo get_field('string_region', 'option'); ?></p>
                    </div>
                    <?php //foreach ($locations as $location) { ?>
                        <label class="checkbox-container"><?php //echo $location -> name; ?>
                            <input class="location" data-sector="<?php //echo $location -> term_id; ?>" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    <?php //} ?>
                <?php //} ?>

                <div class="careers__title careers__title--space-top">
                    <p><?php //echo get_field('string_selection_options', 'option'); ?></p>
                </div>

                <div class="careers__buttons">
                    <a href="javascript:void(0);" class="btn-normal select"><?php //echo get_field('string_select_all', 'option'); ?></a>
                    <a href="javascript:void(0);" class="btn-normal deselect"><?php //echo get_field('string_deselect_all', 'option'); ?></a>
                </div>
            </div>
        </div>
        <div class="careers__wrapper">
            <div class="careers__listings">
   
            </div>
            <div class="careers__loader">
                <div class="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
    </div> -->
</main>
<?php get_footer(); ?>