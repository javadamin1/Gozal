<?php

/**
 * Template Name: Contact us Template 
 *
 * @package gozal
 */
?>
<div id="page-height"  >

  
<div id="footer-height">
  <div class="container-lg">  
<?php
get_header();
//$image=wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
?>
 <article id="post-<?php the_ID();  ?>"  >
    <div class="content "  >
        <div class="unit-a unit-aa  " >
            <div class="a-1" style="width: 65%;">
                <div class="connect">
                        <?php the_content(); ?>
                </div>
            </div>
           
            <div class="a-2 a-2a" style="width: 70%;">
            <iframe src="<?php echo get_option('addres_google_map') ?>" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
  </article>  
 </div><!--container --> 
</div><!--footer-height -->
<?php
get_footer();
?>

</div><!--page-height -->