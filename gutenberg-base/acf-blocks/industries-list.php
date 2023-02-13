<div class="industries-list">
    <div class="container container--1100">
        <?php if(get_field('il_title')) { ?>
            <div class="industries-list__title">
                <h3><?php echo get_field('il_title'); ?></h3>
            </div>
        <?php } ?>
        <?php $industriesListItems = get_field('il_industries_list_items');
        if($industriesListItems) { ?>
            <div class="industries-list__items">
                <?php foreach ($industriesListItems as $item) { ?>
                    <a href="<?php echo $item['link']; ?>" class="industries-list__item">
                        <div class="industries-list__item-image">
                            <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['text']; ?> icon">
                        </div>
                        <div class="industries-list__item-text">
                            <p><?php echo $item['text']; ?></p>
                        </div>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
        <?php $industriesSelect = get_field('il_select_sectors_list');
        if($industriesSelect) { ?>
            <div class="industries__lower">
                <?php if(get_field('il_select_sector_text')) { ?>
                    <div class="industries__lower-title">
                        <p><?php echo get_field('il_select_sector_text'); ?></p>
                    </div>
                <?php } ?>
                <div class="industries__lower-wrapper">
                    <div class="industries__select">
                        <select name="industrySelect" id="industrySelect">
                            <option value="#">Select your sector</option>
                            <?php foreach ($industriesSelect as $select) { ?>
                                <option value="<?php echo $select['sector_link']; ?>"><?php echo $select['sector_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="industries__lower-button">
                        <a href="javascript:void(0);" class="btn-normal btn-normal--yellow-white">Let's get started</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>