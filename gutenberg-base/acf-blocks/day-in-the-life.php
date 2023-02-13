<?php

/**
 * A Day in the life Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="ditl">
    <div class="ditl__truck"></div>
    <div class="ditl__options">
        <?php $sectors = get_field('sectors'); 
            $sectorCount = 0;
            foreach ($sectors as $sector) { ?>
                <a href="javascript:void(0);" <?php if($sectorCount == 0) { ?> class="active" <?php } ?>><?php echo $sector['sector_name']; ?></a>
            <?php $sectorCount++; }
        ?>
    </div>
    <div class="ditl__overall owl-carousel">
        <?php
            foreach ($sectors as $sector) { ?>
                <div class="ditl__wrapper">
                    <div class="ditl__bar">
                        <div class="ditl__bar-inner">
                        </div>
                    </div>
                    <?php $items = $sector['sector_items']; 
                    foreach ($items as $item) { ?>
                        <div class="ditl__item item">
                            <div class="item__container container">
                                <div class="item__icon">
                                    <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>">
                                </div>
                                <div class="item__content">
                                    <div class="item__text">
                                        <?php echo $item['text']; ?>
                                    </div>
                                </div>
                                <div class="item__image">
                                    <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }
        ?>
    </div>
    
</div>