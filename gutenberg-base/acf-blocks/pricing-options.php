<?php $options = get_field('pricing_options');

if($options) { ?>
    <div class="pricing-options container">
        <div class="pricing-options__wrapper">
            <?php $preCount = 0; foreach ($options as $option) { 
                $cookie_name = "IPgeoRegion";
                $priceCookie = $option['price'];
                if(isset($_COOKIE[$cookie_name])) {
                    if($_COOKIE[$cookie_name] !== 'uk') { 
                        $priceCookie = $option['price_' . $_COOKIE[$cookie_name]];
                    }
                } 
                if (!$priceCookie == ""){
                    $preCount++;
                }
            }?>
            <?php $count = 0; foreach ($options as $option) { 
                $cookie_name = "IPgeoRegion";
                $priceCookie = $option['price'];
                if(isset($_COOKIE[$cookie_name])) {
                    if($_COOKIE[$cookie_name] !== 'uk') { 
                        $priceCookie = $option['price_' . $_COOKIE[$cookie_name]];
                    }
                } 
                if (!$priceCookie == ""){?>
                    <div class="pricing-options__option <?php if($preCount == 1) { echo 'pricing-options__option--100 '; } if($preCount == 2) { echo 'pricing-options__option--50 '; } if($count == 1) { echo 'pricing-options__option--green'; } if($count == 2) { echo 'pricing-options__option--sec'; } ?>">
                        <?php if($option['title']) { ?>
                            <div class="pricing-options__pre">
                                <p><?php echo $option['title']; ?></p>
                            </div>
                        <?php } ?>
                        <?php if($option['name']) { ?>
                            <div class="pricing-options__main-title">
                                <p><?php echo $option['name']; ?></p>
                            </div>
                        <?php } ?>
                        <?php if($option['description']) { ?>
                            <div class="pricing-options__desc">
                                <p><?php echo $option['description']; ?></p>
                            </div>
                        <?php } ?>
                        <?php if($priceCookie) { ?>
                            <div class="pricing-options__price">
                                <p><?php echo $priceCookie; ?></p>
                            </div>
                        <?php } ?>
                        <?php if($option['price_description']) { ?>
                            <div class="pricing-options__price-desc">
                                <p><?php echo $option['price_description']; ?></p>
                            </div>
                        <?php } ?>
                        <?php $listitems = $option['list_items'];
                        if($listitems) { ?>
                            <div class="pricing-options__list">
                                <ul class="bc-arrow-list">
                                    <?php foreach ($listitems as $list) { ?>
                                        <li><?php echo $list['text']; ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                        <?php if($option['button_text'] && $option['button_link']) { ?>
                            <div class="pricing-options__button">
                            <?php $link = $option['button_link'];
                                if($link == 'pricing-btn') {
                                    $link = 'javascript:void(0);';
                                } ?>
                                <a href="<?php echo $link; ?>" class="btn-normal btn-normal--yellow <?php if($link == 'javascript:void(0);') { echo 'pricing-btn'; }?>"><?php echo $option['button_text']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php $count++; } ?>
        </div>
    </div>
<?php } ?>