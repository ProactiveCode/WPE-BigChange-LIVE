<?php

/**
 * Newsletter Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="newsletter-images container container--1000">
    
    <?php $images = get_field('newsletter_images');
        foreach ($images as $image) {
            // var_dump($image);
            ?>
            <?php 
            
            $width = $image['width'];
            ?>
            <div class="newsletter-images__single" style="<?php if ($width != '100') { echo 'width: calc(' . $width . '% - 10px);'; } else { echo 'width: 100%;'; }?>">
                <?php if($image['item_type'] == 'video') { ?>
                    <div class="newsletter-images__video">
                        <?php if($image['video_text']) { ?>
                            <div class="newsletter-images__video-text">
                                <p><span class="name-replace"></span>, welcome to our new monthly review</p>
                            </div>
                        <?php } ?>
                        <?php if($image["vimeo_true_false"]) { ?>
                            <iframe class="newsletter-images__vimeo" src="<?php echo $image["vimeo_link"]?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        <?php } else { ?>
                        <div class="newsletter-video"><video id="newsletter-video" preload="metadata" controls="controls" height="auto"><source type="video/mp4" src="<?php echo $image['newsletter_video_embed']; ?>" /><a href="<?php echo $image['newsletter_video_embed']; ?>"><?php echo $image['newsletter_video_embed']; ?></a></video></div>
                        <?php } ?>
                    </div>
                    
                    
                <?php } else { ?>
                    <a href="<?php echo $image['link'];?>" target="_blank">
                        <img src="<?php echo $image['newsletter_single_image']['url'];?>" alt="<?php echo $image['newsletter_single_image']['alt'];?>">
                    </a>
                <?php } ?>
            </div>
    <?php
        }
    ?>
</div>