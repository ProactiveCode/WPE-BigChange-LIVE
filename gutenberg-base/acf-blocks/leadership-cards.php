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

<div class="leadership-cards">
    <div class="leadership-cards__cards">
        <?php $leadership_cards = get_field('leadership_cards');
        $cardCount = 1;
        foreach ($leadership_cards as $card) { ?>
            <div class="leadership-cards__card <?php if($cardCount == 1) { echo 'leadership-cards__card--first'; } ?>">
                <div class="leadership-cards__image">
                    <?php if($card['episode_page']) { ?>
                        <div class="resp-container">
                            <iframe class="resp-iframe" src="<?php echo $card['youtube_embed_id']; ?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                    <?php } else { ?>
                        <a href="<?php echo $card['link']['url']; ?>" target="<?php echo $card['link']['target']; ?>">
                            <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['url']; ?>">
                        </a>
                    <?php } ?>
                </div>
                <div class="leadership-cards__text-wrapper">
                    <div class="leadership-cards__episode">
                        <p>EPISODE <?php if($card['episode_number_override']) {echo $card['episode_number_override']; } else { echo $cardCount; } ?></p>
                    </div>
                    <div class="leadership-cards__title">
                        <?php if($card['title_h']) {
                            $h = $card['title_h'];
                            echo '<h' . $h . '  class="blue">' . $card['title'] . '</h' . $h . '>';
                        } else { ?>
                            <h4><?php echo $card['title']; ?></h4>
                        <?php } ?>
                    </div>
                    <div class="leadership-cards__date-time">
                        <div class="leadership-cards__date">
                            <p><?php echo $card['date']; ?></p>
                        </div>
                        <div class="leadership-cards__time">
                            <p><?php echo $card['time']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php $cardCount++; } ?>
    </div>
</div>