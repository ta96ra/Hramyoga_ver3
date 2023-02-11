<?php 

// -------------------------
//  css.javascriptの読み込み
// -------------------------

function hramyoga3_scripts(){
  wp_enqueue_style('style-css',get_stylesheet_uri()); //style.cssの読み込み
  wp_enqueue_style('hoge-css',get_template_directory_uri().'/css/hoge.css'); //hoge.cssの読み込み
  wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js','','','true'); // main.jsの読み込み
}
add_action('wp_enqueue_scripts','hramyoga3_scripts');

// ----------------------------------
// 編集機能の追加
//-----------------------------------
function hramyoga3_setup(){
  add_theme_support('title-tag'); //タイトルの設定
  register_nav_menus(['global'=>'Global Menu']); //「Global Menu」というナビゲーションの設定
  register_nav_menus(['hamburger'=>'Hamnurger Menu']); //「Hamburger Menu」というナビゲーションの設定
  register_nav_menus(['footer' => 'Footer Menu']); //「Footer Menuというナビゲーションの設定」
}
add_action('after_setup_theme','hramyoga3_setup');

//-------------------------
// ウィジェットの追加
//-------------------------
function hramyoga3_widgets_init(){
  register_sidebar([
    'name' => 'Sidebar',
    'id' => 'sidebar',
  ]); //サイドバーの表示項目の設定
}
add_action('widgets_init','hramyoga3_widgets_init');

// ---------------------------------------
// ブロックパターンの再利用（レッスン紹介）
//----------------------------------------
