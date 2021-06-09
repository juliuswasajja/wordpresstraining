<!-- script file that will fetch all scripts required for the plugin -->

<?php

//add scritpts here that is css, js, and any other files.

function techrafiki_plugin_scripts(){

wp_enqueue_style('techrafiki_styles', plugins_url(). '/techrafiki/css/style.css');
wp_enqueue_script('techrafiki_js_script', plugins_url(). '/techrafiki/js/main.js');
}


add_action( 'wp_enqueue_scripts', 'techrafiki_plugin_scripts'); 