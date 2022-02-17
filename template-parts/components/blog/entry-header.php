<?php
/**
 * Template for post entry header
 *
 * @package gozal
 */
$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
 ?>
<header class="entry_header" >
    <?php
        //پیش تصویر
        if($has_post_thumbnail){
            ?>
<div class="entry-image mb-3">
    <a href="<?php echo esc_url(get_permalink());  ?>">
<?php
t_p_custom_thumbnail(
    $the_post_id,
    'featured-large',
    [
        'size' => '(max-width:590px ) 590px , 425px',
        'class' => 'attachment-featured-large size-featured-image'
    ]
)
?>
</a>
</div>
            <?php
        }

    ?>

</header>