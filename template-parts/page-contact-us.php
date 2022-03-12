<?php

/**
 * Template Name: Contact us Template 
 *
 * @package gozal
 */
?>
<div id="page-height"  >
<div id="footer-height">

<?php
get_header();
$image=wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
?>
 <article id="post-<?php the_ID();  ?>"  >
  <div class="container">  
    <div class="content "  >
        <div class="unit-a unit-aa  " style="background-color: transparent !important;" >
            <div class="a-1" style="width: 65%;">
                <div class="connect">
                        <?php the_content(); ?>
                </div>
            </div>
           
            <div class="a-2 a-2a" style="width: 70%;">
            <iframe src="<?= get_option('addres_google_map') ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div><!--container -->
</div><!--footer-height -->
</article>
<?php
get_footer();
?>
</div><!--page-height -->