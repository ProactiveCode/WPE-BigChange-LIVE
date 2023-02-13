<?php

/**
 * Diamonds Culture Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="section container container--no-pad">
    <div class="diamonds-culture">
        <div class="diamond" id="diamond-culture-1">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/01/FIVEpillars-02.svg" alt="Big on innovation">
                <div class="diamond__med-text">
                    <p><?php echo get_field('culture_diamond_1_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('culture_diamond_1_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-culture-2">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/01/FIVEpillars-03.svg" alt="Big on determination">
                <div class="diamond__med-text">
                    <p><?php echo get_field('culture_diamond_2_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('culture_diamond_2_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-culture-3">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/01/FIVEpillars-01.svg" alt="Big on services">
                <div class="diamond__med-text">
                    <p><?php echo get_field('culture_diamond_3_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('culture_diamond_3_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-culture-4">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/01/FIVEpillars-04.svg" alt="Big on dynamic">
                <div class="diamond__med-text">
                    <p><?php echo get_field('culture_diamond_4_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('culture_diamond_4_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-culture-5">
            <div class="diamond__wrapper">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/01/FIVEpillars-05.svg" alt="Big on difference">
                <div class="diamond__med-text">
                    <p><?php echo get_field('culture_diamond_5_large'); ?></p>
                </div>
                <div class="diamond__small-text">
                    <p><?php echo get_field('culture_diamond_5_small'); ?></p>
                </div>
            </div>
        </div>
        <div class="diamond" id="diamond-culture-6">
            <div class="diamond__wrapper">
                <!--<img src="https://via.placeholder.com/100" alt="icon">-->
                <div class="diamond__med-text">
                    <p><?php echo get_field('culture_diamond_6'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>