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

<div class="msbqp container">
    <?php $quotes = get_field('msbqp_quotes');
    foreach ($quotes as $quote) { ?>
        <div class="msbqp__card msbqp__card--upper">
            <div class="msbqp__card-quote">
                <div class="msbqp__intro-quote">
                    <p><?php echo $quote['intro_quote']; ?></p>
                </div>
                <div class="msbqp__quote">
                    <p><?php echo $quote['main_quote']; ?></p>
                </div>
            </div>
            <div class="msbqp__lower">
                <div class="msbqp__accred">
                    <p><?php echo $quote['name']; ?></p>
                    <p><?php echo $quote['job_title']; ?></p>
                </div>
                <div class="msbqp__image">
                    <img src="<?php echo $quote['image']['url']; ?>" alt="<?php echo $quote['image']['alt']; ?>">
                </div>
            </div>
        </div>
    <?php } ?>

    <?php foreach ($quotes as $quote) { ?>
        <div class="msbqp__card msbqp__card--lower">
            <div class="msbqp__lower">
                <div class="msbqp__accred">
                    <p><?php echo $quote['name']; ?></p>
                    <p><?php echo $quote['job_title']; ?></p>
                </div>
                <div class="msbqp__image">
                    <img src="<?php echo $quote['image']['url']; ?>" alt="<?php echo $quote['image']['alt']; ?>">
                </div>
            </div>
        </div>
    <?php } ?>
</div>