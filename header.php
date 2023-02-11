<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- 出力される言語によってlang=''が変わる -->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- <meta name="description" content="日々の悩みやストレスによって体の不調を感じていませんか？お客様に合わせた癒しのリラックスヨガやセラピーによって心と体の悩み改善のお手伝いをいたします。興味がある方はぜひサイトを見てください。"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="css/hoge.css"> -->
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.png')); ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- <title>癒しのリラックスヨガ、インナーチャイルド - Hramyogaスタジオ</title> -->
  <?php wp_head(); ?>  
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open();?>
  <header id="header">
    <div class="header-top">
      <a href="<?php echo esc_url(home_url()); ?>" class="logo"> 
      <!-- ホームのurlを取得 -->
        <img src="<?php echo get_template_directory_uri().'/img/favicon.png'?>" alt="">
        <p>Hram yoga</p>
      </a>
      <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <?php if(has_nav_menu('global')){
      wp_nav_menu([
        'theme_location' => 'global',
        'menu_id' => 'global-menu',
        'container' => 'nav',
        'container_class' => 'wrapper',
      ]);
    }
    ?>
    <!-- <nav>
      <ul class="wrapper">
        <li><a href="#">インストラクター</a></li>
      </ul>
    </nav> -->
    <?php if(has_nav_menu('hamburger')){
      wp_nav_menu([
        'theme_location' => 'hamburger',
        'menu_id' => 'hamburger-menu',
        'container' => 'div',
        'container_class' => 'hamburger-menu',
      ]);
    }
    ?>
    <!-- <div class="hamburger-menu">
      <ul>
        <li><a href="#">ホーム</a></li>
      </ul>
    </div> -->
  </header>
  <div id="index"></div>