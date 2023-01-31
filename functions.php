<?php
function init_func() {
  //サムネイルの追加
  add_theme_support('post-thumbnails');
  //カスタム投稿「ニュース記事」の追加
  register_post_type('news-article', [
    'labels' => [
      'name' => "ニュース記事",
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-book',
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'custom-fields'
    ],
    //固定ページの中にカスタム投稿を挿入
    'rewrite' => array('slug' => 'news/news-article')
  ]);
  //ニュース記事のタクソノミー追加
  register_taxonomy_for_object_type('category', 'news-article');
  register_taxonomy_for_object_type('post_tag', 'news-article');

  //カスタム投稿「制作実績」の追加
  register_post_type('works-production', [
    'labels' => [
      'name' => "制作実績",
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-edit-page',
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'custom-fields'
    ],
    //固定ページの中にカスタム投稿を挿入
    'rewrite' => array('slug' => 'works/works-production')
  ]);
  //制作実績のタクソノミー追加
  register_taxonomy_for_object_type('category', 'works-production');
  register_taxonomy_for_object_type('post_tag', 'works-production');
}

add_action('init', 'init_func');