<?php

/**
 * Gallery Post Formats
 *
 * @package Gozal
 */
$num=7;
$output='';

$tabriz = get_posts(array(
    'post_type' => 'attachment',
    'posts_per_page' => $num,
    'post_parent' => get_the_ID()
));
if ($tabriz) :
    foreach ($tabriz as $var) :
        $output = wp_get_attachment_url($var->ID);
    endforeach;
endif;

            // echo '<pre>';
            //   var_dump($tabriz);

       
             foreach($tabriz as $var):
?>
 <div style="width: 200px;height:200px;background-image:url(<?php echo wp_get_attachment_url($var->ID); ?>)" ></div>
<?php
            endforeach
            ?>

    <div class="content">
hello


    </div>
    <!--contect-->