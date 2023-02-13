<?php

/**
 * Diamonds 5 in 1 Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="section container container--hidden">
    <div class="diamond-text__wrapper">
        <div class="diamond-text__text">
            <div class="diamond-text__title">
                <?php if(get_field('5_in_1_title_h')) {
                    $h = get_field('5_in_1_title_h');
                    echo '<h' . $h . '>' . get_field('5_in_1_title') . '</h' . $h . '>';
                } else { ?>
                    <h3><?php echo get_field('5_in_1_title'); ?></h3>
                <?php } ?>
            </div>
            <div class="diamond-text__content">
                <?php echo get_field('5_in_1_text'); ?>
            </div>
        </div>
        <div class="diamond-text__diamonds">
            <div class="diamonds-5-in-1">
                <div class="diamond diamond-clickable" data-link="<?php echo get_field('5_in_1_diamond_1_link'); ?>" id="diamond-5-in-1-1">
                    <div class="diamond__wrapper">
                        <div class="diamond__small-text">
                            <p><?php echo get_field('5_in_1_diamond_1_text'); ?></p>
                        </div>
                        <div class="diamond__image">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/5-in-1-speech.svg'; ?>" alt="Speech bubble Icon">
                        </div>
                    </div>
                </div>
                <div class="diamond diamond-clickable" data-link="<?php echo get_field('5_in_1_diamond_2_link'); ?>" id="diamond-5-in-1-2">
                    <div class="diamond__wrapper">
                        <div class="diamond__small-text">
                            <p><?php echo get_field('5_in_1_diamond_2_text'); ?></p>
                        </div>
                        <div class="diamond__image">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/5-in-1-calendar-time.svg'; ?>" alt="Calendar Icon">
                        </div>
                    </div>
                </div>
                <div class="diamond diamond-clickable" data-link="<?php echo get_field('5_in_1_diamond_3_link'); ?>" id="diamond-5-in-1-3">
                    <div class="diamond__wrapper">
                        <div class="diamond__small-text">
                            <p><?php echo get_field('5_in_1_diamond_3_text'); ?></p>
                        </div>
                        <div class="diamond__image">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/5-in-1-pointer.svg'; ?>" alt="Pointer Icon">
                        </div>
                    </div>
                </div>
                <div class="diamond" id="diamond-5-in-1-4">
                    <div class="diamond__wrapper">
                        <div class="diamond__large-text">
                            <p>5 <span><?php echo get_field('5_in_1_diamond_4_in_text'); ?></span> <span class="large">1</span></p>
                        </div>
                    </div>
                </div>
                <div class="diamond diamond-clickable" data-link="<?php echo get_field('5_in_1_diamond_5_link'); ?>" id="diamond-5-in-1-5">
                    <div class="diamond__wrapper">
                        <div class="diamond__small-text">
                            <p><?php echo get_field('5_in_1_diamond_5_text'); ?></p>
                        </div>
                        
                        <div class="diamond__image">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/5-in-1-van.svg'; ?>" alt="Truck Icon">
                        </div>
                    </div>
                </div>
                <div class="diamond" id="diamond-5-in-1-6">
                    <div class="diamond__wrapper">
                        <div class="diamond__small-text">
                            <p><?php echo get_field('5_in_1_diamond_6_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="diamond diamond-clickable" data-link="<?php echo get_field('5_in_1_diamond_7_link'); ?>" id="diamond-5-in-1-7">
                    <div class="diamond__wrapper">
                        <div class="diamond__small-text">
                            <p><?php echo get_field('5_in_1_diamond_7_text'); ?></p>
                        </div>
                        <div class="diamond__image">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/compiled/images/5-in-1-collaboration.svg'; ?>" alt="Collaboration Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>