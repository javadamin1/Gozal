<?php

/**
 * Bootstrap the Theme
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;


class GOZAL_THEME
{
    use Singleton;

    protected function __construct()
    {
        // Load class
        Assets::get_instance();
        Meta_boxes::get_instance();
        Menus::get_instance();
        Admin::get_instance();
      Cleanup::get_instance();

        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        /**
         * Action.
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
        add_action('after_setup_theme', [$this,'Po_theme_setup']);
    }
    
/**
 * Load translations for gozal_theme
 */
 public function PO_theme_setup(){
    load_theme_textdomain('gozal',get_template_directory() . '/languages');
}

    public function setup_theme()
    {


        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'height' => 50,
            'width' => 100,
            'flex-height' => false,
            'flex-width' => false,
            'header-text'          => array('site-title', 'site-description'),
            'unlink-homepage-logo' => true,
        ]);
        add_theme_support('custom-background', [
            'default-image'          => '',
            'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
            'default-position-x'     => 'left',    // 'left', 'center', 'right'
            'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
            'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
            'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
            'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
            'default-color'          => '#fff',
        ]);
        add_theme_support('post-thumbnails');

        /**
         * Register image sizes.
         */
        add_image_size('featured-thumbnail', 350, 230, true);

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
            // add post formats
        $options = get_option('post_formats');
        $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
        $output = array();
        foreach ($formats as $format) {
            $output[] = (@$options[$format] == 1 ? $format : '');
        }
        if (!empty($options)) {
            add_theme_support('post-formats', $output);
        }
        /// add custom header
        $header = get_option('custom_header');
        if (@$header == 1) add_theme_support('custom-header');

        /// add custom background
        $background = get_option('custom_background');
        if (@$background == 1) add_theme_support('custom-background');

        add_editor_style();
    }
}