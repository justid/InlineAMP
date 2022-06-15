<?php
if ( ! isset( $content_width ) ) $content_width = 1680;

function theme_support() {
	remove_all_actions('wp_head');
	add_action( 'wp_head', '_wp_render_title_tag', 1 );

	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support( 'title-tag' );
    remove_theme_support('widgets-block-editor');

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

    // add auto featured image setting
    $wp_customize->add_section( 'auto_featured_image' , array(
        'title'      => __( 'Auto featured image ','default'),
        'description' => __('Auto-generation featured image for blog posts','default'),
    ) );

    $wp_customize->add_setting( 'rapidapi_translator' , array(
        'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'do_nothing',
    ) );

    $wp_customize->add_control(
        'input_rapidapi_translator', 
        array(
            'label'    => __( 'RapidAPI','default'),
            'description' => __( '<a href="https://rapidapi.com/microsoft-azure-org-microsoft-cognitive-services/api/microsoft-translator-text/" target="_blank">Get Microsoft Translator API Key</a><br><a href="https://rapidapi.com/ai-box-ai-box-default/api/text-analysis10/" target="_blank">Get Text Analysis API Key</a>' ),
            'section'  => 'auto_featured_image',
            'settings' => 'rapidapi_translator',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'pixabay_apikey' , array(
        'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'do_nothing',
    ) );

    $wp_customize->add_control(
        'input_pixabay_apikey', 
        array(
            'label'    => __( 'Pixabay apikey','default'),
            'section'  => 'auto_featured_image',
            'settings' => 'pixabay_apikey',
            'type'     => 'text',
        )
    );
    
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

// search
class my_search extends WP_Widget {
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'widget_search',
			'description'                 => __( 'A search form for your site.' ,'default'),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'search', _x( 'Search', 'Search widget','default' ), $widget_ops );
	}

	public function widget( $args, $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		echo $args['before_widget'];
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

        echo 
        '<form target="_top" role="search" method="get" class="search-form" action="'.trailingslashit(follow_scheme_replace(get_site_url())).'">
            <input required type="text" class="search-field" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder','default' ) . '" value="' . get_search_query() . '" name="s" />
            <button type="submit" class="search-submit"></button>
        </form>';

        echo $args['after_widget'];
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title    = $instance['title'];
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','default' ); ?> <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></label></p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = $old_instance;
		$new_instance      = wp_parse_args( (array) $new_instance, array( 'title' => '' ) );
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		return $instance;
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
    
    register_widget('my_search');

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

// hook gravatar
function site_get_avatar($avatar, $id_or_email, $args)
{
    $class = array( 'avatar', 'avatar-' . (int) $args['size'], 'photo' );
    if ( ! $args['found_avatar'] || $args['force_default'] ) {
        $class[] = 'avatar-default';
    }
 
    if ( $args['class'] ) {
        if ( is_array( $args['class'] ) ) {
            $class = array_merge( $class, $args['class'] );
        } else {
            $class[] = $args['class'];
        }
    }
    $avatar = sprintf(
        "<img alt='%s' src='%s' class='%s' height='%d' width='%d'/>",
        esc_attr( $args['alt'] ),
        esc_url( "https://gravatar.cat.net/avatar/".md5($id_or_email->comment_author_email) ),
        esc_attr( implode( ' ', $class ) ),
        (int) $args['height'],
        (int) $args['width'],
    );
    return $avatar;
}

add_filter('pre_get_avatar', 'site_get_avatar', 10, 3);

// disable block editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// add editor style for theme
function editor_styles() {
    add_editor_style("style-editor.css");
}
add_action( "init", "editor_styles");

function get_translate($text)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://microsoft-translator-text.p.rapidapi.com/translate?to%5B0%5D=en&api-version=3.0&profanityAction=NoAction&textType=plain",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "[\r
        {\r
            \"Text\": \"".$text."\"\r
        }\r
    ]",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: microsoft-translator-text.p.rapidapi.com",
            "X-RapidAPI-Key: ".get_theme_mod('rapidapi_translator', ''),
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if (!$err) {
        // get the translation success
        $response = json_decode($response, true);
        return $response[0]['translations'][0]["text"];
    } else {
        return '';
    }
}

function get_word_anlytic($text)
{
    $curl = curl_init();
    
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://text-analysis10.p.rapidapi.com/text_analysis",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "text=".urlencode($text)."&lang=en",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: text-analysis10.p.rapidapi.com",
            "X-RapidAPI-Key: a895888271msh523e523a1941d5ap1d422cjsn6e642a197918",
            "content-type: application/x-www-form-urlencoded"
        ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        return [];
    } else {
        $ret = json_decode($response, true);
        return $ret['tokens'];
    }
}

function get_image_pixabay($word)
{
    $ret = file_get_contents("https://pixabay.com/api?key=".get_theme_mod('pixabay_apikey', '')."&q=".urlencode($word)."&image_type=photo&orientation=horizontal&safesearch=true&per_page=10");
    $search_result = json_decode($ret, true);
    if (!empty($search_result)) {
        return $search_result['hits'][rand() % 3]['webformatURL'];
    } else {
        return '';
    }
}

// auto generate featured image when post is created/updated
function auto_featured_image($post_ID, $post, $update)
{
    $check = true;
    $check = $check && (get_the_post_thumbnail($post_ID) == '');
    $check = $check && (get_theme_mod('pixabay_apikey', '') != '');
    $check = $check && (get_theme_mod('rapidapi_translator', '') != '');
    
    if ($check === true)
    {
        $translate = get_translate($post->post_title);
        $keywords = get_word_anlytic($translate);
        $final_image = '';
        
        foreach ($keywords as $key=>$words) {
            // proper noun
            if ($words == 'PROPN') {
                $final_image = get_image_pixabay($key);
                if (rand() % 2 == 0) {
                    break;
                }
                
            }
            if ($words == 'NOUN') {
                $final_image= get_image_pixabay($key);
                if (rand() % 2 == 0) {
                    break;
                }
            }
        }

        if (empty($final_image)) {
            foreach ($keywords as $key=>$words) {
                if ($words != 'PUNCT') { 
                    $final_image = get_image_pixabay($key);
                    break;
                }
            }
        }
        
        // final feautured image;
        $upload_dir = wp_upload_dir();
        $image_name = md5($final_image);
        $filename = $upload_dir['path'] . '/' . $image_name . '.jpg';

        $featured_img = imagecreatefromjpeg($final_image);
        imagejpeg( $featured_img, $filename, 100 );
        
        $attachment = array(
            'guid'           => $upload_dir['url'] . '/' . $image_name . '.jpg', 
            'post_mime_type' => 'image/jpeg',
            'post_title'     => $image_name,
            'post_content'   => '',
            'post_status'    => 'inherit'
            );
        $attach_id = wp_insert_attachment($attachment, $filename, $post_ID);
        set_post_thumbnail( $post_ID, $attach_id );
    }
}
add_action('wp_insert_post', 'auto_featured_image', 10, 3);


