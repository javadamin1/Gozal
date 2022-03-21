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
            //    the_post_navigation( array(
            //       'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'gozal' ) . '</span> ' .
            //           '<span class="screen-reader-text">' . __( 'Next post:', 'gozal' ) . '</span> ' .
            //           '<span class="post-title">%title</span>',
            //       'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'gozal' ) . '</span> ' .
            //           '<span class="screen-reader-text">' . __( 'Previous post:', 'gozal' ) . '</span> ' .
            //           '<span class="post-title">%title</span>',
            //   ) );
               if (comments_open()) :
                  comments_template();
               endif;
            endwhile;
         endif;

         ?>
      </div>
   </main>
</div>