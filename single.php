<?php

/**
 * Main template file.
 * @package Gozal
 */
get_header();
?>
<div id="page-height">
<div id="footer-height">

         <?php
         if (have_posts()):
            while (have_posts()) : the_post();
               get_template_part('template-parts/single');
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
  <!--footer-height -->
  <?php
  get_footer();
  ?>
</div>
<!--page-height -->