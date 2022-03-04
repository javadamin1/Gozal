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
    <title> <?php bloginfo('name');
            wp_title();  ?> </title>
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

<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <!-- <div id="page" class="site">
        <header id="header" class="s-header" role="banner">
          <?php // get_template_part('./template-parts/header/nav'); 
            ?> 
        </header>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="header-container background-image text-center" style="background-image: url(<?php header_image() ?>);">

                    <div class="header-content table">
                        <div class="table-cell">
                            <h1 class="site-title gozal-icon">
                                <span class="gozal-logo"></span>
                                <span class="hide"><?php bloginfo('name') ?> </span>
                            </h1>
                            <!--site -->
                        </div> <!--table-cell -->
                    </div>
                    <!--header-content -->
                </div>
                <!--header-container -->
            </div>
            <!--col-xs-12 -->
        </div>
        <!--row -->
    </div>
    <!--cantainer -->