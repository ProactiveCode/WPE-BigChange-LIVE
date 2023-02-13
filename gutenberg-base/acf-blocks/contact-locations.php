<?php

/**
 * Rotating Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="container">
    <div class="contact-locations">
    <?php $locations = get_field('contact_locations');
    foreach ($locations as $location) { ?>
        <div class="contact-locations__location location">
            <div class="location__upper">
                <img src="<?php echo $location['image']['url']; ?>" alt="<?php echo $location['image']['alt']; ?>">
                <?php if($location['is_partner']) { ?>
                    <div class="location__partner">
                        <p>Partner</p>
                        <img src="https://www.bigchange.com/wp-content/uploads/2021/07/partners-10.svg" alt="Handshake icon">
                    </div>
                <?php } ?>
            </div>
            <div class="location__title">
                <?php if($location['title_h']) {
                    $h = $location['title_h'];
                    echo '<h' . $h . '  class="blue">' . $location['location_name'] . '</h' . $h . '>';
                } else { ?>
                    <h3 class="blue"><?php echo $location['location_name']; ?></h3>
                <?php } ?>
            </div>
            <div class="location__address">
                <p class="name-place">BigChange <?php echo $location['location_name']; ?></p>
                <p><?php echo $location['address']; ?></p>
            </div>
            <div class="location__icon-list">
                <div class="location__icon-list-item">
                    <img src="https://www.bigchange.com/wp-content/uploads/2021/07/card-email-10.svg" alt="Email icon">
                    <a href="mailto:<?php echo $location['email']; ?>"><?php echo $location['email']; ?></a>
                </div>
                <div class="location__icon-list-item">
                    <img src="https://www.bigchange.com/wp-content/uploads/2021/07/card-phone-10.svg" alt="Phone icon">
                    <a href="tel:<?php echo $location['phone']; ?>"><?php echo $location['phone']; ?></a>
                </div>
                <div class="location__icon-list-item location__icon-list-item--maps">
                    <img src="https://www.bigchange.com/wp-content/uploads/2021/07/card-location-10.svg" alt="Location icon">
                    <a href="<?php echo $location['maps']; ?>">View on Google Maps</a>
                </div>
            </div>
            <!--<div class="location__link">
                <a href="<php echo $location['link']; ?>"><php echo $location['link_text']; ></a>
            </div>--> 
        </div>
    <?php } ?>
    </div>
</div>