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

<div class="side-by-side">
    <div class="container">
        <div class="side-by-side__main-title">
            <?php if(get_field('sbs_title_h')) {
                $h = get_field('sbs_title_h');
                echo '<h' . $h . '>' . get_field('sbs_title') . '</h' . $h . '>';
            } else { ?>
                 <h3><?php echo get_field('sbs_title'); ?></h3>
            <?php } ?>
        </div>
        <div class="side-by-side__wrapper">
            <?php $sidebysides = get_field('side_by_side');
            foreach ($sidebysides as $side) { ?>
                <div class="side-by-side__item">
                    <div class="side-by-side__icon">
                        <img src="<?php echo $side['icon']['url']; ?>" alt="<?php echo $side['icon']['alt']; ?>">
                    </div>
                    <div class="side-by-side__content">
                        <div class="side-by-side__title">
                            <h5><?php echo $side['title']; ?></h5>
                        </div>
                        <div class="side-by-side__text">
                            <p><?php echo $side['text']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
