<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLab</title>
    <!-- cssファイルの出力 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/destyle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/footer.css">
    <?php if (is_front_page()): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/top/css/top.css">
    <?php endif; ?>  
    <!-- google fonts 読み込み-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    
    <!-- jquery読み込み -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="wrap">
      <header class="header">
        <div class="header-Container container">
          <div class="header-Logo">
            <h1 class="Logo">
              <a class="logo-Link" href="<?php echo home_url(); ?>">CodeLab</a>
            </h1>
          </div>
          <div class="header-Nav">
            <nav class="header-Nav_area">
              <ul class="header-Nav_list">
                <li class="header-Nav_item"><a class="header-Nav_link" href="<?php echo home_url(); ?>/news">NEWS</a></li>
                <li class="header-Nav_item"><a class="header-Nav_link" href="<?php echo home_url(); ?>/service">SERVICE</a></li>
                <li class="header-Nav_item"><a class="header-Nav_link" href="<?php echo home_url(); ?>/works">WORKS</a></li>
                <li class="header-Nav_item"><a class="header-Nav_link" href="<?php echo home_url(); ?>/company">COMPANY</a></li>
                <li class="header-Nav_item"><a class="header-Nav_link" href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
              </ul>
            </nav>
          </div>
          <div id="toggle" class="sp-Menu_toggle">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
          </div>
        </div>
      </header>