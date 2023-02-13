<div class="stats bg-blue-almost-grey">
    <div class="stats__inner container padded-top-bot-large">
        <div class="stats__title">
            <h3><?php echo get_field('stats_title'); ?></h3>
        </div>
        <?php $stats = get_field('stats_stats');
        if($stats) { ?>
            <div class="stats__stats">
                <?php foreach ($stats as $stat) { ?>
                    <div class="stats__stat stat stat--<?php echo $stat['colour']; ?>">
                        <div class="stat__stat-wrapper">
                            <div class="stat__number line-above line-above--sec-brand">
                                <p><?php echo $stat['stat_number']; ?></p>
                            </div>
                            <div class="stat__description">
                                <p><?php echo $stat['stat_description']; ?></p>
                            </div>
                        </div>
                        <div class="stat__image">
                            <img loading="lazy" src="<?php echo $stat['image']['url']; ?>" alt="<?php echo $stat['image']['alt']; ?>">
                        </div>
                        <div class="stat__company">
                            <p><?php echo $stat['company_name']; ?></p>
                        </div>
                        <div class="stat__quote-icon">
                            <img loading="lazy" src="https://www.bigchange.com/wp-content/uploads/2021/09/quote-<?php echo $stat['colour']; ?>.svg" alt="Quote icon">
                        </div>
                        <div class="stat__quote">
                            <p><?php echo $stat['quote']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if(!get_field('hide_button')) { ?>
            <div class="stats__button">
                <a href="javascript:void(0);" class="btn-normal btn-normal--yellow btn-normal--large demo">Get Demo</a>
            </div>
        <?php } ?>
    </div>
</div>