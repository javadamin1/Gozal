<?php
/**
 * Front page template
 *
 * @package Gozal
 */

get_header();

$a=0;
if ( have_posts() ) : while ( have_posts() ) : the_post();


    ?>
 <div class="container">
        <div class="content">
            
         
            <div class="unit-a">
                <div class="a-1">
                    <h2>
                        درباره اتاقسازی یادگاری زرنق
                    </h2>
                    پخش و فروش عمده و خرده  اتاق جلو و عقب  نیسان زامیاد  و قطعات بدنه نیسان زامیاد به قیمت مناسب به مصوبه نرخ کارخانه
                    <br><br>
                    <a href="./about-us.html">
                        ادامه مطلب
                    </a>
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="a-2">
                    <img src="<?= GOZAL_DIR_URI.'/assets/img'; ?>/car3.jpg" alt="">
                </div>
            </div>

            <div class="unit-b   <?=(!$a%2)? 'unit-c':'';?>">
                <div class="b-1">

                    <div class="b-1-a">
                        <div class="b-inner">
                            <h2>
                                اتاقسازی یادگاری
                            </h2>
                            <p>
                              بهترین و با کیفیت ترین اتاق های ماشین های سنگین و نیمه سنگین توسط ما ساخته می شود
                            </p>
                        </div>
                    </div>
                </div>
                <div class="b-2">
                    <img src="<?= GOZAL_DIR_URI.'/assets/img'; ?>/aa.jpg" alt="">
                </div>
            </div>
            <div class="unit-b unit-c">
                <div class="b-1">

                    <div class="b-1-a">
                        <div class="b-inner">
                            <h2>
                                تعویض روغنی
                            </h2>
                            <p>
                               بهترین و با کیفیت ترین روغن های ایرانی و خارجی عرضه و تعویض می شود
                            </p>
                        </div>
                    </div>
                </div>
                <div class="b-2">
                    <img src="<?= GOZAL_DIR_URI.'/assets/img'; ?>/rogan.jpg" alt="">
                </div>
            </div>
            <div class="unit-b unit-c">
                <div class="b-1">
                    <div class="b-1-a">
                        <div class="b-inner">
                            <h2>
                           بازرگانی لاستیک فروشی
                            </h2>
                            <p>
                          بورس انواع رینک و لاستیک های ایرانی و خارجی 
                              <br>فروش لاستیک های ایرانی و خارجی با بهترین تعرفه ها و اقساطی در این مرکز ارائه می گردد
                            </p>
                        </div>
                    </div>
                </div>
                <div class="b-2">
                    <img src="<?= GOZAL_DIR_URI.'/assets/img'; ?>/lastik.jpg" alt="">
                </div>
            </div>
     
        </div>
         
    </div>
    <?
endwhile; else:
    // no posts found
endif;
?>
<?php
get_footer();
?>
