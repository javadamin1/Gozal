<?php

/**
 * Register Navigation Menu
 *
 * @package Gozal
 */


namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;

class Admin_Pages
{
    use Singleton;


    public function gozal_admin_pages()
    {
?>
        <h1><?php echo _e( 'Gozal Theme Options', 'gozal' )  ?></h1>   	
        <h3 class="title">mange Options</h3>
        <p>Customize the default wordpress Appearance Options</p>
    <?php
    }

    public function gozal_theme_settings_pages()
    {
    ?>
        <h1>Gozal Custom Css</h1>

        <?php
        settings_errors();
        ?>
        <form method="POST" id="save-custom-css-form" action="options.php" class="gozal-general-form">
            <?php
            settings_fields('gozal-custom-css-options');
            ?>
            <?php
            do_settings_sections('gozal-submenu-slug');
            ?>
            <?php
            submit_button();
            ?>
        </form>
    <?php
    } /// gozal setting css

 

    public function gozal_theme_option_pages()
    {
    ?>
        <h1>Gozal Theme Options</h1>

        <?php
        settings_errors();
        ?>
        <form method="POST" action="options.php" class="gozal-general-form">
            <?php
            settings_fields('gozal-theme-options' );
            do_settings_sections('gozal-theme-options' );
            submit_button( );
            ?>
        </form>
<?php
    } // gozal theme option


} ////class tag

?>