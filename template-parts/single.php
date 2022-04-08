<?php

/**
 * single template file.
 * @package Gozal
 */

?>

<title><?php single_post_title();?></title>
<section class="single-area">
      <div class="container-sm">
          <div class="all">
            <div class="col-md-9">
              <div>
                <div class="image container-md">
                  <?php if(has_post_thumbnail()): ?>
                  <img src="<?php echo gozal_image_url(); ?>">
                  <?php endif; ?>
                </div>
                <h2 class="title mb-3">
               <?php single_post_title(); ?>
                </h2>
                <div class="profile">
                  <div class="profile-1">
                    <div class="d-flex align-items-center mb-3 ">
                      <p>
                      <i class="fas fa-calendar-alt"></i>
                      <?php 
                    _e('Written In','gozal');
                      the_time('Y/m/d'); ?>
                      </p>
                      <p>
                      <i class="fas fa-comment-alt"></i>
                      <?php
                      comments_number( '0', '1', '%' ); 
                      ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="content p-3">
                <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
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
      </div>
      <!-- container -->
    </section>





