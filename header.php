<?php

/**
 * Header template.
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

<body <?php body_class();if(is_single())echo 'style="background: #fff;"'; ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
?>
<div id="page-height">
    <div class="container-lg">
<?php
    if (get_option('custom_navbar')) {

        get_template_part('./template-parts/header/nav1');
        if (is_front_page()) {
    ?>
            <header class="header">
                <?php if(has_header_image( )):?>
                    <img src="<?php  echo header_image(); ?>" alt="">
                    <?php endif; ?>
            </header>

        <?php
        }
    } else {
        ?>

        <div class="col-xs-12">
            <div class="header-container background-image text-center" style="background-image: url(<?php header_image() ?>);">

                <div class="header-content table">
                    <div class="table-cell">
                        <div class="gozal-logo"></div>
                        <h1 class="site-title gozal-icon">
                            <span class="hide"><?php bloginfo('name') ?> </span>
                        </h1>
                        <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                        <!--site -->
                    </div>
                    <!--table-cell -->
                </div>
                <!--header-content -->
                <div class="nav-container">

                    <?php get_template_part('./template-parts/header/nav'); ?>

                </div>
            </div>
            <!--header-container -->
        </div>
        <!--col-xs-12 -->


    <?php
    }
    ?>
     </div>
<!-- .container-lg -->