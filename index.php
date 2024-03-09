<?php get_header(); ?>
<main class="Top">
  <?php get_template_part('/components/spinner'); ?>
  <section class="Top_main">
    <div id="player" class="Top_movie">
      <video class="pc" playsinline muted autoplay loop>
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/main.mp4" type="video/mp4">
      </video>
      <video class="sp" playsinline muted autoplay loop>
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/main_sp.mp4" type="video/mp4">
      </video>
    </div>
  </section>

  <section class="Top_lead" id="lead">
    <div class="Top_lead_wrapper">
      <p class="Top_lead_text">
        北アルプス最奥地にして、2500m以上の標高にありながら、ゆったりとした山容に、<br class="pc" />
        原始と変わらぬ生態系の奥行きが息づいている黒部源流。<br />
        1945年に先代伊藤正一が初めて足を踏み入れた当時、<br class="pc" />
        職猟師と物の怪だけが手中に収めていた<br class="sp">その世界はやがて、<br />
        広く美しさを知られるようになり、<br />
        一般登山者からハイカー、エコロジストからアスリートまでをもその大きな懐に抱え、<br />
        いつの日か帰る場所を教えるように、凛と存在している
      </p>
    </div>
  </section>

  <div class="Wrapper-black">
    <section class="Top_lodge" id="top_lodge">
      <div class="Top_lodge_contents">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_mitsumata.svg" alt="三俣山荘" class="w-30">
        <ul class="Top_lodge_links">
          <li>
            <a href="<?php echo get_home_url() ?>/mitsumata/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_note.svg" alt="">
              <p>宿泊情報</p>
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url() ?>/mitsumata/guide/">
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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_suisho.svg" alt="三俣山荘" class="w-30">
        <ul class="Top_lodge_links">
          <li>
            <a href="<?php echo get_home_url() ?>/suisho/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_note.svg" alt="">
              <p>宿泊情報</p>
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url() ?>/suisho/guide/">
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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_yumata.svg" alt="湯俣山荘" class="w-30">
        <ul class="Top_lodge_links">
          <li>
            <a href="<?php echo get_home_url() ?>/yumata/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_note.svg" alt="">
              <p>宿泊情報</p>
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url() ?>/yumata/guide/">
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
        <a href="<?php echo get_home_url() ?>/itoshindo/" class="Button Button_square">VIEW ALL</a>
      </div>
    </section>
  </div>

  <section class="Top_info">
    <div class="Wrapper">
      <h3 class="ContentsTitle">お知らせ<span>NEWS</span></h3>
      <ul class="InfoList">
        <?php
        $posts_per_page = 3; // 1ページに表示する記事数
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => $posts_per_page,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <li class="InfoList_item">
              <a href="<?php the_permalink(); ?>" class="InfoList_link">
                <p class="date"><?php the_time('Y.m.d'); ?></p>
                <div class="text">
                  <p><?php the_title(); ?></p>
                </div>
              </a>
              <ul class="Tags">
                <?php
                $post_tags = get_the_tags();
                if ($post_tags) {
                  foreach ($post_tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id);
                    echo '<li><a href="' . esc_url($tag_link) . '">' . '#' . esc_html($tag->name) . '</a></li>';
                  }
                }
                ?>
              </ul>
            </li>
        <?php
          }
        }
        wp_reset_postdata();
        ?>
      </ul>
      <a href="<?php echo get_home_url() ?>/news/" class="Button Button_square mt-18 mx-auto">VIEW ALL</a>
    </div>
    <div class="Wrapper">
      <h3 class="ContentsTitle ContentsTitle-center">インスタグラム<span>INSTAGRAM</span></h3>
      <ul class="Top_instagram">
      </ul>
      <a href="https://www.instagram.com/mitsumatasanso/" class="Button Button_square mt-18 mx-auto">VIEW ALL</a>
    </div>
    <div class="Wrapper">
      <h3 class="ContentsTitle">特集<span>FEATURE</span></h3>
      <ul class="FeatureList">
        <?php
        $posts_per_page = 3; // 1ページに表示する記事数
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'feature',
          'posts_per_page' => $posts_per_page,
          'paged' => $paged,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <li class="FeatureList_item">
              <a href="<?php the_permalink(); ?>" class="FeatureList_link">
                <div class="text">
                  <p><?php the_title(); ?></p>
                </div>
                <figure class="image">
                  <?php the_post_thumbnail(); ?>
                </figure>
              </a>
            </li>
        <?php
          }
        }
        wp_reset_postdata();
        ?>
      </ul>
      <a href="<?php echo get_home_url() ?>/feature/" class="Button Button_square mt-18 mx-auto">VIEW ALL</a>
    </div>
  </section>

  <div class="Wrapper-black">
    <!-- <section class="Top_carousel">
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
    </section> -->

    <?php get_footer(); ?>
  </div>

  <a href="#" class="PageTop">PAGE TOP</a>
</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>