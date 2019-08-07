<?php
/*
 * Plugin Name: WP Primary Categories
 * Description: Select a primary category on posts and custom post types. 
 * Plugin URI: http://alexakrivoniak.com
 * Author: Alexa Krivoniak
 * Version: 1.0.0
 * Author URI: http://alexakrivoniak.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 */

// no access!
if ( ! defined( 'ABSPATH' ) ) exit;

// include functions file
require_once plugin_dir_path(__FILE__) . 'includes/pc-functions.php';

// include shortcodes file
require_once plugin_dir_path(__FILE__) . 'includes/pc-shortcodes.php';

?>