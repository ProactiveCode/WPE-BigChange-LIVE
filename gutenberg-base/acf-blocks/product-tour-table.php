<?php

/**
 * Product tour table Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="container">
    <div class="ptt">
        <div class="ptt__upper">
            <div class="ptt__title">
                <?php if(get_field('upper_text_title_h')) {
                    $h = get_field('upper_text_title_h');
                    echo '<h' . $h . '>' . get_field('upper_text') . '</h' . $h . '>';
                } else { ?>
                    <h3><?php echo get_field('upper_text'); ?></h3>
                <?php } ?>
            </div>
            <div class="ptt__button">
                <a href="javascript:void(0);" class="btn-normal btn-normal--yellow-white demo"><?php echo get_field('upper_link_text'); ?></a>
            </div>
        </div>
        <div class="ptt__lower">
            <?php $tables = get_field('table_items');
                foreach ($tables as $item) { ?>
                <!-- If they want the modal back change href to javascript:void(0); and in modals.js uncomment the ptt-modal code. You will need to add a modal_text wysiwyg field in the ACF Block: Product tour table -->
                <a href="<?php echo $item['link']; ?>" data-link="<?php echo $item['link']; ?>"  data-modal-text="<?php echo htmlentities($item['modal_text']); ?>" class="ptt__card">
                    <div class="ptt__text">
                        <p><?php echo $item['text']; ?></p>
                    </div>
                    <div class="ptt__icon">
                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

<div class="bc-modal ptt-modal">
    <div class="bc-modal__bg"></div>
    <div class="bc-modal__wrapper">
        <div class="bc-modal__inner">
            <div class="bc-modal__close"></div>
            <div class="ptt-modal__title">
                <p></p>
            </div>
            <div class="ptt-modal__text">
                <p></p>
            </div>
            <div class="ptt-modal__button">
                <a href="javascript:void(0);" class="btn-normal">Go to page</a>
            </div>
        </div>
    </div>
</div>
