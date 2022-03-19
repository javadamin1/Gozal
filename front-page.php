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
// $a = 0;
// if (have_posts()) : while (have_posts()) :
//         the_post();

//     endwhile;
// endif;

// ?>


<ul>
    <?php
    echo '<hr>';

    // var_dump( get_page('2' ));
    wp_list_pages();
    echo '<hr><pre>';


    ?>
</ul>

<div class="content">
    <?php
    if (get_page_by_title('درباره ما')) {
        $java = get_page_by_title('درباره ما');
// echo '<pre>';
//         var_dump($java);
//         echo '</pre>';    
        // 

    ?>
        <div class="unit-a unit-aa ">
            <div class="a-1" style="width: 65%;">
                <div class="connect">
                    <?php echo $java->post_content;  ?>
                </div>

            </div>

            <div class="a-2 a-2a" style="width: 70%;">
           
                <?php echo get_the_post_thumbnail($java->ID);?>
            </div>
        </div>
        <!-- unit-a unit-aa -->
    <?php } ?>
</div>
<!-- content -->

<div class="content">

    <div class="unit-b">
        <div class="b-1">

            <div class="b-1-a">
                <div class="b-inner">
javad

                </div>
            </div>
        </div>
        <div class="b-2">
            <img src="./aa.jpg" alt="">
        </div>
    </div> 
    <!-- unit-b -->
</div>
<!-- content-->

    </div>
    <!--container -->
    </div>
  <!--footer-height -->
  <?php
  get_footer();
  ?>
</div>