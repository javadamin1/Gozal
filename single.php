<?php

/**
 * Main template file.
 * @package Gozal
 */
get_header();
?>
<div id="premary" class="content-area">
   <main id="main" class="site-main" role="main">
      <div class="container">
         <?php
         if (have_posts()):
            while (have_posts()) : the_post();
               get_template_part('template-parts/single', get_post_format());
               //the_post_navigation();
               if (comments_open()) :
                  comments_template();
               endif;
            endwhile;
         endif;

         ?>
      </div>
   </main>
</div>