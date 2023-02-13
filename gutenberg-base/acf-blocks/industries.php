<div class="industries bg-blue">
    <div class="industries__inner container padded-top-bot-large">
        <div class="industries__title">
            <h3 class="white"><?php echo get_field('in_title'); ?></h3>
        </div>
        <?php $industries = get_field('in_industries');
        if($industries) { ?>
            <div class="industries__wrapper">
                <?php foreach ($industries as $industry) { ?>
                    <div class="industry">
                        <div class="industry__name">
                            <p><?php echo $industry['name']; ?></p>
                        </div>
                        <div class="industry__image">
                            <img loading="lazy" src="<?php echo $industry['image']['url']; ?>" alt="Industry hero image">
                        </div>
                        <div class="industry__description">
                            <?php echo $industry['description']; ?>
                        </div>
                        <div class="industry__button">
                            <a href="<?php echo $industry['link']; ?>" class="btn-normal btn-normal--green-white">Discover</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php $industriesSelect = get_field('in_select_sectors_list');
        if($industriesSelect) { ?>
            <div class="industries__lower">
                <div class="industries__lower-title">
                    <p><?php echo get_field('in_select_sector_text'); ?></p>
                </div>
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