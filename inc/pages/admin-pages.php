<?php

/**
 * Register Navigation Menu
 *
 * @package Gozal
 */

   function gozal_admin_pages()
    {
?>
        <h1><?php echo _e( 'Gozal Theme Options', 'gozal' )  ?></h1>   	
       
        <?php
        settings_errors();
        ?>
        <form method="POST" id="save-custom-css-form" action="options.php" class="gozal-general-form">
            <?php
            settings_fields('general-gozal-theme');
            ?>
            <?php
            do_settings_sections('tools-gozal-theme');
            ?>
            <?php
            submit_button();
            ?>
        </form>
    <?php
    }

   function gozal_theme_settings_pages()
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

 

    function gozal_theme_option_pages()
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
