<?php
/**
 * gyereksapka functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */
if (!function_exists('gyereksapka_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gyereksapka_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on gyereksapka, use a find and replace
     * to change 'gyereksapka' to the name of your theme in all the template files.
     */
    load_theme_textdomain('gyereksapka', get_template_directory().'/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => esc_html__('Primary', 'gyereksapka'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('gyereksapka_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));
}
endif;
add_action('after_setup_theme', 'gyereksapka_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gyereksapka_content_width()
{
    $GLOBALS['content_width'] = apply_filters('gyereksapka_content_width', 640);
}
add_action('after_setup_theme', 'gyereksapka_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gyereksapka_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'gyereksapka'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'gyereksapka'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'gyereksapka_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function gyereksapka_scripts()
{
    wp_enqueue_style('gyereksapka-normalize', get_template_directory_uri().'/dev/normalize.css');

    wp_enqueue_style('gyereksapka-zurb', get_template_directory_uri().'/dev/zurb/css/app.css');

    wp_enqueue_style('gyereksapka-main-style', get_template_directory_uri().'/dev/main.css');

    wp_enqueue_script('gyereksapka-jquery', get_template_directory_uri().'/dev/zurb/bower_components/jquery/dist/jquery.min.js');

    wp_enqueue_script('gyereksapka-f6_main_script', get_template_directory_uri().'/dev/zurb/bower_components/foundation-sites/dist/foundation.min.js');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'gyereksapka_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory().'/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory().'/inc/jetpack.php';