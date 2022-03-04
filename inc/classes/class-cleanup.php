<?php

/**
 * Clean up version all src
 *
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;

class Cleanup{
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
       add_filter('script_loader_src', [$this , 'gozal_remove_wp_version'] );
       add_filter('style_loader_src', [$this , 'gozal_remove_wp_version'] );
    add_filter( 'the_generator', [$this , 'gozal_remove_meta_version'] );

    }
    public function gozal_remove_wp_version($src)
    {
        global $wp_version;
        parse_str(parse_url($src , PHP_URL_QUERY) , $query );
        if(!empty($query['ver']) && $query['ver'] === $wp_version ){
            $src = remove_query_arg( 'ver', $src );
        }
        return $src;
    }
    public function gozal_remove_meta_version(){
        return '';
    }
   
    


}