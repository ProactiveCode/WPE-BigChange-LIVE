<div class="triple padded-top-bot-large">
    <div class="container">
        <div class="triple__title">
            <h3 class="new-dark-blue"><?php echo get_field('tr_title'); ?></h3>
        </div>
        <?php $triples = get_field('tr_reviews');
        if($triples) { ?>
            <div class="triple__wrapper">
                <?php foreach ($triples as $triple) { ?>
                    <div class="triple__triple">
                        <div class="triple__logo">
                            <img src="<?php echo $triple['logo']['url']; ?>" alt="Reviews logo">
                        </div>
                        <div class="triple__rating-wrapper">
                            <div class="triple__rating">
                                <p><?php echo $triple['rating']; ?></p>
                            </div>
                            <div class="triple__stars">
                                <img src="<?php echo $triple['stars']['url']; ?>" alt="Stars rating">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="triple__text">
            <?php echo get_field('tr_text'); ?>
        </div>
    </div>
</div>