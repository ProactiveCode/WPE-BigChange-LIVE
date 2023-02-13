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


<div class="quotes-slider <?php if(get_field('blue_background')) { echo 'quotes-slider--blue'; } ?> <?php if(get_field('thin_banner')) { echo 'quotes-slider--small'; } ?> <?php if(get_field('align_content')) { echo 'quotes-slider--max-width'; } ?> <?php if(get_field('background_shape_square')) { echo 'quotes-slider--square'; } ?>  <?php if(get_field('background_shape_transparency')) { echo 'quotes-slider--transparency'; } ?> <?php if(get_field('background_image_fill')) { echo 'quotes-slider--fill-bg'; } ?>  <?php if(get_field('thick_banner')) { echo 'quotes-slider--taller'; } ?> <?php if(get_field('background_image_fill')) { echo 'quotes-slider--fill-bg'; } ?>  <?php if(get_field('background_square_full_width')) { echo 'quotes-slider--square-full'; } ?> <?php if(get_field('bg_square')) { echo 'quotes-slider--bg-square'; } ?> <?php if(get_field('remove_shape_fully')) { echo 'quotes-slider--no-square'; } ?> <?php echo $block['className']; ?>">
    <div class="container container--no-max">
        <?php $quotes = get_field('qs_quotes'); 
            $quotesCount = count($quotes);
        ?>
        <div class="quotes-slider__quotes <?php if($quotesCount > 1) { echo 'owl-carousel'; } ?>">
            
            <?php foreach ($quotes as $quote) { ?>
                <div class="quotes-slider__quote quote">
                    <div class="quote__image <?php if(get_field('mobile_align_right')) { echo 'quote__image--right'; } ?>">
                        <img loading="lazy" src="<?php echo $quote['image']['url']; ?>" alt="<?php echo $quote['image']['alt']; ?>">
                    </div>
                    <div class="quote__square">
                        <div class="quote__square-wrapper">
                            
                        </div>
                    </div>
                    <div class="quote__arrow">
                        <div class="quote__text-wrapper">
                            <?php //if(!$quote['not_a_quote']) { ?>
                                <!-- <div class="quote__quote-image">
                                    <img loading="lazy" src="<?php //if(get_field('blue_background')) { echo get_template_directory_uri() . '/compiled/images/icon-quote-outlined-white.svg'; } else { echo get_template_directory_uri() . '/compiled/images/icon-quote-outlined.svg';} ?>" alt="Quote">
                                </div> -->
                            <?php //} ?>
                            <div class="quote__text <?php if($quote['not_a_quote']) { ?> quote__text--not-quote <?php } ?>">
                                <?php echo $quote['quote']; ?>
                            </div>
                            <?php if($quote['job_title']) { ?>
                                <div class="quote__accred-wrapper">
                                    <div class="quote__job">
                                        <p><?php echo $quote['job_title']; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if($quote['logo']) { ?>
                                <div class="quote__logo">
                                    <img loading="lazy" src="<?php echo $quote['logo']['url']; ?>" alt="<?php echo $quote['logo']['alt']; ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>