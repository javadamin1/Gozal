<?php
/**
 * The template part for displaying a massege that posts cannot be found.
 *
 * @package gozal
 *
 */
?>
<section class="no-result not-found">
    <heder class="page-header">
        <h1 class="page-title">
            <?php
            esc_html_e( 'چیزی پیدا نشد', 'gozal' );
        ?>
        </h1>
    </heder>
    <div class="page-content">
        <?php
        if(is_home(  ) && current_user_can( 'publish_posts' )){
            ?>
<p>
    <?php
    printf(
        wp_kses(
            __('اماده اید اولین پست رو ایجاد کنید؟ <a href="%s">از اینجا شروع کنید</a>','gozal'),
            [
            'a'=>[
                'href'=>[]
            ]
        ]),
        esc_url(admin_url('post-new.php' ))
    )
    ?>
</p>
            <?php
        }
        elseif( is_search() ){
            ?>
        <p><?php  esc_html_e('متاسفانه چیزی پیدا نشد، لطفا دوباره تلاش کنید','gozal');  ?></p>
        <?php
get_search_form();
        }else{
            ?>
            <p><?php  esc_html_e('چیزی پیدا نکردیم شاید جستجو کردن کمک کند','gozal');  ?></p>
            <?php
            get_search_form();
        }
        ?>
    </div>
</section>


