<?php
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


function load_custom_search_template($template)
{
  if (is_search() && !is_admin()) {
    $post_type = $_GET['post_type'] ?? ''; // PHP 7.0+ の null 合体演算子を使用

    switch ($post_type) {
      case 'news':
        $new_template = locate_template(array('search-news.php'));
        if ('' != $new_template) {
          return $new_template;
        }
        break;
      case 'feature':
        $new_template = locate_template(array('search-feature.php'));
        if ('' != $new_template) {
          return $new_template;
        }
        break;
      case 'blog':
        $new_template = locate_template(array('search-blog.php'));
        if ('' != $new_template) {
          return $new_template;
        }
        break;
      default:
        // 他の検索テンプレートが必要な場合、ここに追加
        break;
    }
  }
  return $template;
}

function load_custom_tag_template($template)
{
  if (is_tag() && !is_admin()) {
    $post_type = $_GET['post_type'] ?? ''; // PHP 7.0+ の null 合体演算子を使用

    switch ($post_type) {
      case 'blog':
        $new_template = locate_template(array('tag-blog.php'));
        if ('' != $new_template) {
          return $new_template;
        }
        break;
        // 他のポストタイプに基づくテンプレートが必要な場合、ここに追加
      default:
        // デフォルトのテンプレート（news用）を使用
        break;
    }
  }
  return $template;
}
add_filter('template_include', 'load_custom_tag_template');

add_filter('template_include', 'load_custom_search_template');

function customize_tag_query_for_cpt($query)
{
  if (!is_admin() && $query->is_main_query() && is_tag()) {
    $post_type = $_GET['post_type'] ?? null;
    if ($post_type) {
      $query->set('post_type', $post_type);
    }
  }
}
add_action('pre_get_posts', 'customize_tag_query_for_cpt');

function include_custom_post_search($query)
{
  if ($query->is_search() && $query->is_main_query() && !is_admin()) {
    // $_GET['post_type'] が設定されているかチェックし、設定されていればその値を使用する
    $post_type = $_GET['post_type'] ?? null;
    if ($post_type) {
      $query->set('post_type', $post_type);
    }
    $query->set('posts_per_page', 99);
  }
  return $query;
}
add_filter('pre_get_posts', 'include_custom_post_search', 10, 1);

function private_post_exclusion_archive()
{
  global $wp_query;
  if ($wp_query->is_admin) {
    return;
  }
  if (is_home() || is_archive()) {
    $wp_query->query_vars['post_status'] = 'publish';
  }
}
add_filter('pre_get_posts', 'private_post_exclusion_archive');
