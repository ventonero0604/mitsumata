<?php
/*
Template Name: 伊藤新道
Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="Main">
  <video class="pc video" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/main.mp4" playsinline muted autoplay loop></video>
  <video class="sp video" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/main_sp.mp4" playsinline muted autoplay loop></video>
  <?php
  // 'blog'カスタムポストタイプで、タグが'yumata'の最新の記事を1件取得するクエリ
  $args = array(
    'post_type' => 'blog', // カスタムポストタイプ名
    'posts_per_page' => 1, // 表示する投稿数
    'tag' => 'itoshindo' // タグに基づくフィルタリング
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
  ?>
      <div class="FloatingBanner -itoshindo">
        <a href="<?php the_permalink(); ?>">
          <div class="texts">
            <p class="heading">伊藤新道BLOG</p>
            <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
            <p class="text"><?php the_title(); ?></p>
          </div>
          <figure class="image">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('full', array('alt' => get_the_title()));
            }
            ?>
          </figure>
        </a>
        <button class="close js-banner-close">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_close.svg" alt="">
        </button>
      </div>
  <?php
    }
  } else {
    // 該当する記事がない場合は非表示
  }

  // メインクエリのポストデータをリセット
  wp_reset_postdata();
  ?>
</div>

<main class="Itoshindo">
  <section class="Important">
    <h3 class="ContentsTitle ContentsTitle-center">
      重要事項<span>Most important</span></h3>
    <p class="text">
      他のルートと違うのは、自然の魅力だけではない。なんといっても渡渉の多さである。それは渓谷につくられたいわゆる遊歩道のハイキングでもなく、手を加えられていない沢を登る沢登りとも違う。三俣山荘が⾧年整備を続けてきたどこを歩くも自由な伊藤新道なのである。しかし、自由が故に自身が引き受けるべきリスクが伴う。<br>
      伊藤新道はそのように自然の中で魅力とリスクが一体となったダイナミズムを深く感じられる場所なのだ。
    </p>
  </section>

  <section class="Important">
    <h3 class="ContentsTitle ContentsTitle-center">
      通行届<span>Thuru Pass</span></h3>
    <div class="item">
      <p class="text">
        通行の際は万が一に備えて湯俣山荘または三俣山荘で通行届を提出しましょう。<br>
        提出時には各小屋で最新情報を確認しましょう。
      </p>
    </div>
  </section>

  <section class="Route">
    <h3 class="ContentsTitle ContentsTitle-center">
      ルート<span>Route</span></h3>
    <figure class="img">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/route_pc.png" alt="" class="pc">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/route_sp.png" alt="" class="sp">
    </figure>
  </section>

  <section class="Time">
    <h3 class="ContentsTitle ContentsTitle-center">
      コースタイム<span>Course Time</span></h3>
    <figure class="img">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/time_pc.svg" alt="" class="pc">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/time_sp.svg" alt="" class="sp">
    </figure>
    <div class="texts">
      <p class="title">
        トータル時間
      </p>
      <p class="text">湯俣山荘ー三俣山荘<span>9時間50分</span></p>
      <p class="text">三俣山荘ー湯俣山荘<span>8時間</span></p>
    </div>
  </section>

  <section class="Period">
    <h3 class="ContentsTitle ContentsTitle-center">
      公式開通期間<span>Recommended Time</span></h3>
    <p class="title">8月20日頃～10月末</p>
    <p class="text">
      （湯俣川の水位が下がる頃〜<br class="sp">三俣山荘の小屋閉めまでが目安）<br>
      ※三俣山荘から展望台は7月下旬〜10月中旬まで
    </p>
  </section>

  <section class="Camera">
    <h3 class="ContentsTitle ContentsTitle-center">
      各吊り橋のライブカメラ<span>Real Time</span></h3>
    <h4 class="ContentsTitle ContentsTitle-center ContentsTitle-small">第1吊橋</h4>
    <div class="Items center">
      <div class="Item">
        <div class="live">
          <iframe src="https://drive.google.com/file/d/1-S2PGRAaKIB4viFmoX06-ICMj5UxuI0E/preview"></iframe>
        </div>
        <p class="ContentsTitle ContentsTitle-center ContentsTitle-small">
          現在<span>Real Time</span></p>
      </div>
    </div>
    <div class="mt-10">
      <h3 class="ContentsTitle ContentsTitle-center ContentsTitle-small">増水時と平水時の参考水位</h3>
      <p class="text-center mt-7">
        第1吊橋の増水時と平水時の参考水位画像です。<br>
        第1吊橋を通行する際にライブカメラで水量を確認してから通行してください。
      </p>
    </div>
    <div class="Items between">
      <div class="Item large">
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_cam_1.png" alt="">
        </figure>
      </div>
      <div class="Item large">
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_cam_2.png" alt="">
        </figure>
      </div>
    </div>
    <h4 class="ContentsTitle ContentsTitle-center ContentsTitle-small mt-10">第3吊橋</h4>
    <div class="Items center">
      <div class="Item">
        <div class="live">
          <iframe src="https://drive.google.com/file/d/1dlrfj4paqCvz1JKYSOClsmYb9r3UC2s8/preview"></iframe>
        </div>
        <p class="ContentsTitle ContentsTitle-center ContentsTitle-small">
          現在<span>Real Time</span></p>
      </div>
    </div>
    <h4 class="ContentsTitle ContentsTitle-center ContentsTitle-small mt-10">第5吊橋</h4>
    <div class="Items center">
      <div class="Item">
        <div class="live">
          <iframe src="https://drive.google.com/file/d/1GcdIfI2ahC_LaiNB1GJme9nVwCe1asfj/preview"></iframe>
        </div>
        <p class="ContentsTitle ContentsTitle-center ContentsTitle-small">
          現在<span>Real Time</span></p>
      </div>
    </div>
  </section>

  <section class="Caution">
    <h3 class="ContentsTitle ContentsTitle-center">
      特に注意すべきこと<span>Caution</span></h3>
    <h4 class="ContentsTitle ContentsTitle-center ContentsTitle-small">計画編</h4>
    <ul class="list">
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_planning_1.png" alt="">
        </figure>
        <p class="text">
          渡渉を15回以上繰り返す、判断力の求められるバリエーションルートであることを確認する。
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_planning_2.png" alt="">
        </figure>
        <p class="text">
          伊藤新道の整備状況を入山前に確認する。
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_planning_4.png" alt="">
        </figure>
        <p class="text">
          コースタイムは登り10時間、下り８時間（湯俣～三俣山荘）、さらに湯俣～高瀬ダムは片道３時間かかることを踏まえて踏まえて計画書を作ること。
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_planning_4.png" alt="">
        </figure>
        <p class="text">
          増水するリスクが、天候だけでなく、火山活動による場合もある
        </p>
      </li>
    </ul>

    <h4 class="ContentsTitle ContentsTitle-center ContentsTitle-small mt-10">装備編</h4>
    <ul class="list">
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_equipment_1.png" alt="">
        </figure>
        <p class="text">
          ヘルメットを着用すること
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_equipment_2.png" alt="">
        </figure>
        <p class="text">
          地図を携帯すること
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_equipment_3.png" alt="">
        </figure>
        <p class="text">
          増水時に備えてビバーク装備を持参すること
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_equipment_4.png" alt="">
        </figure>
        <p class="text">
          ザック内の装備はは防水対策をすること
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_equipment_5.png" alt="">
        </figure>
        <p class="text">
          伊藤新道上の沢床は苔が生えていないことからラバーソールを推奨
        </p>
      </li>
    </ul>

    <h4 class="ContentsTitle ContentsTitle-center ContentsTitle-small mt-10">環境編</h4>
    <ul class="list">
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_environment_1.png" alt="">
        </figure>
        <p class="text">
          伊藤新道上での非常時以外のテント泊禁止。
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_environment_2.png" alt="">
        </figure>
        <p class="text">
          直火での焚火禁止
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_environment_3.png" alt="">
        </figure>
        <p class="text">
          動植物の捕獲や採取禁止
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_environment_4.png" alt="">
        </figure>
        <p class="text">
          ゴミはすべて持ち帰る
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_environment_5.png" alt="">
        </figure>
        <p class="text">
          トイレはできるだけ既存の施設を利用する
        </p>
      </li>
    </ul>

    <h4 class="ContentsTitle ContentsTitle-center ContentsTitle-small mt-10">行動編</h4>
    <ul class="list">
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_action_1.png" alt="">
        </figure>
        <p class="text">
          ライブカメラで水量を確認してから入山する
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_action_2.png" alt="">
        </figure>
        <p class="text">
          湯俣から伊藤新道に入山する場合には湯俣を8時30分までに出発する
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_action_3.png" alt="">
        </figure>
        <p class="text">
          三俣山荘から伊藤新道に入山する場合には三俣山荘を9時までに出発する
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_action_4.png" alt="">
        </figure>
        <p class="text">
          落石や浮き石、崩落の危険がある場所は注意して通行する
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_action_5.png" alt="">
        </figure>
        <p class="text">
          吊り橋は一人ずつ渡る
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_action_6.png" alt="">
        </figure>
        <p class="text">
          渡渉点では先行パーティがいる場合には渡り切ったことを確認してから渡渉を開始する
        </p>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_action_7.png" alt="">
        </figure>
        <p class="text">
          噴湯丘を初めとする自然の造形や昔の吊り橋の跡等の伊藤新道の魅力を皆で守る
        </p>
      </li>
    </ul>
  </section>

  <section class="Contact">
    <h3 class="ContentsTitle ContentsTitle-center">
      お問い合わせ<span>Contact</span></h3>
    <a href="tel:05088926698">050-8892-6698</a>
    <p class="text">湯俣山荘</p>
  </section>

  <section class="Guide">
    <h3 class="ContentsTitle ContentsTitle-center">
      ガイド<span>Guide</span></h3>
    <p class="lead">
      伊藤新道ガイディングクラブのガイドを活用すると、歩くことだけでなく、伊藤新道の歴史や自然に関することを知ることができます。<br>
      一人で歩くのに自身が無い方はもちろん、すでに歩いたことのある方も新たな発見ができるツアーを目指しています。
    </p>
    <ul class="list">
      <li>
        <a href="https://www.tam-mountainguide.com/" target="_blank">
          <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_guide_1.png" alt=""></figure>
          <span>
            田村ガイド
          </span>
        </a>
      </li>
      <li>
        <a href="https://www.yamatami.com/%E4%BC%9A%E5%93%A1%E7%B4%B9%E4%BB%8B/%E4%B8%AD%E5%B1%B1-%E6%B3%B0" target="_blank">
          <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_guide_2.png" alt=""></figure>
          <span>
            中山ガイド
          </span>
        </a>
      </li>
      <li>
        <a href="https://guide.mt-kawauso.com/" target="_blank">
          <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/itoshindo/img_guide_3.png" alt=""></figure>
          <span>
            住久ガイド
          </span>
        </a>
      </li>
    </ul>
  </section>

  <section class="Guide">
    <h3 class="ContentsTitle ContentsTitle-center">
      インスタグラム<span>INSTAGRAM</span></h3>
    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
  </section>
</main>

<div class="Wrapper mt-25">
  <ul class="BreadCrumb">
    <li><a href="/">TOP</a></li>
    <li>伊藤新道</li>
  </ul>
</div>
<?php get_footer(); ?>

<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>