<div class="tagline">
    <?php 
        $main_tagline = get_theme_mod('main_tagline', 'Free the Internet');
        if (!empty($main_tagline)) {
            echo '<div class="tagline-main">'.$main_tagline.'</div>';
        }
        $sub_tagline = get_theme_mod('sub_tagline', 'Across the Great Wall we can reach every corner in the world');
        if (!empty($sub_tagline)) {
            echo '<div class="tagline-sub">'.$sub_tagline.'</div>';
        }
    ?>
</div>