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

<div class="new-features container">
    <?php $features = get_field('new_features');
    foreach ($features as $feature) { ?>
        <div class="new-features__card">
            <div class="new-features__image">
                <a href="<?php echo $feature['link']['url']; ?>" target="<?php echo $feature['link']['target']; ?>">
                    <img src="<?php echo $feature['image']['url']; ?>" alt="<?php echo $feature['image']['alt']; ?>">
                </a>
            </div>
            <div class="new-features__date">
                <p><?php echo $feature['date']; ?></p>
            </div>
            <div class="new-features__title">
            <?php if($feature['title_h']) {
                $h = $feature['title_h'];
                echo '<h' . $h . '  class="new-blue">' . $feature['title'] . '</h' . $h . '>';
            } else { ?>
                <h4 class="new-blue"><?php echo $feature['title']; ?></h4>
            <?php } ?>
            </div>
            <div class="new-features__text">
                <?php echo $feature['text']; ?>
            </div>
            <div class="new-features__link">
                <a href="<?php echo $feature['link']['url']; ?>"  target="<?php echo $feature['link']['target']; ?>"><?php echo $feature['link']['title']; ?></a>
            </div>
        </div>
    <?php } ?>
</div>