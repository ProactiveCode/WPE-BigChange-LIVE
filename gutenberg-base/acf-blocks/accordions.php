<?php
$accordions = get_field('ac_accordions');

if($accordions) { ?>
    <div class="accordions">
        <div class="container container--1000">
            <?php foreach ($accordions as $accordion) { ?>
                <div class="accordions__item <?php if($accordion['is_this_a_question']) { ?> accordions__item--flex <?php } ?>">
                    <?php if($accordion['is_this_a_question']) { ?>
                        <div class="accordions__q">
                            <p>Q.</p>
                        </div>
                    <?php } ?>
                    <div class="accordions__wrapper">
                        <div class="accordions__upper">
                            <a href="javascript:void();" class="accordions__title"><?php echo $accordion['title']; ?></a>
                        </div>
                        <div class="accordions__lower">
                            <?php echo $accordion['text']; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>