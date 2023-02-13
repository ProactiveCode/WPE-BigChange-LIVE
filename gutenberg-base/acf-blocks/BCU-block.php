<?php

/**
 * Image Text Cards Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php $tables = get_field('bcu_calendar');?>
    <?php foreach ($tables as $table) { 
        date_default_timezone_set('Europe/London');
        $dtHide = DateTime::createFromFormat("d/m/Y h:i a", $table['hide_date']);
        $dtCurrent = DateTime::createFromFormat("d/m/Y h:i a", date("d/m/Y h:i a"));
        $unixHideDate = $dtHide->getTimestamp();
        $unixCurrentDate = $dtCurrent->getTimestamp();
    
        if ($unixHideDate > $unixCurrentDate){
            if ($table['table_title']) { ?>
                <?php if($table['title_h']) {
                    $h = $table['title_h'];
                    echo '<h' . $h . '  class="container margin-btm-20 uni-title">' . $table["table_title"] . '</h' . $h . '>';
                } else { ?>
                    <h4 class="container margin-btm-20 uni-title"><?php echo $table["table_title"]; ?></h4>
                <?php } ?>
            <?php } ?>
            <div class="wp-block-columns container university-table-styling">
                <div class="wp-block-column">
                    <?php echo $table['ninja_tables_shortcode']; ?>
                </div>
            </div>
            <div class="wp-block-columns container university-table-mobile">
                <div class="wp-block-column">
                    <?php echo $table['mobile_ninja_tables_shortcode']; ?>
                </div>
            </div>
            <?php } ?>
        <?php } ?>
