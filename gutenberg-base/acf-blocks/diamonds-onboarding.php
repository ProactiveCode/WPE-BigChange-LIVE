<?php

/**
 * Diamonds onboarding Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="section container container--no-pad">
    <div class="diamonds-onboarding">
        <div class="diamond" id="diamond-onboarding-1">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('onboarding_diamond_1'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-onboarding-2">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/07/diamonds-image.jpeg" alt="Men looking at a screen">
            </div>
        </div>
        <div class="diamond" id="diamond-onboarding-3">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('onboarding_diamond_2'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-onboarding-4">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('onboarding_diamond_3'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-onboarding-5">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/07/diamonds-image2.jpeg" alt="Woman looking at a tablet">
            </div>
        </div>
        <div class="diamond" id="diamond-onboarding-6">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('onboarding_diamond_5'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-onboarding-7">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('onboarding_diamond_6'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-onboarding-8">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('onboarding_diamond_4'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>