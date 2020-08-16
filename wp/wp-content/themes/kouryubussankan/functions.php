<?php

/**
*アイキャッチ画像を使用可能にする
*/
add_theme_support('post-thumbnails');

/**
 * 文字数を変更する
 */
function custom_excerpt_length($length) {
    return 70;
}
add_filter('excerpt_length','custom_excerpt_length',999);

/**
 * categoryを削除
 */
function rem_cat_function($link) {
    return str_replace("/category/", "/", $link);
    }
    add_filter('user_trailingslashit', 'rem_cat_function');
    function rem_cat_flush_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
    }
    add_action('init', 'rem_cat_flush_rules');
    function rem_cat_rewrite($wp_rewrite) {
    $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
    }
    add_filter('generate_rewrite_rules', 'rem_cat_rewrite');

?>