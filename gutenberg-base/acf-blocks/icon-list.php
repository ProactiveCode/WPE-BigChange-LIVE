<div class="icon-list">
    <?php $iconlistitems = get_field('icon_list_items'); 

    foreach ($iconlistitems as $item) { ?>
        <div class="icon-list__item">
            <div class="icon-list__image">
                <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>">
            </div>
            <div class="icon-list__text-wrapper">
                <div class="icon-list__title">
                    <p><?php echo $item['title'] ?></p>
                </div>
                <div class="icon-list__text">
                    <p><?php echo $item['text'] ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>