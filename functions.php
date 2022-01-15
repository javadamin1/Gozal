<?php

/**
 * Theme Functions.
 * 
 * @package Gozal
 */
// print_r(get_template_directory_uri(  ));
function gozal_enqueue_scripts()
{
   //register css
   
   wp_register_style('gozal-css', get_stylesheet_uri(), ['bootstrap-css'], filemtime(get_template_directory() . '/style.css'), 'all');
   wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css' , [], false , 'all');

   //register java script
   wp_register_script('gozal-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
   // wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', ['jqury'], false, true);
   wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], false, true);


   //Enqueue css  
    wp_enqueue_style('gozal-css');
   wp_enqueue_style('bootstrap-css');

   

   //Enqueue js
   wp_enqueue_script('gozal-js');
   wp_enqueue_script('bootstrap-js');
   // wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'gozal_enqueue_scripts');

?>