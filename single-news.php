<?php
/*
Template Name: ニュース詳細
Template Post Type: post
*/
?>

<?php get_header(); ?>
<main class="Article">
  <div class="Article_mv">
    <div class="Wrapper">
      <h2 class="ContentsTitle ContentsTitle-small">お知らせ<span>NEWS</span></h2>
      <h3 class="mt-6"><?php the_tags(''); ?></h3>
      <p class="text-[1.4rem] mt-6"><?php the_time('Y.m.d'); ?></p>

      <section class="Article_source">
        <h1><?php the_title(); ?></h1>
        <img src="<?php the_field('news_main_image'); ?>" alt="">
        <div class="Article_source_inner">
          <?php the_content(); ?>
          <div class="Article_links">
            <div>
              <?php
              $prev_post = get_adjacent_post(false, '', false);
              if (!empty($prev_post)) : ?>
                <a href="<?php echo get_permalink($prev_post); ?>">&lt　前の記事に戻る</a>
              <?php endif; ?>

              <?php
              $next_post = get_adjacent_post(false, '', true);
              if (!empty($next_post)) : ?>
                <a href="<?php echo get_permalink($next_post); ?>">次の記事を読む　></a>
              <?php endif; ?>
            </div>
            <div>
              <a href="<?php echo get_home_url() ?>/news">&lt　お知らせ一覧に戻る</a>
            </div>
          </div>
        </div>
      </section>

      <div class="mt-25 mb-50 sp:mt-8 sp:mb-25">
        <h3 class="text-[2.5rem]">関連記事</h3>

        <ul class="InfoList InfoList-arrow">
          <?php
          $related_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'category__in'   => wp_get_post_categories($post->ID),
            'post__not_in'   => array($post->ID),
            'orderby'        => 'date',
          ));

          while ($related_posts->have_posts()) : $related_posts->the_post();
          ?>
            <li class="InfoList_item">
              <a href="<?php the_permalink(); ?>" class="InfoList_link">
                <p class="date"><?php the_time('Y.m.d'); ?></p>
                <div class="text">
                  <p><?php the_excerpt(); ?></p>
                  <span><?php the_author(); ?></span>
                </div>
              </a>
            </li>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
    <div class="Article_container">
      <div class="Wrapper">
        <ul class="BreadCrumb">
          <li><a href="<?php echo get_home_url() ?>">TOP</a></li>
          <li><a href="<?php echo get_home_url() ?>/news/">お知らせ</a></li>
          <li><?php the_title(); ?></li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>

</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>