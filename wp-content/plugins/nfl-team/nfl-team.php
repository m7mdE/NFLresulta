<?php
/**
 * Plugin Name: NFL Team
 * Description: Plugin calls API team
 * Version: 1.0
 * Author: Moe
 * Author URI: https://moemran.com/
 */
    
    // Calling two scripts
    function init_NFL() {

        wp_enqueue_script('config_js', plugin_dir_url( __FILE__ ) . '/js/config.js', NULL, 1.0, true);
        wp_enqueue_script('main_js', plugin_dir_url( __FILE__ ) . '/js/main.js', NULL, 1.0, true);
    
    }
     add_action('wp_enqueue_scripts', 'init_NFL');

    //  Adding a block element
    function main_func() {

        $info = '<div class="container md:w-11/12 sm:w-11/12 mx-auto p-4" style="max-width:100%"><div id="nfl-data" class="grid grid-cols-2 md:grid-cols-4 sm:grid-cols-2 gap-2 md:gap-9 sm:gap-3"></div></div>';
        return $info;
    } 
    add_shortcode('nfl_team', 'main_func');

    
 
 ?>