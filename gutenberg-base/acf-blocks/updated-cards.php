<div class="updated-cards" <?php if(get_field('uc_background_colour')) { echo 'style="background-color: ' . get_field('uc_background_colour') . ';"'; } ?>>
    <?php $updated = get_field('uc_cards');

    if($updated) { ?>
        <div class="updated-cards__wrapper container">
            <?php foreach ($updated as $item) { ?>
                <?php if($item['leadership_card']) { ?>
                    <div class="updated-cards__card updated-cards__card--leader">
                        <?php if($item['image']) { ?>
                        <div class="updated-cards__image">
                            <img width="120" height="127" src="<?php echo $item['image']['url']; ?>" alt="Icon Image">
                        </div>
                        <?php } ?>
                        <?php if($item['main_title']) { ?>
                        <div class="updated-cards__title">
                            <h3><?php echo $item['main_title']; ?></h3>
                        </div>
                        <?php } ?>
                        <?php if($item['upper_title']) { ?>
                        <div class="updated-cards__upper-title">
                            <p><?php echo $item['upper_title']; ?></p>
                        </div>
                        <?php } ?>
                        <?php if($item['descriptive_text']) { ?>
                        <div class="updated-cards__desc">
                            <?php echo $item['descriptive_text']; ?>
                        </div>
                        <?php } ?>
                        <?php if($item['button_text'] && $item['button_link']) { ?>
                        <div class="updated-cards__button">
                            <a href="<?php echo $item['button_link']; ?>" class="btn-normal btn-normal--green"><?php echo $item['button_text']; ?></a>
                        </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="updated-cards__card <?php if($item['make_bg_white']) { echo 'updated-cards__card--white'; } ?> <?php if($item['make_image_smaller']) { echo 'updated-cards__card--smaller'; } ?> <?php if($item['2022_home_card']) { echo 'updated-cards__card--home'; } ?>">
                        <?php if($item['upper_title']) { ?>
                        <div class="updated-cards__upper-title">
                            <p><?php echo $item['upper_title']; ?></p>
                        </div>
                        <?php } ?>
                        <?php if($item['image']) { ?>
                        <div class="updated-cards__image">
                            <img width="120" height="127" src="<?php echo $item['image']['url']; ?>" alt="Icon Image">
                        </div>
                        <?php } ?>
                        <?php if($item['main_title']) { ?>
                        <div class="updated-cards__title">
                            <h3><?php echo $item['main_title']; ?></h3>
                        </div>
                        <?php } ?>
                        <?php if($item['descriptive_text']) { ?>
                        <div class="updated-cards__desc">
                            <?php echo $item['descriptive_text']; ?>
                        </div>
                        <?php } ?>
                        <?php if($item['button_text'] && $item['button_link']) { ?>
                        <div class="updated-cards__button">
                            <a href="<?php echo $item['button_link']; ?>" class="btn-normal <?php if($item['2022_home_card']) { ?> btn-normal--yellow <?php } else { ?>btn-normal--green<?php } ?>"><?php echo $item['button_text']; ?></a>
                        </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</div>