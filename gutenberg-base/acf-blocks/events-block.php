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

<div class="container events-block">
    <?php $blocks = get_field('events_blocks');
    foreach ($blocks as $block) { 
        date_default_timezone_set('Europe/London');
        if (isset($block['hide_date'])) {
            $dtHide = DateTime::createFromFormat("d/m/Y h:i a", $block['hide_date']);
            $dtCurrent = DateTime::createFromFormat("d/m/Y h:i a", date("d/m/Y h:i a"));
            $unixHideDate = $dtHide->getTimestamp();
            $unixCurrentDate = $dtCurrent->getTimestamp();
            if ($unixHideDate > $unixCurrentDate){?>
                <div class="events-block__block-title">
                    <h2><?php echo $block['block_title']; ?></h2>
                </div>
                <div class="events-block__events">
                    <?php $blockEvents = $block['events'];
                    $blockCount = 0;
                    foreach ($blockEvents as $blockEvent) { ?>
                        <div class="events-block__event">
                            <div class="events-block__image">
                                <img src="<?php echo $blockEvent['image']['url']; ?>" alt="<?php echo $blockEvent['image']['alt']; ?>">
                                <?php if($blockEvent['add_corner_text'] && $blockEvent['corner_text']) { ?>
                                    <div class="events-block__corner">
                                        <p><?php echo $blockEvent['corner_text']; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="events-block__content">
                                <div class="events-block__category">
                                    <h3><?php echo $blockEvent['event_category']; ?></h3>
                                </div>
                                <div class="events-block__title">
                                    <?php $hosts = $blockEvent['hosts'];
                                    foreach ($hosts as $host) { ?>
                                        <p><?php echo $host['name']; ?></p>
                                        <p class="last"><span><?php echo $host['title'];?></span></p>
                                    <?php } ?>
                                </div>
                                <div class="events-block__datetime">
                                    <p><?php echo $blockEvent['event_datetime']; ?></p>
                                </div>
                                <div class="events-block__description">
                                    <?php echo $blockEvent['event_description']; ?>
                                </div>
                                <div class="events-block__link">
                                    <a class="btn-normal btn-normal--yellow" href="<?php echo $blockEvent['event_link']['url']; ?>" target="<?php echo $blockEvent['event_link']['target']; ?>"><?php echo $blockEvent['event_link']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php $blockCount++; } ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>