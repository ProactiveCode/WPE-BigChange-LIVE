<?php

/**
 * Image Text List Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="image-text-list">
    <div class="image-text-list__image">
        <img loading="lazy" src="<?php echo get_field('itl_image')['url']; ?>" alt="<?php echo get_field('itl_image')['alt']; ?>">
    </div>
    <div class="image-text-list__content">
        <div class="image-text-list__title">
            <p><?php echo get_field('itl_title'); ?></p>
        </div>
        <div class="image-text-list__text">
            <p><?php echo get_field('itl_text'); ?></p>
        </div>
    </div>
</div>