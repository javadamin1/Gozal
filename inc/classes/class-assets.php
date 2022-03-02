<?php
/**
 * Enqueue theme assets
 *
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;
use GOZAL_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;
    protected function __construct(){

        // load class

        $this->setup_hooks();
    }
    protected function setup_hooks(){

        /**
         * Action.
         */
        add_action('wp_enqueue_scripts',[ $this,'register_style']);
        add_action('wp_enqueue_scripts',[ $this,'register_scripts']);
        add_action( 'admin_enqueue_scripts',[$this,'register_admin_style'] );
    }
    public function register_style(){
        //register css

        wp_register_style('gozal-css', get_stylesheet_uri(), ['bootstrap-css'], filemtime(GOZAL_DIR_PATH . '/style.css'));
        wp_register_style('bootstrap-css', GOZAL_DIR_URI.'/assets/css/bootstrap.css' , [], false ,'all');

        //Enqueue css
        wp_enqueue_style('gozal-css');
        wp_enqueue_style('bootstrap-css');
    }
    public function register_scripts(){
        //register java script
        wp_register_script('gozal-js', GOZAL_DIR_URI . '/assets/js/main.js', [], filemtime(GOZAL_DIR_PATH . '/assets/js/main.js'), true);
        // wp_register_script('jquery', GOZAL_DIR_URI . '/assets/js/jquery-3.6.0.min.js', ['jquery'], false, true);
        wp_register_script('bootstrap-js', GOZAL_DIR_URI . '/assets/js/bootstrap.min.js', ['jquery'], false, true);

        //Enqueue js
        wp_enqueue_script('gozal-js');
        wp_enqueue_script('bootstrap-js');
        // wp_enqueue_script('jquery');
    }
    public function register_admin_style($hook){
        //echo $hook;
       if('gozal-setting_page_gozal-submenu-slug'==$hook){
           wp_enqueue_style('ace', GOZAL_DIR_URI.'/assets/css/ace.css', array(),'1.0.0', 'all' );
           wp_enqueue_script( 'ace', GOZAL_DIR_URI.'/assets/js/ace/', array(), '1.2.1',true);
           wp_enqueue_script( 'gozal-custom-css-script', GOZAL_DIR_URI.'/assets/js/gozal-custom-css.js',array('jquery'),'1.0.0',true);
       }
  
    }
}
