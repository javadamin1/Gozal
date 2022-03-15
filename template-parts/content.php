<?php

/**
 * Front page template
 *
 * @package Gozal
 */
$image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
?>

    <div class="content">
                <div class="unit-b <?php echo ($a % 2) ? '' : 'unit-c'; ?>">
                    <div class="b-1">
                        <div class="b-1-a">
                            <div class="b-inner">
                                <h2>
                                    <a href="<?php echo esc_url(get_permalink() ) ?>">
                                    <?php
                                    the_title();
                                    ?>
                                    </a>
                                </h2>
                                <p>
                                    <?php
                                    the_excerpt();

                                    ?>
                                </p>
                                <!-- <a class="btn btn-success" href="<?php echo permalink_link() ?>"></a> -->
                            </div>
                        </div>
                    </div>
                    <!--b-1 -->
                    <div class="b-2">
                      <img src=" <?php echo $image ?>" alt="">  
                    </div>
                    <!--b-2 -->
                </div>
                <!--unit-b -->
    </div>
    <!--contect-->

