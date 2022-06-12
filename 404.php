<!doctype html>
<html amp <?php language_attributes(); ?>>
    <head>
        <?php get_header() ?>
        <style amp-custom>
<?php load_css("css/global") ?>
<?php load_css("css/head",'common') ?>
<?php load_css("css/head",'menu') ?>            
<?php load_css("css/main",'body') ?>  
<?php load_css("css/main", 'sidebar') ?>  
<?php load_css("css/footer", 'common') ?>

        .tagline-main:after {
            display: none;
        }
        main {
            justify-content: center;
            width: 59.5238vw;
        }
        .main-container {
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        /* search box */
        .search-box {
            margin-top: 0;
            margin-bottom: 20vw;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .search-box h2 {
            font-size: 2.0238vw;
            line-height: 2.0238vw;
            color: white;
            margin-top: 0;
            margin-bottom: 1.8452vw;
        }
        .search-form {    
            position: relative;
            display: flex;
            align-items: center;
        }

        .widget_search {
            border-bottom: none;
            padding-bottom: 0;
        }

        .search-form input[type='text'] {
            width: 59.5238vw;
            height: 3.5714vw;
            border: 0.0595vw #E6E6E6 solid;
            border-radius: 0.3571vw;
            padding-left: 1.8452vw;
            padding-right: 3.5714vw;
            font-size: 1.1905vw;
            line-height: 1.1905vw;
            box-sizing: border-box;
            background: white;
            color: black;
        }

        .search-form input[type='text']::placeholder {
            font-size: 1.1905vw;
            line-height: 1.1905vw;
            color: #8A8A8A;
        }

        .search-form button[type='submit'] {
            position: absolute;
            right: 0;
            padding: 0;
            border: none;
            background: unset;
        }
        .search-form button[type='submit']:before {
            content: '\e62c';
            font-family: "iconfont";
            color: #BBBBBB;
            font-size: 1.7857vw;
            margin-right: 1.7857vw;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            cursor: pointer;
        }

        /* mobile */
        @media only screen and (max-width: 640px){
            main {
                width: 92vw;
            }
            .search-box {
                margin-top: 5.4667vw;
                margin-bottom: 13.3333vw
            }

            .search-box h2 {
                font-size: 3.7333vw;
                line-height: 3.7333vw;
                margin-bottom: 4.44vw;
            }
            .search-form input[type='text'] {
                width: 89.3333vw;
                height: 8vw;
                border: 0.1333vw #4A4A4A solid;
                border-radius: 0.8vw;
                padding-left: 4vw;
                padding-right: 6.6667vw;
                font-size: 3.7333vw;
                line-height: 3.7333vw;
            }
            .search-form input[type='text']::placeholder {
                font-size: 3.7333vw;
                line-height: 3.7333vw;
            }
            .search-form button[type='submit']:before {
                font-size: 4vw;
                margin-right: 2.6667vw;
            }
        }
        </style>
    </head>
    <body>
        <?php
        echo get_theme_mod('body_js', '');
        ?>        
        <?php if (has_nav_menu('primary')):?>
        <input type="checkbox" id="header-menu-button"/>
        <?php endif; ?>
        <header id="commonTop"
        <?php if ( get_header_image() ) : ?>
			style="background: url('<?php header_image(); ?>') 100% / cover no-repeat;"
		<?php endif; ?>>
            <div class="top-container">
                <?php get_template_part('components/title-menus'); ?>
                <div class="tagline">
                    <div class="tagline-main"><?php _e( 'Page not found','default'); ?></div>
                    <div class="tagline-sub"><?php printf(
                        __( 'It looks like nothing was found at this location. Maybe try visiting %s directly?','default' ),
                        '<a href="' . esc_url( home_url() ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>'
                    ); ?></div>
                </div>
            </div>
        </header>
        <main>
            <div class="main-container">
                <div class="search-box">
                    <form target="_top" role="search" method="get" class="search-form" action="<?php echo follow_scheme_replace(get_site_url()) ?>">
                        <input type="text" required class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder','default' )?>" value="<?php echo get_search_query()?>" name="s" />
                        <button type="submit" class="search-submit"></button>
                    </form>
                </div>
            </div>
        </main> 
        <?php get_template_part('components/footer','default'); ?>
    </body>
</html>