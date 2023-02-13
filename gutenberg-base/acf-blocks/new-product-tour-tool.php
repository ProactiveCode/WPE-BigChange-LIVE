<?php

/**
 * Product tour table Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if(get_field('nptt_blue_bg')) { echo '<div class="bg-light-blue">'; } ?>
<div class="container padded-top-bot margin-btm-20">
    <div class="ptt-tool">
        <div class="ptt-tool__left">
            <?php $lefts = get_field('nptt_left_items');
            foreach ($lefts as $left) { ?>
                <a href="<?php echo $left['link']; ?>" data-link="<?php echo $left['link']; ?>" data-image="<?php echo $left['image']['url']; ?>" class="ptt-tool__item" data-icon="<?php echo $left['icon']['url']; ?>"  data-hover-image="<?php echo $left['hover_icon']['url']; ?>">
                    <div class="ptt-tool__item-text">
                        <p><?php echo $left['text']; ?></p>
                    </div>
                    <div class="ptt-tool__item-icon">
                        <img src="<?php echo $left['icon']['url']; ?>" alt="<?php echo $left['icon']['alt']; ?>">
                    </div>
                </a>
            <?php } ?>
        </div>
        <div class="ptt-tool__center">
            <div class="ptt-tool__title">
                <?php if(get_field('nptt_main_h')) {
                    $h = get_field('nptt_main_h');
                    echo '<h' . $h . '>' . get_field('nptt_main_title') . '</h' . $h . '>';
                } else { ?>
                    <h3><?php echo get_field('nptt_main_title'); ?></h3>
                <?php } ?>
            </div>
            <div class="ptt-tool__text">
                <p><?php echo get_field('nptt_main_text'); ?></p>
            </div>
            <div class="ptt-tool__image" data-original-image="<?php echo get_field('nptt_main_image')['url']; ?>">
                <img src="<?php echo get_field('nptt_main_image')['url']; ?>" alt="<?php echo get_field('nptt_main_image')['alt']; ?>">
            </div>
            <div class="ptt-tool__button">
                <a href="#" class="btn-normal btn-normal--yellow">Find out more</a>
            </div>
        </div>
        <div class="ptt-tool__right">
            <?php $rights = get_field('nptt_right_items');
            foreach ($rights as $right) { ?>
                <a href="<?php echo $right['link']; ?>" data-link="<?php echo $right['link']; ?>" data-image="<?php echo $right['image']['url']; ?>" class="ptt-tool__item" data-icon="<?php echo $right['icon']['url']; ?>"  data-hover-image="<?php echo $right['hover_icon']['url']; ?>">
                    <div class="ptt-tool__item-text">
                        <p><?php echo $right['text']; ?></p>
                    </div>
                    <div class="ptt-tool__item-icon">
                        <img src="<?php echo $right['icon']['url']; ?>" alt="<?php echo $right['icon']['alt']; ?>">
                    </div>
                </a>
            <?php } ?>
        </div>

        <div class="ptt-tool__mobile">
            <?php foreach ($lefts as $left) { ?>
                <a href="javascript:void(0);" data-link="<?php echo $left['link']; ?>" data-image="<?php echo $left['image']['url']; ?>" class="ptt-tool__mobile-item">
                    <div class="ptt-tool__mobile-item-icon">
                        <img src="<?php echo $left['icon']['url']; ?>" alt="<?php echo $left['icon']['alt']; ?>">
                    </div>
                    <div class="ptt-tool__mobile-item-text">
                        <p><?php if($left['mobile_name']) { echo $left['mobile_name']; } else { echo $left['text']; } ?></p>
                    </div>
                </a>
            <?php } ?>
            <?php foreach ($rights as $right) { ?>
                <a href="javascript:void(0);" data-link="<?php echo $right['link']; ?>" data-image="<?php echo $right['image']['url']; ?>" class="ptt-tool__mobile-item">
                    <div class="ptt-tool__mobile-item-icon">
                        <img src="<?php echo $right['icon']['url']; ?>" alt="<?php echo $right['icon']['alt']; ?>">
                    </div>
                    <div class="ptt-tool__mobile-item-text">
                        <p><?php if($right['mobile_name']) { echo $right['mobile_name']; } else { echo $right['text']; } ?></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
<?php if(get_field('nptt_blue_bg')) { echo '</div>'; } ?>