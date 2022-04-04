<?php

/**
 * Main template file.
 * @package Gozal
 */
get_header();
?>

<div id="footer-height">
  <div class="container-lg pb-5">
    <div class="row">
      <?php
      if (have_posts()) : while (have_posts()) :
          the_post();
         if(has_post_thumbnail()): 
      ?>
      
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

        <?php
endif;
        endwhile;
        ?>
        
    </div>
    <!-- row       -->
    <div class="load-more" >
      <button class="btn btn-primary load-more-btn"  > load more </button>
  </div>
   
  <?php
      else :
        get_template_part('/template-parts/content-none');
      endif;
  ?>
  </div>
  <!--container -->
</div>
<!--footer-height -->
<?php
get_footer();
?>

<!--page-height -->
<!-- <main id="main" class="site-main mt-5" role="main" >
      <?php
      //  if(have_posts()):

      ?>
          <div class="container">
              <?php
              //   if(is_front_page()){

              //       echo "<h1>heloo</h>";
              //       wp_die( );
              //  }
              //  if(is_home() && ! is_front_page()){
              ?>
                  <header class="mb-5" >
                      <h1 class="page-title screen-leader-text" >
                       <?php
                        //  single_post_title();
                        ?>

                      </h1>
                  </header>
                  <div class="row">

                  
                      <?php
                      //  }
                      //  $index =0;
                      //  $number_columns = 3;
                      //  while (have_posts()) : the_post();
                      //  if(0=== $index % $number_columns){
                      ?>
<div class="col-lg-4 col-md-6 col-sm-12">
    <?php

    //       }
    //  get_template_part('/template-parts/content');

    // $index ++;


    // if(0!==$index && 0=== $index % $number_columns ){
    ?>
   </div> 
<?php
//  }         
//      endwhile;
?>
              </div>
          </div>
          <?php

          //   else :
          //       get_template_part('/template-parts/content-none');

          //  endif;

          ?>
  </main> -->