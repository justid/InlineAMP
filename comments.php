<div id="comments" class="comments content">
    <?php if (post_password_required()) : ?>
    <p><?php _e( 'Post is password protected. Enter the password to view any comments.' ,'inline-amp'); ?></p>
    <?php else: ?>
        <?php if (have_comments()) : ?>
            <h2><?php comments_number(__('no responses','inline-amp'), __('one response','inline-amp'), __('% responses','inline-amp')); ?></h2>
            <ul>
                <?php echo html2amp(wp_list_comments(['echo'=>false]));?>
            </ul>
            <?php if (get_comment_pages_count() > 1): ?>
                <nav class="nav-links">
                <?php paginate_comments_links(
                        array(
                            'show_all' => true,
                            'prev_next' => false,
                        )
                ) ?>
                </nav>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ( !comments_open() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p>
			<?php 
				$comments_closed = sprintf( __( 'Comments Off<span class="screen-reader-text"> on %s</span>','inline-amp' ), get_the_title());
				echo $comments_closed;
			?>
			</p>
        <?php else: ?>
            <?php my_comment_form(); ?>
        <?php endif; ?>
    <?php endif; ?>
</div>