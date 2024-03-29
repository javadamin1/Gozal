<?php

/**
 * Theme Support file.
 * @package Gozal
 */

namespace GozalTheme\Inc\Classes;


use GozalTheme\Inc\Traits\Singleton;

class GozalTheme
{
    use Singleton;
    public static int $counter = 0;
    protected function __construct()
    {
        // Load class
        Assets::get_instance();
        MetaBoxes::get_instance();
        Menus::get_instance();
        Admin::get_instance();
        Cleanup::get_instance();
        $this->setup_hooks();
        self::$counter++;
    }
    protected function setup_hooks()
    {
        /**
         * Action.
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        /**
         * Load translations for gozal_theme
         */

        load_theme_textdomain('gozal', get_template_directory() . '/languages');

        /**
         *  active title-tag for gozal_theme
         */

        add_theme_support( "title-tag" );
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
    //---------------------------------------------------------============ function Contact====================
}
