<?php
/*
Template Name: 【オフシーズン】湯俣山荘の宿泊情報
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="Info">

  <div class="Info_main">
    <div class="Info_wrapper Info_wrapper-yumata">

      <section class="Info_contents" style="height: 80vh">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_yumata_white.svg" alt="" class="mx-auto mb-25 w-30">
        <div class="text-center grid gap-8 text-[20px]">
          <p>
            2024の山小屋営業は終了いたしました。<br>
            ご利用ありがとうございました。
          </p>
          <p>
            2025シーズンの案内は、2025春ごろを予定しております。<br>
            その他の情報は、Instagramにて発信予定です。
          </p>
        </div>
      </section>

      <div class="Info_container">
        <?php get_template_part('components/lodgeInfo'); ?>
        <div class="Wrapper">
          <ul class="BreadCrumb">
            <li><a href="<?php echo get_home_url() ?>">TOP</a></li>
            <li>湯俣山荘宿泊情報</li>
          </ul>
        </div>
        <?php get_footer(); ?>
      </div>
    </div>
  </div>

  <?php
  // 'blog'カスタムポストタイプで、タグが'yumata'の最新の記事を1件取得するクエリ
  $args = array(
    'post_type' => 'blog', // カスタムポストタイプ名
    'posts_per_page' => 1, // 表示する投稿数
    'tag' => 'yumata' // タグに基づくフィルタリング
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
  ?>
      <div class="FloatingBanner -yumata">
        <a href="<?php the_permalink(); ?>">
          <div class="texts">
            <p class="heading">湯俣山荘BLOG</p>
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

  <a href="#" class="PageTop">PAGE TOP</a>
</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>