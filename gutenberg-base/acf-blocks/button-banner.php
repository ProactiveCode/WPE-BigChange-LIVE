<div class="inner-button-banner <?php if(get_field('bb_padding_larger')) { echo 'inner-button-banner--larger'; } ?>" <?php if(get_field('bb_background_color')) { ?>style="background-color:<?php echo get_field('bb_background_color'); ?>" <?php } ?>>
    <div class="container container--1000">
        <?php if(get_field('bb_text')) { ?>
            <div class="inner-button-banner__text">
                <?php echo get_field('bb_text'); ?>
            </div>
        <?php } ?>
        <?php if(get_field('bb_button_text') && get_field('bb_button_link')) { ?>
            <div class="inner-button-banner__button">
                <a href="<?php echo get_field('bb_button_link'); ?>" class="btn-normal btn-normal--yellow-white <?php if(get_field('demo_link')) { echo 'demo'; } ?>"><?php echo get_field('bb_button_text'); ?></a>
            </div>
        <?php } ?>
    </div>
</div>