<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenberg-starter-theme
 */

?>

<?php if(!get_field('hide_button_banner')) { ?>
    <div class="button-banner <?php if (is_front_page()) {echo 'button-banner--hide '; } ?>">
        <div class="button-banner__buttons">
            <div class="button-banner__button">
                <a href="javascript:void(0);" onclick="gtag('event', 'WATCH VIDEO BUTTON', { event_category: 'Banner Button Clicks', event_action: 'WATCH VIDEO BUTTON'});" data-src="<?php if(get_field('video_embed_link', 'option')) { echo get_field('video_embed_link', 'option'); } else {  echo 'https://player.vimeo.com/video/624264547'; } ?>" class="btn-normal btn-normal--yellow video"><?php echo get_field('string_banner_video_button', 'option'); ?></a>
            </div>
            <div class="button-banner__button">
                <a href="<?php if(get_field('relative_link', 'option')) { echo get_field('relative_link', 'option'); } else {  echo'https://www.bigchange.com'; } ?>/brochure/" onclick=" gtag('event', 'VIEW BROCHURE BUTTON', { event_category: 'Banner Button Clicks', event_action: 'VIEW BROCHURE BUTTON'});" target="_blank" class="btn-normal btn-normal--yellow"><?php echo get_field('string_banner_brochure_button', 'option'); ?></a>
            </div>
            <div class="button-banner__button">
                <a href="javascript:void(0);" onclick="gtag('event', 'REQUEST CALLBACK BUTTON', { event_category: 'Banner Button Clicks', event_action: 'REQUEST CALLBACK BUTTON'});" class="btn-normal btn-normal--yellow callback"><?php echo get_field('string_banner_callback_button', 'option'); ?></a>
            </div>
            <div class="button-banner__button">
                <a href="<?php echo get_permalink(1277); ?>" onclick=" gtag('event', 'VIEW PRICING BUTTON', { event_category: 'Banner Button Clicks', event_action: 'VIEW PRICING BUTTON'});" class="btn-normal btn-normal--yellow"><?php echo get_field('string_banner_pricing_button', 'option'); ?></a>
            </div>
        </div>
    </div>

    <div class="bc-modal video-modal" style="opacity: 0; z-index: -1;">
        <div class="bc-modal__bg"></div>
        <div class="bc-modal__wrapper">
            <div class="bc-modal__inner">
                <div class="bc-modal__close"></div>
                <div class="bc-modal__title">
                    <p>BigChange</p>
                </div>
                <div class="video-modal__video">
                    <iframe loading="lazy" src="" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="bc-modal callback-modal" style="opacity: 0; z-index: -1;">
        <div class="bc-modal__bg"></div>
        <div class="bc-modal__wrapper">
            <div class="bc-modal__inner">
                <div class="bc-modal__close"></div>
                <div class="bc-modal__title">
                    <p><?php echo get_field('string_callback_modal_title', 'option'); ?></p>
                </div>
                <div class="bc-modal__text">
                    <p><?php echo get_field('string_callback_modal_text', 'option'); ?></p>
                </div>
                <div class="bc-modal__form">
                    <?php if(get_field('callback_embed', 'option')) { echo get_field('callback_embed', 'option'); } else {  echo '<!--[if lte IE 8]> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script> <![endif]--> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script> <script> hbspt.forms.create({ region: "na1", portalId: "20046553", formId: "77a09060-cdd6-4251-bcb4-c1834a560913" }); </script>'; } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php $footer_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$footerEn = 1;

	if(strpos($footer_link, '/fr/') !== false || strpos($footer_link, '/cy/') !== false || strpos($footer_link, '/us/') !== false || strpos($footer_link, '/nz/') !== false || strpos($footer_link, '/au/') !== false) {
		$footerEn = 0;
	}

?>
<footer id="colophon" class="footer">
    <div class="footer__upper-wrapper">
        <div class="footer__upper">
            <div class="footer__logo">
                <a href="<?=home_url()?>">
                    <img loading="lazy" src="<?php if($footerEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/Primary_horizontal_RGB.png'; } else { echo get_template_directory_uri() . '/compiled/images/bigchange-logo-2020.png'; } ?>" alt="Big Change Logo">
                </a>
            </div>
            <div class="footer__socials">
                <a href="https://www.facebook.com/BigChangeApps/" target="_blank" class="footer__social">
                    <img loading="lazy" src="<?php if($footerEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-facebook-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-facebook.svg'; } ?>" alt="Facebook Logo">
                </a>
                <a href="https://twitter.com/bigchangeapps" target="_blank" class="footer__social">
                    <img loading="lazy" src="<?php if($footerEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-twitter-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-twitter-blue.svg'; } ?>" alt="Twitter Logo">
                </a>
                <a href="https://www.linkedin.com/company/bigchange/" target="_blank" class="footer__social">
                    <img loading="lazy" src="<?php if($footerEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-linkedin-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-linkedin.svg'; } ?>" alt="Linked In Logo">
                </a>
                <a href="https://www.youtube.com/c/BigChange" target="_blank" class="footer__social">
                    <img loading="lazy" src="<?php if($footerEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-youtube-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/02/new-youtube.svg'; } ?>" alt="Youtube Logo">
                </a>
                <a href="https://www.instagram.com/bigchangeapps/?hl=en" target="_blank" class="footer__social">
                    <img loading="lazy" src="<?php if($footerEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-insta-dark-blue.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/BC-Insta-Icon-5.svg'; } ?>" alt="Instagram Icon">
                </a>
            </div>
        </div>
        <?php if (get_field('show_footer_partnerships_link', 'option') && get_field('footer_partnerships_link', 'option')) { ?>
            <div class="logos-partnership-cta footer">
                <img height="60" width="100" src="https://www.bigchange.com/wp-content/uploads/2022/05/hand-shake-partnerships.svg" alt="Handshake icon">
                <div class="logos-partership-cta__mid-wrapper">
                    <h4>Become a BigChange Partner</h4>
                    <p>We’ll help you expand your service offering to your customers</p>
                </div>
                <a class="btn-normal btn-normal--light-blue" href="<?php echo get_field('footer_partnerships_link', 'option');?>">FIND OUT MORE</a>
            </div>
        <?php } ?>
    </div>
    <nav class="footer__nav container">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_id'        => 'footer-menu',
                'container_class' => 'footer-menu-wrapper', 
                'menu_class' => 'footer-menu'
            ) );
        ?>
    </nav>
    <div class="footer__logos container">
        <div class="logo">
            <img loading="lazy" src="https://www.bigchange.com/wp-content/uploads/2023/01/sage-partner-de.webp" width="200" height="80" alt="Sage Developer">
        </div>
        <div class="logo">
            <img loading="lazy" src="https://www.bigchange.com/wp-content/uploads/2023/01/xero-de.webp" height="80" width="200" alt="Intergrate with Xero">
        </div>
        <div class="logo">
            <img loading="lazy" src="https://www.bigchange.com/wp-content/uploads/2023/01/NQA-de.webp" height="80" width="200" alt="BSI Partner">
        </div>
        <div class="logo">
            <a href="https://www.capterra.co.uk/software/149479/jobwatch-powered-by-bigchange#reviews" target="_blank">  
                <img loading="lazy" src="https://www.bigchange.com/wp-content/uploads/2023/01/capterra-de.webp" height="80" width="200" alt="BSI Partner">
            </a>
        </div>
        <div class="logo">
            <img loading="lazy" src="https://www.bigchange.com/wp-content/uploads/2023/01/queens-de.webp" height="80" width="200" alt="BSI Partner">
        </div>
    </div>
    <div class="footer__lower container">
        <div class="footer__copyright">
            <p><?php echo get_field('string_footer_copyright', 'option'); ?></p>
        </div>
        <div class="footer__terms-nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-lower',
                    'menu_id'        => 'footer-lower-menu',
                    'container_class' => 'footer-lower-menu-wrapper', 
                    'menu_class' => 'footer-lower-menu'
                ) );
            ?>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<!-- echo all body cookies in js there is cookie check -->
	<?php echo get_field('ec_footer_section', 'option');

	echo get_field('pe_footer_section', 'option');

	echo get_field('ne_footer_section', 'option'); ?>

</body>
</html>
