<div class="business-stats bg-blue-almost-grey">
    <div class="container">
        <?php if(get_field('bs_title')) { ?>
            <div class="business-stats__title">
                <p><?php echo get_field('bs_title'); ?></p>
            </div>
        <?php } ?>
        <?php $bs = get_field('bs_business_stats'); 
        if($bs) { ?>
            <div class="business-stats__stats">
                <?php foreach ($bs as $stat) { ?>
                    <div class="business-stats__stat">
                        <?php if($stat['logo']) { ?>
                            <div class="business-stats__logo">
                                <img src="<?php echo $stat['logo']['url']; ?>" alt="Company Logo">
                            </div>
                        <?php } ?>
                        <?php if($stat['stat_text']) { ?>
                            <div class="business-stats__stat-text business-stats__stat-text--<?php echo $stat['stat_colour']; ?>  line-above line-above--sec-brand">
                                <p><?php echo $stat['stat_text']; ?></p>
                            </div>
                        <?php } ?>
                        <?php if($stat['stat_desc']) { ?>
                            <div class="business-stats__stat-desc">
                                <?php echo $stat['stat_desc']; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if(get_field('bs_below')) { ?>
            <div class="business-stats__lower">
                <?php echo get_field('bs_below'); ?>
            </div>
        <?php } ?>
    </div>
</div>