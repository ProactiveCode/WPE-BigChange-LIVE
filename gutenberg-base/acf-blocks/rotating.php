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

<div class="logos owl-carousel container">
    <?php $logos = get_field('logos');
    foreach ($logos as $logo) { 
        if ($logo['logo']){?>
            <img loading="lazy" src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>">
        <?php } 
    }?>
</div>
<?php $logosseconds = get_field('second_logos_banner');
if($logosseconds) {?>
    <div class="logos-second owl-carousel container">
        <?php foreach ($logosseconds as $logossecond) { 
            if ($logossecond['logo']){?>
                <img loading="lazy" src="<?php echo $logossecond['logo']['url']; ?>" alt="<?php echo $logossecond['logo']['alt']; ?>">
            <?php } ?>
        <?php } ?>
    </div>
<?php } ?>