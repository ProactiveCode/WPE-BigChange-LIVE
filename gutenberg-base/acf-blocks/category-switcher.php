<div class="category-switcher <?php if(get_field('cs_additional_classes')) { echo get_field('cs_additional_classes'); } ?>">
    <div class="container">
        <div class="category-switcher__items">
            <?php $items = get_field('cs_items');
                $count = 0;
            foreach ($items as $item) { ?>
                <a href="javascript:void(0);" class="<?php if($count == 0) { echo 'is-active'; } ?>"><?php echo $item['item_name']; ?></a>
            <?php $count++; } ?>            
        </div>
        <div class="category-switcher__image-column">
            <div class="category-switcher__image-carousel owl-carousel">
                <?php foreach ($items as $item) { ?>
                    <div class="category-switcher__image-wrapper">
                        <div class="category-switcher__mob-title">
                            <p><?php echo $item['item_name']; ?></p>
                        </div>
                        <div class="category-switcher__image">
                            <img src="<?php echo $item['image']['url']; ?>" alt="Image">
                        </div>
                        <div class="category-switcher__text">
                            <?php echo $item['item_text']; ?>
                        </div>
                    </div>
                <?php } ?>  
            </div>

            <div class="category-switcher__controls">
                <a href="javascript:void(0);" class="category-switch__prev">
                    <img src="https://www.bigchange.com/wp-content/uploads/2022/02/arrow.svg" alt="Previous Item">
                </a>
                <a href="javascript:void(0);" class="category-switch__next">
                    <img src="https://www.bigchange.com/wp-content/uploads/2022/02/arrow.svg" alt="Previous Item">
                </a>
            </div>
        </div>
    </div>
</div>