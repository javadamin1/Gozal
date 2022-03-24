<?php

/**
 * Main template file.
 * @package Gozal
 */
?>
<div id="page-height">
  <div id="footer-height">
    <div class="container-lg">
      <?php

      get_header();
$a=0;

      if (have_posts()) : while (have_posts()) :
the_post( );

          $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
          $format = get_post_format(get_the_ID());
          $format = get_post_format() ?: 'standard';
          if ($format == 'standard') :
           $a++; 
      ?>

            <div class="content">
              <div class="unit-b <?php echo ($a % 2) ? '' : 'unit-c'; ?>">
                <div class="b-1">
                  <div class="b-1-a">
                    <div class="b-inner">
                      <h2>
                        <a href="<?php echo esc_url(get_permalink()) ?>">
                          <?php
                          the_title();
                          ?>
                        </a>
                      </h2>
                      <p>
                        <?php
                        the_excerpt();

                        ?>
                      </p>
                      <!-- <a class="btn btn-success" href="<?php //echo permalink_link() ?>"></a> -->
                    </div>
                  </div>
                </div>
                <!--b-1 -->
                <div class="b-2">
                  <img src=" <?php echo $image ?>" alt="">
                </div>
                <!--b-2 -->
              </div>
              <!--unit-b -->
            </div>
            <!--contect-->
      <?php
          else :

            get_template_part('/template-parts/content', get_post_format());
          endif;
        endwhile;
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
</div>
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