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



?>