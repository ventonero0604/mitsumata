<?php get_header(); ?>
<main class="Top">
  <section class="Top_main">
    <div class="Top_main_text">
      <h2 class="Top_main_text_lead">北アルプス黒部源流</h2>
      <h3 class="Top_main_text_sub">Northern Alps Kurobe Genryu</h3>
      <div class="ScrollDown"></div>
    </div>
    <div class="Top_movie">
      <video id="video" playsinline muted autoplay loop>
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/main.mp4" type="video/mp4">
      </video>
    </div>
  </section>

  <section class="Top_lead" id="lead">
    <div class="Top_lead_wrapper">
      <p class="Top_lead_text">
        北アルプス最奥地にして、2500m以上の標高にありながらゆったりとした山容に<br class="pc" />
        原始と変わらぬ生態系の奥行きが息づいている黒部源流。<br />
        1945年に先代伊藤正一が初めて足を踏み入れた当時、<br class="pc" />
        職猟師と物の怪だけが手中に収めていたその<br class="sp">世界はやがて、<br />
        その美しさを広く知られるようになり、<br />
        一般登山者からハイカー、エコロジストからアスリートまでもをその大きな懐に抱え、<br />
        いつの日か帰る場所を教えるように、凛と存在している
      </p>
      <div class="Top_lead_que" id="top_lead_que1"></div>
      <div class="Top_lead_que" id="top_lead_que2"></div>
      <div class="Top_lead_que" id="top_lead_que3"></div>
    </div>
  </section>

  <div class="Top_lead_scene">
    <div class="Top_lead_scene_image true" id="top_lead_scene_1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lead_1.jpg)">
    </div>
    <div class="Top_lead_scene_image" id="top_lead_scene_2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lead_2.jpg)">
    </div>
    <div class="Top_lead_scene_image" id="top_lead_scene_3" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lead_3.jpg)">
    </div>
  </div>

  <div class="Wrapper-black">
    <section class="Top_lodge" id="top_lodge">
      <div class="Top_lodge_contents">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_mitsumata.svg" alt="三俣山荘">
        <!-- <p class="Top_lodge_text">
            黒部源流を仰ぎ幾多の歴史を刻み続ける<br />
            「山賊」とともに生きた山小屋
          </p> -->
        <ul class="Top_lodge_links">
          <li>
            <a href="/mitsumata/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_note.svg" alt="">
              <p>宿泊情報</p>
            </a>
          </li>
          <li>
            <a href="/mitsumata/guide/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_sign.svg" alt="">
              <p>三俣山荘の魅力</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="Top_lodge_image">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lodge_mitsumata.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lodge_mitsumata_sp.jpg" alt="">
        </picture>
      </div>
    </section>

    <section class="Top_lodge">
      <div class="Top_lodge_contents">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_suisho.svg" alt="三俣山荘">
        <!-- <p class="Top_lodge_text">
            風の難所に立つ自然の存在を近くに感じる<br />
            北アルプスで最も小さい山小屋のひとつ
          </p> -->
        <ul class="Top_lodge_links">
          <li>
            <a href="/suisho/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_note.svg" alt="">
              <p>宿泊情報</p>
            </a>
          </li>
          <li>
            <a href="/suisho/guide/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_sign.svg" alt="">
              <p>水晶小屋の魅力</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="Top_lodge_image">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lodge_suisho.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lodge_suisho_sp.jpg" alt="">
        </picture>
      </div>
    </section>

    <section class="Top_lodge">
      <div class="Top_lodge_contents">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_yumata.svg" alt="湯俣山荘">
        <!-- <p class="Top_lodge_text">
            40年ぶりに再開! 伊藤新道の入口に位置する<br />
            新しいアウトドアアクティビティの拠点
          </p> -->
        <ul class="Top_lodge_links">
          <li>
            <a href="/yumata/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_note.svg" alt="">
              <p>宿泊情報</p>
            </a>
          </li>
          <li>
            <a href="/yumata/guide/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_sign.svg" alt="">
              <p>湯俣山荘の魅力</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="Top_lodge_image">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lodge_yumata.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_lodge_yumata_sp.jpg" alt="">
        </picture>
      </div>
    </section>

    <section class="Top_itoshindo">
      <div class="Top_itoshindo_contents">
        <h3 class="Top_itoshindo_title">
          <img class="Top_itoshindo_title_a" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ttl_itoshindo_a.svg" alt="復活">
          <img class="Top_itoshindo_title_b" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ttl_itoshindo_b.svg" alt="伊藤新道">
          <p class="Top_itoshindo_badge"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_badge_itoshindo.svg" alt="北アルプスのラストフロンティア"></p>
        </h3>
        <p class="Top_itoshindo_text">
          あまりに険しき環境ゆえに再整備は難しいとされてきた伊藤新道が2023年秋いよいよ復活！<br />
          北アルプスのラストフロンティアを遊び尽くせ。
        </p>
        <a href="/itoshindo/" class="Button Button_square">VIEW ALL</a>
      </div>
    </section>
  </div>

  <section class="Top_info">
    <div class="Wrapper">
      <h3 class="ContentsTitle">お知らせ<span>NEWS</span></h3>
      {{> news}}
      <a href="/news/" class="Button Button_square mt-18 mx-auto">VIEW ALL</a>
    </div>
    <div class="Wrapper">
      <h3 class="ContentsTitle ContentsTitle-center">インスタグラム<span>INSTAGRAM</span></h3>
      <ul class="Top_instagram">
      </ul>
      <a href="https://www.instagram.com/mitsumatasanso/" class="Button Button_square mt-18 mx-auto">VIEW ALL</a>
    </div>
    <div class="Wrapper">
      <h3 class="ContentsTitle">特集<span>FEATURE</span></h3>
      {{> feature}}
      <a href="/feature/" class="Button Button_square mt-18 mx-auto">VIEW ALL</a>
    </div>
  </section>

  <div class="Wrapper-black">
    <section class="Top_carousel">
      <ul class="Carousel">
        <li>
          <a href="https://kumonodaira.net/ito_shindo/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_a.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://kumonodaira.net/tent/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_b.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://kumonodaira.net/project/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_c.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://kumonodaira.net/bus/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_d.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://kumonodaira.net/ito_shindo/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_a.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://kumonodaira.net/tent/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_b.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://kumonodaira.net/project/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_c.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://kumonodaira.net/bus/index.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_banner_d.jpg" alt=""></a>
        </li>
      </ul>
    </section>

    <?php get_footer(); ?>
  </div>

  <a href="#" class="PageTop">PAGE TOP</a>
</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>