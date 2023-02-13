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

<div class="reviews">
    <div class="reviews__wrapper margin-top-bot container">
        <?php $reviews = get_field('reviews');
        foreach ($reviews as $review) { ?>
            <div class="reviews__box">
                <div class="reviews__upper">
                    <svg id="star-review" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496.5 85.68"><title>star</title><polygon points="45.05 0 58.96 28.2 90.09 32.73 67.57 54.68 72.88 85.68 45.05 71.05 17.21 85.68 22.52 54.68 0 32.73 31.13 28.2 45.05 0" style="fill:#fddf00"></polygon><polygon points="143.72 0 157.64 28.2 188.77 32.73 166.24 54.68 171.56 85.68 143.72 71.05 115.88 85.68 121.2 54.68 98.67 32.73 129.8 28.2 143.72 0" style="fill:#fddf00"></polygon><polygon points="247.41 0 261.33 28.2 292.46 32.73 269.94 54.68 275.25 85.68 247.41 71.05 219.57 85.68 224.89 54.68 202.37 32.73 233.49 28.2 247.41 0" style="fill:#fddf00"></polygon><polygon points="351.11 0 365.02 28.2 396.15 32.73 373.63 54.68 378.94 85.68 351.11 71.05 323.27 85.68 328.58 54.68 306.06 32.73 337.19 28.2 351.11 0" style="fill:#fddf00"></polygon><polygon points="451.45 0 465.37 28.2 496.5 32.73 473.98 54.68 479.29 85.68 451.45 71.05 423.62 85.68 428.93 54.68 406.41 32.73 437.54 28.2 451.45 0" style="fill:#fddf00"></polygon></svg>
                    <img loading="lazy" class="quote-icon" src="https://www.bigchange.com/wp-content/uploads/2021/07/quote-end.png" alt="Blue quote end">
                </div>
                <div class="reviews__title">
                    <?php if($review['title_h']) {
                        $h = $review['title_h'];
                        echo '<h' . $h . '>' . $review['title'] . '</h' . $h . '>';
                    } else { ?>
                        <h4><?php echo $review['title']; ?></h4>
                    <?php } ?>
                </div>
                <div class="reviews__text">
                    <p><?php echo $review['text']; ?></p>
                </div>
                <div class="reviews__pos-abs">
                    <div class="reviews__accred">
                        <div class="reviews__user-img">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M150 0C67.2 0 0 67.2 0 150c0 82.8 67.2 150 150 150s150-67.2 150-150C300 67.2 232.8 0 150 0zM150.5 220.8v0h-0.9H85.5c0-46.9 41.2-46.8 50.3-59.1l1-5.6c-12.8-6.5-21.9-22.2-21.9-40.5 0-24.2 15.7-43.7 35.1-43.7 19.4 0 35.1 19.6 35.1 43.7 0 18.2-8.9 33.8-21.6 40.4l1.2 6.3c10 11.7 49.8 12.4 49.8 58.5H150.5z" style="fill: #2499ca;"></path></svg>
                        </div>
                        <div class="reviews__user-accred">
                            <p class="name"><?php echo $review['review_user_name']; ?></p>
                            <p class="job"><?php echo $review['review_user_job']; ?></p>
                        </div>
                    </div>
                    <div class="reviews__lower">
                        <p>Source</p>
                        <img loading="lazy" src="<?php echo $review['source_image']['url']; ?>" alt="<?php echo $review['source_image']['alt']; ?>" alt="">
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>