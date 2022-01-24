<?php
/**
 * Bootstrap the Theme
 * @package Gozal
 */
namespace Gozal_THEME\Inc;
use GOZAL_THEME\Inc\Traits\Singleton;

class GOZAL_THEME{
    use Singleton;
    protected function __construct()
    {
        wp_die('hello');
        // load class
    }
    protected function setup_hooks(){
        //action and filter
    }
}