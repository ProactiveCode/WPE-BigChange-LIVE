<?php

/**
 * Mission Diamonds Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="section container container--no-pad">
    <div class="diamonds-mission">
        <div class="diamond" id="diamond-mission-1">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_1_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('mission_diamond_1_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-mission-2">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/06/hand.svg" alt="Big on inclusion">
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_2_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('mission_diamond_2_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-mission-3">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/06/globe.svg" alt="Big on sustainability">
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_3_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('mission_diamond_3_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-mission-4">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/06/rocket.svg" alt="Big on energy">
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_4_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('mission_diamond_4_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-mission-5">
            <div class="diamond__wrapper">
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_5_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('mission_diamond_5_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-mission-6">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/06/weights.svg" alt="Big on change">
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_6_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('mission_diamond_6_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-mission-7">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/06/scales.svg" alt="Big on ethics">
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_7_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('mission_diamond_7_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-mission-8">
            <div class="diamond__wrapper">
                <!--<img src="https://via.placeholder.com/100" alt="icon">-->
                <div class="diamond__med-text">
                    <p><?php echo get_field('mission_diamond_8_large'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>