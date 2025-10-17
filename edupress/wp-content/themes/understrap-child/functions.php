<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

  if (is_page_template('page-lptemp.php')) {
    wp_enqueue_style('lp-style', get_stylesheet_directory_uri() . '/lp/assets/css/lp_style.css', array(), filemtime(get_theme_file_path() . '/lp/assets/css/lp_style.css'), 'all');
  }
}

function theme_setup()
{

  //アイキャッチの有効化
  add_theme_support('post-thumbnails');

  //RSSフィードリンクを自動生成する
  add_theme_support('automatic-feed-links');

  //titleタグを自動生成する
  add_theme_support('title-tag');

  //HTML5によるマークアップを行う
  add_theme_support(
    'html5',
    array(
      'search-form',
      'gallery',
      'caption',
    )
  );

  // GutenbergのブロックエディタにCSSを適用
  add_theme_support('editor-styles');
  // add_editor_style('lp/assets/css/style.css');
  add_editor_style('lp/assets/css/editor-style.css');
  add_editor_style('lp/assets/css/lp_style.css');
}
add_action('after_setup_theme', 'theme_setup');

require get_stylesheet_directory() . '/functions-custom.php';

// Understrapテーマの`theme.min.css`スタイルシートを読み込まないようにする関数
function custom_remove_understrap_styles()
{
  wp_dequeue_style('understrap-styles');
  wp_deregister_style('understrap-styles');
}
add_action('wp_enqueue_scripts', 'custom_remove_understrap_styles', 100);
