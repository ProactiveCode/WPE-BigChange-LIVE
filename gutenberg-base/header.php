<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenberg-starter-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php $socialImage = 'https://www.bigchange.com/wp-content/uploads/2021/09/Primary_horizontal_RGB.png';

	if(get_the_post_thumbnail_url()) { 
		$socialImage = get_the_post_thumbnail_url(); 
	}

	if(get_field('override_social_image')) { 
		$socialImage = get_field('override_social_image')['url']; 
	} ?>

	<?php if(is_search()) { ?>
		<title>BigChange JobWatch - Search Results</title>
		<meta name="title" content="BigChange JobWatch - Search Results">
		<meta name="description" content="Take complete control of your business with BigChange. Showing search results for your chosen search term.">
	<?php } else if (is_page(1271) && isset($_GET["catid"])  && $_GET["catid"] != 0) {
			$catID = $_GET["catid"];
			$catName = get_the_category_by_ID( $catID ); ?>
			<title><?php bloginfo('name'); ?> | <?php echo $catName . ' Blog'; ?></title>
			<meta name="title" content="<?php bloginfo('name'); ?> | <?php echo $catName . ' Blog'; ?>">
			<meta name="description" content="<?php echo 'Read the latest ' . $catName .' publications from '. get_bloginfo('name');?>">
			<?php if(get_field('keywords')) { ?>
				<meta name="keywords" content="<?php the_field('keywords'); ?>">
			<?php } ?>
	<?php } else if (is_page(1267) && isset($_GET["catid"]) && $_GET["catid"] != 0) { 
			$catID = $_GET["catid"];
			$catName = get_the_category_by_ID( $catID ); ?>
			<title><?php bloginfo('name'); ?> | <?php echo $catName . ' Customer Success Stories'; ?></title>
			<meta name="title" content="<?php bloginfo('name'); ?> | <?php echo $catName . ' Customer Success Stories'; ?>">
			<meta name="description" content="<?php echo get_bloginfo('name') . ' Presents our ' . $catName .' customers success stories: The JobWatch app is truly awesome. Our engineers are connected in real time to receive and complete jobs.';?>">
			<?php if(get_field('keywords')) { ?>
				<meta name="keywords" content="<?php the_field('keywords'); ?>">
			<?php } ?>
		<?php } else { ?>
		<title><?php if(get_field('meta_title')) { the_field('meta_title'); } else { bloginfo('name'); ?> | <?php the_title(); } ?></title>
		<meta name="title" content="<?php if(get_field('meta_title')) { the_field('meta_title'); } else { bloginfo('name'); ?> | <?php the_title(); } ?>">
		<meta name="description" content="<?php if(get_field('meta_description')) { the_field('meta_description'); } else { echo 'Take complete control of your business with BigChange | '; bloginfo('name'); ?> | <?php the_title(); } ?>">
		<?php if(get_field('keywords')) { ?>
			<meta name="keywords" content="<?php the_field('keywords'); ?>">
		<?php } ?>
	<?php } ?>

	<meta property="og:title" content="<?php if(get_field('meta_title')) { the_field('meta_title'); } else { bloginfo('name'); ?> | <?php the_title(); } ?>">
	<meta property="og:description" content="<?php if(get_field('meta_description')) { the_field('meta_description'); } else { 'Take complete control of your business with BigChange | ' . bloginfo('name'); ?> | <?php the_title(); } ?>">
	<meta property="og:image" content="<?php echo $socialImage; ?>">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">

	<meta name="twitter:title" content="<?php if(get_field('meta_title')) { the_field('meta_title'); } else { bloginfo('name'); ?> | <?php the_title(); } ?>">
	<meta name="twitter:description" content="<?php if(get_field('meta_description')) { the_field('meta_description'); } else { 'Take complete control of your business with BigChange | ' . bloginfo('name'); ?> | <?php the_title(); } ?>">
	<meta name="twitter:image" content="<?php echo $socialImage; ?>">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_field('favicon', 'option')['url'];?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="facebook-domain-verification" content="fh7neg3622rg9pr8sx9lna7wq7hpnz" />


	<script>
		function readCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			}
			return null;
		}
	</script>
	
	<link rel="canonical" href="<?php if(get_field('override_canonical') && get_field('canonical_url')) { 
		echo get_field('canonical_url'); 
	} else if (is_page(1267) || is_page(1271) && isset($_GET["catid"])) {
        $link = get_permalink($post->ID) . '?catid=' . absint($_GET["catid"]);
        echo $link; 
	} else { 
		echo $link; 
	} ?>" />

	<?php 
		if (is_page(1267) || is_page(1271) && isset($_GET["catid"])) {
			$link = get_permalink($post->ID) . '?catid=' . absint($_GET["catid"]);
			echo '<link rel="alternate" hreflang="x-default" href="' . $link . '"/>';

		} else if (get_field('uk_hreflang_url') && get_field('uk_hreflang_country')) {
			$url = get_field('uk_hreflang_url');
			$code = get_field('uk_hreflang_country');

			echo '<link rel="alternate" hreflang="x-default" href="' . $url . '"/>';
		}
	?>

	<?php 
	// if ($french == false){
		if(get_field('fr_hreflang_url') && get_field('fr_hreflang_country')) {
				$url = get_field('fr_hreflang_url');
				$code = get_field('fr_hreflang_country');
				
				echo '<link rel="alternate" href="' . $url . '" hreflang="' . $code . '">';
			}
		// }
	?>

	<?php 
	// if ($usa == false){
		if(get_field('usa_hreflang_url') && get_field('usa_hreflang_country')) {
				$url = get_field('usa_hreflang_url');
				$code = get_field('usa_hreflang_country');
				
				echo '<link rel="alternate" href="' . $url . '" hreflang="' . $code . '">';
			}
		// }
	?>

	<?php 
	// if ($cyprus == false){
		if(get_field('cy_hreflang_url') && get_field('cy_hreflang_country')) {
				$url = get_field('cy_hreflang_url');
				$code = get_field('cy_hreflang_country');
				
				echo '<link rel="alternate" href="' . $url . '" hreflang="' . $code . '">';
			}
		// }
	?>

	<?php wp_head(); ?>

	<!-- echo all header cookies in js there is cookie check -->
	<?php echo get_field('ec_head_section', 'option');

	echo get_field('pe_head_section', 'option');

	echo get_field('ne_head_section', 'option'); ?>

	<!-- CRO Script -->
	<script type='text/javascript' src='//c.webtrends-optimize.com/acs/accounts/1c39dcfe-8574-4e57-80df-3e69edab1b14/js/wt.js'></script>
</head>

<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	
	$currentLang = 'en';
	if( strpos( $current_link, '/fr/' ) !== false ) {
		$currentLang = 'fr';
	}

	if( strpos( $current_link, '/cy/' ) !== false ) {
		$currentLang = 'cy';
	}

	if( strpos( $current_link, '/us/' ) !== false ) {
		$currentLang = 'en-us';
	}

	if( strpos( $current_link, '/nz/' ) !== false ) {
		$currentLang = 'en-nz';
	}

	if( strpos( $current_link, '/au/' ) !== false ) {
		$currentLang = 'en-au';
	}
?>

<body <?php if(strpos($_SERVER['REQUEST_URI'], "/cy/") !== false) { body_class('cyprus-override'); } else { body_class();} ?> id="top" data-lang="<?php echo $currentLang; ?>">
	
	<!-- echo all body cookies in js there is cookie check -->
	<?php echo get_field('ec_body_section', 'option');

	echo get_field('pe_body_section', 'option');

	echo get_field('ne_body_section', 'option'); ?>

<div id="page" class="site" data-site="<?php if(get_field('relative_link', 'option')) { echo get_field('relative_link', 'option'); } else {  echo'https://www.bigchange.com'; } ?>">
	<div class="unsupported-browser">
		<div class="container">
			<p><?php echo get_field('unsupported_browser', 'option'); ?></p>
		</div>
	</div>
	<div class="pre-nav">
		<div class="pre-nav__container container">
			<?php if($currentLang == 'en') { ?>
				<div class="pre-nav__number">
					<a href="tel:<?php if(get_field('phone_number', 'option')) { echo get_field('phone_number', 'option'); } else {  echo '(0)113 457 1000'; } ?>"><?php if(get_field('phone_number', 'option')) { echo get_field('phone_number', 'option'); } else {  echo '(0)113 457 1000'; } ?></a>
				</div>
			<?php } ?>
			<div class="pre-nav__contact">	
				<a href="<?php if(get_field('relative_link', 'option')) { echo get_field('relative_link', 'option'); } else {  echo'https://www.bigchange.com'; } ?>/about-us/contact/"><?php echo get_field('string_contact_us', 'option'); ?></a>
			</div>
			<div class="pre-nav__select">
				<select name="country" id="country"> 
					<option value="uk" data-link="<?php if(get_field('uk_hreflang_url')) { echo get_field('uk_hreflang_url'); } else { echo 'https://www.bigchange.com/'; } ?>">United Kingdom</option>
					<option value="fr" data-link="<?php if(get_field('fr_hreflang_url')) { echo get_field('fr_hreflang_url'); } else { echo 'https://www.bigchange.com/fr/'; } ?>">France</option>
					<option value="cy" data-link="<?php if(get_field('cy_hreflang_url')) { echo get_field('cy_hreflang_url'); } else { echo 'https://www.bigchange.com/cy/'; } ?>">Cyprus</option>
					<option value="us" data-link="<?php if(get_field('usa_hreflang_url')) { echo get_field('usa_hreflang_url'); } else { echo 'https://www.bigchange.com/us/'; } ?>">United States</option>
					<option value="nz" data-link="<?php if(get_field('nz_hreflang_url')) { echo get_field('nz_hreflang_url'); } else { echo 'https://www.bigchange.com/nz/'; } ?>">New Zealand</option>
					<option value="au" data-link="<?php if(get_field('au_hreflang_url')) { echo get_field('au_hreflang_url'); } else { echo 'https://www.bigchange.com/au/'; } ?>">Australia</option>
					<option value="ca" data-link="">Canada</option>
				</select>
			</div>
		</div>
	</div>
	<header class="site-header">
		<div class="site-header__container container">
			<div class="site-header__logo">
				<a href="<?=home_url()?>">
					<img width="230" height="60" src="<?php if($currentLang == 'en') { echo 'https://www.bigchange.com/wp-content/uploads/2021/11/bc-logo-smaller.png'; } else { echo get_template_directory_uri() . '/compiled/images/bigchange-logo-2020.png'; } ?>" alt="Big Change Logo">
				</a>
			</div>
			<nav id="site-navigation" class="site-header__nav">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_class' => 'nav-menu', 
						'menu_class' => 'nav-menu'
					) );
				?>
			</nav>
			<div class="site-header__search pre-nav__search-icon">
				<a href="javascript:void(0);">
					<img height="20" width="20" src="https://www.bigchange.com/wp-content/uploads/2022/08/search-new-blue.svg" alt="Search icon">
				</a>
			</div>
			<div class="search-wrapper">
				<div class="search-wrapper__inner">
					<?php echo do_shortcode('[ivory-search id="18" title="Default Search Form"]'); ?>
					<div class="search-wrapper__close">
						<a href="javascript:void();" class="btn-normal btn-normal--white"><span class="offscreen">Close search</span></a>
					</div>
				</div>
			</div>
			<div class="site-header__demo">
				<a href="javascript:void(0);" onclick="gtag('event', 'GET A DEMO HEADER BUTTON', { event_category: 'Header Button Clicks', event_action: 'GET A DEMO HEADER BUTTON'});" class="btn-normal btn-normal--yellow demo"><?php echo get_field('string_get_a_demo_button', 'option'); ?></a>
				<a href="javascript:void(0);" onclick="gtag('event', 'exclude-logins2', { event_category: 'ExcludeLogins2', event_action: 'Excluded'});" class="btn-normal btn-normal--light-blue login" data-src='<iframe id="loginIFrame" width="420" height="420" scrolling="no" frameborder="0" src="https://client.bigchange.com/loginframe.aspx"></iframe>'><?php echo get_field('string_login_button', 'option'); ?></a>
			</div>
			<div class="site-header__menu-toggle">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>

		<div class="bc-modal demo-modal" style="opacity: 0; z-index: -1;">
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
					<?php if(get_field('get_a_demo_form_embed', 'option')) { echo get_field('get_a_demo_form_embed', 'option'); } else {  echo '<!--[if lte IE 8]> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script> <![endif]--> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script> <script> hbspt.forms.create({ region: "na1", portalId: "20046553", formId: "bb5bf554-a566-4f4b-98c4-1f0e7e132378" }); </script>'; } ?>
					</div>
				</div>
			</div>
		</div>

		<?php 
		$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

		if (strpos($url,'leaders-for-life') !== false) { ?>
			<div class="bc-modal bc-modal-leaders floating-form-modal" style="opacity: 0; z-index: -1;">
			<div class="bc-modal__bg"></div>
			<div class="bc-modal__wrapper">
				<div class="bc-modal__inner">
					<div class="bc-modal__close"></div>
					<div class="bc-modal__title">
						<p>YES, I WANT TO BE AN AMBASSADOR:</p>
					</div>
					<div class="bc-modal__form">
						<!--[if lte IE 8]>
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
						<![endif]-->
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
						<script>
						hbspt.forms.create({
							region: "na1",
							portalId: "20046553",
							formId: "352f1f10-85ce-463d-936c-e26d5b27f143"
						});
						</script>
					</div>
				</div>
			</div>
		<?php } ?>
	</header>

	<div class="bc-modal login-modal" style="opacity: 0; z-index: -1;">
			<div class="bc-modal__bg"></div>
			<div class="bc-modal__wrapper">
				<div class="bc-modal__inner">
					<div class="bc-modal__close"></div>
				</div>
			</div>
		</div>

	<div class="top-button">
		<a href="#top"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26 15" style="enable-background:new 0 0 26 15;"  xml:space="preserve"><style type="text/css">.st0{fill:none;}.st1{fill:#FFFFFF;}</style><g><rect id="canvas_background" x="-1" y="-1" class="st0" width="582" height="402"/></g><g><polygon id="svg_1" class="st1" points="2.1,15 13,4.2 23.8,15 25.9,12.9 13,0 10.9,2.1 0.1,12.9 	"/></g></svg>Top</a>
	</div>

	<div class="bc-modal pricing-modal form-in-hero" style="opacity: 0; z-index: -1;">
        <div class="bc-modal__bg"></div>
        <div class="bc-modal__wrapper">
            <div class="bc-modal__inner">
                <div class="bc-modal__close"></div>
                <div class="bc-modal__title">
                    <p><?php echo get_field('string_view_pricing_modal_title', 'option'); ?></p>
                </div>
                <div class="bc-modal__text">
                    <p><?php echo get_field('string_view_pricing_modal_text', 'option'); ?></p>
                </div>
                <div class="bc-modal__form">
					<?php if(get_field('pricing_embed', 'option')) { echo get_field('pricing_embed', 'option'); } else {  echo '<!--[if lte IE 8]> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script> <![endif]--> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script> <script> hbspt.forms.create({ region: "na1", portalId: "20046553", formId: "c6bc6251-8af6-4874-adbc-fdca664d97c8" }); </script>'; } ?>
                </div>
            </div>
        </div>
    </div>

<div class="cookie-bar cookie-bar--new cookie-bar--hidden">
	<div class="cookie-bar__inner container">
		<div class="cookie-bar__text">
			<p class="cookie-title"><?php if(get_field('cookie_bar_title', 'option')) { echo get_field('cookie_bar_title', 'option'); } else {  echo 'Our Cookies'; } ?></p>
			<p><?php echo get_field('cookie_bar_text', 'option'); ?></p>
		</div>
		<div class="cookie-bar__buttons"> 
			<?php echo get_field('cookie_bar_buttons', 'option'); ?>
		</div>
	</div>
</div>

<div class="bc-modal cookies-modal" style="opacity: 0; z-index: -1;">
	<div class="bc-modal__bg"></div>
	<div class="bc-modal__wrapper">
		<div class="bc-modal__inner">
			<div class="cookies-modal__upper">
				<p class="modal-title"><?php echo get_field('string_cookie_modal_title', 'option'); ?></p>
			</div>
			<div class="cookies-modal__text">
				<p><?php echo get_field('cookie_modal_text', 'option'); ?></p>
			</div>
			<div class="cookies-modal__item">
				<div class="cookies-modal__toggle checked">
					<input type="checkbox" checked disabled id="esCookies"/><label for="esCookies">Toggle</label>
				</div>
				<div class="cookies-modal__item-text">
					<p class="modal-title"><?php echo get_field('ec_title', 'option'); ?></p>
					<p><?php echo get_field('ec_description', 'option'); ?></p>
				</div>
			</div>

			<div class="cookies-modal__item">
				<div class="cookies-modal__toggle">
					<input type="checkbox" id="peCookies" /><label for="peCookies">Toggle</label>
				</div>
				<div class="cookies-modal__item-text">
					<p class="modal-title"><?php echo get_field('pe_title', 'option'); ?></p>
					<p><?php echo get_field('pe_description', 'option'); ?></p>
				</div>
			</div>

			<div class="cookies-modal__item">
				<div class="cookies-modal__toggle">
					<input type="checkbox" id="neCookies" /><label for="neCookies">Toggle</label>
				</div>
				<div class="cookies-modal__item-text">
					<p class="modal-title"><?php echo get_field('ne_title', 'option'); ?></p>
					<p><?php echo get_field('ne_description', 'option'); ?></p>
				</div>
			</div>

			<div class="cookies-modal__buttons">
				<a href="javascript:void(0);" class="btn-normal btn-normal--white save-cookies"><?php echo get_field('string_cookie_modal_save_button', 'option'); ?></a>
				<a href="javascript:void(0);" class="btn-normal accept-cookies"><?php echo get_field('cookie_modal_accept_button', 'option'); ?></a>
			</div>
		</div>
	</div>
</div>