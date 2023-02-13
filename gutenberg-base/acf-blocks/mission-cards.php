<div class="mission-cards padded-top-bot-large">
<?php $missions = get_field('mission_cards');

if($missions) { ?>
    <div class="mission-cards__wrapper container container--1100">
        <?php foreach ($missions as $item) { ?>
            <div class="mission-cards__card <?php if($item['card_type']) { ?> mission-cards__card--only-text <?php } ?>">
                <?php if($item['image']) { ?>
                <div class="mission-cards__image">
                    <img src="<?php echo $item['image']['url']; ?>" alt="Icon Image">
                </div>
                <?php } ?>
                <?php if($item['title']) { ?>
                <div class="mission-cards__title">
                    <h3><?php echo $item['title']; ?></h3>
                </div>
                <?php } ?>
                <?php if($item['subtitle']) { ?>
                <div class="mission-cards__upper-title">
                    <p><?php echo $item['subtitle']; ?></p>
                </div>
                <?php } ?>
                <?php if($item['text']) { ?>
                <div class="mission-cards__desc">
                    <?php echo $item['text']; ?>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
<?php } ?>
</div>