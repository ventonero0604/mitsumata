<?php

/* ---------------------------------------
固定ページでカテゴリを使える様にする
--------------------------------------- */
add_action('init', 'my_add_pages_categories');
function my_add_pages_categories()
{
  register_taxonomy_for_object_type('category', 'page');
}
add_action('pre_get_posts', 'my_set_page_categories');
function my_set_page_categories($query)
{
  if ($query->is_category == true && $query->is_main_query()) {
    $query->set('post_type', array('post', 'page', 'nav_menu_item'));
  }
}
add_post_type_support('page', 'category');


/* ---------------------------------------
テーマ内でよく使う処理
--------------------------------------- */
//wp_head()で出力される内容にCSS読み込み設定を記述します。複数のスタイルシートを設定したい場合など、都度HTMLの<head>〜</head>に記述しなくてよく管理上便利です。
function register_stylesheet()
{
  wp_register_style('style', get_template_directory_uri() . '/dist/assets/css/style.css');
}
function add_stylesheet()
{
  register_stylesheet();
  wp_enqueue_style('style', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');
