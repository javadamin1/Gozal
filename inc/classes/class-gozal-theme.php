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
        // Load class
    Assets::get_instance();
    Meta_boxes::get_instance();
    Menus::get_instance();
    Admin::get_instance();

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
        'height' =>50,
        'width' =>100,
        'flex-height' => false ,
        'flex-width' => false ,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ]);
        add_theme_support( 'custom-background', [
            'default-image'          => '',
            'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
            'default-position-x'     => 'left',    // 'left', 'center', 'right'
            'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
            'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
            'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
            'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
            'default-color'          => '#fff',
        ] );
        add_theme_support('post-thumbnails');

        /**
         * Register image sizes.
         */
add_image_size( 'featured-thumbnail', 350, 230, true );

        add_theme_support('customize-selective-refresh-widgets');
add_theme_support('automatic-feed-links');
add_theme_support(
    'html5',
    [
        'search-form',
        'comment-form',
       'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ]
);
    add_editor_style();

    }

}