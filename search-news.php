<?php get_header(); ?>

<main class="Article">
  <div class="Article_mv Article_mv-news">
    <div class="Wrapper">
      <h2 class="ContentsTitle ContentsTitle-small">お知らせ<span class="ContentsTitle_dark">NEWS</span></h2>
      <ul class="Filter">
        <li class="Filter_search">
          <form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/">
            <input type="text" name="s" id="s" placeholder="検索する">
            <input type="hidden" name="post_type" value="news">
            <button type="submit"></button>
          </form>
        </li>
      </ul>
      <div class="Article_contents">
        <ul class="InfoList">
          <?php
          if (have_posts()) { // WordPressのグローバルクエリを使用
            while (have_posts()) {
              the_post();
              // 以下に検索結果のマークアップを出力
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
          } else {
            echo "<li class='text-center'>検索結果が見つかりませんでした。</li>";
          }
          ?>
        </ul>
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