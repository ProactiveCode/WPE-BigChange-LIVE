<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>

	<main id="primary" class="site-main">
		<?php $heros = get_field('hero');
		if($heros) { 
			$heroCount = count($heros);?>
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
									<?php if($hero['align_mobile_image_to_base']) { ?> background-position: bottom !important;<?php } ?>
									background-size: 100% !important;
								}
							}
						</style>
						<?php } ?>
						<div class="hero__banner hero__banner--<?php echo $count; ?> <?php if(!$hero['foreground_image']) { ?> hero__banner--no-fg <?php } ?> <?php if($hero['show_logos_banner'] && $hero['logos_banner']) { echo 'hero__banner--logos'; } ?> <?php if(!$hero['text']) { echo 'hero__banner--only-title'; } ?><?php if($hero['drop_background_image_below_menu']) { ?> hero__bg--below_menu<?php } ?><?php if($hero['text_background_square']) { ?> hero__bg--square<?php } ?><?php if($hero['drop_padding']) { ?> hero__drop-btm-pad<?php } ?><?php if($hero['smaller']) { ?> hero__banner--small<?php } ?> <?php echo $hero['extra_classes']; ?>">
							<?php if($hero['background_max_width']) { ?>
								<div class="hero__bg-color <?php if($hero['background_colour']) { echo 'hero__bg-color-overwrite'; } ?>" style="<?php if($hero['background_colour']) { echo 'background-color: ' . $hero['background_colour'] . ';'; } else { echo 'background-color: #429bcb;'; }?>"></div>
							<?php } ?>
							<div class="hero__bg <?php if($hero['hide_overlay']) { ?> hero__bg--no-overlay <?php } ?>
							<?php if($hero['background_max_width']) { ?> hero__bg--max-width <?php } ?>"
							style="background-image: url('<?php if ($hero['background_image']) { echo $hero['background_image']['url'];} ?>'); 
							<?php if($hero['background_position'] !== 'center') { echo 'background-position: ' . $hero['background_position'] . ';'; }?>
							<?php if($hero['background_colour']) { echo 'background-color: ' . $hero['background_colour'] . ';'; }?> 
							<?php if($hero['background_size']) { echo 'background-size: ' . $hero['background_size'] . ';'; }?>"></div>
							<?php if($hero['image_caption']) { ?>
							<div class="hero__caption">
								<p><?php echo $hero['image_caption']; ?></p>
							</div>
							<?php } ?>
							<div class="container <?php if($hero['none_home_foreground']) { echo 'container--flex'; } ?>">
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
								<?php if($hero['none_home_foreground']) { ?>
									<div class="hero__content-image">
										<img src="<?php echo $hero['none_home_foreground']['url']; ?>" alt="<?php echo $hero['none_home_foreground']['url']; ?>">
									</div>
								<?php } ?>
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


		<?php $newHeros = get_field('updated_hero');
		if($newHeros) { 
			$newHeroCount = count($newHeros);?>
			<div class="hero updated-hero <?php if(get_the_ID() == 1277) { echo 'hero--no-mobile'; } ?>">
				<?php if($newHeroCount > 1) { ?> 
					<div class="hero__dots-container">
						<div class="hero__dots">
							<?php for ($i=0; $i < $newHeroCount; $i++) { ?>
								<button role="button" class="hero__dot"><span></span><span class="offscreen">Go to slide <?php echo $i+1; ?></span></button>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<div class="hero__wrapper <?php if($newHeroCount > 1) { echo 'owl-carousel'; } ?>">
					<?php $count = 1; foreach ($newHeros as $newHero) { ?>
						<div class="hero__banner hero__banner--<?php echo $count; ?> <?php echo $newHero['extra_classes']; ?>">
							<div class="hero__bg  <?php if($newHero['background_gradient']) { ?> hero__bg--no-overlay <?php } ?> <?php if($newHero['background_image'] && !$newHero['background_gradient']) { echo "hero__bg--overlay"; } ?> <?php if($newHero['background_image'] && $newHero['foreground_image']) { echo "hero__bg--before"; } ?>" style="<?php if($newHero['background_image'] && !$newHero['background_gradient'] && !$newHero['foreground_image']) { echo "background-image: url('" . $newHero['background_image']['url'] . "');"; } ?> <?php if($newHero['background_colour'] && !$newHero['background_gradient']) { echo "background-color: " . $newHero['background_colour'] . ";"; } ?> <?php if($newHero['background_gradient'] && $newHero['background_gradient_1'] && $newHero['background_gradient_2'] && !$newHero['background_gradient_3']) { echo "background: " . $newHero['background_gradient_1'] . "; background: linear-gradient(180deg, " . $newHero['background_gradient_1'] . " 0%, " . $newHero['background_gradient_2'] . " 100%);"; } ?>  <?php if($newHero['background_gradient'] && $newHero['background_gradient_1'] && $newHero['background_gradient_2'] && $newHero['background_gradient_3']) { echo "background: " . $newHero['background_gradient_1'] . "; background: linear-gradient(180deg, " . $newHero['background_gradient_1'] . " 0%, " . $newHero['background_gradient_2'] . " 50%, " . $newHero['background_gradient_3'] . " 100%);"; } ?>"></div>
							<?php if($newHero['background_image'] && $newHero['foreground_image']) { ?>
								<style>
									.hero__bg--before::before {
										background-image: url('<?php echo $newHero['background_image']['url']; ?>');
									}
								</style>
							<?php } ?>
							<div class="container <?php if($newHero['foreground_image']) { ?>hero-flex<?php } ?> <?php if($newHero['move_foreground_down']) { ?> move-fg-down <?php } ?>">
								<div class="hero__content-wrapper">
									<div class="hero__title">
										<?php 
										$h = 'h1';
										if($count > 1) {
											$h = 'h2';
										} ?>
										<<?php echo $h; ?> class="<?php if(isset($newHero['smaller_title'])) { echo 'smaller-h1'; }?>"><?php if($newHero['title']) { echo $newHero['title']; } else { echo the_title(); } ?></<?php echo $h; ?>>
									</div>
									<?php if($newHero['text']) { ?>
									<div class="hero__text">
										<?php echo $newHero['text']; ?>
									</div>
									<?php } ?>
									<?php if($newHero['button_embed']) { ?>
									<div class="hero__button">
										<?php echo $newHero['button_embed']; ?>
									</div>
									<?php } ?>
									<?php if($newHero['accreditation_text']) { ?>
									<div class="hero__accred">
										<p><?php echo $newHero['accreditation_text']; ?></p>
									</div>
									<?php } ?>
								</div>
								<?php if($newHero['foreground_image']) { ?>
									<div class="hero__new-image">
										<div class="hero__new-image-image">
											<img src="<?php echo $newHero['foreground_image']['url']; ?>" alt="<?php echo $newHero['foreground_image']['alt']; ?>">
										</div>
									</div>
								<?php } ?>
								<!--
								<php
								// Homepage lookup used so exact image dimensions can be used
								if (is_home() || is_front_page()) {
									// code for homepage
									if ($newHero['foreground_image']) {
										// code for foreground image?>
										<img src="<php echo $newHero['foreground_image']['url']; ?>" height="550" width="523" alt="<php echo $newHero['foreground_image']['alt']; ?>">
										<php
									//}
								//} else {
									// code for other pages
									//>
									//<img loading="lazy" src="<php echo $newHero['foreground_image']['url']; ?>" alt="<php echo $newHero['foreground_image']['alt']; ?>">
									<php
									//}
								?>
								-->
								<div class="home-capterra" style="display:none;">
									<img width="100" height="40" src="https://www.bigchange.com/wp-content/uploads/2022/07/capterra-new-logo.png" alt="Capterra Rating 4.6">
								</div>
							</div>
						</div>
					<?php $count++; } ?>
				</div>
			</div>
		<?php } ?>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</main><!-- #primary -->

<?php
get_footer();