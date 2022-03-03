<?php

/**
 * Register Navigation Menu
 *
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;

class Admin{
    use Singleton;

    protected function __construct()
    {

        // load class
      
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Action.
         */
        add_action('admin_menu',[ $this,'gozal_add_admin_page']);
        add_action('admin_init',[ $this,'gozal_custom_setting']);
    }

    public function gozal_add_admin_page()
{
    // Gozal Admin Page menu  
    add_menu_page('Gozal Setting Page', 'Gozal Setting', 'manage_options', 'tools-gozal-theme', [$this,'gozal_theme_create_page'], GOZAL_DIR_URI . '/assets/img/Gozal.png', 110);
    // sub menu
    add_submenu_page(
        'tools-gozal-theme',
        'Gozal Setting Page',
        'General',
        'manage_options',
        'tools-gozal-theme',
        [$this,'gozal_theme_create_page']
    );
    add_submenu_page(
        'tools-gozal-theme',
        'My Theme Option',
        'Theme Options',
        'manage_options',
        'gozal-theme-options',
        [$this,'gozal_theme_option_page']
    );
    add_submenu_page(
        'tools-gozal-theme',
        'My Custom Css Page',
        'custom css',
        'manage_options',
        'gozal-submenu-slug',
        [$this,'gozal_theme_settings_page']
    );
}

public function gozal_custom_setting (){

    // Theme Options
    register_setting( 'gozal-theme-options','gozal-theme-option',[$this,'gozal_post_format'] );
    add_settings_section( 'gozal-theme-section','Theme option', [$this,'gozal_theme_sections_callback'],'gozal-theme-options' );
    add_settings_field('post-formats', 'Post Formats', [$this,'gozal_theme_option_callback'],'gozal-theme-options','gozal-theme-section' );
 
    // Custom CSS Options
    register_setting( 'gozal-custom-css-options','gozal-css' );
    add_settings_section( 'gozal-custom-css-section','Custom CSS', [$this,'gozal_custom_sections_callback'],'gozal-submenu-slug' );
    add_settings_field('custom-css', 'Insert your custom css', [$this,'gozal_custom_css_callback'],'gozal-submenu-slug','gozal-custom-css-section' );
  
}


public function gozal_theme_create_page()
{
    //
    //require_once GOZAL_DIR_URI.'/inc/pages/gozal-admin.php';
    $custom_page=Admin_Pages::get_instance();
    $custom_page->gozal_admin_pages();
}

public function gozal_theme_option_page()
{
    //Theme options page
    $custom_page=Admin_Pages::get_instance();
    $custom_page->gozal_theme_option_pages();
}

public function gozal_theme_settings_page()
{
    //add custom css page
    $custom_page=Admin_Pages::get_instance();
    $custom_page->gozal_theme_settings_pages();
}

// theme option callback
public function gozal_post_format($input){
   return $input;
}

public function gozal_theme_sections_callback(){
    echo 'Gozal theme opt';
}
public function gozal_theme_option_callback(){
 // $formats
}

// Custom css page callback
public function gozal_custom_sections_callback(){
    echo 'Custom Gozal Theme whit your own Css ';
}
public function gozal_custom_css_callback(){
    $css=get_option( 'gozal-css' );
    $css = (empty($css) ? '/* Gozal Theme Custom CSS */<br> .text {
        font-size:20px;
    }' : $css );
    echo '<div id="customCss" >'.$css.' </div>';
}




}