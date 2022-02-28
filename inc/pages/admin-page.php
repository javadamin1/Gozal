<?php

/**
 * 
 * Template custom admin page
 * 
 * @package Gozal
 */


function gozal_add_admin_page()
{
    // Gozal Admin Page menu  
    add_menu_page('Gozal Setting Page', 'Gozal Setting', 'manage_options', 'tools-gozal-theme', 'gozal_theme_create_page', GOZAL_DIR_URI . '/assets/img/Gozal.png', 110);
    // sub menu
    add_submenu_page(
        'tools-gozal-theme',
        'Gozal Setting Page',
        'General',
        'manage_options',
        'tools-gozal-theme',
        'gozal_theme_create_page'
    );
    add_submenu_page(
        'tools-gozal-theme',
        'My Custom Css Page',
        'custom css',
        'manage_options',
        'my-secondary-slug',
        'gozal_theme_settings_page'
    );
}
add_action('admin_menu', 'gozal_add_admin_page');

function gozal_theme_create_page()
{
    //
    //require_once GOZAL_DIR_URI.'/inc/pages/gozal-admin.php';
    echo '<h2>Admin page</h2>';
}
function gozal_theme_settings_page()
{
    //
}
