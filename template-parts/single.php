<?php

/**
 * Main template file.
 * @package Gozal
 */

?>
<title><?php single_post_title();?></title>

<div class="container">

<h5><?php single_post_title();?></h5>
<?php gozal_image_url() ;the_content() ?>

<div class="shownum">
<?php
      $args = array (
          'before'            => ' <ul class="pagination">',
          'after'             => '</ul>',
          'link_before'       => '<li class="page-link">',
          'link_after'        => '</li>'
      ); 
      wp_link_pages( $args );
      ?>
</div><!--shownum -->
</div><!--container -->

