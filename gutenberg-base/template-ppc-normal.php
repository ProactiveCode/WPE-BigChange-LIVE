<?php
/**
* Template Name: PPC Normal
*/


get_header('ppc'); ?>

<?php $ppc_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	
	$ppcLang = 'en';
	if( strpos( $ppc_link, '/fr/' ) !== false ) {
		$ppcLang = 'fr';
	}

	if( strpos( $ppc_link, '/cy/' ) !== false ) {
		$ppcLang = 'cy';
	}

	if( strpos( $ppc_link, '/us/' ) !== false ) {
		$ppcLang = 'en-us';
	}

	if( strpos( $ppc_link, '/nz/' ) !== false ) {
		$ppcLang = 'en-nz';
	}

	if( strpos( $ppc_link, '/au/' ) !== false ) {
		$ppcLang = 'en-au';
	}
?>

	<main id="primary" class="site-main ppc">
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
									<?php if($hero['align_mobile_image_to_base']) { ?> background-position: bottom !important;<?php } ?>
									background-size: 100% !important;
								}
							}
						</style>
						<?php } ?>
						<div class="hero__banner hero__banner--<?php echo $count; ?> <?php if(!$hero['foreground_image']) { ?> hero__banner--no-fg <?php } ?> <?php if($hero['show_logos_banner'] && $hero['logos_banner']) { echo 'hero__banner--logos'; } ?> <?php if(!$hero['text']) { echo 'hero__banner--only-title'; } ?><?php if($hero['drop_background_image_below_menu']) { ?> hero__bg--below_menu<?php } ?><?php if($hero['text_background_square']) { ?> hero__bg--square<?php } ?><?php if($hero['drop_padding']) { ?> hero__drop-btm-pad<?php } ?><?php if($hero['smaller']) { ?> hero__banner--small<?php } ?> <?php echo $hero['extra_classes']; ?>">
							<?php if($hero['background_max_width']) { ?>
								<div class="hero__bg-color <?php if($hero['background_colour']) { echo 'hero__bg-color-overwrite'; } ?>" style="<?php if($hero['background_colour']) { echo 'background-color: ' . $hero['background_colour'] . ';'; } else { echo 'background-color: #2e84ff;'; }?>"></div>
							<?php } ?>
							<div class="hero__bg <?php if($hero['hide_overlay']) { ?> hero__bg--no-overlay <?php } ?> <?php if($hero['background_max_width']) { ?> hero__bg--max-width <?php } ?>" style="background-image: url('<?php echo $hero['background_image']['url']; ?>'); <?php if($hero['background_position'] !== 'center') { echo 'background-position: ' . $hero['background_position'] . ';'; }?> <?php if($hero['background_colour']) { echo 'background-color: ' . $hero['background_colour'] . ';'; }?> <?php if($hero['background_size']) { echo 'background-size: ' . $hero['background_size'] . ';'; }?>"></div>
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
								<div class="hero__ppc-form">
									<div class="hero__ppc-form-text">
										<p><?php if(get_field('ppc_form_title', 'option')) { echo get_field('ppc_form_title', 'option'); } else { ?>Our market leading all-in-one system enables you to plan, manage, schedule, invoice and track your engineers on a single screen.<?php } ?></p>
									</div>
									<div class="hero__ppc-form-form">
										<?php if(get_field('ppc_upper_embed', 'option')) { echo get_field('ppc_upper_embed', 'option'); } else {  echo '<!--[if lte IE 8]> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script> <![endif]--> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script> <script> hbspt.forms.create({ region: "na1", portalId: "20046553", formId: "76e8951e-0bc1-45f3-9964-c81f6cfcccf1" }); </script>'; } ?>
									</div>
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

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<!-- <div class="floating-form container" style="display:none;">
			<div class="floating-form__wrapper">
				<div class="floating-form__upper">
					<h4><?php //echo get_field('string_see_bigchange_in_action', 'option'); ?></h4>
					<div class="floating-form__close open">
						<a href="javascript:void(0);">
							<img data-open="https://www.bigchange.com/wp-content/uploads/2021/02/close.svg" data-close="https://www.bigchange.com/wp-content/uploads/2021/02/reopen-new.svg" src="https://www.bigchange.com/wp-content/uploads/2021/02/close.svg" alt="Click to close or open modal">
						</a>
					</div>
				</div>
				<?php //echo do_shortcode('[contact-form-7 id="21800" title="Landing Page Form" html_id="landing-page-form"]'); ?>
			</div>
		</div> -->
		

		<div class="bc-modal floating-form-modal" style="opacity: 0; z-index: -1;">
		<div class="bc-modal__bg"></div>
		<div class="bc-modal__wrapper">
			<div class="bc-modal__inner">
				<div class="bc-modal__close"></div>
				<div class="bc-modal__title">
					<p><?php echo get_field('string_get_a_demo_modal_title', 'option'); ?></p>
				</div>
				<div class="bc-modal__text">
					<p><?php echo get_field('string_get_a_demo_modal_text', 'option'); ?></p>
				</div>
				<div class="bc-modal__form">
					<?php if(get_field('ppc_lower_embed', 'option')) { echo get_field('ppc_lower_embed', 'option'); } else {  echo '<!--[if lte IE 8]> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script> <![endif]--> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script> <script> hbspt.forms.create({ region: "na1", portalId: "20046553", formId: "34ab68ba-aa3d-44ad-a98c-1b9b02ca161e" }); </script>'; } ?>
				</div>
			</div>
		</div>
	</main><!-- #primary -->

<?php
get_footer();
