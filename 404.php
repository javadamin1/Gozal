<?php

/**
 * 404 template.
 * 
 * @package Gozal
 */


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title> <?php wp_title();  ?> </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pinback" href="<?php bloginfo('pingback_url') ?> ">
    <?php endif; ?>
    <?php
    wp_head();
    ?>
</head>
<body  >
    

<div id="wrap">
    <div id="wordsearch">
        <ul>
            <li>k</li>

            <li>v</li>

            <li>n</li>

            <li>z</li>

            <li>i</li>

            <li>x</li>

            <li>m</li>

            <li>e</li>

            <li>t</li>

            <li>a</li>

            <li>x</li>

            <li>l</li>

            <li class="one">4</li>

            <li class="two">0</li>

            <li class="three">4</li>

            <li>y</li>

            <li>y</li>

            <li>w</li>

            <li>v</li>

            <li>b</li>

            <li>o</li>

            <li>q</li>

            <li>d</li>

            <li>y</li>

            <li>p</li>

            <li>a</li>

            <li class="four">p</li>

            <li class="five">a</li>

            <li class="six">g</li>

            <li class="seven">e</li>

            <li>v</li>

            <li>j</li>

            <li>a</li>

            <li class="eight">n</li>

            <li class="nine">o</li>

            <li class="ten">t</li>

            <li>s</li>

            <li>c</li>

            <li>e</li>

            <li>w</li>

            <li>v</li>

            <li>x</li>

            <li>e</li>

            <li>p</li>

            <li>c</li>

            <li>f</li>

            <li>h</li>

            <li>q</li>

            <li>e</li>

            <li class="eleven">f</li>

            <li class="twelve">o</li>

            <li class="thirteen">u</li>

            <li class="fourteen">n</li>

            <li class="fifteen">d</li>

            <li>s</li>

            <li>w</li>

            <li>q</li>

            <li>v</li>

            <li>o</li>

            <li>s</li>

            <li>m</li>

            <li>v</li>

            <li>f</li>

            <li>u</li>
        </ul>
    </div>

    <div id="main-content">
        <h1><?php esc_html_e('We couldn\'t find what you were looking for.', 'gozal') ?> </h1>

        <p><?php esc_html_e('Unfortunately the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exist.', 'gozal') ?> </p>

        <p><?php esc_html_e('Check the URL you entered for any mistakes and try again. Alternatively, search for whatever is missing or take a look around the rest of our site.', 'gozal') ?></p>

        <div id="search">

        <form role="search" method="get" class="search-form"  action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php esc_html_e('Search', 'gozal') ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="input-search"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
        </div>

        <div id="navigation">
            <a class="navigation" href=""><?php esc_html_e('Home', 'gozal') ?></a>
            <a class="navigation" href=""><?php esc_html_e('About Us', 'gozal') ?></a>
            <!-- <a class="navigation" href="">Site Map</a> -->
            <a class="navigation" href=""><?php esc_html_e('Contact Us', 'gozal') ?></a>
        </div>
    </div>
</div>

<?php
wp_footer();
?>
</body>
</html>