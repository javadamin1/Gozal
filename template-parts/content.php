<?php

/**
* Content template
*
* @package gozal
*/
?>

<!--<h3>--><?php //the_title(); ?><!--</h3>-->
<!--<div> --><?php //the_excerpt(); ?><!--  </div>-->
<!--<h4>--><?php //the_time('Y-m-d H:i:s'); ?><!--</h4>-->
<!--<h4> نویسنده:--><?php //the_author(); ?><!--</h4>-->
<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?> >
    <?php
    get_template_part('template-parts/component/blog/entry-header');
    get_template_part('template-parts/component/blog/entry-meta');
    get_template_part('template-parts/component/blog/entry-content');
    get_template_part('template-parts/component/blog/entry-footer');
    ?>
</article>