<?php
/**
 * LRT-WP-Background Processing
 *
 * @package LRT-WP-Background-Processing
 */

/*
Plugin Name: LRT WP Background Processing
Plugin URI: https://github.com/A5hleyRich/wp-background-processing
Description: Asynchronous requests and background processing in WordPress.
Author: Delicious Brains Inc.
Version: 1.0
Author URI: https://deliciousbrains.com/
GitHub Plugin URI: https://github.com/A5hleyRich/wp-background-processing
GitHub Branch: master
*/

require_once plugin_dir_path( __FILE__ ) . 'classes/LRT_WP_Async_Request.php';
require_once plugin_dir_path( __FILE__ ) . 'classes/LRT_WP_Background_Process.php';
