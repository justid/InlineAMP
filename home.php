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
        </style>
    </head>
    <body <?php body_class(); ?>>
        <?php
        echo get_theme_mod('body_js', '');
        ?>
        <?php if (has_nav_menu('primary')):?>
        <input type="checkbox" id="header-menu-button"/>
        <?php endif; ?>
		<header id="commonTop"
		<?php if ( get_header_image() ) : ?>
			style="background: url('<?php header_image(); ?>') 100% / cover no-repeat;"
		<?php endif; ?>
		>
            <div class="top-container">
                <?php get_template_part('components/title-menus'); ?>
                <?php get_template_part('components/tagline'); ?>
            </div>
        </header>
        <main>
            <div class="main-container">
                <div class="post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class('list-box'); ?>>
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
                                    <a class="post-meta edit-link" href="<?php echo esc_url($edit_link);?>"><span class="iconfont icon-mr-postmeta">&#xe633;</span><?php _e('Edit','default')?></a>
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
            <div class="sidebar">
                <?php dynamic_sidebar('my-sidebar'); ?>
            </div>
            <?php get_template_part('components/scrolltop'); ?>
        </main> 
        <?php get_template_part('components/footer'); ?>
    </body>
</html>