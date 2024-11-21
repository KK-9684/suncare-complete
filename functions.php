<?php 

// テーマイメージを追加
if (function_exists('acf_add_options_page')) {
    $option_page_image = acf_add_options_page(array(
        'page_title' => 'テーマイメージ', // 設定ページで表示される名前
        'menu_title' => 'テーマイメージ', // ナビに表示される名前
        'menu_slug' => 'top_setting', // メニューのスラッグを変更
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// テーマテーブルを追加
if (function_exists('acf_add_options_page')) {
    $option_page_table = acf_add_options_page(array(
        'page_title' => 'テーマテーブル', // 設定ページで表示される名前
        'menu_title' => 'テーマテーブル', // ナビに表示される名前
        'menu_slug' => 'top_setting_table', // メニューのスラッグを変更
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// 募集要項を追加
if (function_exists('acf_add_options_page')) {
    $option_page_table = acf_add_options_page(array(
        'page_title' => '募集要項', // 設定ページで表示される名前
        'menu_title' => '募集要項', // ナビに表示される名前
        'menu_slug' => 'top_setting_recruit', // メニューのスラッグを変更
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
function enqueue_datepicker() {
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_style('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
}
add_action('wp_enqueue_scripts', 'enqueue_datepicker');
?>