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
        add_menu_page(__('Gozal Settings Page', 'gozal'), __('Gozal Settings', 'gozal'), 'manage_options', 'tools-gozal-theme', [$this, 'gozal_theme_create_page'], GOZAL_DIR_URI . '/assets/img/Gozal.png', 110);

        // sub menu
        add_submenu_page(
            'tools-gozal-theme',
            'Gozal Setting Page',
            __('General', 'gozal'),
            'manage_options',
            'tools-gozal-theme',
            [$this, 'gozal_theme_create_page']
        );
        add_submenu_page(
            'tools-gozal-theme',
            __('My Theme Options', 'gozal'),
            __('Theme Options', 'gozal'),
            'manage_options',
            'gozal-theme-options',
            [$this, 'gozal_theme_option_page']
        );
        add_submenu_page(
            'tools-gozal-theme',
            'My Custom Css Page',
            __('custom css', 'gozal'),
            'manage_options',
            'gozal-submenu-slug',
            [$this, 'gozal_theme_settings_page']
        );
        add_submenu_page(
            'tools-gozal-theme',
            'Learn theme',
            __('Theme training', 'gozal'),
            'manage_options',
            'gozal-submenu-learn',
            [$this, 'gozal_theme_learn_page']
        );
    }

    public function gozal_custom_setting()
    {

        /**
         * Add options to general page
         */

        register_setting('general-gozal-theme', 'insta');
        register_setting('general-gozal-theme', 'telegram');
        register_setting('general-gozal-theme', 'whatsapp');
        add_settings_section('gozal-theme-general', 'Theme general option', [$this, 'gozal_theme_general_callback'], 'tools-gozal-theme');
        add_settings_field('url-insta', __('instagram ID', 'gozal'), [$this, 'gozal_theme_insta_url'], 'tools-gozal-theme', 'gozal-theme-general');
        add_settings_field('id-telegram', __('Telegram ID', 'gozal'), [$this, 'gozal_theme_telegram_id'], 'tools-gozal-theme', 'gozal-theme-general');
        add_settings_field('num-whatsapp', __('Whats App Number', 'gozal'), [$this, 'gozal_theme_whatsapp_num'], 'tools-gozal-theme', 'gozal-theme-general');



        // Theme Options
        register_setting('gozal-theme-options', 'post_formats');
        register_setting('gozal-theme-options', 'custom_header');
        register_setting('gozal-theme-options', 'custom_backgruand');
        register_setting('gozal-theme-options', 'custom_navbar');
        register_setting('gozal-theme-options', 'active_contact');
        register_setting('gozal-theme-options', 'addres_google_map');
        register_setting('gozal-theme-options', 'xml_url');

        add_settings_section('gozal-theme-section', 'Theme option', [$this, 'gozal_theme_sections_callback'], 'gozal-theme-options');
        add_settings_field('post-formats', 'Post Formats', [$this, 'gozal_theme_option_callback'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('custom-header', 'Custom Header', [$this, 'gozal_theme_custom_header'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('custom-backgruand', 'Custom background', [$this, 'gozal_theme_custom_background'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('custom-navbar', __('Custom Navbar', 'gozal'), [$this, 'gozal_theme_custom_navbar'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('custom-contact', __('Contact Form', 'gozal'), [$this, 'gozal_theme_custom_contact'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('addres-google', __('google map Url', 'gozal'), [$this, 'gozal_theme_addres_google'], 'gozal-theme-options', 'gozal-theme-section');
        add_settings_field('xml-url', __('xml url', 'gozal'), [$this, 'gozal_theme_xml'], 'gozal-theme-options', 'gozal-theme-section');

        // Custom CSS Options
       // register_setting('gozal-custom-css-options', 'gozal_css', [$this, 'gozal_custom_css']);
        add_settings_section('gozal-custom-css-section', 'Custom CSS', [$this, 'gozal_custom_sections_callback'], 'gozal-submenu-slug');
       add_settings_field('custom-css', 'Insert your custom css', [$this, 'gozal_custom_css_callback'], 'gozal-submenu-slug', 'gozal-custom-css-section');

  // Learn Theme Options

    //    gozal-submenu-learn
    //    register_setting('gozal-theme-options', 'post_formats');
    add_settings_section('gozal-learn-section', 'Theme Learn', [$this, 'gozal_learn_sections_callback'], 'gozal-submenu-learn');
    add_settings_field('video', '', [$this, 'gozal_learn_callback'], 'gozal-submenu-learn', 'gozal-learn-section');

    }



    public function gozal_theme_create_page()
    {
        //require_once GOZAL_DIR_URI.'/inc/pages/gozal-admin.php';

        gozal_admin_pages();
    }

    public function gozal_theme_option_page()
    {
        //Theme options page
        gozal_theme_option_pages();
    }

    public function gozal_theme_settings_page()
    {
        //add custom css page
        gozal_theme_settings_pages();
    }

    public function gozal_theme_learn_page()
    {
        //add Theme Learn Part
        gozal_theme_learn_settings();
    }

    //Generall part
    public function gozal_theme_general_callback()
    {
        echo esc_html_e('General Options', 'gozal');
    }

    function gozal_theme_insta_url()
    {
        $options = get_option('insta');
        $output = '';
        $output .= '<label> <input type="text"   name="insta" id="insta" value="' . $options . '" placeholder="' . __('instagram ID', 'gozal') . '" > 
            ' . _e('Enter your instagram id', 'gozal') . ' <label>';
        echo $output;
    }
    function gozal_theme_telegram_id()
    {
        $options = get_option('telegram');
        $output = '';
        $output .= '<label> <input type="text"  name="telegram" id="telegram" value="' . $options . '" placeholder="' . __('Telegram ID', 'gozal') . '" > 
            ' . _e('Enter your Telegram ID', 'gozal') . ' <label>';
        echo $output;
    }
    function gozal_theme_whatsapp_num()
    {
        $options = get_option('whatsapp');
        $output = '';
        $output .= '<label> <input type="number"   name="whatsapp" id="whatsapp" value="' . $options . '" placeholder="' . esc_attr__('+1 411111111', 'gozal') . '" > 
            ' . _e('Enter the number with the country code', 'gozal') . ' <label>';
        echo $output;
    }

    // theme option callback

    public function gozal_theme_sections_callback()
    {
        echo esc_html_e('Gozal theme options', 'gozal');
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
        $output .= '<label> <input type="checkbox"  name="custom_header" id="custom-header" value="1" ' . $cheched . ' > 
            Activate Custom Header  <label>';
        echo $output;
    }
    public function gozal_theme_custom_background()
    {
        $options = get_option('custom_backgruand');
        $output = '';
        $cheched = (@$options == 1 ? 'checked' : '');
        $output .= '<label> <input type="checkbox"  name="custom_backgruand" id="custom-backgruand" value="1" ' . $cheched . ' > 
            Activate Custom Background <label>';
        echo $output;
    }
    public function gozal_theme_custom_navbar()
    {
        $options = get_option('custom_navbar');
        $output = '';
        $cheched = (@$options == 1 ? 'checked' : '');
        $output .= '<label> <input type="checkbox"  name="custom_navbar" id="custom-navbar"value="1" ' . $cheched . ' >' . _e('Activate Custom menubar', 'gozal') . ' 
            <label>';
        echo $output;
    }

    public function gozal_theme_custom_contact()
    {
        $options = get_option('active_contact');
        $output = '';
        $cheched = (@$options == 1 ? 'checked' : '');
        $output .= '<label> <input type="checkbox"  name="active_contact" id="custom-contact" value="1" ' . $cheched . ' >' . _e('Activate contact form', 'gozal') . ' 
            <label>';
        echo $output;
    }

    public function gozal_theme_addres_google()
    {
        $options = get_option('addres_google_map');
        $output = '';
        $output .= '<label> <input type="url"  name="addres_google_map" id="addres-google-map" value="' . $options . '" placeholder="URL Google Map" > 
            ' . _e('Enter the Google Maps URL', 'gozal') . ' <label>';
        echo $output;
    }
/**
 *  Xml-url
 */
public function gozal_theme_xml()
{
    $options = get_option('xml_url');
    $output = '';
    $output .= '<label> <input type="url"  name="xml_url" id="xml" value="' .$options . '" placeholder="URL Xml" > 
        ' . _e('Enter the Xml Video URL', 'gozal') . ' <label>';
    echo $output;
}

    // Custom css page callback and sanitize
    public function gozal_custom_sections_callback()
    {
        echo 'Custom Gozal Theme whit your own Css ';
    }
    public function gozal_custom_css_callback()
    {
       // $file = file(GOZAL_DIR_URI."/style.css");
        $myfile = fopen(GOZAL_DIR_PATH."/assets/css/user.css", "r");
        $css= fread($myfile,filesize(GOZAL_DIR_PATH."/assets/css/user.css"));
        fclose($myfile);
         echo '<div id="customCss" >'.$css.' </div><textarea name="gozal_css" id="gozal-text-css" style="display: none;visibility: hidden" >' .$css. '</textarea>';
       
 echo '<script> 

 jQuery(document).ready(function ($) {
    var updateCss = function () { $("#gozal-text-css").val(editor.getSession().getValue());
    }
        $("#save-custom-css-form").submit(updateCss);

     var request;
     $("#save-custom-css-form").submit(function(event){
        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();
    
        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);
    
  
        var $inputs = $form.find("input, select, button, textarea");
    
        // Serialize the data in the form
        var serializedData = $form.serialize();
    
      
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
    
        // Fire off the request to /form.php
        request = $.ajax({
            url: "'.GOZAL_DIR_URI.'/ajax.php",
            type: "post",
            data: serializedData
        });
    
        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            var result= $.parseJSON(response); 
            if(result){
                alert("Save All Change");
                location.reload();
            }else{
                alert("Can\'t Save");
                location.reload();
            }
           // console.log(); //location.reload();
        });
    
        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });
    
        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });
    
    });
        });</script> ';
  
    }

/**
 * Theme Learn Part.
 * 
 */
    public function gozal_learn_sections_callback()
{
    echo 'You Can Learn Theme All Option Here';
}

public function gozal_learn_callback ()
{
    echo "Enter here";
}


}///admin bracet




