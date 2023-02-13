<?php

/**
 * Premier League Games List Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="pl-games-list">
    <div class="pl-games-list__wrapper">
    <?php $games = get_field('pl_games');
    $count = 0; ?>
        <?php foreach ($games as $game) { ?>
            <div class="pl-games-list__single <?php if ($count == 0) { echo ' pl-games-list__first-row';} else if ($count == 1 || $count == 2){ { echo ' pl-games-list__first-row-singles';}} else if ($count == 3){ echo ' pl-games-list__second-row';} else if ($count == 4 || $count == 5){ { echo ' pl-games-list__second-row-singles';}} else if ($count == 6){ echo ' pl-games-list__third-row';} else if ($count == 7){ { echo ' pl-games-list__third-row-singles';}} else if ($count == 8){ { echo ' pl-games-list__third-row-last';}} else if ($count == 9){ echo ' pl-games-list__fourth-row';} else if ($count == 10){ { echo ' pl-games-list__fourth-row-singles';}} else if ($count == 11){ { echo ' pl-games-list__fourth-row-last';}} else if ($count == 12){ echo ' pl-games-list__fifth-row';} else if ($count == 13){ { echo ' pl-games-list__fifth-row-singles';}} else if ($count == 14){ { echo ' pl-games-list__fifth-row-last';}} else if ($count == 15){ echo ' pl-games-list__sixth-row';} else if ($count == 16){ { echo ' pl-games-list__sixth-row-last';}} else if ($count == 17){ echo ' pl-games-list__seventh-row';} else if ($count == 18){ { echo ' pl-games-list__seventh-row-last';}}?>">
                <div class="pl-games-list__home-img">
                    <img src="<?php echo $game['home_logo']['url']; ?>" alt="<?php echo $game['home_logo']['alt']; ?>">
                </div>
                <div class="pl-games-list__game-info">
                    <div class="pl-games-list__game-teams">
                        <p class="home"><?php echo $game['home_team']?></p>
                        <p class="versus">V</p>
                        <p class="away"><?php echo $game['away_team']?></p>
                    </div>
                    <div class="pl-games-list__game-dates">
                        <p class="home"><?php echo $game['date']?></p>
                        <p class="away"><?php echo $game['daytime']?></p>
                    </div>
                    <div class="pl-games-list__enter-btn">
                        <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
                        if (strpos($actual_link, 'proactivecode') !== false) {
                            $actual_link = 'https://www.bigchange.com/matchday-hospitality/';
                        } else {
                            $actual_link = 'https://www.bigchange.com/matchday-hospitality/';
                        }
                        $matchString = $game['home_team'] . ' V ' . str_replace("United", "", $game['away_team']);
                        ?>
                        <a href="<?php echo $actual_link; ?>?select_the_game_you_want_to_apply_for_checkbox=<?php echo rawurlencode($matchString); ?>#leeds-united-hospitality__form-id" class="btn-normal btn-normal--light-blue">ENTER</a>
                    </div>
                </div>
                <div class="pl-games-list__away-img">
                    <img src="<?php echo $game['away_logo']['url']; ?>" alt="<?php echo $game['away_logo']['alt']; ?>">
                </div>
            </div>
            <?php $count++;
            } ?>
    </div>
</div>