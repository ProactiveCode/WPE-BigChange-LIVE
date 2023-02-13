<?php

/**
 * Diamonds Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="section container container--hidden  container--no-pad">
    <div class="diamonds">
        <div class="diamond" id="diamond-1">
            <div class="diamond__wrapper">
                <div class="diamond__large-text">
                    <p>10<span class="mobile-only">%</span></p>
                </div>
                <div class="diamond__med-text">
                    <p>%</p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_1'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/fuel.svg'; ?>" alt="Fuel Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-2">
            <div class="diamond__wrapper">
                <div class="diamond__large-text">
                    <p>0</p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_2'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/thumb.svg'; ?>" alt="Thumb Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-3">
            <div class="diamond__wrapper">
                <div class="diamond__large-text">
                    <p>8</p>
                </div>
                <div class="diamond__med-text">
                    <p><?php echo get_field('diamond_3_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_3_smaller'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/time.svg'; ?>" alt="Time Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-4">
            <div class="diamond__wrapper">
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_4_smaller'); ?></p>
                </div>
                <div class="diamond__large-text diamond__large-text--reversed">
                    <p><?php echo get_field('diamond_4_large'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/download.svg'; ?>" alt="Download Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-5">
            <div class="diamond__wrapper">
                <div class="diamond__large-text">
                    <p>4</p>
                </div>
                <div class="diamond__med-text">
                    <p><?php echo get_field('diamond_5_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_5_smaller'); ?></p>
                </div>
                
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/jobs.svg'; ?>" alt="Jobs Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-6">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('diamond_6_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_6_smaller'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/first-aid.svg'; ?>" alt="First aid Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-7">
            <div class="diamond__wrapper">
                <div class="diamond__large-text">
                    <p>10</p>
                </div>
                <div class="diamond__med-text">
                    <p><?php echo get_field('diamond_7_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_7_smaller'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/time-arrow.svg'; ?>" alt="Time arrow Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-8">
            <div class="diamond__wrapper">
                <div class="diamond__small-text">
                    <p><?php echo get_field('diamond_8_smaller'); ?></p>
                </div>
                <div class="diamond__med-text">
                    <p><?php echo get_field('diamond_8_large'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/heart.svg'; ?>" alt="Heart Icon">
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-9">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('diamond_9'); ?></p>
                </div>
                <div class="diamond__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/graph.svg'; ?>" alt="Graph Icon">
                </div>
            </div>
        </div>
    </div>
</div>