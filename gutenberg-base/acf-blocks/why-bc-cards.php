<?php

/**
 * Why BC Cards Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="why-bc-cards container margin-top-bot-large">
    <?php
        $cards = get_field('why_bc_cards');
        foreach ($cards as $card) { ?>
            <?php if($card['other_layout']) { ?>
                <div class="why-bc-cards__card why-bc-cards__card--other-layout" style="background-image:url('<?php echo $card['image']['url']; ?>')">
                        <div class="why-bc-cards__image">
                            <a href="<?php echo $card['link']['url']; ?>"  target="<?php echo $card['link']['target']; ?>">
                                <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>">
                            </a>
                        </div>
                        <div class="why-bc-cards__content-wrapper">
                            <?php if($card['title']) { ?>
                                <div class="why-bc-cards__title">
                                    <?php if($card['title_h']) {
                                        $h = $card['title_h'];
                                        echo '<h' . $h . '>' . $card['title'] . '</h' . $h . '>';
                                    } else { ?>
                                        <h3><?php echo $card['title']; ?></h3>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php if($card['text']) { ?>
                            <div class="why-bc-cards__text">
                                <p><?php echo $card['text']; ?></p>
                            </div>
                            <?php } ?>
                            <?php if($card['link']) { ?>
                            <div class="why-bc-cards__link">
                                <a href="<?php echo $card['link']['url']; ?>" target="<?php echo $card['link']['target']; ?>"><?php echo $card['link']['title']; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
            <?php } else { ?>
                    <div class="why-bc-cards__card <?php if($card['stand_out']) { echo 'why-bc-cards__card--stand-out'; } ?>">
                        <?php if(!$card['stand_out']) { ?>
                            <div class="why-bc-cards__image">
                                <?php if(str_contains($card['link']['url'], 'http')) { ?> 
                                    <a href="<?php echo $card['link']['url']; ?>"  target="<?php echo $card['link']['target']; ?>">
                                        <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>">
                                    </a>
                                <?php } else {  ?>
                                    <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>">
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="why-bc-cards__content-wrapper">
                            <?php if($card['title']) { ?>
                                <div class="why-bc-cards__title">
                                    <?php if($card['title_h']) {
                                        $h = $card['title_h'];
                                        echo '<h' . $h . '>' . $card['title'] . '</h' . $h . '>';
                                    } else { ?>
                                        <h3><?php echo $card['title']; ?></h3>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php if($card['text']) { ?>
                            <div class="why-bc-cards__text">
                                <p><?php echo $card['text']; ?></p>
                            </div>
                            <?php } ?>
                            <?php if($card['link']) { ?>
                            <div class="why-bc-cards__link">
                                <a href="<?php echo $card['link']['url']; ?>"  target="<?php echo $card['link']['target']; ?>"><?php echo $card['link']['title']; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
            <?php } ?>
        <?php }
    ?>
    
</div>