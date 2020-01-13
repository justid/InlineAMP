<div class="title-menus-area">
    <a class="blog-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_theme_mod('blog_title', get_bloginfo('name')); ?></a>    
    <label for="header-menu-button" class="top-menus">
    <?php
        wp_nav_menu(
            array(
                'fallback_cb' => function() { return ''; },
                'container'  => 'nav',
                'theme_location' => 'primary',
            )
        );
    ?>
    </label>
</div>