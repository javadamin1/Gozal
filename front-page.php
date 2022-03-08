<?php
/**
 * Front page template
 *
 * @package Gozal
 */

get_header();


if ( have_posts() ) : while ( have_posts() ) : the_post();
    // do something
endwhile; else:
    // no posts found
endif;
?>
<?php
get_footer();
?>
