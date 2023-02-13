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
	<title><?php if(get_field('meta_title')) { the_field('meta_title'); } else { bloginfo('name'); ?> | <?php the_title(); } ?></title>
	<meta name="title" content="<?php the_field('meta_title'); ?>">
	<meta name="description" content="<?php the_field('meta_description'); ?>">
	<meta name="keywords" content="<?php the_field('keywords'); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_field('favicon', 'option')['url'];?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="facebook-domain-verification" content="fh7neg3622rg9pr8sx9lna7wq7hpnz" />
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->
	<?php wp_head(); ?>

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

	<!-- echo all header cookies in js there is cookie check -->
	<?php echo get_field('ec_head_section', 'option');

	echo get_field('pe_head_section', 'option');

	echo get_field('ne_head_section', 'option'); ?> 

</head>

<body <?php body_class(); ?> id="top">
	
	<!-- echo all body cookies in js there is cookie check -->
	<?php echo get_field('ec_body_section', 'option');

	echo get_field('pe_body_section', 'option');

	echo get_field('ne_body_section', 'option'); ?>


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

<div id="page" class="site" data-site="<?php if(get_field('relative_link', 'option')) { echo get_field('relative_link', 'option'); } else {  echo'https://www.bigchange.com'; } ?>" data-lang="<?php echo $currentLang; ?>">
	
	<div class="ppc-header">
		<div class="ppc-header__wrapper container">
			<div class="ppc-header__logo">
				<img src="<?php if($currentLang == 'en') { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/Primary_horizontal_RGB.png'; } else { echo get_template_directory_uri() . '/compiled/images/bigchange-logo-2020.png'; } ?>" alt="Big Change Logo">
			</div>
			<div class="ppc-header__contact">
				<!-- <img src="https://www.bigchange.com/wp-content/uploads/2021/02/phone-icon.svg" alt="Phone icon"> -->
				<p>Call: <a href="tel:+44 (0)113 457 1000">+44 (0)113 457 1000</a></p>
				<!-- <div class="ppc-header__btn">
					<a href="javascript:void(0);"  class="btn-normal btn-normal--light-blue login ppc-login-track" data-src='<iframe id="loginIFrame" width="420" height="420" scrolling="no" frameborder="0" src="https://client.bigchange.com/loginframe.aspx"></iframe>'><?php //echo get_field('string_login_button', 'option'); ?></a>
				</div> -->
			</div>
		</div>
	</div>
	<div class="top-button">
		<a href="#top"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26 15" style="enable-background:new 0 0 26 15;"  xml:space="preserve"><style type="text/css">.st0{fill:none;}.st1{fill:#FFFFFF;}</style><g><rect id="canvas_background" x="-1" y="-1" class="st0" width="582" height="402"/></g><g><polygon id="svg_1" class="st1" points="2.1,15 13,4.2 23.8,15 25.9,12.9 13,0 10.9,2.1 0.1,12.9 	"/></g></svg>Top</a>
	</div>


	<div class="bc-modal login-modal" style="opacity: 0; z-index: -1;">
		<div class="bc-modal__bg"></div>
		<div class="bc-modal__wrapper">
			<div class="bc-modal__inner">
				<div class="bc-modal__close"></div>
			</div>
		</div>
	</div>


	<div class="bc-modal pricing-modal pricing-ppc" style="opacity: 0; z-index: -1;">
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

	<div class="demo" style="visibility: none; height:0px; width:0px;"></div>

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
					<?php echo do_shortcode('[contact-form-7 id="2740" title="Get a free demo" html_id="free-demo-form"]'); ?>
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

<!-- <div class="cookie-bar cookie-bar--hidden">
	<div class="container">
		<div class="cookie-bar__text">
			<p><?php //echo get_field('cookie_bar_text', 'option'); ?></p>
		</div>
		<div class="cookie-bar__buttons"> 
			<?php //echo get_field('cookie_bar_buttons', 'option'); ?>
		</div>
	</div>
</div> -->

<div class="bc-modal cookies-modal" style="opacity: 0; z-index: -1;">
	<div class="bc-modal__bg"></div>
	<div class="bc-modal__wrapper">
		<div class="bc-modal__inner">
			<div class="cookies-modal__upper">
				<p class="modal-title"><?php echo get_field('string_cookie_modal_title', 'option'); ?></p>
				<!-- <a href="javascript:void(0);" class="btn-normal save-cookies">Save</a> -->
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