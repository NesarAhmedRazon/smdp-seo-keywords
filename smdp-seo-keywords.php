<?php
/**
 * Plugin Name: Custom SEO Keywords
 * Plugin URI: https://github.com/NesarAhmedRazon/smdp-seo-keywords
 * Description: A simple plugin to add custom SEO keywords to WordPress posts and pages.
 * Version: 0.0.1
 * Author: Nesar Ahmed
 * Author URI: https://nesarahmed.dev/
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: smdp-seo-keywords
 * Domain Path: /languages
 */

 defined('ABSPATH') || exit;

class Smdp_Custom_SEO_Metabox {
    
    private $meta_key = '_smdp_smdp_custom_seo_keywords';

    public function __construct() {
        add_action('add_meta_boxes', [$this, 'add_meta_box']);
        add_action('save_post', [$this, 'save_meta_data']);
        add_action('wp_head', [$this, 'inject_seo_keywords']);
    }

    public function add_meta_box() {
        $screens = ['post', 'page', 'product'];
        foreach ($screens as $screen) {
            add_meta_box(
                'smdp_custom_seo_metabox',
                'Custom SEO Keywords',
                [$this, 'smdp_render_meta_box'],
                $screen,
                'normal',
                'high'
            );
        }
    }

    public function smdp_render_meta_box($post) {
        $value = get_post_meta($post->ID, $this->meta_key, true);
        wp_nonce_field('smdp_custom_seo_metabox_nonce', 'smdp_seo_metabox_nonce');
        echo '<textarea name="smdp_custom_seo_keywords" style="width:100%;height:100px;">' . esc_textarea($value) . '</textarea>';
    }

    public function save_meta_data($post_id) {
        if (!isset($_POST['smdp_seo_metabox_nonce']) || !wp_verify_nonce($_POST['smdp_seo_metabox_nonce'], 'smdp_custom_seo_metabox_nonce')) {
            return;
        }
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
        if (isset($_POST['smdp_custom_seo_keywords'])) {
            update_post_meta($post_id, $this->meta_key, sanitize_text_field($_POST['smdp_custom_seo_keywords']));
        }
    }

    public function inject_seo_keywords() {
        if (is_singular()) {
            global $post;
            $keywords = get_post_meta($post->ID, $this->meta_key, true);
            if ($keywords) {
                echo '<meta name="keywords" content="' . esc_attr($keywords) . '">' . PHP_EOL;
            }
        }
    }
}

new Smdp_Custom_SEO_Metabox();

