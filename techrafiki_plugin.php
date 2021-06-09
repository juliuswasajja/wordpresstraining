<?php

/*
Plugin Name: TechRafiki Plugin
Plugin URI: 
Description: Techrafiki news
Author: Wasajja Kimuli Julius
Author URI: techrafiki.com
Version: 1.0
*/


//that thing for direct access

if(!defined('ABSPATH')){
    exit;
}
//load scripts from the outside files
require_once(plugin_dir_path(__FILE__).'/includes/techrafikiplugin-scripts.php');

//load scripts from the outside files
require_once(plugin_dir_path(__FILE__).'/includes/techrafiki_class.php');


 //register
 
 function register_techrafiki(){
     register_widget('Techrafiki_Widget');
 }
//hook in function

add_action('widgets_init','register_techrafiki'); 