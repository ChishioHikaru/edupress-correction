<?php

/*********************
headerから余計なものを削除
 *********************/
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_shortlink_wp_head');

//bodyに付与されたクラスのcustom-backgroundを削除
add_filter('body_class', function ($classes) {
  return array_filter($classes, function ($class) {
    return 'custom-background' !== $class;
  });
});


/*********************
テーマの更新通知をしない
 *********************/
remove_action('load-update-core.php', 'wp_update_themes');
// add_filter('pre_site_transient_update_themes',create_function('$a',"return null;"));


/*********************
余計なプラグインを削除
 *********************/
function my_delete_plugin_files()
{
  wp_deregister_script('jquery');
  wp_dequeue_style('jetpack-top-posts-widget');
}
add_action('wp_enqueue_scripts', 'my_delete_plugin_files');
function dequeue_jquery_migrate($scripts)
{
  if (!is_admin()) {
    $scripts->remove('jquery');
    $scripts->add('jquery', false, array('jquery-core'), '1.10.2');
  }
}
add_filter('wp_default_scripts', 'dequeue_jquery_migrate');


/*********************
WPのバージョン番号を削除
 *********************/
function remove_src_wp_ver($dep)
{
  $dep->default_version = '';
}
add_action('wp_default_scripts', 'remove_src_wp_ver');
add_action('wp_default_styles', 'remove_src_wp_ver');

/*********************
アイキャッチ有効化
 *********************/
add_theme_support('post-thumbnails');


/*********************
画像自動トリミング
 *********************/
add_image_size('thumb_size', 830, 471, true);


/*********************
親スラッグを取得
 *********************/
function is_parent_slug()
{
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

/*********************
bodyにクラスを付与
 *********************/
add_filter('body_class', 'add_page_slug_class_name');
function add_page_slug_class_name($classes)
{
  global $post;

  $url = $_SERVER["REQUEST_URI"];
  if (is_home() || is_front_page()) {
    $classes[] = 'top';
  } elseif (is_page()) {
    $page = get_post(get_the_ID());
    $page_slug = $page->post_name;

    $parent_id = $post->post_parent; // 親ページのIDを取得
    $parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
    $classes[] = $page_slug;
    $classes[] = $parent_slug;
  } elseif (is_single() || is_archive() || is_tax()) {
    $classes[] = get_post_type($post);
  }
  // elseif (strpos($url,'contact')) {
  //   $classes[] = 'contact';
  // }
  return $classes;
}

/*********************
scriptタグ出力
 *********************/
function my_script_load()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array());
  if (is_home() || is_front_page()) :
  endif;
  wp_enqueue_script('base', home_url('wp-content/themes/understrap-child/asset/js/common.js'), array());

  // wp_enqueue_script

}
add_action('wp_footer', 'my_script_load');


/*********************
CSS出力
 *********************/
function add_style_sheet()
{
  global $post;

  // 安全にスラッグを初期化
  $slug = '';

  // 投稿・アーカイブ系
  if (is_archive() || is_single() || is_tax()) {
    $slug = get_post_type($post);
  }

  // 固定ページの場合
  elseif (is_page()) {
    if ($post->post_parent) {
      // 親ページがある場合は親のスラッグ
      $parent_id = $post->post_parent;
      $slug = get_post($parent_id)->post_name;
    } else {
      // 親ページがない場合は自身のスラッグ
      $slug = $post->post_name;
    }
  }

  // ホーム・トップ・404 だけは固定CSS
  if (is_home() || is_front_page() || is_404()) {
    wp_enqueue_style(
      'allstyle',
      get_stylesheet_directory_uri() . '/asset/css/top/style.css',
      [],
      date('Ymd-Hi')
    );
  } else {
    // slugが空の場合は念のためトップCSSをフォールバック
    $target_slug = $slug ?: 'top';
    wp_enqueue_style(
      'articlestyle',
      get_stylesheet_directory_uri() . '/asset/css/' . $target_slug . '/style.css',
      [],
      date('Ymd-Hi')
    );
  }
}
add_action('wp_enqueue_scripts', 'add_style_sheet');



//パンくず
function breadcrumb()
{
  global $post;
  $str = '';
  $pNum = 2;

  $str .= '<ol class="flx" itemprop="Breadcrumb" itemscope itemtype="http://data-vocabulary.org/BreadcrumbList">';
  $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . home_url('/') . '" class="home"><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li>';


  /* 通常の投稿ページ */
  if (is_singular('post')) {
    $categories = get_the_category($post->ID);
    $cat = $categories[0];

    if ($cat->parent != 0) {
      $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
      foreach ($ancestors as $ancestor) {
        $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_category_link($ancestor) . '"><span itemprop="name">' . get_cat_name($ancestor) . '</span></a><meta itemprop="position" content="' . $pNum . '"></li>';
        $pNum++;
      }
    }
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_category_link($cat->term_id) . '"><span itemprop="name">' . $cat->cat_name . '</span></a><meta itemprop="position" content="' . $pNum . '"></li>';
    $pNum++;
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $post->post_title . '</span><meta itemprop="position" content="' . $pNum . '"></li>';
  }

  /* カスタムポスト */ elseif (is_single() && !is_singular('post')) {
    $cp_name = get_post_type_object(get_post_type())->label;
    $cp_url = home_url('/') . get_post_type_object(get_post_type())->name;
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . $cp_url . '"><span itemprop="name">' . $cp_name . '</span></a><meta itemprop="position" content="2"></li>';
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $post->post_title . '</span><meta itemprop="position" content="3"></li>';
  }

  /* 固定ページ */ elseif (is_page()) {
    $pNum = 2;
    if ($post->post_parent != 0) {
      $ancestors = array_reverse(get_post_ancestors($post->ID));
      foreach ($ancestors as $ancestor) {
        $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_permalink($ancestor) . '"><span itemprop="name">' . get_the_title($ancestor) . '</span></a><meta itemprop="position" content="' . $pNum . '"></li>';
        $pNum++;
      }
    }
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $post->post_title . '</span><meta itemprop="position" content="' . $pNum . '"></li>';
  }

  /* カテゴリページ */ elseif (is_category()) {
    $cat = get_queried_object();
    $pNum = 2;
    if ($cat->parent != 0) {
      $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
      foreach ($ancestors as $ancestor) {
        $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_category_link($ancestor) . '"><span itemprop="name">' . get_cat_name($ancestor) . '</span></a><meta itemprop="position" content="' . $pNum . '"></li>';
      }
    }
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $cat->name . '</span><meta itemprop="position" content="' . $pNum . '"></li>';
  }

  /* タグページ */ elseif (is_tag()) {
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . single_tag_title('', false) . '</span><meta itemprop="position" content="2"></li>';
  }

  /* 時系列アーカイブページ */ elseif (is_date()) {

    if (get_query_var('day') != 0) {
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_year_link(get_query_var('year')) . '"><span itemprop="name">' . get_query_var('year') . '年</span></a><meta itemprop="position" content="2"></li>';
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_month_link(get_query_var('year'), get_query_var('monthnum')) . '"><span itemprop="name">' . get_query_var('monthnum') . '月</span></a><meta itemprop="position" content="3"></li>';
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . get_query_var('day') . '</span>日<meta itemprop="position" content="4"></li>';
    } elseif (get_query_var('monthnum') != 0) {
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . get_query_var('year') . '年</span><meta itemprop="position" content="2"></li>';
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . get_query_var('monthnum') . '</span>月<meta itemprop="position" content="3"></li>';
    } else {
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . get_query_var('year') . '年</span><meta itemprop="position" content="2"></li>';
    }
  }

  /* 投稿者ページ */ elseif (is_author()) {
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">投稿者 : ' . get_the_author_meta('display_name', get_query_var('author')) . '</span><meta itemprop="position" content="2"></li>';
  }

  /* 添付ファイルページ */ elseif (is_attachment()) {
    $pNum = 2;
    if ($post->post_parent != 0) {
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="' . get_permalink($post->post_parent) . '"><span itemprop="name">' . get_the_title($post->post_parent) . '</span></a><meta itemprop="position" content="' . $pNum . '"></li>';
      $pNum++;
    }
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . $post->post_title . '</span><meta itemprop="position" content="' . $pNum . '"></li>';
  }

  /* 検索結果ページ */ elseif (is_search()) {
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">「' . get_search_query() . '」で検索した結果</span><meta itemprop="position" content="2"></li>';
  }

  /* 404 Not Found ページ */ elseif (is_404()) {
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">お探しの記事は見つかりませんでした。</span><meta itemprop="position" content="2"></li>';
  }

  /* その他のページ */ else {
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . wp_title('', false) . '</span><meta itemprop="position" content="2"></li>';
  }

  $str .= '</ol>';
  echo $str;
  // return $str;

}

function shortcode_breadcrumb()
{
  ob_start(); // 出力バッファリングを開始
  breadcrumb();
  return ob_get_clean(); // バッファリングの内容を取得して返す
}

// ショートコードを追加
add_shortcode('echo_bread', 'shortcode_breadcrumb');


// 管理画面上のカスタム投稿の並びを降順にする
function custom_post_order($query)
{
  if (is_admin() && $query->is_main_query()) {
    $current_post_type = $query->get('post_type');
    $target_post_types = ['column', 'news', 'success', 'client'];
    if (in_array($current_post_type, $target_post_types)) {
      $query->set('orderby', 'date');
      $query->set('order', 'DESC');
    }
  }
}
add_action('pre_get_posts', 'custom_post_order');

//<br>タグや<p>タグの削除
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content)
{
  global $post;
  $remove_filter = false;
  $arr_types = array('page'); //適用させる投稿タイプを指定
  $post_type = get_post_type($post->ID);
  if (in_array($post_type, $arr_types)) $remove_filter = true;
  if ($remove_filter) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }
  return $content;
}

// カスタム投稿のプレビュー反映
function get_preview_id($postId)
{
  global $post;
  $previewId = 0;
  if (isset($_GET['preview']) && ($post->ID == $postId) && $_GET['preview'] == true && ($postId == url_to_postid($_SERVER['REQUEST_URI']))) {
    $preview = wp_get_post_autosave($postId);
    if ($preview != false) {
      $previewId = $preview->ID;
    }
  }
  return $previewId;
}

add_filter('get_post_metadata', function ($meta_value, $post_id, $meta_key, $single) {
  if ($preview_id = get_preview_id($post_id)) {
    if ($post_id != $preview_id) {
      $meta_value = get_post_meta($preview_id, $meta_key, $single);
    }
  }
  return $meta_value;
}, 10, 4);

/*********************
ContactForm7 バリデーションチェック
 *********************/
add_filter('wpcf7_validate_text*', 'validate_kana_katakana', 10, 2);
add_filter('wpcf7_validate_text',  'validate_kana_katakana', 10, 2);
function validate_kana_katakana($result, $tag)
{
  if ($tag->name !== 'kana') return $result;
  $value = isset($_POST['kana']) ? trim((string) $_POST['kana']) : '';
  if (!preg_match('/^[ァ-ヿー　]+$/u', $value)) {
    $result->invalidate($tag, 'フリガナは全角カタカナで入力してください。');
  }
  return $result;
}

/*********************
共通CSSを全ページで読み込む
 *********************/
function add_common_stylesheet()
{
  wp_enqueue_style(
    'commonstyle',
    get_stylesheet_directory_uri() . '/asset/css/top/style.css',
    [],
    filemtime(get_stylesheet_directory() . '/asset/css/top/style.css')
  );
}
add_action('wp_enqueue_scripts', 'add_common_stylesheet', 1);
