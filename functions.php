<?php
/**
 * PJT functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PJT
 */

if ( ! function_exists( 'pjt_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

/**
 * ----------------------------------------------------------------------------------------
 * Define Site Variables
 * ----------------------------------------------------------------------------------------
 */

define( 'THEMEROOT', get_stylesheet_directory_uri());
define( 'IMAGES', THEMEROOT. '/img' );
define( 'FONTS', THEMEROOT. '/fonts' );
define( 'SCRIPTS', THEMEROOT. '/js' );
//define( 'SITEROOT', home_url());
//define( 'UPLOADS', SITEROOT.'/wp-content/uploads/2014/04');



/**
 * ----------------------------------------------------------------------------------------
 * Include the generated CSS in the page header.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'load_css_head' ) ) {
	function load_css_head() {
		$hero_bkgd = IMAGES . '/home-img.jpg';
		$blur_img = IMAGES . '/hero-blur.png';
		$mission_img = IMAGES . '/mission.jpg';
		$vision_img = IMAGES . '/vision.jpg';
		?>
		
		<!-- CSS Background Images -->
		<style type="text/css">

		/* Font Imports */
	
		@font-face {
		  font-family: "cicle";
		  src: url("<?php echo FONTS; ?>/cicle/cicle_semi_italic-webfont.eot");
		  src: url("<?php echo FONTS; ?>/cicle/cicle_semi_italic-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/cicle/cicle_semi_italic-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/cicle/cicle_semi_italic-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/cicle/cicle_semi_italic-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/cicle/cicle_semi_italic-webfont.svg#cicle") format("svg");
		  font-style: "italic";
		  font-weight: 400; }
		@font-face {
		  font-family: "cicle";
		  src: url("<?php echo FONTS; ?>/cicle/cicle_semi-webfont.eot");
		  src: url("<?php echo FONTS; ?>/cicle/cicle_semi-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/cicle/cicle_semi-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/cicle/cicle_semi-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/cicle/cicle_semi-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/cicle/cicle_semi-webfont.svg#cicle") format("svg");
		  font-style: "normal";
		  font-weight: 400; }
		@font-face {
		  font-family: "cicle";
		  src: url("<?php echo FONTS; ?>/cicle/cicle_fina_italic-webfont.eot");
		  src: url("<?php echo FONTS; ?>/cicle/cicle_fina_italic-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/cicle/cicle_fina_italic-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/cicle/cicle_fina_italic-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/cicle/cicle_fina_italic-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/cicle/cicle_fina_italic-webfont.svg#cicle") format("svg");
		  font-style: "italic";
		  font-weight: 100; }
		@font-face {
		  font-family: "cicle";
		  src: url("<?php echo FONTS; ?>/cicle/cicle_fina-webfont.eot");
		  src: url("<?php echo FONTS; ?>/cicle/cicle_fina-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/cicle/cicle_fina-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/cicle/cicle_fina-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/cicle/cicle_fina-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/cicle/cicle_fina-webfont.svg#cicle") format("svg");
		  font-style: "normal";
		  font-weight: 100; }
		@font-face {
		  font-family: "lato";
		  src: url("<?php echo FONTS; ?>/lato/lato-italic-webfont.eot");
		  src: url("<?php echo FONTS; ?>/lato/lato-italic-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/lato/lato-italic-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/lato/lato-italic-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/lato/lato-italic-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/lato/lato-italic-webfont.svg#lato") format("svg");
		  font-style: "italic";
		  font-weight: 400; }
		@font-face {
		  font-family: "lato";
		  src: url("<?php echo FONTS; ?>/lato/lato-regular-webfont.eot");
		  src: url("<?php echo FONTS; ?>/lato/lato-regular-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/lato/lato-regular-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/lato/lato-regular-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/lato/lato-regular-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/lato/lato-regular-webfont.svg#lato") format("svg");
		  font-style: "normal";
		  font-weight: 400; }
		@font-face {
		  font-family: "lato";
		  src: url("<?php echo FONTS; ?>/lato/lato-lightitalic-webfont.eot");
		  src: url("<?php echo FONTS; ?>/lato/lato-lightitalic-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/lato/lato-lightitalic-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/lato/lato-lightitalic-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/lato/lato-lightitalic-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/lato/lato-lightitalic-webfont.svg#lato") format("svg");
		  font-style: "italic";
		  font-weight: 100; }
		@font-face {
		  font-family: "lato";
		  src: url("<?php echo FONTS; ?>/lato/lato-light-webfont.eot");
		  src: url("<?php echo FONTS; ?>/lato/lato-light-webfont.eot?#iefix") format("embedded-opentype"), url("<?php echo FONTS; ?>/lato/lato-light-webfont.woff") format("woff"), url("<?php echo FONTS; ?>/lato/lato-light-webfont.woff2") format("woff2"), url("<?php echo FONTS; ?>/lato/lato-light-webfont.ttf") format("truetype"), url("<?php echo FONTS; ?>/lato/lato-light-webfont.svg#lato") format("svg");
		  font-style: "normal";
		  font-weight: 100; }
		.home .hero {
			background-image: url(<?php echo $hero_bkgd; ?>);
		}
		/*.home .hero .hero-copy .btn {
			background-image: url(<?php echo $blur_img; ?>);
		}*/
		.mission-vision-page .our-mission .img-wrapper{
		    background-image: url(<?php echo $mission_img ?>);
		  }

		  .mission-vision-page .our-vision .img-wrapper {
		    background-image: url(<?php echo $vision_img ?>);
		  }
		</style>

		<?php
	}

	add_action( 'wp_head', 'load_css_head' );
}




function my_acf_admin_head() {
    ?>
    <script type="text/javascript">
        (function($){

            $(document).ready(function(){

                $('.layout').addClass('-collapsed');
                $('.acf-postbox').addClass('closed');

            });

        })(jQuery);
    </script>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');



/**
 * ----------------------------------------------------------------------------------------
 * Remove image sizes from images added to post and from thumnails.
 * http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/
 * ----------------------------------------------------------------------------------------
 */
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
// add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
add_filter( 'the_content', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}



function pjt_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on PJT, use a find and replace
	 * to change 'pjt' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'pjt', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'pjt' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pjt_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'pjt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pjt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pjt_content_width', 640 );
}
add_action( 'after_setup_theme', 'pjt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pjt_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pjt' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pjt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pjt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pjt_scripts() {
	wp_enqueue_style( 'pjt-style', get_stylesheet_uri() );

	wp_enqueue_script( 'buy-button', 'http://sdks.shopifycdn.com/js-buy-sdk/v0/latest/shopify-buy.umd.polyfilled.min.js', array( ), '', true );

	// wp_enqueue_script( 'buy-button', 'http://sdks.shopifycdn.com/buy-button/0.1.34/buybutton.min.js', array( ), '', true );

  	wp_enqueue_script( 'shopify-product', get_template_directory_uri() . '/js/custom_shopify.js', array('buy-button' ), '', true );

  	wp_enqueue_script( 'shopify-page', get_template_directory_uri() . '/js/custom_shopify_page.js', array('buy-button', 'jquery', 'shopify-product' ), '', true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'analytics', get_template_directory_uri() . '/js/analytics.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pjt_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
