<?php

/**
 * Theme Functions.
 *
 * @package Gozal
 */


use GozalTheme\Inc\Classes\GozalTheme;

if (!defined('GOZAL_DIR_PATH')) {
    define('GOZAL_DIR_PATH', untrailingslashit(get_template_directory() . '/'));
}
require_once GOZAL_DIR_PATH.'/inc/help/helper.php';
require_once GOZAL_DIR_PATH.'/vendor/autoload.php';

//require_once GOZAL_DIR_PATH . '/inc/help/autoloader.php';
//require_once GOZAL_DIR_PATH . '/inc/help/template-tags.php';
//require_once GOZAL_DIR_PATH . '/inc/help/ajax.php';
//require_once GOZAL_DIR_PATH . '/inc/pages/admin-pages.php';

if (!defined('GOZAL_DIR_URI')) {
    define('GOZAL_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


GozalTheme::get_instance();




