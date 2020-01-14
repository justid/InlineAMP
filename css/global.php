body {
    width: 100vw;
    display: flex;
    flex-direction: column;
    font-family: 'PT Serif',-apple-system-font,"Helvetica Neue","PingFang SC","Hiragino Sans GB","Microsoft YaHei",sans-serif, serif;
}

*:focus{
    outline: none;
}
@font-face {
    font-family: 'iconfont';
    src: url('<?php echo get_template_directory_uri() ?>/fonts/iconfont.eot?20200105#iefix') format('embedded-opentype'),
        url('<?php echo get_template_directory_uri() ?>/fonts/iconfont.woff2?20200105') format('woff2'),
        url('<?php echo get_template_directory_uri() ?>/fonts/iconfont.woff?20200105') format('woff'),
        url('<?php echo get_template_directory_uri() ?>/fonts/iconfont.ttf?20200105') format('truetype'),
        url('<?php echo get_template_directory_uri() ?>/fonts/iconfont.svg?20200105#iconfont') format('svg');
}

@font-face {
  font-family: 'PT Serif';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('PT Serif'), local('PTSerif-Regular'), url('<?php echo get_template_directory_uri() ?>/fonts/ptserif.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

.iconfont {
    font-family: "iconfont";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* CSS reset */
textarea,
input[type="password"],
input[type="text"],
input[type="url"],
input[type="email"],
input[type="submit"]
{
    -webkit-appearance: none;
    border-radius: 0;
}

<?php
$styles = wp_get_custom_css();
if ($styles || is_customize_preview()) {
    echo strip_tags($styles);
}

if (is_user_logged_in()){
	echo '
	@media only screen and (max-width: 640px) {
		#commonTop #menu-top-menu {
			padding-top: 46px;
		}
		body>#header-menu-button {
			top: 56px;
		}
	}
	';
}

?>