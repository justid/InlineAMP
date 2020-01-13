<!doctype html>
<html amp <?php language_attributes(); ?>>
    <head>
        <?php get_header() ?>
        <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
        <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
        <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
        <style amp-custom>
<?php load_css("css/global") ?>
<?php load_css("css/head",'common') ?>
<?php load_css("css/head",'menu') ?>            
<?php load_css("css/main",'body') ?>  
<?php load_css("css/main", 'sidebar') ?>  
<?php load_css("css/footer", 'common') ?>

<?php load_css("css/singular", 'singular') ?>

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
                <?php get_template_part('components/tagline'); ?>
            </div>
        </header>
        <main>
            <div class="main-container">
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    
                    <div class="article-info">
                        <?php get_template_part('components/meta-category'); ?>
                        <h2 class="article-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="flex-box"> 
                            <div class="flex-box post-meta-box">
                                <a class="post-meta" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><span class="iconfont icon-mr-postmeta">&#xe644;</span><?php esc_html(the_author()); ?></a>
                                <span class="post-meta" ><span class="iconfont icon-mr-postmeta">&#xe643;</span><?php the_time( get_option( 'date_format' ) ); ?></span>
                                <span class="post-meta" ><span class="iconfont icon-mr-postmeta">&#xe630;</span><?php comments_number('0', '1', '%'); ?></span>
                                <span class="post-meta" ><span class="iconfont icon-mr-postmeta">&#xe62e;</span><?php echo (int)get_post_meta(get_the_ID(), 'views', true); ?></span>
                                <span class="post-meta" ><span class="iconfont icon-mr-postmeta icon-like-sp">&#xe64a;</span><span [text]="likes"><?php echo (int)get_post_meta(get_the_ID(),'likes',true); ?></span></span>
                                <?php if ($edit_link = get_edit_post_link(get_the_ID())): ?>
                                    <a class="post-meta edit-link" href="<?php echo esc_url($edit_link);?>"><span class="iconfont icon-mr-postmeta">&#xe633;</span><?php _e('Edit','inline-amp')?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="content"> 
                        <?php 
                            if (post_password_required()) {
                                echo post_password();
                            } else {
                                echo apply_filters('the_content', get_the_content()); 
                            }
                        ?>
                        <?php
                        wp_link_pages(
                            array(
                                'before'      => '<nav class="nav-links">',
                                'after'       => '</nav>',
                            )
                        );
                        ?>                    
                    </div>
                <?php endwhile; ?>
                <form
                class="likes-form"
                method="post"
                action-xhr="<?php echo follow_scheme_replace(get_site_url(null, '/wp-admin/admin-ajax.php'))?>"
                target="_top"
                on="submit-success: AMP.setState({'likes': event.response.likes,'likesClass': event.response.class})"
                >
                    <input type="hidden" name="post_id" value="<?php echo get_the_ID() ?>" />
                    <input type="hidden" name="action" value="likes" />
                    <button type="submit" [class]="likesClass" class="likes-button <?php if (isset($_COOKIE['likes_'.get_the_ID()])) echo 'likes-button-active';?>"  [text]="likes">
                    <?php echo (int)get_post_meta(get_the_ID(),'likes',true); ?>
                    </button>
                </form>
                <nav class="post-nav">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    <div class="nav-previous">
                        <?php if (!empty($prev_post)): ?>
                            <a class="post-nav-link-active" title="<?php echo $prev_post->post_title;?>" href="<?php echo get_permalink($prev_post->ID); ?>"><?php _e('Previous Post','inline-amp')?></a>
                        <?php else: ?>
                            <a><?php _e('Previous Post','inline-amp')?></a>
                        <?php endif; ?>      
                    </div>
                    <div class="nav-next">
                        <?php if (!empty($next_post)): ?>
                            <a class="post-nav-link-active" title="<?php echo $next_post->post_title;?>" href="<?php echo get_permalink($next_post->ID);?>"><?php _e('Next Post','inline-amp')?></a>
                        <?php else: ?>
                            <a><?php _e('Next Post','inline-amp')?></a>
                        <?php endif; ?>
                    </div>
                </nav>
                <div class="social-share">
                    <div class="social-share-box">
                        <amp-social-share class="rounded" type="email" layout="responsive"  width="20" height="20"></amp-social-share>
                    </div>
                    <div class="social-share-box">
                        <amp-social-share class="rounded" type="linkedin" layout="responsive" width="20" height="20"></amp-social-share>
                    </div>
                    <div class="social-share-box">
                        <amp-social-share class="rounded" type="pinterest" layout="responsive" data-param-media="https://amp.dev/static/samples/img/amp.jpg" width="20" height="20"></amp-social-share>
                    </div>
                    <div class="social-share-box">
                        <amp-social-share class="rounded" type="tumblr" layout="responsive" width="20" height="20"></amp-social-share>
                    </div>
                    <div class="social-share-box">
                        <amp-social-share class="rounded" type="twitter" layout="responsive" width="20" height="20"></amp-social-share>
                    </div>
                    <div class="social-share-box">
                        <amp-social-share class="rounded" type="whatsapp" layout="responsive" width="20" height="20"></amp-social-share>
                    </div>
                    <div class="social-share-box">
                        <amp-social-share class="rounded" type="line" layout="responsive" width="20" height="20"></amp-social-share>
                    </div>
                </div>
                <div class="post-tags">
                    <?php if ( get_the_tags() ) { the_tags('', '', ''); } ?>
                </div>
                <?php comments_template(); ?>
            </div>
            <div class="sidebar">
                <?php dynamic_sidebar('my-sidebar'); ?>
            </div>
            <?php get_template_part('components/scrolltop'); ?>
        </main> 
        <?php get_template_part('components/footer'); ?>
    </body>
</html>