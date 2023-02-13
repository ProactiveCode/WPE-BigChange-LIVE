<?php 
if(isset($_COOKIE['IPgeoRegion'])) {
    $regionCookie = $_COOKIE['IPgeoRegion'];
} else {
    $regionCookie = 'uk';
}
if (get_field('other_locations')){
    $otherLocations = get_field('other_locations');

    $count = 0;
    $countIndex = 0;
    foreach ($otherLocations as $otherLocation) {
        if ($otherLocation['location_cookie_slug'] == $regionCookie){
            $countIndex = $count;
        }
        $count++;
    }
}?>
<div class="contact__upper bg-blue-almost-grey">
    <div class="section container">
        <?php if(get_field('contact_title') && get_field('contact_title_text')) { ?>
        <div class="contact__title">
            <h1 class="new-brand-text"><?php echo get_field('contact_title'); ?></h1>
            <p><?php echo get_field('contact_title_text'); ?></p>
        </div>
        <?php } ?>
        <div class="contact__form">
            <?php if(get_field('contact_form_title')) { ?>
                <h3 class="sec-blue line-above line-above--sec-brand"><?php echo get_field('contact_form_title'); ?></h3>
            <?php } ?>
            <?php if(get_field('contact_form_embed')) { ?>
                <div class="contact__form-wrapper">
                    <?php echo get_field('contact_form_embed'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="contact__hero-lower contact__item-wrap">
            <div class="contact__call contact__item">
                <?php if(get_field('contact_call_title')) { ?>
                    <h3 class="sec-blue"><?php echo get_field('contact_call_title'); ?></h3>
                <?php } ?>
                <?php if($otherLocations[$countIndex]['phone']) { ?>
                    <a href="tel:<?php echo $otherLocations[$countIndex]['phone']; ?>"><?php echo $otherLocations[$countIndex]['phone']; ?></a>
                <?php } ?>
            </div>
            <div class="contact__email contact__item">
                <?php if(get_field('contact_email_title')) { ?>
                    <h3 class="sec-blue"><?php echo get_field('contact_email_title'); ?></h3>
                <?php } ?>
                <?php if($otherLocations[$countIndex]['email']) { ?> 
                    <p><a href="mailto:<?php echo $otherLocations[$countIndex]['email']; ?>"><?php echo $otherLocations[$countIndex]['email']; ?></a></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="contact__blue bg-partnership-blue">
    <div class="contact__item-wrap container">
        <div class="contact__item contact__item-flex">
            <?php if(get_field('blue_section_left_image')) { ?>
                <div class="contact__item-image">
                    <img src="<?php echo get_field('blue_section_left_image')['url']; ?>" alt="Truck icon">
                </div>
            <?php } ?>
            <div class="contact__item-text">
                <?php if(get_field('blue_section_left_title')) { ?>
                    <p class="large white"><?php echo get_field('blue_section_left_title'); ?></p>
                <?php } ?>
                <?php if(get_field('blue_section_left_text')) { ?>
                    <p class="white"><?php echo get_field('blue_section_left_text'); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="contact__item contact__item-flex">
            <?php if(get_field('blue_section_right_image')) { ?>
                <div class="contact__item-image">
                    <img src="<?php echo get_field('blue_section_right_image')['url']; ?>" alt="Help icon">
                </div>
            <?php } ?>
            <div class="contact__item-text">
                <?php if(get_field('blue_section_right_title')) { ?>
                    <p class="large white"><?php echo get_field('blue_section_right_title'); ?></p>
                <?php } ?>
                <?php if(get_field('blue_section_right_text')) { ?>
                    <p class="white"><?php echo get_field('blue_section_right_text'); ?></p>
                <?php } ?>
                <?php if(get_field('blue_section_right_button_text') && get_field('blue_section_right_button_link')) { ?>
                    <a href="<?php echo get_field('blue_section_right_button_link'); ?>" class="btn-normal btn-normal--green"><?php echo get_field('blue_section_right_button_text'); ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="contact__contact container">
    <div class="contact__find">
        <div class="contact__find-title">
            <?php if(get_field('contact_lower_icon')) { ?>
                <img src="<?php echo get_field('contact_lower_icon')['url']; ?>" alt="Location Pin">
            <?php } ?>
            <?php if(get_field('contact_lower_title')) { ?>
                <h3 class="new-dark-blue"><?php echo get_field('contact_lower_title'); ?></h3>
            <?php } ?>
        </div>
        <div class="contact__contact-details">
            <?php if($otherLocations[$countIndex]['image']) { ?>
                <div class="contact__contact-image">
                    <img src="<?php echo $otherLocations[$countIndex]['image']['url']; ?>" alt="<?php echo $otherLocations[$countIndex]['image']['alt']; ?>">
                </div>
            <?php } ?>
            <?php if($otherLocations[$countIndex]['address']) { ?>
                <div class="contact__contact-address">
                    <p class="name-place">BigChange <?php echo $otherLocations[$countIndex]['location_name']; ?></p>
                    <p><?php echo $otherLocations[$countIndex]['address']; ?></p>
                </div>
            <?php } ?>
            <div class="contact__contact-icon-list contact__contact-icon-list--new">
                <?php if($otherLocations[$countIndex]['email']) { ?>
                    <div class="contact__contact-icon-list-item">
                        <img src="https://www.bigchange.com/wp-content/uploads/2022/02/new-email.svg" alt="Email Icon">
                        <a href="mailto:<?php echo $otherLocations[$countIndex]['email']; ?>"><?php echo $otherLocations[$countIndex]['email']; ?></a>
                    </div>
                <?php } ?>
                <?php if($otherLocations[$countIndex]['phone']) { ?>
                    <div class="contact__contact-icon-list-item">
                        <img src="https://www.bigchange.com/wp-content/uploads/2022/03/phone.svg" alt="Phone icon">
                        <a href="tel:<?php echo $otherLocations[$countIndex]['phone']; ?>"><?php echo $otherLocations[$countIndex]['phone']; ?></a>
                    </div>
                <?php } ?>
                <?php if($otherLocations[$countIndex]['w3w']) { ?>
                    <div class="contact__contact-icon-list-item">
                        <img src="https://www.bigchange.com/wp-content/uploads/2022/02/new-w3w.svg" alt="Location icon">
                        <a target="_blank" href="https://www.<?php echo $otherLocations[$countIndex]['w3w']; ?>"><?php echo $otherLocations[$countIndex]['w3w']; ?></a>
                    </div>
                <?php } ?>
                <?php if($otherLocations[$countIndex]['maps']) { ?>
                    <div class="contact__contact-icon-list-item">
                        <img src="https://www.bigchange.com/wp-content/uploads/2022/03/google.svg" alt="Location icon">
                        <a target="_blank" href="<?php echo $otherLocations[$countIndex]['maps']; ?>">View on Google Maps</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="contact__map">
        <?php if($otherLocations[$countIndex]['contact_lower_map_embed']) { ?>
            <?php echo $otherLocations[$countIndex]['contact_lower_map_embed']; ?>
        <?php } ?>
    </div>
</div>
<?php unset($otherLocations[$countIndex]); ?>
<div class="container">
    <?php if(get_field('other_locations_title')) { ?>
        <h3 class="new-dark-blue line-above line-above--sec-brand"><?php echo get_field('other_locations_title'); ?></h3>
    <?php }
    if($otherLocations) { ?>
        <div class="contact-locations" id="others">
            <?php foreach ($otherLocations as $location) { ?>
                <div class="contact-locations__location location">
                    <div class="location__upper">
                        <img src="<?php echo $location['image']['url']; ?>" alt="<?php echo $location['image']['alt']; ?>">
                    </div>
                    <div class="location__address">
                        <p class="name-place">BigChange <?php echo $location['location_name']; ?></p>
                        <p><?php echo $location['address']; ?></p>
                    </div>
                    <div class="location__icon-list">
                        <?php if($location['email']) { ?>
                            <div class="location__icon-list-item">
                                <img src="https://www.bigchange.com/wp-content/uploads/2022/02/new-email.svg" alt="Email icon">
                                <a href="mailto:<?php echo $location['email']; ?>"><?php echo $location['email']; ?></a>
                            </div>
                        <?php } ?>
                        <?php if($location['phone']) { ?>
                            <div class="location__icon-list-item">
                                <img src="https://www.bigchange.com/wp-content/uploads/2022/03/phone.svg" alt="Phone icon">
                                <a href="tel:<?php echo $location['phone']; ?>"><?php echo $location['phone']; ?></a>
                            </div>
                        <?php } ?>
                        <?php if($location['w3w']) { ?>
                            <div class="location__icon-list-item location__icon-list-item--w3w">
                                <img src="https://www.bigchange.com/wp-content/uploads/2022/02/new-loc.svg" alt="Location icon">
                                <a target="_blank" href="https://www.<?php echo $location['w3w']; ?>"><?php echo $location['w3w']; ?></a>
                            </div>
                        <?php } ?>
                        <?php if($location['maps']) { ?>
                            <div class="location__icon-list-item location__icon-list-item--maps">
                                <img src="https://www.bigchange.com/wp-content/uploads/2022/03/google.svg" alt="Location icon">
                                <a target="_blank" href="<?php echo $location['maps']; ?>">View on Google Maps</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>