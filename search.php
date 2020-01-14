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

        main {
            justify-content: center;
        }
        .main-container {
            width: 59.5238vw;
        }
        .title-img {
            width: 59.5238vw;
            height: 22.0238vw;
        }
        .post-info {
            width: 59.5238vw;
        }
        /* search box */
        .search-box {
            margin-top: 0;
            margin-bottom: 3.869vw;
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
            border: 0.0595vw #4A4A4A solid;
            border-radius: 0.3571vw;
            padding-left: 1.8452vw;
            padding-right: 3.5714vw;
            font-size: 1.1905vw;
            line-height: 1.1905vw;
            box-sizing: border-box;
            background: #2A2A2A;
            color: white;
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
            color: #B0B0B0;
            font-size: 1.7857vw;
            margin-right: 1.7857vw;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            cursor: pointer;
        }

        .nothing h3 {
            margin-top: 0;
        }

        .nothing{
            margin-bottom: 29.7619vw;
        }

        /* mobile */
        @media only screen and (max-width: 640px){
            .main-container {
                width: 92vw;
            }
            .title-img {
                width: 92vw;
                height: 34.1333vw;
            }
            .post-info {
                width: 92vw;
            }
            .search-box {
                margin-top: 5.4667vw;
                margin-bottom: 5.3333vw
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
        <header id="commonTop">
            <div class="top-container">
                <?php get_template_part('components/title-menus'); ?>
                <div class="search-box">
                    <h2><?php echo _e('Search Results','default') ?></h2>
                    <form target="_top" role="search" method="get" class="search-form" action="<?php echo follow_scheme_replace(get_site_url()) ?>">
                        <input type="text" required class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder','default' )?>" value="<?php echo get_search_query()?>" name="s" />
                        <button type="submit" class="search-submit"></button>
                    </form>
                </div>
            </div>
        </header>
        <main>
            <div class="main-container">
                <div class="post-list">
                <?php if (!have_posts()): ?>
                    <div class="nothing">
                        <h3><?php _e( 'No results found.','default'); ?></h3>
                    </div>
                <?php endif; ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="list-box">
                    <?php if ($thumb = my_post_thumbnail()): ?>
                    <a href="<?php the_permalink() ?>" class="title-img">
                        <amp-img class="contain"
                            src="<?php echo $thumb?>"
                            layout="fill"
                        >
                        </amp-img>  
                    </a>
                    <?php endif; ?>
                    <div class="post-info">
                        <?php get_template_part('components/meta-category'); ?>
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-excerpt">
                            <?php echo get_the_excerpt() ?>
                        </div>
                        <div class="flex-box justify-between">
                            <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Read more','default'); ?><span class="iconfont icon-ml-readmore">&#xe649;</span></a>
                            <div class="flex-box post-meta-box">
                                <?php if ($edit_link = get_edit_post_link(get_the_ID())): ?>
                                <div class="flex-box">
                                    <a class="post-meta edit-link" href="<?php echo esc_url($edit_link);?>"><span class="iconfont icon-mr-postmeta">&#xe633;</span><?php _e('Edit','default')?></a>
                                </div>
                                <?php endif; ?>
                                <a class="post-meta" href="<?php the_permalink() ?>#comments"><span class="iconfont icon-mr-postmeta">&#xe630;</span><?php comments_number('0', '1', '%'); ?></a>
                                <a class="post-meta" href="<?php the_permalink() ?>"><span class="iconfont icon-mr-postmeta">&#xe62e;</span><?php echo (int)get_post_meta(get_the_ID(), 'views', true); ?></a>
                                <a class="post-meta" href="<?php the_permalink() ?>"><span class="iconfont icon-mr-postmeta icon-like-sp">&#xe64a;</span><?php echo (int)get_post_meta(get_the_ID(),'likes',true); ?></a>
                            </div>
                        </div>
                        <div class="flex-box post-publish-date">
                            <div class="post-date">
                                <?php echo get_the_date('d') ?>
                            </div>
                            <div class="post-month">
                                <?php echo get_the_date('M') ?>
                            </div>  
                        </div>
                    </div> 
                    </article>
                <?php endwhile; ?>
                </div>
                <?php echo get_the_posts_pagination( array(
                    'mid_size' => 3,
                    'prev_next' => false,
                ) ); ?>
            </div>
            <?php if (have_posts()) get_template_part('components/scrolltop'); ?>
        </main> 
        <?php get_template_part('components/footer'); ?>
    </body>
</html>