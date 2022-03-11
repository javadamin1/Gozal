<?php

/**
 * Template Name: About Template 
 *
 * @package gozal
 */
?>
<div class="javad" style="min-height: 100vh;
    width: 100%;
    box-sizing: border-box;" >


<?php
get_header();
?>
 
  <div class="container-h">  
    <div class="content" style="min-height: 10vh;margin: 1.5em;width: auto !important;">
        <div class="unit-a">
            <div class="a-1" style="width: 65%;">
                <div class="connect">
                        <?php the_content() ?>
                </div>

            </div>
            <div class="a-2 " style="width: 70%;">
                <img src="<?= the_post_thumbnail() ?>" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
?>
