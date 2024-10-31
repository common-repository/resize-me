<?php
/*
Plugin Name: WP Resize Me
Plugin URI: http://visioniz.com/
Description: This Plugin, intended for displaying Responsive sites, adds the Resize Me graphic to the bottom left corner of the website.
Version: 1.0
Author: Visioniz
Author URI: http://visioniz.com/
*/

/*-------------------------------------------------------------------------
DEFINES PLUGIN CONSTANT
-------------------------------------------------------------------------*/

define('WPRESIZEME', plugin_dir_url(__FILE__));

$resize_me_pluginroot = plugin_dir_url(__FILE__);

/*-------------------------------------------------------------------------
INCLUDES PLUGIN FILES
-------------------------------------------------------------------------*/

include 'includes/functions.php'; // WP-RESIZE ME FUNCTIONS