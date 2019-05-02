<?php
/*
Plugin Name: youTube subs
Plugin URI: https://mohamedmostapha.com
Description: Display YouTube subscription button and subscribers count
Version: 1.0.0
Author: Mohamed Mostapha
Author URI: http://mohamedmostapha.com
*/


// Exit if accessed directly

if(!defined('ABSPATH')){
    exit;
}


// Load scripts

require_once(plugin_dir_path(__FILE__) . '/includes/youtubesubs-scripts.php'); // telling WP to go the directory of this plugin to grab a file and providing the file path

// Load Class

require_once(plugin_dir_path(__FILE__) . '/includes/youtubesubs-class.php'); // telling WP to go the directory of this plugin to grab a file and providing the file path

// Register Widget

function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}

// Hook in function

add_action('widgets_init' , 'register_youtubesubs');

