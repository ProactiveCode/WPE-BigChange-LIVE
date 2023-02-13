<div class="vlq <?php if(get_field('vlq_background_light_blue')) { echo 'vlq--light-blue'; } ?> <?php if(get_field('vlq_hide_bg_image')) { echo 'vlq--hide-bg'; } ?> <?php if(get_field('vlq_background_white')) { echo 'vlq--white'; } ?> <?php if(get_field('vlq_add_video_instead_of_image')) { echo 'vlq--video'; } ?>" <?php if(get_field('vlq_background_image')) { ?> style="background-image:url('<?php echo get_field('vlq_background_image')['url']; ?>');"<?php } ?>>
    <div class="container">
        <div class="vlq__left">
            <?php if(get_field('vlq_foreground_image') && !get_field('vlq_add_video_instead_of_image')) { ?> 
                <div class="vlq__image">
                    <img src="<?php echo get_field('vlq_foreground_image')['url']; ?>" alt="Image of who said the quote">
                </div>
            <?php } else { ?>
                <div class="vlq__video">
                    <iframe class="resp-iframe" src="<?php echo get_field('vlq_youtube_link'); ?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
                </div>
            <?php } ?>
        </div>
        <div class="vlq__right">
            <div class="vlq__quote-top">
                <img src="https://www.bigchange.com/wp-content/uploads/2021/09/quote-light.svg" alt="Quote mark upper">
            </div>
            <?php if(get_field('vlq_quote_text')) { ?>
                <div class="vlq__quote">
                    <?php echo get_field('vlq_quote_text'); ?>
                </div>
            <?php } ?>
            <div class="vlq__lower">
                <?php if(get_field('vlq_accred_text')) { ?>
                    <div class="vlq__accred">
                    <p><?php echo get_field('vlq_accred_text'); ?></p>
                    </div>
                <?php } ?>
                <div class="vlq__quote-lower">
                    <img src="https://www.bigchange.com/wp-content/uploads/2021/09/quote-light.svg" alt="Lower quote mark">
                </div>
            </div>
        </div>
    </div>
</div>