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
        add_action('after_setup_theme',[$this , 'setup_theme'] );
    }
    public function setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo',[
        'height' =>200,
        'width' =>200,
        'flex-height' => false ,
        'flex-width' => false ,
    ]);
    }

}