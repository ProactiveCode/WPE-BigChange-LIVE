<div class="awards container padded-top-bot">
    <?php if(get_field('aw_title')) { ?>
        <div class="awards__title">
            <p><?php echo get_field('aw_title'); ?></p>
        </div>
    <?php } ?>
    <?php $awards = get_field('aw_awards'); 
     if($awards) { ?>
        <div class="awards__awards">
            <?php foreach ($awards as $award) { ?>
                <div class="awards__award">
                    <img src="<?php echo $award['image']['url']; ?>" alt="Company awarded logo">
                </div>
           <?php } ?>
        </div>
    <?php } ?>
</div>