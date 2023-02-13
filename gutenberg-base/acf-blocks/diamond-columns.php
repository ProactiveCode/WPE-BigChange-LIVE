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
<div class="diamond-columns">
        <?php if(get_field('diamond_columns_title_h')) {
            $h = get_field('diamond_columns_title_h');
            echo '<h' . $h . '  class="container new-blue">' . get_field('diamond_columns_title') . '</h' . $h . '>';
        } else { ?>
             <h3 class="container new-blue"><?php echo get_field('diamond_columns_title'); ?></h3>
        <?php } ?>
    <div class="diamond-columns__wrapper container">
        <?php $columns = get_field('diamond_columns');
        foreach ($columns as $column) { ?>
            <div class="diamond-columns__column">
                <p><?php echo $column['text']; ?></p>
            </div>
        <?php } ?>
    </div>
</div>