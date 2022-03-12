<?php

/**
 * 
 * Header Navigation template.
 * 
 *  @package Gozal
 */

$menu_class = \GOZAL_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('gozal-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);

?>
<nav>
    <div class="container">
        <div class="pre-top">
            <div class="top">
                <div class="hamburger">
                    <button class="hamburger__button" type="button"> Menu
                        <span class="hamburger__icon"></span>
                    </button>
                </div>
                <a href="#">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </a>
                <?php
                if (!empty($header_menus) && is_array($header_menus)) {
                ?>
                    <ul class="menu">
                        <?php
                        foreach ($header_menus as $menu_item) {

                            if (!$menu_item->menu_item_parent) {
                                $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                                $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                                if (!$has_children) {
                        ?>
                                    <li class="<?= ($menu_class->check_page($menu_item->url)) ? 'menu-active' : '' ?> ">

                                        <a href="<?php echo esc_url($menu_item->url) ?>"> <?php
                                                                                                echo esc_html($menu_item->title)
                                                                                                ?> </a>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url) ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo esc_html($menu_item->title) ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php
                                            foreach ($child_menu_items as $child_item) {
                                            ?>
                                                <a class="dropdown-item" href=" <?php echo esc_url($child_item->url) ?>"> <?php echo
                                                                                                                            esc_html($child_item->title) ?></a>
                                            <?php
                                            }
                                            ?>


                                        </div>
                                    </li>
                        <?php
                                }
                            }
                        }
                        ?>
                    </ul>
                <?php
                }
                ?>

                <div style="width: 15%;" class="space">
                    .
                </div>
                <div class="sosial">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>

                </div>
            </div>
        </div>
    </div>
</nav>