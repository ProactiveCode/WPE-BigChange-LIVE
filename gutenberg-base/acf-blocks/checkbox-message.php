<?php

/**
 * Rotating Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>


<?php $checkboxLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$checkboxEn = 1;

	if(strpos($checkboxLink, '/fr/') !== false || strpos($checkboxLink, '/cy/') !== false || strpos($checkboxLink, '/us/') !== false || strpos($checkboxLink, '/nz/') !== false || strpos($checkboxLink, '/au/') !== false) {
		$checkboxEn = 0;
	}

?>

<div class="checkbox-messages">
    <div class="checkbox-messages__wrapper container">
        <?php $messages = get_field('cb_messages');
        foreach ($messages as $message) { ?>
            <div class="checkbox-messages__box">
                <div class="checkbox-messages__tick">
                    <img src="<?php if($checkboxEn == 1) { echo 'https://www.bigchange.com/wp-content/uploads/2021/09/dark-blue-check.svg'; } else { echo 'https://www.bigchange.com/wp-content/uploads/2021/07/blue-check.svg'; } ?>" alt="Blue checkbox">
                </div>
                <div class="checkbox-messages__title">
                    <?php if($message['title_h']) {
                        $h = $message['title_h'];
                        echo '<h' . $h . '>' . $message["table_title"] . '</h' . $h . '>';
                    } else { ?>
                        <h4><?php echo $message['title']; ?></h4>
                    <?php } ?>
                </div>
                <div class="checkbox-messages__text">
                    <p><?php echo $message['text']; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>