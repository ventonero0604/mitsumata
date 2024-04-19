<?php get_header(); ?>
<main class="Article">
  <div class="Article_mv Article_mv-blog">
    <div class="Wrapper">
      <h2 class="ContentsTitle ContentsTitle-small">ブログ<span class="ContentsTitle_dark">BLOG</span></h2>
      <ul class="Filter">
        <li class="Filter_search">
          <form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/">
            <input type="text" name="s" id="s" placeholder="検索する">
            <input type="hidden" name="post_type" value="blog">
            <button type="submit"></button>
          </form>
        </li>
      </ul>
      <div class="Article_contents">
        <ul class="FeatureList">
          <?php
          $posts_per_page = 5; // 1ページに表示する記事数
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'blog',
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

          // ページネーションを表示
          echo '<div class="mt20 PageLink">';
          echo paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => max(1, $paged),
            'prev_text' => '＜',
            'next_text' => '＞',
          ));
          echo '</div>';

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
          <li>ブログ</li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>
</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>