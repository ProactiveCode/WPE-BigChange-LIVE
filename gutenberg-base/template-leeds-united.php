<?php 
/**
* Template Name: Leeds United Hospitality
*/

get_header(); ?>


<main class="main blog" role="main" id="main-content">
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
								<div class="hero__bg-color <?php if($hero['background_colour']) { echo 'hero__bg-color-overwrite'; } ?>" style="<?php if($hero['background_colour']) { echo 'background-color: ' . $hero['background_colour'] . ';'; } else { echo 'background-color: #429bcb;'; }?>"></div>
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
    <div class="section leeds-united-hospitality container">
        <?php
            the_content();
        ?>
    </div>
</main>
<?php get_footer(); ?>