<?php

/**
 * Register Navigation Menu
 *
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;

class Admin
{
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
        add_action('admin_menu', [$this, 'gozal_add_admin_page']);
        add_action('admin_init', [$this, 'gozal_custom_setting']);
    }

    public function gozal_add_admin_page()
    {
        // Gozal Admin Page menu  
        add_menu_page('Gozal Setting Page', 'Gozal Setting', 'manage_options', 'tools-gozal-theme', [$this, 'gozal_theme_create_page'], GOZAL_DIR_URI . '/assets/img/Gozal.png', 110);
        // sub menu
        add_submenu_page(
            'tools-gozal-theme',
            'Gozal Setting Page',
            'General',
            'manage_options',
            'tools-gozal-theme',
            [$this, 'gozal_theme_create_page']
        );
        add_submenu_page(
            'tools-gozal-theme',
            'My Theme Option',
            esc_html__('Theme Options' ,'gozal' ),
            'manage_options',
            'gozal-theme-options',
            [$this, 'gozal_theme_option_page']
        );
        add_submenu_page(
            'tools-gozal-theme',
            'My Custom Css Page',
            'custom css',
            'manage_options',
            'gozal-submenu-slug',
            [$this, 'gozal_theme_settings_page']
        );
    }

    public function gozal_custom_setting()
    {

        // Theme Options
        register_setting('gozal-theme-options', 'post_formats');
        register_setting('gozal-theme-options', 'custom_header');
        register_setting('gozal-theme-options', 'custom_backgruand');
        register_setting('gozal-theme-options', 'custom_navbar');

        add_settings_section('gozal-theme-section', 'Theme option', [$this, 'gozal_theme_sections_callback'], 'gozal-theme-options');
        add_settings_field('post-formats', 'Post Formats', [$this, 'gozal_theme_option_callback'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('custom-header', 'Custom Header', [$this, 'gozal_theme_custom_header'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('custom-backgruand', 'Custom background', [$this, 'gozal_theme_custom_background'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('custom-navbar', 'Custom Navbar', [$this, 'gozal_theme_custom_navbar'], 'gozal-theme-options', 'gozal-theme-section');

        // Custom CSS Options
        register_setting('gozal-custom-css-options', 'gozal_css' , [$this , 'gozal_custom_css']);
        add_settings_section('gozal-custom-css-section', 'Custom CSS', [$this, 'gozal_custom_sections_callback'], 'gozal-submenu-slug');
        add_settings_field('custom-css', 'Insert your custom css', [$this, 'gozal_custom_css_callback'], 'gozal-submenu-slug', 'gozal-custom-css-section');
    }


    public function gozal_theme_create_page()
    {
        //
        //require_once GOZAL_DIR_URI.'/inc/pages/gozal-admin.php';
        $custom_page = Admin_Pages::get_instance();
        $custom_page->gozal_admin_pages();
    }

    public function gozal_theme_option_page()
    {
        //Theme options page
        $custom_page = Admin_Pages::get_instance();
        $custom_page->gozal_theme_option_pages();
    }

    public function gozal_theme_settings_page()
    {
        //add custom css page
        $custom_page = Admin_Pages::get_instance();
        $custom_page->gozal_theme_settings_pages();
    }

    // theme option callback
   
    public function gozal_theme_sections_callback()
    {
        echo _e('Gozal theme options!', 'gozal' );
    }
    public function gozal_theme_option_callback()
    {
        $options = get_option('post_formats');
        $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
        $output = '';
        foreach ($formats as $format) {
            $cheched = (@$options[$format] == 1 ? 'checked' : '');
            $output .= '<label> <input type="checkbox"  name="post_formats[' . $format . ']" id="' . $format . '" value="1" ' . $cheched . ' > ' . $format . ' </label> <br>';
        }
        echo $output;
    }
    /// custom header and background
    public function gozal_theme_custom_header()
    {
        $options = get_option('custom_header');
        $output = '';
            $cheched = (@$options == 1 ? 'checked' : '');
            $output .= '<label> <input type="checkbox"  name="custom_header" id="custom-header" value="1" '.$cheched.' > 
            Activate Custom Header  <label>';
        echo $output;
    }
    public function gozal_theme_custom_background()
    {
        $options = get_option('custom_backgruand');
        $output = '';
            $cheched = (@$options == 1 ? 'checked' : '');
            $output .= '<label> <input type="checkbox"  name="custom_backgruand" id="custom-backgruand" value="1" '.$cheched.' > 
            Activate Custom Background <label>';
        echo $output;
    }
    public function gozal_theme_custom_navbar()
    {
        $options = get_option('custom_navbar');
        $output = '';
            $cheched = (@$options == 1 ? 'checked' : '');
            $output .= '<label> <input type="checkbox"  name="custom_navbar" id="custom-navbar" value="1" '.$cheched.' > 
            Activate Custom navbar <label>';
        echo $output;
    }
    // Custom css page callback and sanitize
    public function gozal_custom_sections_callback()
    {
        echo 'Custom Gozal Theme whit your own Css ';
    }
    public function gozal_custom_css_callback()
    {
        $css = get_option('gozal_css');
        $css = (empty($css) ? '/* Gozal Theme Custom CSS */' : $css);
        echo '<div id="customCss" >' . $css . ' </div><textarea name="gozal_css" id="gozal-text-css" style="display: none;visibility: hidden" >'.$css.'</textarea>';
    }
    public function gozal_custom_css($input)
    {
        return esc_textarea( $input );
    }

}
