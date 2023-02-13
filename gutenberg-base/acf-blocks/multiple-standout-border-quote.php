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

<div class="msbq container">
    <?php $quotes = get_field('msbq_quotes');
    foreach ($quotes as $quote) { ?>
        <div class="msbq__card">
            <p><?php echo $quote['quote']; ?></p>
            <img loading="lazy" src="<?php echo $quote['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>">
        </div>
    <?php } ?>
</div>