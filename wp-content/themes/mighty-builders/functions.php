<?php
if (!defined('MIGHTY_BUILDERS_VERSION')) {
    // Replace the version number of the theme on each release.
    define('MIGHTY_BUILDERS_VERSION', wp_get_theme()->get('Version'));
}
define('MIGHTY_BUILDERS_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('MIGHTY_BUILDERS_DIR', trailingslashit(get_template_directory()));
define('MIGHTY_BUILDERS_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('mighty_builders_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function mighty_builders_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'mighty_builders_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('mighty_builders_styles')) :
    function mighty_builders_styles()
    {
        // registering style for theme
        wp_enqueue_style('mighty-builders-style', get_stylesheet_uri(), array(), MIGHTY_BUILDERS_VERSION);
        wp_enqueue_style('mighty-builders-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('mighty-builders-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('mighty-builders-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('mighty-builders-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), MIGHTY_BUILDERS_VERSION, true);
        wp_enqueue_script('mighty-builders-scripts', get_template_directory_uri() . '/assets/js/mighty-builders-scripts.js', array(), MIGHTY_BUILDERS_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'mighty_builders_styles');

/**
 * Enqueue scripts for admin area
 */
function mighty_builders_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-mighty-builders' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('mighty-builders-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), MIGHTY_BUILDERS_VERSION, 'all');
        wp_enqueue_script('mighty-builders-admin-scripts', get_template_directory_uri() . '/assets/js/mighty-builders-admin-scripts.js', array(), MIGHTY_BUILDERS_VERSION, true);
        wp_enqueue_script('mighty-builders-welcome-notice', get_template_directory_uri() . '/inc/admin/js/mighty-builders-welcome-notice.js', array('jquery'), MIGHTY_BUILDERS_VERSION, true);
        wp_localize_script('mighty-builders-welcome-notice', 'mighty_builders_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'mighty_builders_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function mighty_builders_block_assets()
{
    wp_enqueue_style('mighty-builders-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'mighty_builders_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('mighty_builders_excerpt_more_postfix')) {
    function mighty_builders_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'mighty_builders_excerpt_more_postfix');
}
function mighty_builders_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mighty_builders_add_woocommerce_support');
