<?php

/**
 * Template Name: Home Template 
 *
 * @package gozal
 */

 ?>
 <div id="page-height">
  <div id="footer-height">
    <div class="container-lg">
<?php

get_header();
?>
<!-- ------------------------------------------------Include About Page --------------------------->
<section >
    <?php


 if ( $posts = get_posts( array( 
    'name' => 'about-us', 
    'post_type' => 'page',
    'post_status' => 'publish',
) ) ) $found_post = $posts[0];
 if ( ! is_null( $found_post ) ){
     ?>
     <div class="content about">
   <div class="unit-a bg-transparent ">
            <div class="a-1" >
         <div class="post-a">
                    <?php 
                    echo apply_filters('the_content', $found_post->post_content);
                    ?>
      
              <a class="btn btn-success text-white " href="<?php echo esc_url(the_permalink($found_post->ID));  ?>">
              <?php esc_html_e('read more','gozal') ?>
              <img src="<?php echo GOZAL_DIR_URI ?>/assets/symbol/left.svg" alt="left" width="20px" height="20px" > 
                </a>
               
            </div>
            <!-- post-a -->
  </div>
  <!-- a-1 -->
            <div class="a-2" >
           
                <?php echo get_the_post_thumbnail($found_post->ID);?>
            </div>
        </div>
        <!-- unit-a unit-aa -->
</div>
<!-- content -->
 <?php  
}
    ?>    
<!-- ------------------------------------------------Include 3 BLOG POST --------------------------->
<?php
$args=array(
    'post_type' => 'post',
    'category_name' => 'home',
    'post_per_page' => 3
);
$_posts = new WP_Query( $args );

?>

<?php
if($_posts->have_posts()):
?>

    <?php
    $a=0;
    $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
while($_posts->have_posts()):$_posts->the_post();
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
              <?php echo get_the_post_thumbnail(); ?>
                </div>
                <!--b-2 -->
              </div>
              <!--unit-b -->
            </div>
            <!--contect-->



<?php  endwhile ;?>
<?php endif; ?>

<!-- ------------------------------------------------Include contact-US Page --------------------------->
<?php


if ( $posts = get_posts( array( 
   'name' => 'contact-us', 
   'post_type' => 'page',
   'post_status' => 'publish',
) ) ) $found_post = $posts[0];
if ( ! is_null( $found_post ) ){
    ?>
    <article id="post-<?php the_ID();  ?>"  >
    <div class="content contact "  >
        <div class="unit-a unit-aa bg-transparent " >
            <div class="a-1" style="width: 65%;">
                <div class="connect">
                        <?php   echo apply_filters('the_content', $found_post->post_content); ?>
                </div>
            </div>
           
            <div class="a-2 a-2a" style="width: 70%;">
            <iframe src="<?php echo get_option('addres_google_map') ?>" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
  </article>  
<?php  
}
   ?>    


</section>

    </div>
    <!--container -->
    </div>
  <!--footer-height -->
  <?php
  get_footer();
  ?>
</div>