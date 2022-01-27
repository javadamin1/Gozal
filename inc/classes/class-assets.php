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
}
