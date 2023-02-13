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

<div class="standout-logos container">
    <?php $logos = get_field('standout_logos');
    foreach ($logos as $logo) { ?>
        <div class="standout-logos__logo">
            <img loading="lazy" src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>">
        </div>
    <?php } ?>
</div>