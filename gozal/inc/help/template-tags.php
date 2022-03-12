<?php

function g_t_p_custom_thumbnail($post_id, $size = 'featured-thumbnail', $add_attrib = [])
{

    $custom_thumbnail = '';

    if ($post_id === null) {
        $post_id = get_the_ID();
    }

    if (has_post_thumbnail($post_id)) {
        $default_attributes = [
            'loading' => 'lazy'
        ];
        $attributes = array_merge($add_attrib, $default_attributes);
        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id($post_id),
            $size,
            false,
            $add_attrib
        );
    }
    return $custom_thumbnail;
}

function t_p_custom_thumbnail($post_id, $size = 'featured-thumbnail', $add_attrib = [])
{
    echo g_t_p_custom_thumbnail($post_id, $size, $add_attrib);
}

function gozal_posted_on()
{
    $time_string = '<time class="entry-date published updated" datetime="%1$s" >%2$s</time>';
    if (get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-date published" datetime="%1$s" >%2$s</time><time class="updated" datetime="%3$s" >%4$s</time>';
    }
    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_attr(get_the_date()),
        esc_attr(get_the_modified_date(DATE_W3C)),
        esc_attr(get_the_modified_date()),
    );
    $posted_on = sprintf(
        esc_html_x('نوشته شده در%s', 'post date', 'gozal'),
        '<a href="' . esc_url(get_the_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
    );
    echo '<span class="posted-on text-secondary">' . $posted_on . '</span>';
}

function gozal_posted_by()
{
    $byline = sprintf(
        esc_html_x(' توسط: %s', 'post auther ', 'gozal'),
        '<span class="author vcard"><a href"' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . ' </a> </span>'

    );
    echo '<span class="byline text-secondary">' . $byline . ' </span>';
}
function gozal_the_excerpt($trim_character_count = 0)
{
    if (!has_excerpt() || 0 === $trim_character_count) {
        the_excerpt();
        return;
    }
    $excerpt = wp_strip_all_tags(get_the_excerpt());
    $excerpt = substr($excerpt, 0, $trim_character_count);
    $excerpt = substr($excerpt, 0, strrpos($excerpt, ''));

    echo $excerpt . '[...]';
}

function gozal_image_url($num = 1)
{
    $output = '';
    if (has_post_thumbnail() && $num == 1) :
        $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
    else :
        $tabriz = get_posts(array(
            'post_type' => 'attachment',
            'posts_per_page' => $num,
            'post_parent' => get_the_ID()
        ));
        if ($tabriz && $num == 1) :
            foreach ($tabriz as $var) :
                $output = wp_get_attachment_url($var->ID);
            endforeach;
        elseif ($tabriz && $num > 1) :
            $output = $tabriz;
        endif;
        wp_reset_postdata();
    endif;
    return $output;
}
