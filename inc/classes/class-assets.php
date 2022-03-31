<?php

/**
 * Enqueue theme assets
 *
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;

class Assets
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
        add_action('wp_enqueue_scripts', [$this, 'register_style']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action('admin_enqueue_scripts', [$this, 'register_admin_style']);
    }
    public function register_style()
    {

        if (is_404()) :

            wp_register_style('404', GOZAL_DIR_URI . '/assets/css/404.css', [], filemtime(GOZAL_DIR_PATH . '/assets/css/404.css'), 'all');

            wp_enqueue_style('404');

        elseif (is_front_page()) :
            wp_register_style('orginal-css', get_stylesheet_uri(), ['user-css'], filemtime(GOZAL_DIR_PATH . '/style.css'));
            wp_register_style('gozal-css', GOZAL_DIR_URI . '/assets/css/gozal.css', ['bootstrap-css'], false, 'all');
            wp_register_style('user-css', GOZAL_DIR_URI . '/assets/css/user.css', ['gozal-css'], false, 'all');

            wp_register_style('bootstrap-css', GOZAL_DIR_URI . '/assets/css/bootstrap.css', [], false, 'all');
            wp_register_style('fontawesome', GOZAL_DIR_URI . '/assets/css/all.css', [], false, 'all');
            //Enqueue css
            // wp_enqueue_style('lightbox');
            wp_enqueue_style('fontawesome');
            wp_enqueue_style('user-css');
            wp_enqueue_style('gozal-css');
            wp_enqueue_style('bootstrap-css');
            wp_enqueue_style('orginal-css');

        else :
            //register css
            wp_register_style('orginal-css', get_stylesheet_uri(), ['bootstrap-css'], filemtime(GOZAL_DIR_PATH . '/style.css'));
            wp_register_style('gozal-css', GOZAL_DIR_URI . '/assets/css/gozal.css', [], false, 'all');

            wp_register_style('bootstrap-css', GOZAL_DIR_URI . '/assets/css/bootstrap.css', [], false, 'all');
            wp_register_style('fontawesome', GOZAL_DIR_URI . '/assets/css/all.css', [], false, 'all');

            //Enqueue css

            wp_enqueue_style('fontawesome');
            wp_enqueue_style('gozal-css');
            wp_enqueue_style('bootstrap-css');
            wp_enqueue_style('orginal-css');



        endif;
    }
    public function register_scripts()
    {
        if (!is_404()) :
            //register java script
            wp_register_script('gozal-js', GOZAL_DIR_URI . '/assets/js/main.js', [], filemtime(GOZAL_DIR_PATH . '/assets/js/main.js'), true);
            // wp_register_script('jquery', GOZAL_DIR_URI . '/assets/js/jquery-3.6.0.min.js', ['jquery'], false, true);
            wp_register_script('bootstrap-js', GOZAL_DIR_URI . '/assets/js/bootstrap.min.js', ['jquery'], false, true);

            //Enqueue js
            wp_enqueue_script('gozal-js');
            wp_enqueue_script('bootstrap-js');
        // wp_enqueue_script('jquery');
        else :
            wp_register_script('404', GOZAL_DIR_URI . '/assets/js/404.js', array('jquery'), filemtime(GOZAL_DIR_PATH . '/assets/js/404.js'), true);
            wp_enqueue_script('404');
        endif;
    }
  
    public function register_admin_style($hook)
    {
        $src=strpos($hook,'gozal-submenu-slug');
    if ($src>=50) {
            wp_enqueue_style('ace', GOZAL_DIR_URI . '/assets/css/ace.css', array(), '1.0.0', 'all');
            wp_enqueue_script('ace', GOZAL_DIR_URI . '/assets/js/ace/ace.js', array('jquery'), '1.2.1', true);
            wp_enqueue_script('gozal-custom-css-script', GOZAL_DIR_URI . '/assets/js/gozal-custom-css.js', array('jquery'), '1.0.0', true);
        }
    }
}
