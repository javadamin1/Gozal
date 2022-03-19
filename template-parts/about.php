<?php

/**
 * Template Name: About Template 
 *
 * @package gozal
 */
?>
<div id="page-height"  >
<div id="footer-height">
 <div class="container-lg">  
<?php
get_header();
echo (is_page_template( 'about.php' ))? 'yes' : 'no';
?>
 
 
    <div class="content">
        <div class="unit-a unit-aa ">
            <div class="a-1" style="width: 65%;">
                <div class="connect">
                        <?php the_content() ?>
                </div>

            </div>
           
            <div class="a-2 a-2a" style="width: 70%;">
              <?php echo the_post_thumbnail() ?>
            </div>
        </div>
    </div>
</div><!--container -->
</div><!--footer-height -->
<?php
get_footer();
?>
</div><!--page-height -->