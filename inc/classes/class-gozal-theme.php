<?php
/**
 * Bootstrap the Theme
 * @package Gozal
 */
namespace GOZAL_THEME\Inc;
use GOZAL_THEME\Inc\Traits\Singleton;


class GOZAL_THEME {
    use Singleton;

protected function __construct(){
        // load class
    Assets::get_instance();

        $this->setup_hooks();
    }
    protected function setup_hooks(){

        /**
         * Action.
         */
        add_action(');
    }

}