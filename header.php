<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <?php if (is_home()) : ?>
    <title><?= bloginfo('name'); ?></title>
  <?php else : ?>
    <title><?php wp_title('｜', true, 'right'); ?></title>
  <?php endif; ?>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:title" content="">
  <meta property="og:site_name" content="北アルプス黒部源流">
  <meta property="og:description" content="">
  <meta property="og:url" content="https://kumonodaira.net/">
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ogp/ogp.jpg">
  <meta property="og:type" content="article">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <script type="module" crossorigin src="/assets/js/main.js"></script>
  <link rel="stylesheet" href="<?php echo get_home_url() ?>/assets/css/style.css">
  <?php wp_head(); ?>
</head>

<body>
  <header class="Header is-top">
    <a href="<?php echo get_home_url() ?>" class="Title Title-header">
      <h1>
        北アルプス黒部源流
      </h1>
      <span class="Text-small">Northern Alps Kurobe Genryu</span>
    </a>
    <nav class="Header_navi Header_navi-black">
      <ul class="Header_navi_list">
        <li class="Header_navi_list_item show">
          <p class="Header_navi_list_toggle">三俣山荘</p>
          <ul class="Header_navi_dropdown">
            <li class="Header_navi_dropdown_item">
              <a class="Header_navi_dropdown_link" href="<?php echo get_home_url() ?>/mitsumata/">宿泊情報</a>
            </li>
            <li class="Header_navi_dropdown_item">
              <a class="Header_navi_dropdown_link" href="<?php echo get_home_url() ?>/mitsumata/guide/">三俣山荘の魅力</a>
            </li>
          </ul>
        </li>
        <li class="Header_navi_list_item">
          <p class="Header_navi_list_toggle">水晶小屋</p>
          <ul class="Header_navi_dropdown">
            <li class="Header_navi_dropdown_item">
              <a class="Header_navi_dropdown_link" href="<?php echo get_home_url() ?>/suisho/">宿泊情報</a>
            </li>
            <li class="Header_navi_dropdown_item">
              <a class="Header_navi_dropdown_link" href="<?php echo get_home_url() ?>/suisho/guide/">水晶小屋の魅力</a>
            </li>
          </ul>
        </li>
        <li class="Header_navi_list_item">
          <p class="Header_navi_list_toggle">湯俣山荘</p>
          <ul class="Header_navi_dropdown">
            <li class="Header_navi_dropdown_item">
              <a class="Header_navi_dropdown_link" href="<?php echo get_home_url() ?>/yumata/">宿泊情報</a>
            </li>
            <li class="Header_navi_dropdown_item">
              <a class="Header_navi_dropdown_link" href="<?php echo get_home_url() ?>/yumata/guide/">湯俣山荘の魅力</a>
            </li>
          </ul>
        </li>
        <li class="Header_navi_list_item">
          <a href="<?php echo get_home_url() ?>/itoshindo/" class="Header_navi_listLink">伊藤新道</a>
        </li>
        <li class="Header_navi_list_item">
          <a href="https://reserva.be/kurobegenryu" class="Header_navi_reserve" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_calendar.svg" alt="宿泊予約フォーム">
            宿泊予約フォーム
          </a>
        </li>
        <li class="Header_navi_list_item">
          <button type="button" class="Header_menu"><span></span></button>
        </li>
      </ul>
    </nav>
    <div class="Menu">
      <div class="Menu_contents">
        <a href="<?php echo get_home_url() ?>" class="Title Title-menu">
          <h1>
            北アルプス黒部源流
          </h1>
          <span class="Text-small">Northern Alps Kurobe Genryu</span>
        </a>
        <div class="Menu_list">
          <ul>
            <li class="Menu_listItem Menu_expand">
              <button class="Menu_toggle Menu_text" type="button">三俣山荘</button>
              <ul class="Menu_innerList">
                <li><a href="<?php echo get_home_url() ?>/mitsumata/">宿泊情報</a></li>
                <li><a href="<?php echo get_home_url() ?>/mitsumata/guide/">三俣山荘の魅力</a></li>
              </ul>
            </li>
            <li class="Menu_listItem Menu_expand">
              <button class="Menu_toggle Menu_text" type="button">水晶小屋</button>
              <ul class="Menu_innerList">
                <li><a href="<?php echo get_home_url() ?>/suisho/">宿泊情報</a></li>
                <li><a href="<?php echo get_home_url() ?>/suisho/guide/">水晶小屋の魅力</a></li>
              </ul>
            </li>
            <li class="Menu_listItem Menu_expand">
              <button class="Menu_toggle Menu_text" type="button">湯俣山荘</button>
              <ul class="Menu_innerList">
                <li><a href="<?php echo get_home_url() ?>/yumata/">宿泊情報</a></li>
                <li><a href="<?php echo get_home_url() ?>/yumata/guide/">湯俣山荘の魅力</a></li>
              </ul>
            </li>
            <li class="Menu_listItem">
              <a class="Menu_text" href="<?php echo get_home_url() ?>/itoshindo/">伊藤新道</a>
            </li>
          </ul>
          <ul class="">
            <li class="Menu_listItem">
              <a class="Menu_text" href="<?php echo get_home_url() ?>/feature/">特集</a>
            </li>
            <li class="Menu_listItem">
              <a class="Menu_text" href="<?php echo get_home_url() ?>/news/">お知らせ</a>
            </li>
            <li class="Menu_listItem">
              <a class="Menu_text" href="<?php echo get_home_url() ?>/company/">三俣⼭荘事務所</a>
            </li>
            <li class="Menu_listItem">
              <a class="Menu_text" href="<?php echo get_home_url() ?>/contact/">お問い合わせ</a>
            </li>
          </ul>
          <ul>
            <li class="Menu_listItem">
              <a class="Menu_text" href="https://neoalps.com/" target="_blank">ネオアルプス</a>
            </li>
            <li class="Menu_listItem">
              <a class="Menu_text" href="https://neoalps.base.shop/" target="_blank">ネオアルプスオンラインストア</a>
            </li>
            <li class="Menu_follow">
              <p>
                Follow us
              </p>
              <?php get_template_part('/components/sns'); ?>
            </li>
          </ul>
        </div>
      </div>
      <button class="Menu_close" type="button"></button>
    </div>
  </header>