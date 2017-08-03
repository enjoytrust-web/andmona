<?php
/*==============================
-Add Custom Post Type
===============================*/
// カスタム投稿タイプの追加
function create_post_type() {

  // レギュラーイベント
  register_post_type( 'products-custom',
    array(
      'label' => '商品を登録',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'products', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'products-custom_category',
    'products-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );

}

add_action( 'init', 'create_post_type' );