<?php

/**
 * Theme Functions.
 * 
 * @package Gozal
 */

 
if(!defined('GOZAL_DIR_PATH')){
   define('GOZAL_DIR_PATH',untrailingslashit(get_template_directory().'/'));
}

require_once GOZAL_DIR_PATH . '/inc/help/autoloader.php';
require_once GOZAL_DIR_PATH . '/inc/help/template-tags.php';

if ( ! defined( 'GOZAL_DIR_URI' ) ) {
    define( 'GOZAL_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

function gozal_get_theme_instance()
{
 \GOZAL_THEME\Inc\GOZAL_THEME::get_instance();

}

gozal_get_theme_instance();



