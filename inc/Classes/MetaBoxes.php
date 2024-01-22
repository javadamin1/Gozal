<?php

/**
 * Register Meta Boxes
 *
 * @package Gozal
 */

namespace GozalTheme\Inc\Classes;



use GozalTheme\Inc\Traits\Singleton;

class MetaBoxes{
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
        add_action( 'save_post', [$this, 'save_meta_boxes'] );
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
        $value = get_post_meta($post->ID, '_hide-page-title', true);

            /**
             * Use nonce for verifiction
             * استفاده از nonceبرای تایید
             */
            wp_nonce_field( plugin_basename(__FILE__), 'hide_title_meta_box_nonce' );

?>
        <label for="gozal-field"><?php esc_html_e('مخفی کردن سربرگ صفحه', 'gozal') ?></label>
        <select name="gozal_hide_title_field" id="gozal-field" class="postbox">
            <option value=""><?php esc_html_e('انتخاب', 'gozal') ?></option>
            <option value="yes" <?php selected($value,'yes'); ?>><?php esc_html_e('بله', 'gozal') ?></option>
            <option value="no" <?php selected($value,'no'); ?>>
                <?php esc_html_e('خیر', 'gozal') ?>
            </option>
        </select>
<?php
    }

   public function save_meta_boxes($post_id) {

    /**
     * When the post is saved or update we get $_POST available
     * Check if the current user is authorized
     * زمانی که می خوایم اطلاعات رو ذخیره می کنیم نگاه می کنیم ببینیم که ایا userاجازه دسترسی داره
     */
    if(! current_user_can( 'edit_post',$post_id )){
        return;
    }

    /**
     * Check if the nonce value we received is the same we created.
     * چک می کنیم که اطلاعات ارسالی با اطلاعاتی که می خوایم سیو کنیم یکی باشه
     */
    if(! isset($_POST['hide_title_meta_box_nonce']) || ! wp_verify_nonce($_POST['hide_title_meta_box_nonce'], plugin_basename( __FILE__ ) )){
        return ;
    }

        if ( array_key_exists( 'gozal_hide_title_field', $_POST ) ) {
            update_post_meta(
                $post_id,
                '_hide-page-title',
                $_POST['gozal_hide_title_field']
            );
        }
    }
}
