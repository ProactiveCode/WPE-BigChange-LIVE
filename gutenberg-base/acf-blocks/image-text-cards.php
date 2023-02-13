<?php

/**
 * Image Text Cards Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php $cards = get_field('cards'); 
    if($cards) { ?>
    <div class="image-text-cards container <?php if(get_field('container_size')) { echo get_field('container_size'); } ?> image-text-cards--<?php echo get_field('number_across'); ?>">
        <?php foreach ($cards as $card) { ?>
            <div class="image-text-cards__card <?php if($card['full_width_image']) { echo 'image-text-cards__card--full'; } ?> <?php if($card['link']) { echo 'image-text-cards__card--link'; } ?> <?php if($card['blue_bg']) { echo 'image-text-cards--blue-bg'; } ?>">
                <div class="image-text-cards__wrapper">
                    <?php if($card['link']) { ?>
                        <div class="image-text-cards__image">
                            <a href="<?php echo $card['link']['url']; ?>">
                                <img loading="lazy" src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>">
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="image-text-cards__image">
                            <img loading="lazy" src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>">
                        </div>
                    <?php } ?>
                    <div class="image-text-cards__content <?php if($card['align_left']) { echo 'image-text-cards__content--left'; } ?>">
                        <div class="image-text-cards__title">
                            <?php if($card['blue_title'] || $card['blue_title_h5']) { ?>
                                <?php if($card['link']) { ?>
                                    <a href="<?php echo $card['link']['url']; ?>">
                                <?php } ?>
                                <?php if($card['blue_title_h5']) { ?>
                                    <h5 class="new-blue"><?php echo $card['title']; ?></h5>
                                <?php } else { ?>
                                    <h4 class="new-blue"><?php echo $card['title']; ?></h4>
                                <?php } ?>
                                <?php if($card['link']) { ?>
                                    </a>
                                <?php } ?>
                            <?php } else { ?>
                                <p><?php echo $card['title']; ?></p>
                            <?php } ?>
                        </div>
                        <div class="image-text-cards__text">
                            <p><?php echo $card['text']; ?></p>
                        </div>
                        <?php if($card['link']) { ?>
                            <div class="image-text-cards__link">
                                <a href="<?php echo $card['link']['url']; ?>"><?php echo $card['link']['title']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>