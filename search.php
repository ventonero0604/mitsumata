<?php get_header(); ?>

<main class="Article">
  <div class="Article_mv Article_mv-news">
    <div class="Wrapper">
      <h2 class="ContentsTitle ContentsTitle-small">お知らせ<span class="ContentsTitle_dark">NEWS</span></h2>
      <ul class="Filter">
        <li class="Filter_search">
          <?php get_search_form(); ?>
        </li>
      </ul>
      <div class="Article_contents">
        <ul class="InfoList">
          <?php
          $posts_per_page = 99; // 1ページに表示する記事数
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => $posts_per_page,
            's' => get_search_query(),
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
                      echo '<li><a href="' . get_tag_link($tag) . '">' . '#' . $tag->name . '</a></li>';
                    }
                  }
                  ?>
                </ul>
              </li>
          <?php
            }
          }
          // リセット
          wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
    <div class="Article_container">
      <div class="Wrapper">
        <ul class="BreadCrumb">
          <li><a href="<?php echo get_home_url() ?>">TOP</a></li>
          <li>検索結果</li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>
</main>

<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>