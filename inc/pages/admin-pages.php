<?php

/**
 * Register Navigation Menu
 *
 * @package Gozal
 */
	//	echo '<div style="background-color:#d54415;margin-top:20px">'.$value.'</div>';
    // echo '<pre>';
    // var_dump($value);
    // wp_die();
// if (isset($_GET['update'])) {
//     echo' <div style="height:100px;margin-top:25px" >work</div>';
//     echo get_template_directory(  ).'../../jav.txt' ; $file = file(GOZAL_DIR_URI."/jav.txt");
   
//     $open = fopen( $file, "w+");
//     $text = $_POST['update'];
//     fwrite($open, $text);
//     fclose($open);
//     echo "File updated.<br />";
//     echo "File:<br />";
//     $file = file("jav.txt");
//     foreach ($file as $text) {
//       echo $text . "<br />";
//     }
// }
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
        // if(isset($_POST['javad'])){
        //     $value=$_POST['javad'];
        //     echo '<div style="background-color:#d54415;margin-top:20px">'.$value.'</div>';
        // }else{
        //     echo '<div style="background-color:#d54415;margin-top:20px">no</div>';
        // }
      
        ?>

        <form method="POST" id="save-custom-css-form" action="options.php" class="gozal-general-form">
            <?php
            settings_fields('gozal-custom-css-options');
            do_settings_sections('gozal-submenu-slug');
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
