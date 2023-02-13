<?php

/**
 * Pricing Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="pricing pricing__table container">
    <table>
        <tr>
            <td></td>
            <td style="vertical-align:bottom;">
                <!-- <div class="pricing__select pricing__select--desktop">
                    <select name="pricing" id="pricing-select">
                        <option value="gbp">GBP</option>
                        <option value="usd">USD</option>
                    </select>
                </div> -->
            </td>
            <?php 
                $cookie_name = "IPgeoRegion";
                $cookiecol1 = 'column_1_price';
                $cookiecol2 = 'column_2_price';
                $cookiecol3 = 'column_3_price';
                if(isset($_COOKIE[$cookie_name])) {
                    if($_COOKIE[$cookie_name] !== 'uk') { 
                        $cookiecol1 = 'column_1_price_' . $_COOKIE[$cookie_name];
                        $cookiecol2 = 'column_2_price_' . $_COOKIE[$cookie_name];
                        $cookiecol3 = 'column_3_price_' . $_COOKIE[$cookie_name];
                    }
                } ?>

            <td class="light-blue title-td">
                <div class="pricing__title">
                    <p><?php echo get_field('column_1_title'); ?></p>
                </div>
                <div class="pricing__upper">
                    <div class="pricing__price">
                        <p><?php echo get_field($cookiecol1); ?></p>
                    </div>
                    <div class="pricing__subtitle">
                        <p><?php echo get_field('column_1_subtitle'); ?></p>
                    </div>
                    <div class="pricing__text">
                        <p><?php echo get_field('column_1_text'); ?></p>
                    </div>
                </div>
            </td>
            <td class="seperator"></td>
            <td class="title-td">
                <div class="pricing__title">
                    <p><?php echo get_field('column_2_title'); ?></p>
                </div>
                <div class="pricing__upper">
                    <div class="pricing__price">
                        <p><?php echo get_field($cookiecol2); ?></p>
                    </div>
                    <div class="pricing__subtitle">
                        <p><?php echo get_field('column_2_subtitle'); ?></p>
                    </div>
                    <div class="pricing__text">
                        <p><?php echo get_field('column_2_text'); ?></p>
                    </div>
                </div>
            </td>
            <td class="seperator"></td>
            <td class="dark-blue title-td">
                <div class="pricing__title">
                    <p><?php echo get_field('column_3_title'); ?></p>
                </div>
                <div class="pricing__upper">
                    <div class="pricing__price">
                        <p><?php echo get_field($cookiecol3); ?></p>
                    </div>
                    <div class="pricing__subtitle">
                        <p><?php echo get_field('column_3_subtitle'); ?></p>
                    </div>
                    <div class="pricing__text">
                        <p><?php echo get_field('column_3_text'); ?></p>
                    </div>
                </div>
            </td>
        </tr>

        <?php $pricingLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $pricingEn = 1;

        if(strpos($pricingLink, '/fr/') !== false || strpos($pricingLink, '/cy/') !== false || strpos($pricingLink, '/us/') !== false || strpos($pricingLink, '/nz/') !== false || strpos($pricingLink, '/au/') !== false) {
            $pricingEn = 0;
        }

        ?>

        <?php $table_rows = get_field('table_items');
        $count = count($table_rows);
        $rowCount = 1;

        $col1last = false;
        $col2last = false;
        $col3last = false;

        foreach ($table_rows as $row) { ?>
            <tr class="align-center">
                <td><?php if($row['icon']) { ?> <img src="<?php echo $row['icon']['url']; ?>" alt="<?php echo $row['icon']['alt']; ?>"> <?php } ?></td>
                <td><?php if($row['title']) { ?> <div class="pricing__item-title"><p><?php echo $row['title']; ?></p></div><?php } ?></td>
                <td <?php if($row['column_1_tick']) { ?> class="ticked light-blue <?php if($rowCount == $count && $col1last == false) { echo 'ticked-last-bottom'; } ?>" <?php } else { if($col1last == false) { echo 'class="ticked-last light-blue"'; $col1last = true; } }?>><?php if($row['column_1_tick']) { ?> <img src="https://www.bigchange.com/wp-content/uploads/2020/11/light-blue-tick.svg" alt="Tick Icon"> <?php } ?></td>
                <td class="seperator"></td>
                <td <?php if($row['column_2_tick']) { ?> class="ticked  <?php if($rowCount == $count && $col2last == false) { echo 'ticked-last-bottom'; } ?>" <?php } else { if($col2last == false) { echo 'class="ticked-last"'; $col2last = true; } }?>><?php if($row['column_2_tick']) { ?> <img src="<?php if($pricingEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-brand-blue-tick.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2020/11/blue-tick.svg'; } ?>" alt="Tick Icon"> <?php } ?></td>
                <td class="seperator"></td>
                <td <?php if($row['column_3_tick']) { ?> class="ticked dark-blue <?php if($rowCount == $count && $col3last == false) { echo 'ticked-last-bottom'; } ?>" <?php } else { if($col3last == false) { echo 'class="ticked-last dark-blue"'; $col3last = true; } }?>><?php if($row['column_3_tick']) { ?>  <img src="<?php if($pricingEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/new-brand-one-blue-tick.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2020/11/dark-blue-tick.svg'; } ?>" alt="Tick Icon"> <?php } ?></td>
            </tr>
        <?php $rowCount++; } ?>
    </table>

    <div class="pricing__mobile-wrapper">
        <div class="pricing__select pricing__select--mobile">
            <select name="pricing" id="pricing-select">
                <option value="gbp">GBP</option>
                <option value="usd">USD</option>
            </select>
        </div>
        <div class="pricing__mobile light-blue">
            <div class="pricing__title">
                <p><?php echo get_field('column_1_title'); ?></p>
            </div>
            <div class="pricing__upper">
                <div class="pricing__price">
                    <p><?php echo get_field('column_1_price'); ?></p>
                </div>
                <div class="pricing__subtitle">
                    <p><?php echo get_field('column_1_subtitle'); ?></p>
                </div>
                <div class="pricing__text">
                    <p><?php echo get_field('column_1_text'); ?></p>
                </div>
            </div>
            <div class="pricing__items">
                <?php foreach ($table_rows as $row) { ?>
                    <?php if($row['column_1_tick']) { ?>
                        <div class="pricing__item-wrapper">
                            <div class="pricing__item-image">
                                <?php if($row['icon']) { ?> <img src="<?php echo $row['icon']['url']; ?>" alt="<?php echo $row['icon']['alt']; ?>"> <?php } ?>
                            </div>
                            <div class="pricing__item-text">
                                <?php if($row['title']) { ?> <div class="pricing__item-title"><p><?php echo $row['title']; ?></p></div><?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="pricing__button">
                    <a href="javascript:void(0);" class="btn-normal btn-normal--yellow pricing-btn"><?php echo get_field('mobile_pricing_button_text'); ?></a>
                </div>
            </div>
        </div>
        <div class="pricing__mobile">
            <div class="pricing__title">
                <p><?php echo get_field('column_2_title'); ?></p>
            </div>
            <div class="pricing__upper">
                <div class="pricing__price">
                    <p><?php echo get_field('column_2_price'); ?></p>
                </div>
                <div class="pricing__subtitle">
                    <p><?php echo get_field('column_2_subtitle'); ?></p>
                </div>
                <div class="pricing__text">
                    <p><?php echo get_field('column_2_text'); ?></p>
                </div>
            </div>
            <div class="pricing__items">
                <?php foreach ($table_rows as $row) { ?>
                    <?php if($row['column_2_tick']) { ?>
                        <div class="pricing__item-wrapper">
                            <div class="pricing__item-image">
                                <?php if($row['icon']) { ?> <img src="<?php echo $row['icon']['url']; ?>" alt="<?php echo $row['icon']['alt']; ?>"> <?php } ?>
                            </div>
                            <div class="pricing__item-text">
                                <?php if($row['title']) { ?> <div class="pricing__item-title"><p><?php echo $row['title']; ?></p></div><?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="pricing__button">
                    <a href="javascript:void(0);" class="btn-normal btn-normal--yellow pricing-btn"><?php echo get_field('mobile_pricing_button_text'); ?></a>
                </div>
            </div>
        </div>
        <div class="pricing__mobile dark-blue">
            <div class="pricing__title">
                <p><?php echo get_field('column_3_title'); ?></p>
            </div>
            <div class="pricing__upper">
                <div class="pricing__price">
                    <p><?php echo get_field('column_3_price'); ?></p>
                </div>
                <div class="pricing__subtitle">
                    <p><?php echo get_field('column_3_subtitle'); ?></p>
                </div>
                <div class="pricing__text">
                    <p><?php echo get_field('column_3_text'); ?></p>
                </div>
            </div>
            <div class="pricing__items">
                <?php foreach ($table_rows as $row) { ?>
                    <?php if($row['column_3_tick']) { ?>
                        <div class="pricing__item-wrapper">
                            <div class="pricing__item-image">
                                <?php if($row['icon']) { ?> <img src="<?php echo $row['icon']['url']; ?>" alt="<?php echo $row['icon']['alt']; ?>"> <?php } ?>
                            </div>
                            <div class="pricing__item-text">
                                <?php if($row['title']) { ?> <div class="pricing__item-title"><p><?php echo $row['title']; ?></p></div><?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="pricing__button">
                    <a href="javascript:void(0);" class="btn-normal btn-normal--yellow pricing-btn"><?php echo get_field('mobile_pricing_button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing__references">
        <?php echo get_field('table_references'); ?>
    </div>
</div>