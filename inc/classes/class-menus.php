<?php

/**
 * Register Navigation Menu
 *
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;

class Menus{
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
        add_action( 'init', [$this,'register_menus' ]);
    }

    public function register_menus() {
        register_nav_menus([
            'gozal-header-menu' => esc_html__( 'Header Menu' , 'gozal' ),
            'gozal-footer-menu' => esc_html__( 'Footer Menu', 'gozal' ),
        ]);
    }
    public function get_menu_id($location){
        //Get all the locations.

        $locations=get_nav_menu_locations();

        $menu_id = $locations[$location];

        return ! empty($menu_id) ? $menu_id : '';
    }


}


