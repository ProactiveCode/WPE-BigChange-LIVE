<?php 
    $cookie_name = "IPgeoRegion";
    $cookiecol1 = 'pricing_item_1_price';
    $cookiecol2 = 'pricing_item_2_price';
    $cookiecol3 = 'pricing_item_3_price';
    if(isset($_COOKIE[$cookie_name])) {
        if($_COOKIE[$cookie_name] !== 'uk') { 
            $cookiecol1 = 'pricing_item_1_price_' . $_COOKIE[$cookie_name];
            $cookiecol2 = 'pricing_item_2_price_' . $_COOKIE[$cookie_name];
            $cookiecol3 = 'pricing_item_3_price_' . $_COOKIE[$cookie_name];
        }
    } 
    $colCount = 0;
    if (get_field($cookiecol1) !== ""){
        $colCount++;
    }
    if (get_field($cookiecol2) !== ""){
        $colCount++;
    }
    if (get_field($cookiecol3) !== ""){
        $colCount++;
    }?>


<div class="pricing-features container">
    <div class="pricing-features__wrapper">
        <div class="pricing-features__left">

        </div>
        <?php if (get_field($cookiecol1) !== "") {?>
            <div class="pricing-features__right-1 <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                <div class="pricing-features__title">
                    <p><?php echo get_field('pricing_item_1_title'); ?></p>
                </div>
                <div class="pricing-features__price">
                    <p><?php echo get_field($cookiecol1); ?></p>
                </div>
                <div class="pricing-features__price-desc">
                    <p><?php echo get_field('pricing_item_1_desc'); ?></p>
                </div>
                <div class="pricing-features__extra">
                    <p><?php echo get_field('pricing_item_1_extra'); ?></p>
                </div>
            </div>
        <?php } ?>
        <?php if (get_field($cookiecol2) !== "") {?>
            <div class="pricing-features__right-2 <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                <div class="pricing-features__title">
                    <p><?php echo get_field('pricing_item_2_title'); ?></p>
                </div>
                <div class="pricing-features__price">
                    <p><?php echo get_field($cookiecol2); ?></p>
                </div>
                <div class="pricing-features__price-desc">
                    <p><?php echo get_field('pricing_item_2_desc'); ?></p>
                </div>
                <div class="pricing-features__extra">
                    <p><?php echo get_field('pricing_item_2_extra'); ?></p>
                </div>
            </div>
        <?php } ?>
        <?php if (get_field($cookiecol3) !== "") {?>
            <div class="pricing-features__right-3 <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                <div class="pricing-features__title">
                    <p><?php echo get_field('pricing_item_3_title'); ?></p>
                </div>
                <div class="pricing-features__price">
                    <p><?php echo get_field($cookiecol3); ?></p>
                </div>
                <div class="pricing-features__price-desc">
                    <p><?php echo get_field('pricing_item_3_desc'); ?></p>
                </div>
                <div class="pricing-features__extra">
                    <p><?php echo get_field('pricing_item_3_extra'); ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    
    <?php $features = get_field('pricing_content');

    if($features) { ?>
        <div class="pricing-features__wrapper pricing-features__wrapper--lower">
            <?php $featureCount = 0; foreach ($features as $feature) { ?>
                <div class="pricing-features__left">
                    <div class="pricing-features__left-title">
                        <p><?php echo $feature['title']; ?></p>
                    </div>
                    <?php $featureItems = $feature['list_items']; 
                    
                    if($featureItems) { ?>
                        <div class="pricing-features__list">
                            <?php foreach ($featureItems as $item) { ?>
                                <div class="pricing-features__list-item">
                                    <a href="javascript:void(0);" class="pricing-features__list-item-title <?php if($item['description']) { echo 'pricing-features__list-item-title--has-desc'; } ?>">
                                        <img src="https://www.bigchange.com/wp-content/uploads/2022/03/circle.svg" alt="Blue bullet point">
                                        <p><?php echo $item['title']; ?></p>
                                    </a>
                                    <?php if($item['description']) { ?>
                                        <div class="pricing-features__list-item-desc">
                                            <p><?php echo $item['description']; ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if (get_field($cookiecol1) !== "") {?>
                    <div class="pricing-features__right-1 <?php if($featureCount == 0) { echo 'hide-before'; } ?>  <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                        <?php if($featureItems) { ?>
                            <?php foreach ($featureItems as $item) { ?>
                                <div class="pricing-features__tick-cross">
                                    <img src="<?php if($item['item_1_includes']) { echo 'https://www.bigchange.com/wp-content/uploads/2022/03/tick.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2022/03/cross.svg'; } ?>" alt="<?php if($item['item_1_includes']) { echo 'Tick icon'; } else { echo 'Cross Icon'; } ?>">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if (get_field($cookiecol2) !== "") {?>
                    <div class="pricing-features__right-2 <?php if($featureCount == 0) { echo 'hide-before'; } ?>  <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                        <?php if($featureItems) { ?>
                            <?php foreach ($featureItems as $item) { ?>
                                <div class="pricing-features__tick-cross">
                                    <img src="<?php if($item['item_2_includes']) { echo 'https://www.bigchange.com/wp-content/uploads/2022/03/tick.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2022/03/cross.svg'; } ?>" alt="<?php if($item['item_2_includes']) { echo 'Tick icon'; } else { echo 'Cross Icon'; } ?>">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if (get_field($cookiecol3) !== "") {?>
                    <div class="pricing-features__right-3 <?php if($featureCount == 0) { echo 'hide-before'; } ?>  <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                        <?php if($featureItems) { ?>
                            <?php foreach ($featureItems as $item) { ?>
                                <div class="pricing-features__tick-cross">
                                    <img src="<?php if($item['item_3_includes']) { echo 'https://www.bigchange.com/wp-content/uploads/2022/03/tick.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2022/03/cross.svg'; } ?>" alt="<?php if($item['item_3_includes']) { echo 'Tick icon'; } else { echo 'Cross Icon'; } ?>">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php $featureCount++; } ?>
        </div>
    <?php } ?>
    <div class="pricing-features__wrapper">
        <div class="pricing-features__left">

        </div>
        <?php if (get_field($cookiecol1) !== "") {?>
            <div class="pricing-features__right-1 <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                <div class="pricing-features__buttons">
                    <?php $link1 = get_field('pricing_item_1_button_link');
                    if($link1 == 'pricing-btn') {
                        $link1 = 'javascript:void(0);';
                    } ?>

                    <a href="<?php echo $link1; ?>" class="btn-normal btn-normal--yellow <?php if($link1 == 'javascript:void(0);') { echo 'pricing-btn'; }?>"><?php echo get_field('pricing_item_1_button_text'); ?></a>
                </div>
            </div>
        <?php } ?>
        <?php if (get_field($cookiecol2) !== "") {?>
            <div class="pricing-features__right-2 <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                <div class="pricing-features__buttons">
                    <?php $link2 = get_field('pricing_item_2_button_link');
                    if($link2 == 'pricing-btn') {
                        $link2 = 'javascript:void(0);';
                    } ?>

                    <a href="<?php echo $link2; ?>" class="btn-normal btn-normal--yellow <?php if($link2 == 'javascript:void(0);') { echo 'pricing-btn'; }?>"><?php echo get_field('pricing_item_2_button_text'); ?></a>
                </div>
            </div>
        <?php } ?>
        <?php if (get_field($cookiecol3) !== "") {?>
            <div class="pricing-features__right-3 <?php if ($colCount == 1) { echo 'pricing-features__right--60'; } if ($colCount == 2) { echo 'pricing-features__right--30'; } ?>">
                <div class="pricing-features__buttons">
                    <?php $link3 = get_field('pricing_item_3_button_link');
                    if($link3 == 'pricing-btn') {
                        $link3 = 'javascript:void(0);';
                    } ?>

                    <a href="<?php echo $link3; ?>" class="btn-normal btn-normal--yellow <?php if($link3 == 'javascript:void(0);') { echo 'pricing-btn'; }?>"><?php echo get_field('pricing_item_3_button_text'); ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script>
    $('.pricing-features__list-item-title--has-desc').on('click', function(){
        $(this).parent().toggleClass('pricing-features__list-item--open').find('.pricing-features__list-item-desc').slideToggle();
    });
</script>