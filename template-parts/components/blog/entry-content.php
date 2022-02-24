<?php
/**
 * Template for entry content.
 * 
 * To be used inside WordPress The Loop.
 * 
 * @package Gozal
 */
?>
<div class="entry-content">
    <?php
if(is_single()){
    the_content(
        sprintf(
            wp_kses( 
                __('Continue reading %s <span class="meta-nav">&rarr;</span>','gozal'),
                [
                    'span'=>[
                        'class'=>[]

                    ]
                ]
                    ),
                    the_title( '<span class="screen-reader-text" >"', '"</span>', false )
        )
                );
}else{
    gozal_the_excerpt();
}
    ?>
</div>