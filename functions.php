<?php
if ( ! isset( $content_width ) ) $content_width = 1680;

function theme_support() {
	remove_all_actions('wp_head');
	add_action( 'wp_head', '_wp_render_title_tag', 1 );

	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support( 'title-tag' );

	add_theme_support(
		'custom-header',
		apply_filters(
			'my_custom_header_args',
			array(
				'default-image'    => '',
				'header-text' => false,
				'width'            => 2000,
				'height'           => 1200,
				'flex-height'      => true,
				'video'            => false,
			)
		)
	);
}


add_action( 'after_setup_theme', 'theme_support' );

function my_post_thumbnail() {
    $img_url = wp_get_attachment_url(get_post_thumbnail_id());
    
    return $img_url;
}

// Customizer
function do_nothing($str) {
	return $str;
}

function my_customize_register($wp_customize) {
    // remove default section
    $wp_customize->remove_section('title_tagline');
    $wp_customize->remove_section('static_front_page');
    
    $wp_customize->add_section( 'header_setting' , array(
        'title'      => __( 'Header Setting','default'),
        'priority'   => 10,
    ) );

    $wp_customize->add_setting( 'blog_title' , array(
        'default'   => get_bloginfo('name'),
		'transport' => 'refresh',
		'sanitize_callback' => 'do_nothing',
    ) );
    $wp_customize->add_setting( 'main_tagline' , array(
        'default'   => 'Free the Internet',
		'transport' => 'refresh',
		'sanitize_callback' => 'do_nothing',
    ) );
    $wp_customize->add_setting( 'sub_tagline' , array(
        'default'   => 'Across the Great Wall we can reach every corner in the world',
		'transport' => 'refresh',
		'sanitize_callback' => 'do_nothing',
    ) );
    $wp_customize->add_setting( 'favicon' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ) );

    /* Addtional JS */
    $wp_customize->add_section( 'more_js' , array(
        'title'      => __( 'Additional JS','default'),
        'description' => __('You can paste your additional js code here, such as Google Adsense or Google Analytics code.
        <br /><b>Theses code should follow the AMP Spec.</b>','default'),
    ) );
    $wp_customize->add_setting( 'header_js' , array(
        'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'do_nothing',
    ) );

    $wp_customize->add_setting( 'body_js' , array(
        'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'do_nothing',
    ) );

    $wp_customize->add_control(
        'input_header_js', 
        array(
            'label'    => __( 'Insert to Header','default'),
            'section'  => 'more_js',
            'settings' => 'header_js',
            'type'     => 'textarea',
        )
    );

    $wp_customize->add_control(
        'input_body_js', 
        array(
            'label'    => __( 'Insert to Body','default'),
            'section'  => 'more_js',
            'settings' => 'body_js',
            'type'     => 'textarea',
        )
    );    
    
    $wp_customize->add_control(
        'input_blog_title', 
        array(
            'label'    => __( 'Blog Title','default'),
            'section'  => 'header_setting',
            'settings' => 'blog_title',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        'input_main_tagline', 
        array(
            'label'    => __( 'Main tagline','default'),
            'section'  => 'header_setting',
            'settings' => 'main_tagline',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        'input_sub_tagline', 
        array(
            'label'    => __( 'Sub tagline','default'),
            'section'  => 'header_setting',
            'settings' => 'sub_tagline',
            'type'     => 'textarea',
        )
    );

    $wp_customize->add_control( new WP_Customize_Site_Icon_Control( $wp_customize, 'set_favicon',
        array(
            'label' => __( 'Favicon' ,'default'),
            'description' => __( 'Favicon is what you see in <strong>browser tabs</strong>, bookmark bars','default'),
            'section' => 'header_setting',
            'settings' => 'favicon',
            'width' => 32, 
            'height' => 32, 
        )
    ) );
    
};

add_action( 'customize_register', 'my_customize_register' );

function my_menus() {
	$locations = array(
		'primary'  => __( 'Top Header Menu','default'),
		'footer'   => __( 'Footer Menu','default'),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'my_menus' );


// setting excerpt
add_filter('excerpt_more', function(){
    return '...';
});

// check if spider
function is_spider() {
    $agent= strtolower($_SERVER['HTTP_USER_AGENT']);
    if (!empty($agent)) {
            $spiders= array(
                'Googlebot', 'Baiduspider', 'ia_archiver', 
                'R6_FeedFetcher', 'NetcraftSurveyAgent', 
                'Sogou web spider', 'bingbot', 'Yahoo! Slurp', 
                'facebookexternalhit', 'PrintfulBot', 'msnbot', 
                'Twitterbot', 'UnwindFetchor', 'urlresolver'
            );
            foreach($spiders as $val) {
                if (strpos($agent, strtolower($val)) !== false) {
                    return true;
                }
            }
    } else {
            return false;
    }
}

// add views
function set_post_views()
{
    if (is_singular() && !is_spider())
    {
        $post_id = get_the_ID();
        if($post_id)
        {
            $post_views = (int)get_post_meta($post_id, 'views', true);
            update_post_meta($post_id, 'views', ($post_views+1));
        }
    }
}

add_action('the_post', 'set_post_views');

// add likes
function set_post_likes()
{
    $id = (int)$_POST["post_id"];
    if ( $_POST['action'] === 'likes'){
        $raters = (int)get_post_meta($id,'likes',true);
        if (!isset($_COOKIE['likes_'.$id])) {
            $raters += 1;
            setcookie('likes_'.$id,$id,time() + 99999999,'/',false,false);
            update_post_meta($id, 'likes', $raters);
        }

        wp_send_json(['likes'=>$raters, 'class'=>'likes-button-active likes-button']);
    }
    wp_die();
}

add_action('wp_ajax_nopriv_likes', 'set_post_likes');
add_action('wp_ajax_likes', 'set_post_likes');

// sidebar

function follow_scheme_replace($url) {
    return preg_replace('/^(http|https):\/\//', '//', $url, 1);
}

// profile
class my_profile extends WP_Widget {
    protected $registered = false;
    
	public function __construct() {
        // Add Widget scripts

		$widget_ops = array(
			'classname'                   => 'widget_profile',
			'description'                 => __( 'Your public profile' ,'default'),
			'customize_selective_refresh' => true,
        );
		parent::__construct( 'profile', __( 'Profile','default'), $widget_ops );
    }
    
    public function scripts()
    {
        // for media upoload
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script('widgets-upload-image', get_template_directory_uri() . '/js/widgets-upload-image.js', array('jquery'));
    
        // for rich editor
        wp_enqueue_editor();
        wp_enqueue_script('widgets-text-widgets', get_template_directory_uri() . '/js/widgets-text-widgets.js', array('jquery'));
        wp_add_inline_script( 'widgets-text-widgets', sprintf( 'wp.textWidgets.idBases.push( %s );', wp_json_encode( $this->id_base ) ) );
        wp_add_inline_script( 'widgets-text-widgets', 'wp.textWidgets.init();', 'after' );
    
    }

	public function widget( $args, $instance ) {
        $image = ! empty( $instance['image'] ) ? $instance['image'] : get_avatar_url(get_current_user_id());
        $text = ! empty( $instance['text'] ) ? $instance['text'] : __('DEMO PROFILE','default');

        $text = apply_filters( 'widget_text_content', $text, $instance, $this );
        
        echo $args['before_widget'];
        
        echo 
        '
         <div class="profile-box">
            <div class="profile-avatar">
            <amp-img 
                src="'.$image.'"
                layout="fill"
            >
            </amp-img>
            </div>
            <div class="profile-content">
            '.$text.'
            </div>
         </div>
        ';

        echo $args['after_widget'];
	}


    public function _register_one( $number = -1 ) {
		parent::_register_one( $number );
		if ( $this->registered ) {
			return;
		}
        $this->registered = true;
        
        add_action( 'admin_print_scripts-widgets.php', array( $this, 'scripts' ) );
        add_action( 'admin_footer-widgets.php', array( 'my_profile', 'render_control_template_scripts' ) );
    }


	public function form( $instance ) {
        $image = ! empty( $instance['image'] ) ? $instance['image'] : get_avatar_url(get_current_user_id());
        $text = ! empty( $instance['text'] ) ? $instance['text'] : __('DEMO PROFILE','default');
        
        ?>
        <p>
        <img src="<?php echo esc_url( $image ); ?>" class="my-avatar" style="display: block;margin: 0 auto 10px auto;border-radius: 100%;width: 100px;height: 100px;" >
           <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="hidden" value="<?php echo esc_url( $image ); ?>" />
           <button class="upload_image_button button button-primary" style="width: 100%; margin-bottom: 20px;">Upload Avatar</button>
        </p>
        <?php
        /** This filter is documented in wp-includes/class-wp-editor.php */
        $text = apply_filters( 'the_editor_content', $text, 'tinymce' );

        // Prevent premature closing of textarea in case format_for_editor() didn't apply or the_editor_content filter did a wrong thing.
        $escaped_text = preg_replace( '#</textarea#i', '&lt;/textarea', $text );

        ?>
        <textarea id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" class="text sync-input" hidden><?php echo $escaped_text; ?></textarea>
        <input id="<?php echo $this->get_field_id( 'filter' ); ?>" name="<?php echo $this->get_field_name( 'filter' ); ?>" class="filter sync-input" type="hidden" value="on">
        <input id="<?php echo $this->get_field_id( 'visual' ); ?>" name="<?php echo $this->get_field_name( 'visual' ); ?>" class="visual sync-input" type="hidden" value="on">
		<?php
	}

	public function update( $new_instance, $old_instance ) {
        $instance          = $old_instance;
		$new_instance      = wp_parse_args( (array) $new_instance, array( 'image' => '', 'text'=> '' ) );
        $instance['image'] = sanitize_text_field( $new_instance['image'] );
		if ( current_user_can( 'unfiltered_html' ) ) {
			$instance['text'] = $new_instance['text'];
		} else {
			$instance['text'] = wp_kses_post( $new_instance['text'] );
		}
		return $instance;

    }
    
    public static function render_control_template_scripts() {
		$dismissed_pointers = explode( ',', (string) get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) );
		?>
		<script type="text/html" id="tmpl-widget-text-control-fields">
			<# var elementIdPrefix = 'el' + String( Math.random() ).replace( /\D/g, '' ) + '_' #>

			<?php if ( ! in_array( 'text_widget_custom_html', $dismissed_pointers, true ) ) : ?>
				<div hidden class="wp-pointer custom-html-widget-pointer wp-pointer-top">
					<div class="wp-pointer-content">
						<h3><?php _e( 'New Custom HTML Widget','default' ); ?></h3>
						<?php if ( is_customize_preview() ) : ?>
							<p><?php _e( 'Did you know there is a &#8220;Custom HTML&#8221; widget now? You can find it by pressing the &#8220;<a class="add-widget" href="#">Add a Widget</a>&#8221; button and searching for &#8220;HTML&#8221;. Check it out to add some custom code to your site!','default' ); ?></p>
						<?php else : ?>
							<p><?php _e( 'Did you know there is a &#8220;Custom HTML&#8221; widget now? You can find it by scanning the list of available widgets on this screen. Check it out to add some custom code to your site!','default' ); ?></p>
						<?php endif; ?>
						<div class="wp-pointer-buttons">
							<a class="close" href="#"><?php _e( 'Dismiss','default' ); ?></a>
						</div>
					</div>
					<div class="wp-pointer-arrow">
						<div class="wp-pointer-arrow-inner"></div>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( ! in_array( 'text_widget_paste_html', $dismissed_pointers, true ) ) : ?>
				<div hidden class="wp-pointer paste-html-pointer wp-pointer-top">
					<div class="wp-pointer-content">
						<h3><?php _e( 'Did you just paste HTML?','default' ); ?></h3>
						<p><?php _e( 'Hey there, looks like you just pasted HTML into the &#8220;Visual&#8221; tab of the Text widget. You may want to paste your code into the &#8220;Text&#8221; tab instead. Alternately, try out the new &#8220;Custom HTML&#8221; widget!','default' ); ?></p>
						<div class="wp-pointer-buttons">
							<a class="close" href="#"><?php _e( 'Dismiss','default' ); ?></a>
						</div>
					</div>
					<div class="wp-pointer-arrow">
						<div class="wp-pointer-arrow-inner"></div>
					</div>
				</div>
			<?php endif; ?>

			<p>
				<label for="{{ elementIdPrefix }}text" class="screen-reader-text"><?php esc_html_e( 'Content:','default' ); ?></label>
				<textarea id="{{ elementIdPrefix }}text" class="widefat text wp-editor-area" style="height: 200px" rows="16" cols="20"></textarea>
			</p>
		</script>
		<?php
	}

}

function my_sidebar_registration() {
	global $wp_widget_factory; 

    unregister_widget('WP_Widget_Media_Audio');   // remove audio
    unregister_widget('WP_Widget_Media_Video');   // remove video
    unregister_widget('WP_Widget_Media_Image');   // remove image
    unregister_widget('WP_Widget_Media_Gallery');   // remove galley
    unregister_widget('WP_Widget_Calendar');   // remove calendar
    unregister_widget('WP_Nav_Menu_Widget');   // remove nav menu
    unregister_widget('WP_Widget_Pages');   // remove pages menu
    unregister_widget('WP_Widget_RSS');   // remove rss
    unregister_widget('WP_Widget_Text');   // remove text
    unregister_widget('WP_Widget_Tag_Cloud');   // remove tag cloud
    unregister_widget('WP_Widget_Search');   // remove search
    
    register_widget('my_profile');

    register_sidebar(array(
        'name' => __( 'Sidebar','default'),
        'id' => 'my-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
	));
	// remove hard core css
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}

add_action( 'widgets_init', 'my_sidebar_registration' );


// comments form
remove_action( 'comment_form', 'wp_comment_form_unfiltered_html_nonce' );

function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        return substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

function my_comment_form() 
{
    ob_start();
    $commenter = wp_get_current_commenter();
    comment_form(
        array('format'=>"html5", 
              'fields' => array(
                'author' => sprintf(
                    '<p class="comment-form-author">%s</p>',
                    sprintf(
                        '<input id="author" name="author" type="text" value="%s" size="30" maxlength="245"  placeholder="%s" />',
                        esc_attr( $commenter['comment_author'] ),
                        __( 'Name','default' ).'*'
                    )
                ),
                'email'  => sprintf(
                    '<p class="comment-form-email">%s</p>',
                    sprintf(
                        '<input id="email" name="email" type="email" value="%s" size="30" maxlength="100" aria-describedby="email-notes"  placeholder="%s" />',
                        esc_attr( $commenter['comment_author_email'] ),
                        __( 'Email','default' ).'*'
                    )
                ),
                'url'    => sprintf(
                    '<p class="comment-form-url">%s</p>',
                    sprintf(
                        '<input id="url" name="url" type="url" value="%s" size="30" maxlength="200" placeholder="%s" />',
                        esc_attr( $commenter['comment_author_url'] ),
                        __( 'Website','default' )
                    )
                ),
              ),
              'comment_notes_before' => '',
              'comment_field' =>
              '<div class="comment-error" submit-error>
                <template type="amp-mustache">
                    {{{msg}}}
                </template>
              </div>
              <p class="comment-form-comment">
              <textarea id="comment" class="comment-content" name="comment" maxlength="65525" placeholder="'.__('Comment Content','default').'*"></textarea>
              </p>',
              'action'=> follow_scheme_replace(get_site_url(null, '/wp-admin/admin-ajax.php?action=amp_comment_submit')),
    ));
    $comment_form = ob_get_clean();
    $comment_form = str_replace_first('<form action', '<form on="submit-success:AMP.navigateTo(url=event.response.url)" action-xhr', $comment_form);
    echo $comment_form ;
}

function amp_comment_submit(){
    $comment = wp_handle_comment_submission( wp_unslash( $_POST ) );

    if ( is_wp_error( $comment ) ) {
        $data = intval( $comment->get_error_data() );
        if ( ! empty( $data ) ) {
            status_header(500);
            wp_send_json(array('msg' => $comment->get_error_message(),
                            'response' => $data));
        }
    }
    else {
        $comment_page = get_page_of_comment($comment->comment_ID);
        $location = get_comment_link($comment);
        // Add specific query arguments to display the awaiting moderation message.
        if ( 'unapproved' === wp_get_comment_status( $comment ) && ! empty( $comment->comment_author_email ) ) {
            $location = add_query_arg(
                array(
                    'unapproved'      => $comment->comment_ID,
                    'moderation-hash' => wp_hash( $comment->comment_date_gmt ),
                ),
                $location
            );
        }

        $location = add_query_arg(
            array(
                'rand'      => rand(),
            ),
            $location
        );
        do_action( 'set_comment_cookies', $comment, wp_get_current_user(), $_POST['wp-comment-cookies-consent'] );

        wp_send_json(array(
            'success' => true, 
            'url'=>follow_scheme_replace($location)
        ));
    }
}
add_action('wp_ajax_amp_comment_submit', 'amp_comment_submit');
add_action('wp_ajax_nopriv_amp_comment_submit', 'amp_comment_submit');

// load minify css
function load_css($slug, $name = null)
{
    get_template_part($slug, $name);
}

// for password protected posts
function post_password()
{
	$post   = get_post();
	$label  = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
	$output = '<form  on="submit-success:AMP.navigateTo(url=event.response.url)" action-xhr="' . follow_scheme_replace(get_site_url(null, '/wp-admin/admin-ajax.php?action=amp_post_password')) . '" class="post-password-form" method="post">
	<p>' . __( 'This content is password protected. To view it please enter your password below:' ,'default') . '</p>
	<p><label for="' . $label . '">' . __( 'Password:' ,'default') . ' <input name="post_password" id="' . $label . '" type="password" size="20" /></label> <input type="submit" name="Submit" value="' . esc_attr_x( 'Enter', 'post password form','default' ) . '" /></p></form>
    ';
    
	return apply_filters( 'the_password_form', $output );
}

function amp_post_password(){
    require_once ABSPATH . WPINC . '/class-phpass.php';
    $hasher = new PasswordHash( 8, true );

    $expire  = apply_filters( 'post_password_expires', time() + 10 * DAY_IN_SECONDS );
    $referer = wp_get_referer();

    if ( $referer ) {
        $secure = ( 'https' === parse_url( $referer, PHP_URL_SCHEME ) );
    } else {
        $secure = false;
    }

    setcookie( 'wp-postpass_' . COOKIEHASH, $hasher->HashPassword( wp_unslash( $_POST['post_password'] ) ), $expire, COOKIEPATH, COOKIE_DOMAIN, $secure );

    wp_send_json(array(
        'success' => true, 
        'url'=>follow_scheme_replace($referer)
    ));
}
add_action('wp_ajax_amp_post_password', 'amp_post_password');
add_action('wp_ajax_nopriv_amp_post_password', 'amp_post_password');

// more excerpt
function reset_excerpt_length($length) {
	$new_length = 150;
    return $new_length;
}
add_filter('excerpt_length', 'reset_excerpt_length');
