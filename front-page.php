<?php

/**
 * Front page template
 *
 * @package Gozal
 */

get_header();
$the_post_id = get_the_ID();
$hide_title = get_post_meta($the_post_id, '_hide-page-title', true);
$heading_class = !empty($hide_title) && 'yes' === $hide_title ? 'hide' : '';

$has_post_thumbnail = get_the_post_thumbnail($the_post_id);


?>
<div class="container">
    <div class="content">
        <div class="unit-a">
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
            <!--a1 -->
            <div class="a-2">
                <img src="<?= GOZAL_DIR_URI . '/assets/img'; ?>/car3.jpg" alt="">
            </div>
            <!--a2 -->
        </div>
        <!--unit-a -->
        <?php
        $a = 0;
        if (have_posts()) : while (have_posts()) :

                the_post();
                $a++;
               
        ?>

                <div class="unit-b <?= ($a % 2) ? '' : 'unit-c'; ?>">

                    <div class="b-1">
                        <div class="b-1-a">
                            <div class="b-inner">
                                <h2>
                                    <?php
                                    the_title();
                                    ?>
                                </h2>
                                <p>
                                    <?php
                                    the_excerpt();

                                    ?>
                                </p>
                                <a class="btn" href="<?= permalink_link() ?>"></a>
                            </div>
                        </div>
                    </div>
                    <!--b-1 -->
                    <div class="b-2">
                        <?php
                        if ($has_post_thumbnail) {
                        ?>
                            <img src="<?= the_post_thumbnail() ?>" alt="">
                        <?php
                        }
                        ?>
                    </div>
                    <!--b-2 -->
                </div>
                <!--unit-b -->
<?
            endwhile;
        else :
        // no posts found
        endif;
?>


    </div>
    <!--contect-->
</div>
<!--container -->

<?php
get_footer();
?>