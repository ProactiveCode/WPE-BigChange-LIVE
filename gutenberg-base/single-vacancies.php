<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>

	<main id="primary" class="site-main single">

		<div class="single__header">

		</div>
		<div class="single__wrapper">
		<?php
			while ( have_posts() ) : the_post(); ?>
				<div class="single__title">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div class="single__content">
					<?php the_content(); ?>
				</div>
				<div class="single__apply">
					<p><?php echo get_field('string_apply_for_job_text', 'option'); ?></p>
					<a href="mailto:recruitment@bigchange.com?subject=Job application for <?php echo get_the_title(); ?>" class="btn-normal"><?php echo get_field('string_apply_for_job_button', 'option'); ?></a>
				</div>
				<div class="single__meta">
					<div class="single__name">
						<?php $author = 'BigChange.com';
						if($author == 'bigchangev3Admin') {
							$author = 'BigChange.com';
						}
						if($ceo == true) {
							$author = 'Martin Port';
						} ?>
						<p><?php echo $author; ?></p>
					</div>
					<div class="single__date">
						<p><?php echo get_the_date('jS F Y', get_the_ID()); ?></p>
					</div>
				</div>
				<div class="single__socials">
					<?php 
					$fb = get_field('vacancies_facebook_link', 'option');
					$fb = str_replace("[url]",get_permalink(),$fb);
					$twitter = get_field('vacancies_twitter_link', 'option');
					$twitter = str_replace("[url]",get_permalink(),$twitter);
					$email = get_field('vacancies_email_link', 'option');
					$email = str_replace("[url]",get_permalink(),$email);
					?>

					<?php $singleVac_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

					$singleVacEn = 1;

					if(strpos($singleVac_link, '/fr/') !== false || strpos($singleVac_link, '/cy/') !== false || strpos($singleVac_link, '/us/') !== false || strpos($singleVac_link, '/nz/') !== false) {
						$singleVacEn = 0;
					}

					?>

					<a href="<?php echo $fb; ?>" class="single__social" target="_blank">
						<img loading="lazy" src="<?php if($singleVacEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-facebook-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-facebook.svg'; } ?>" alt="Facebook Logo">
					</a>
					<a href="<?php echo $twitter; ?>" class="single__social" target="_blank">
						<img loading="lazy" src="<?php if($singleVacEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-twitter-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-twitter-blue.svg'; } ?>" alt="Twitter Logo">
					</a>
					<a href="javascript:void(0);" class="single__social single__social--email">
						<img loading="lazy" src="<?php if($singleVacEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-link-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-link.svg'; } ?>" alt="Copy Link">
						<p>Copied!</p>
					</a>
					<a href="<?php echo $email; ?>" class="single__social" target="_blank">
						<img loading="lazy" src="<?php if($singleVacEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-email-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-email.svg'; } ?>" alt="Email icon">
					</a>
				</div>

			<?php endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #primary -->

<?php
get_footer();
