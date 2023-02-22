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

<div class="updated-events-block">
    <?php $blocks = get_field('ueb_events');
    if($blocks) { ?>
        <div class="container updated-events-block__upper">
            <div class="updated-events-block__category">
                <select name="ueb-cat" id="ueb-cat">
                    <option value="all">All Categories</option>
                    <?php 
                    $currentCats = [];
                    foreach ($blocks as $block) { ?>
                        <?php if($block['category']) { 
                            if (!in_array($block['category']['value'], $currentCats)) { ?>
                                <option value="<?php echo $block['category']['value']; ?>"><?php echo $block['category']['label']; ?></option>
                                <?php array_push($currentCats,  $block['category']['value']); ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="updated-events-block__main-title">
                <h2>Events Calendar</h2>
            </div>
            <div class="updated-events-block__age">
                <select name="ueb-age" id="ueb-age">
                    <option value="new">Newest First</option>
                    <option value="old">Oldest First</option>
                </select>
            </div>
        </div>
        <div class="updated-events-block__events">
        <!-- <div class="updated-events-block__events-info">
                    <h2>Exhibition Lobby</h2>
                    <p>Here are our upcoming events. Join us by signing up to an event and discover how you can be unstoppable with BigChange</p>
                </div> -->

            <div class="updated-events-block__events-container container">
         
                <div class="updated-events-block__events-left">
                    <?php foreach ($blocks as $block) { 
                        date_default_timezone_set('Europe/London');
                        $dtHide = DateTime::createFromFormat("d/m/Y h:i a", $block['hide_date']);
                        $dtCurrent = DateTime::createFromFormat("d/m/Y h:i a", date("d/m/Y h:i a"));
                        $unixHideDate = $dtHide->getTimestamp();
                        $unixCurrentDate = $dtCurrent->getTimestamp();
                        if ($unixHideDate > $unixCurrentDate){?>
                            <?php if($block['full_width_block']) { ?>
                                <div class="updated-events-block__event updated-events-block__event--full <?php if($block['extra_classes']) { echo $block['extra_classes']; } ?>">
                                    <div class="updated-events-block__event-wrapper">
                                        <div class="updated-events-block__event-left">
                                            <?php if($block['logo']) { ?>
                                                <div class="updated-events-block__logo" <?php if($block['logo_width']) { ?> style="max-width: <?php echo $block['logo_width']; ?>" <?php } ?>>
                                                    <img src="<?php echo $block['logo']['url']; ?>" alt="Block event logo">
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="updated-events-block__event-right">
                                            <?php if($block['date']) { ?>
                                                <div class="updated-events-block__date">
                                                    <p><?php echo $block['date']; ?></p>
                                                </div>
                                            <?php } ?>
                                            <?php if($block['title']) { ?>
                                                <div class="updated-events-block__title">
                                                    <p><?php echo $block['title']; ?></p>
                                                </div>
                                            <?php } ?>
                                            <?php if($block['description']) { ?>
                                                <div class="updated-events-block__description">
                                                    <?php echo $block['description']; ?>
                                                </div>
                                            <?php } ?>
                                            <?php if($block['button_text'] && $block['button_link']) { ?>
                                                <div class="updated-events-block__button">
                                                    <a target="_blank" href="<?php echo $block['button_link']; ?>" class="btn-normal btn-normal--yellow"><?php echo $block['button_text']; ?></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="updated-events-block__event <?php if($block['extra_classes']) { echo $block['extra_classes']; } ?>" <?php if($block['category']) { echo 'data-category="' . $block['category']['value'] . '"'; } ?>>
                                    <?php if($block['logo']) { ?>
                                        <!-- <a <?php if($block['button_link'] != 'javascript:void(0);') { ?> target="_blank" <?php } ?> href="<?php echo $block['button_link']; ?>" class="" target="_blank">
                                            <img src="<?php echo $block['logo']['url']; ?>" alt="">
                                        </a> -->
                                        <?php if($block['button_link']) { ?> 
                                            <a <?php if($block['button_link'] != 'javascript:void(0);') { ?> target="_blank" <?php } ?> href="<?php echo $block['button_link']; ?>" class="" target="_blank">
                                                <img src="<?php echo $block['logo']['url']; ?>" alt="">
                                            </a>
                                        <?php } else { ?>
                                            <div>
                                                <img src="<?php echo $block['logo']['url']; ?>" alt="">
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if($block['title']) { ?>
                                        <div class="updated-events-block__title">
                                            <p><?php echo $block['title']; ?></p>
                                        </div>
                                    <?php } ?>
                                    <?php if($block['date']) { ?>
                                        <div class="updated-events-block__date">
                                            <p><?php echo $block['date']; ?></p>
                                        </div>
                                    <?php } ?>
                                    <?php if($block['description']) { ?>
                                        <div class="updated-events-block__description">
                                            <?php echo $block['description']; ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($block['button_text'] && $block['button_link']) { ?>
                                        <div class="updated-events-block__button">
                                            <a <?php if($block['button_link'] != 'javascript:void(0);') { ?> target="_blank" <?php } ?> href="<?php echo $block['button_link']; ?>" class="btn-normal btn-normal--green"><?php echo $block['button_text']; ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="updated-events-block__events-right">
                    <h2>Exhibition Lobby</h2>
                    <p>Here are our upcoming events. Join us by signing up to an event and discover how you can be unstoppable with BigChange.</p>
                </div>
            </div>
        </div>
        <div class="logos owl-carousel">
            <?php foreach ($blocks as $block) { 
            
            
                date_default_timezone_set('Europe/London');
                $dtHide = DateTime::createFromFormat("d/m/Y h:i a", $block['hide_date']);
                $dtCurrent = DateTime::createFromFormat("d/m/Y h:i a", date("d/m/Y h:i a"));
                $unixHideDate = $dtHide->getTimestamp();
                $unixCurrentDate = $dtCurrent->getTimestamp();`
                
                if ($block['logo'] && $unixHideDate > $unixCurrentDate ){ ?>
                
                    <?php if($block['button_link']) { ?> 
                        <a href="<?php echo $block['button_link']; ?>" target="_blank">
                            <img loading="lazy" src="<?php echo $block['logo']['url']; ?>" alt="">
                        </a>
                    <?php } else { ?>
                        <div>
                            <img src="<?php echo $block['logo']['url']; ?>" alt="">
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</div>