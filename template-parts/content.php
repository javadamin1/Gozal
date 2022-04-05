<?php

/**
* Content template
*
* @package gozal
*/
?>

<!--<h3>--><?php //the_title(); ?><!--</h3>-->
<!--<div> --><?php //the_excerpt(); ?><!--  </div>-->
<!--<h4>--><?php //the_time('Y-m-d H:i:s'); ?><!--</h4>-->
<!--<h4> نویسنده:--><?php //the_author(); ?><!--</h4>-->
<!-- <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?> >
    <?php
  //  get_template_part('template-parts/components/blog/entry-header');
  //   get_template_part('template-parts/components/blog/entry-meta');
  //   get_template_part('template-parts/components/blog/entry-content');
  // get_template_part('template-parts/components/blog/entry-footer');
    ?>
</article> -->

       <div class="col-md-4 mt-4">
            <div class="card">
              <img class="card-img-top" src="<?php echo gozal_image_url();  ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> <?php the_title(); ?></h5>
                <div class="card-text"><?php echo gozal_the_excerpt(20); ?></div>

              </div>
              <div class="btn-card">
                <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">ادامه مطلب</a>
              </div>
            </div>
          </div>