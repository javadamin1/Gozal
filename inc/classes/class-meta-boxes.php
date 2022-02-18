<?php

/**
 * Register Meta Boxes
 *
 * @package Gozal
 */

namespace GOZAL_THEME\Inc;

use GOZAL_THEME\Inc\Traits\Singleton;

class Meta_boxes{
    use Singleton;
    protected function __construct()
    {

        // load class

        $this->setup_hooks();
    }
    protected function setup_hooks()
    {

        /**
         * Action.
         */
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
    }

    public function add_custom_meta_box()
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title',                 // Unique ID
                __('مخفی کردن سربرگ صفحه', 'gozal'),      // Box title
                [$this, 'custom_meta_box_html'],  // Content callback, must be of type callable
                $screen ,        // Post type
                'side'
            );
        }
    }

    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_page_title', true);
?>
        <label for="gozal-field"><?php esc_html_e('مخفی کردن سربرگ صفحه', 'gozal') ?></label>
        <select name="gozal_hide_title_field" id="gozal-field" class="postbox">
            <option value=""><?php esc_html_e('انتخاب', 'gozal') ?></option>
            <option value="yes" <?php selected($value, 'yes'); ?>><?php esc_html_e('بله', 'gozal') ?></option>
            <option value="no" <?php selected($value, 'no'); ?>>
                <?php esc_html_e('خیر', 'gozal') ?>
            </option>
        </select>
<?php
    }
}
