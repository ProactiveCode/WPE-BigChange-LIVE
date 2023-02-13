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

<div class="sbq container">
    <div class="sbq__image">
        <img src="<?php echo get_field('sbq_image')['url']; ?>" alt="<?php echo get_field('sbq_image')['alt']; ?>">
    </div>
    <div class="sbq__content">
        <p><?php echo get_field('sbq_quote'); ?></p>
        <img src="<?php echo get_field('sbq_logo')['url']; ?>" alt="<?php echo get_field('sbq_logo')['alt']; ?>">
    </div>
</div>