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

<?php $items = get_field('items'); 
    $numberItems = get_field('number_items');
    $currentNum = 1;
    if($items) { ?>
    <div class="benefits-block padded-top-bot">
        <div class="benefits-block__title">
            <?php if(get_field('bb_title_h')) {
                $h = get_field('bb_title_h');
                echo '<h' . $h . '>' . get_field('bb_title') . '</h' . $h . '>';
            } else { ?>
                <h3><?php echo get_field('bb_title'); ?></h3>
            <?php } ?>
        </div>
        <div class="benefits-block__wrapper container">
            <?php foreach ($items as $item) { ?>
                <div class="benefits-block__item benefits-block__item--<?php echo $item['item_type']; ?>" style="grid-row-start: <?php echo $item['row_start'] ?>; grid-row-end: <?php echo $item['row_end'] ?>; grid-column-start: <?php echo $item['column_start'] ?>; grid-column-end: <?php echo $item['column_end'] ?>;">
                    <?php if($item['title']) { ?>
                        <div class="benefits-block__content <?php if($numberItems) { ?> benefits-block__content--number <?php } ?>">
                            <?php if($numberItems) { ?> 
                                <div class="benefits-block__number">
                                    <p><?php echo $currentNum; ?>.</p>
                                </div>

                                <?php $currentNum++; ?>
                            <?php } ?>
                            <div class="benefits-block__text-wrapper">
                                <div class="benefits-block__title">
                                    <p><?php echo $item['title'] ?></p>
                                </div>
                                <div class="benefits-block__text">
                                    <p><?php echo $item['text'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if($item['image']) { ?>
                        <img src="<?php echo $item['image']['url']; ?>" alt="" />
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
