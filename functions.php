<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'STARTUP_DIR_URI' ) ) {
	define( 'STARTUP_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'STARTUP_DIR_ASSETS_URI' ) ) {
	define( 'STARTUP_DIR_ASSETS_URI', STARTUP_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'STARTUP_DIR_CSS_URI' ) ) {
	define( 'STARTUP_DIR_CSS_URI', STARTUP_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'STARTUP_DIR_JS_URI' ) ) {
	define( 'STARTUP_DIR_JS_URI', STARTUP_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'STARTUP_DIR_IMGS_URI' ) ) {
	define( 'STARTUP_DIR_IMGS_URI', STARTUP_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'STARTUP_DIR_ICON_IMG_URI' ) ) {
	define( 'STARTUP_DIR_ICON_IMG_URI', STARTUP_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'STARTUP_DIR_PATH' ) ) {
	define( 'STARTUP_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'STARTUP_DIR_PATH_INC' ) ) {
	define( 'STARTUP_DIR_PATH_INC', STARTUP_DIR_PATH . 'inc/' );
}

//Startup Libraries Folder Directory
if ( ! defined( 'STARTUP_DIR_PATH_LIBS' ) ) {
	define( 'STARTUP_DIR_PATH_LIBS', STARTUP_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'STARTUP_DIR_PATH_CLASSES' ) ) {
	define( 'STARTUP_DIR_PATH_CLASSES', STARTUP_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'STARTUP_DIR_PATH_HOOKS' ) ) {
	define( 'STARTUP_DIR_PATH_HOOKS', STARTUP_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function startup_admin_script(){
    wp_enqueue_style( 'startup-admin', get_template_directory_uri().'/assets/css/startup-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'startup_admin', get_template_directory_uri().'/assets/js/startup-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'startup_admin_script' );



/**
 * Include File
 *
 */
require_once( STARTUP_DIR_PATH_INC . 'startup-breadcrumbs.php' );
require_once( STARTUP_DIR_PATH_INC . 'startup-widgets-reg.php' );
require_once( STARTUP_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( STARTUP_DIR_PATH_INC . 'post-like.php' );
require_once( STARTUP_DIR_PATH_INC . 'startup-functions.php' );
require_once( STARTUP_DIR_PATH_INC . 'startup-commoncss.php' );
require_once( STARTUP_DIR_PATH_INC . 'support-functions.php' );
require_once( STARTUP_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( STARTUP_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( STARTUP_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( STARTUP_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( STARTUP_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( STARTUP_DIR_PATH_HOOKS . 'hooks.php' );
require_once( STARTUP_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( STARTUP_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( STARTUP_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Startup object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Startup = new Startup();