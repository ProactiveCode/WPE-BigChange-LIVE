<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>

<?php if(has_category('Case Study', $post->ID) && get_field('case_study_fields_populated', $post->ID)) { 
	$id = $post->ID; ?>
	<div class="cs-header">
		<div class="cs-header__wrapper">
			<div class="container">
				<div class="cs-header__text-wrap">
					<?php if(get_field('cs_header_title', $id)) { ?>
						<div class="cs-header__title">
							<p><?php echo get_field('cs_header_title', $id); ?></p>
						</div>
					<?php } ?>
					<div class="cs-header__text">
						<h1><?php if(get_field('cs_header_text', $id)) { ?><?php echo get_field('cs_header_text', $id); ?><?php } else { echo get_the_title(); } ?></h1>
					</div>
					<?php $stats = get_field('cs_header_stats', $id); 
					if($stats) { ?>
						<div class="cs-header__stats">
							<?php foreach ($stats as $stat) { ?>
								<div class="cs-header__stat">
									<?php if($stat['image']) { ?>
										<div class="cs-header__stat-image">
											<img src="<?php echo $stat['image']['url']; ?>" alt="Icon">
										</div>
									<?php } ?>
									<?php if($stat['stat']) { ?>
										<div class="cs-header__stat-stat">
											<p><?php echo $stat['stat']; ?></p>
										</div>
									<?php } ?>
									<?php if($stat['desc']) { ?>
										<div class="cs-header__stat-desc">
											<p><?php echo $stat['desc']; ?></p>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
				<?php if(get_field('cs_header_image', $id)) { ?>
					<div class="cs-header__image">
						<img src="<?php echo get_field('cs_header_image', $id) ['url']; ?>" alt="BigChange header image">
					</div>
				<?php } ?>
			</div>
		</div>
		<?php if(get_field('cs_header_extra_text', $id) && get_field('cs_header_extra_image', $id)) { ?>
		<div class="cs-header__extra">
			<div class="container">
				<div class="cs-header__extra-text">
					<p><?php echo get_field('cs_header_extra_text', $id); ?></p>
				</div>
				<div class="cs-header__extra-logo">
					<img src="<?php echo get_field('cs_header_extra_image', $id)['url']; ?>" alt="Logo">
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<main class="main" role="main" id="main-content">
		<div class="section container">
			<div class="cs-main">
				<div class="cs-main__wrapper">
					<?php if(get_field('cs_main_content', $id)) { ?>
						<div class="cs-main__content">
							<?php echo get_field('cs_main_content', $id); ?>
						</div>
					<?php } ?>
					<div class="cs-main__sidebar">
						<?php $tables = get_field('cs_sidebar_table_items', $id); 
						if($tables) { ?>
							<div class="cs-main__sidebar-table">
								<table>
									<?php foreach ($tables as $table) { ?>
										<tr>
											<td>
												<div class="cs-main__sidebar-title">
													<h3><?php echo $table['title']; ?></h3>
												</div>
												<div class="cs-main__sidebar-text">
													<?php echo $table['content']; ?>
												</div>
											</td>
										</tr>
									<?php } ?>
								</table>
							</div>
						<?php } ?>
						<div class="cs-main__sticky">
							<a href="https://www.bigchange.com/platform/" class="cs-main__sidebar-bc">
								<div class="cs-main__sidebar-bc-text">
									<p>BE UNSTOPPABLE WITH THE COMPLETE JOB MANAGEMENT SYSTEM</p>
									<div class="btn-normal btn-normal--yellow">Find out more</div>
								</div>
							</a>
							<div class="cs-unstoppable container padded-top-bot">
								<div class="cs-unstoppable__btns">
									<a href="javascript:void(0);" class="btn-normal video">Watch Video</a>
									<a href="javascript:void(0);" class="btn-normal btn-normal--yellow demo">Get Demo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cs-content">
			<?php the_content(); ?>
		</div>
		<div class="cs-discover container">
			<div class="cs-discover__image">
				<img src="https://www.bigchange.com/wp-content/uploads/2022/09/yellow-bg.jpg" alt="Yellow background with some desk items on">
			</div>
			<div class="cs-discover__text">
				<p>BE <span>MILES</span> MORE PRODUCTIVE</p>
				<p>DELIVER A SERVICE THAT CUSTOMERS <span>LOVE</span></p>
				<p>RUN YOUR <span>WHOLE BUSINESS</span> ON THE <br>COMPLETE JOB MANAGEMENT SYSTEM</p>
				<a href="https://www.bigchange.com/platform/" class="btn-normal btn-normal--large">Discover More</a>
			</div>
		</div>
		<div class="cs-unstoppable container padded-top-bot">
			<h4 class="blue-text">See how your business CAN BE UNSTOPPABLE when it runs on BigChange</h4>
			<div class="cs-unstoppable__btns">
				<a href="javascript:void(0);" class="btn-normal video">Watch Video</a>
				<a href="javascript:void(0);" class="btn-normal btn-normal--yellow demo">Get Demo</a>
			</div>
		</div>
	</main>
<?php } else { ?>
	<main id="primary" class="site-main single">

		<div class="single__header">

		</div>
		<div class="single__wrapper">
		<?php
			while ( have_posts() ) : the_post(); ?>
				<div class="single__category">
				<?php
					$catIDs = array();
					$categories = wp_get_post_categories(get_the_ID());
					$ceo = false;
					$firstCat = '';
					$firstCatId = '';
					$count = 0;
					foreach($categories as $cat){
						$category = get_category($cat); 
						array_push($catIDs, $category -> term_id);

						if($count == 0) {
							$firstCat = $category -> name;
							$firstCatId = $category -> term_id;

							if($category -> term_id == 8) {
								$firstCat = "Chairman's Blog";
								$firstCatId = 8;
							}
						}

						if($category -> term_id == 8) {
							$ceo = true;
						}
						?>
						<?php $singleCheck = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

						$checkboxEn = 1;

						if(strpos($singleCheck, '/fr/') !== false || strpos($singleCheck, '/cy/') !== false || strpos($singleCheck, '/us/') !== false || strpos($singleCheck, '/nz/') !== false || strpos($singleCheck, '/au/') !== false) {
							$checkboxEn = 0;
						}

						if($checkboxEn == 1) { ?>
							<a href="https://www.bigchange.com/blog/?catid=<?php echo $category -> term_id; ?>" data-catid="<?php echo $category -> term_id; ?>"><?php echo $category -> name; ?></a>
						<?php } else { ?>
							<a href="<?php if($ceo) { echo get_permalink(4373); } else { echo get_permalink(1267);?>?catid=<?php echo $category -> term_id; } ?>" data-catid="<?php echo $category -> term_id; ?>"><?php echo $category -> name; ?></a>
						<?php }
						?>
					<?php $count++; }	?>
				</div>
				<?php if(get_the_post_thumbnail_url()) { ?>
					<div class="single__image">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Featured Image">
					</div>
				<?php } ?>
				<div class="single__title">
					<h1><?php echo get_the_title(); ?></h1>
					<div class="single__date">
						<p style="color: #083a4f; font-size: 16px;"><strong><?php echo get_the_date(); ?></strong></p>
					</div>
				</div>
				<?php if($checkboxEn == 1) { ?>
					<div class="single__breadcrumbs">
						<a href="<?php echo get_home_url(); ?>">Home</a><p>></p><a href="https://www.bigchange.com/blog/">Blog</a><p>></p><a href="<?php echo 'https://www.bigchange.com/blog/?catid=' . $firstCatId ; ?>"><?php echo $firstCat; ?></a><p>> <?php echo get_the_title(); ?></p>
					</div>
				<?php } ?>
				<div class="single__content">
					<?php the_content(); ?>
				</div>
				<div class="single__meta">
					<div class="single__name">
						<?php $author = get_the_author();
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
					$fb = get_field('post_facebook_link', 'option');
					$fb = str_replace("[url]",get_permalink(),$fb);
					$twitter = get_field('post_twitter_link', 'option');
					$twitter = str_replace("[url]",get_permalink(),$twitter);
					$email = get_field('post_email_link', 'option');
					$email = str_replace("[url]",get_permalink(),$email);
					$linkedin = get_field('post_linkedin_link', 'option');
					$linkedin = str_replace("[url]",get_permalink(),$linkedin);
					?>

					<?php $single_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

					$singleEn = 1;

					if(strpos($single_link, '/fr/') !== false || strpos($single_link, '/cy/') !== false || strpos($single_link, '/us/') !== false || strpos($single_link, '/nz/') !== false || strpos($single_link, '/au/') !== false) {
						$singleEn = 0;
					}

					?>
					<a href="<?php echo $fb; ?>" class="single__social" target="_blank">
						<img loading="lazy" src="<?php if($singleEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-facebook-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-facebook.svg'; } ?>" alt="Facebook Logo">
					</a>
					<a href="<?php echo $twitter; ?>" class="single__social" target="_blank">
						<img loading="lazy" src="<?php if($singleEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-twitter-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-twitter-blue.svg'; } ?>" alt="Twitter Logo">
					</a>
					<a href="javascript:void(0);" class="single__social single__social--email">
						<img loading="lazy" src="<?php if($singleEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-link-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-link.svg'; } ?>" alt="Copy Link">
						<p>Copied!</p>
					</a>
					<a href="<?php echo $email; ?>" class="single__social" target="_blank">
						<img loading="lazy" src="<?php if($singleEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-email-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-email.svg'; } ?>" alt="Email icon">
					</a>
					<a href="<?php echo $linkedin; ?>" class="single__social single__social--linkedin" target="_blank">
						<img loading="lazy" src="<?php if($singleEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2022/02/linkedin.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2022/02/linkedin.svg'; } ?>" alt="Linkedin icon">
					</a>
				</div>

			<?php endwhile; // End of the loop.
			?>

			<?php if($singleEn == 1) {	?>
			<div class="nl-signup bg-sec">
				<div class="container">
					<h3>SIGN UP FOR BIGCHANGE NEWS AND RESOURCES</h3>
					<div class="">
						<!--[if lte IE 8]>
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
						<![endif]-->
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
						<script>
						hbspt.forms.create({
							region: "na1",
							portalId: "20046553",
							formId: "774c1c68-f0c7-4f4e-ad6f-5a308c493fb7"
						});
						</script>
					</div>
					<p>By clicking ‘Subscribe’ you confirm you are happy to receive regular email newsletters from BigChange. You can unsubscribe from these emails at any time.</p>
				</div>
			</div>

			<?php } ?>

			<div class="single__related">
				<h2><?php echo get_field('string_recent_posts_title', 'option'); ?></h2>

				<?php 
					$current = get_the_ID();
					$query_vars['post_type'] = 'post';
					$query_vars['posts_per_page'] = 3;
					$query_vars['post__not_in'] = array($current);
					$query_vars['category__in'] = $catIDs;
					
					$query = new WP_Query( $query_vars );

					if($query->have_posts()) { ?>
						<div class="single__related-wrapper">
							<?php while ( $query->have_posts() ) {
								$query->the_post();
								$postID = get_the_ID();
								$categories = wp_get_post_categories(get_the_ID());
								$catString = '';
								foreach($categories as $cat){
									$category = get_category($cat);
									$catString .= '<p tabindex="0" data-href="' . get_permalink(1267) . '?catid=' . $category -> term_id . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
								} ?>

								<a href="<?php echo get_the_permalink($postID); ?>" class="single__card card">
									<div class="card__image" style="background-image:url(<?php echo get_the_post_thumbnail_url($postID); ?>);"></div>
									<div class="card__title">
										<h3><?php echo get_the_title($postID); ?></h3>
									</div>
									<div class="card__content">
										<p><?php echo wp_trim_words( get_the_excerpt($postID), 20, '' ); ?> [...]</p>
									</div>
									<!-- <div class="card__category"><?php //echo $catString; ?></div> -->
									<div class="card__link"><?php echo get_field('string_continue_reading', 'option'); ?></div>
								</a>
							<?php } ?>
						</div>
					<?php } else {
						$html_str = '<p class="no-posts">Sorry! There are currently no posts available.</p>';
					}

				?>
			</div>
		</div>

	</main><!-- #primary -->
<?php } ?>
<?php
get_footer();
