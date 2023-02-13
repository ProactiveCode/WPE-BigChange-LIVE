<?php

/**
 * Featured page links Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="container margin-top-bot-large icons-text">
    <?php $links = get_field('links');
    foreach ($links as $link) { ?>

        <?php if($link['link']) { ?>
            <a href="<?php echo $link['link']['url']; ?>" class="icons-text__column">
        <?php } else { ?>
            <div class="icons-text__column">
        <?php } ?>

            <p><?php echo $link['title']; ?></p>
            <figure>
                <img src="<?php echo $link['image']['url']; ?>" alt="<?php echo $link['image']['alt']; ?>">
            </figure>

        <?php if($link['link']) { ?>
            </a>
        <?php } else { ?>
            </div>
        <?php } ?>
    <?php } ?>
</div>