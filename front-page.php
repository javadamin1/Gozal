<?php

/**
 * Front page template
 *
 * @package Gozal
 */

?>
<div id="page-height"  >
<div id="footer-height">
<?php
get_header();
$the_post_id = get_the_ID();
$hide_title = get_post_meta($the_post_id, '_hide-page-title', true);
$heading_class = !empty($hide_title) && 'yes' === $hide_title ? 'hide' : '';

$has_post_thumbnail = get_the_post_thumbnail($the_post_id);


?>
<div class="container">
    <div class="content">
        <!-- <div class="unit-a">
            <div class="a-1">
                <h2>
                    درباره اتاقسازی یادگاری زرنق
                </h2>
                پخش و فروش عمده و خرده اتاق جلو و عقب نیسان زامیاد و قطعات بدنه نیسان زامیاد به قیمت مناسب به مصوبه نرخ کارخانه
                <br><br>
                <a href="./about-us.html">
                    ادامه مطلب
                </a>
                <i class="fas fa-chevron-left"></i>
            </div>
            <!--a1 
            <div class="a-2">
                <img src="<?php echo GOZAL_DIR_URI . '/assets/img'; ?>/car3.jpg" alt="">
            </div>
            <!--a2 
        </div> -->
        <!--unit-a -->
        <?php
        $a = 0;
        if (have_posts()) : while (have_posts()) :

                the_post();
                $a++;
               
        ?>

                <div class="unit-b <?php echo ($a % 2) ? '' : 'unit-c'; ?>">

                    <div class="b-1">
                        <div class="b-1-a">
                            <div class="b-inner">
                                <h2>
                                    <a href="<?php echo esc_url(get_permalink() ) ?>">
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
                                <!-- <a class="btn btn-success" href="<?php echo permalink_link() ?>"></a> -->
                            </div>
                        </div>
                    </div>
                    <!--b-1 -->
                    <div class="b-2">
                        <?php
                        if ($has_post_thumbnail) {
                        ?>
                            <img src="<?php echo the_post_thumbnail() ?>" alt="">
                        <?php
                        }
                        ?>
                    </div>
                    <!--b-2 -->
                </div>
                <!--unit-b -->
<?php
            endwhile;
        else :
        // no posts found
        endif;
?>


    </div>
    <!--contect-->
</div>
<!--container -->
</div><!--footer-height -->
<?php
get_footer();
?>
</div><!--page-height -->