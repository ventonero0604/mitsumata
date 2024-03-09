<?php get_header(); ?>
<main class="Article">
  <div class="Article_mv">
    <div class="Wrapper">
      <h2 class="ContentsTitle ContentsTitle-small">特集<span class="ContentsTitle_dark">FEATURE</span></h2>

      <section class="Article_source">
        <h1><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
          <figure class="Article_mainImage">
            <?php the_post_thumbnail(); ?>
          </figure>
        <?php endif; ?>
        <div class="Article_source_inner">
          <?php the_content(); ?>
          <ul class="Tags Tags-center">
            <?php
            $post_tags = get_the_tags(); // 記事のタグを取得
            if ($post_tags) {
              foreach ($post_tags as $tag) {
                echo '<li><a href="' . get_tag_link($tag) . '">' . '#' . $tag->name . '</a></li>';
              }
            }
            ?>
          </ul>
          <div class="Article_links">
            <div>
              <?php
              $prev_post = get_adjacent_post(false, '', false);
              if (!empty($prev_post)) : ?>
                <a class="prev" href="<?php echo get_permalink($prev_post); ?>">前の記事に戻る</a>
              <?php endif; ?>
              <?php
              if (empty($prev_post)) : ?>
                <a class="list" href="<?php echo get_home_url() ?>/feature" class="w-full">特集一覧に戻る</a>
              <?php endif; ?>

              <?php
              $next_post = get_adjacent_post(false, '', true);
              if (!empty($next_post)) : ?>
                <a class="next" href="<?php echo get_permalink($next_post); ?>">次の記事を読む</a>
              <?php endif; ?>
            </div>
            <?php
            if (!empty($prev_post)) : ?>
              <a class="list" href="<?php echo get_home_url() ?>/feature" class="w-full">特集一覧に戻る</a>
            <?php endif; ?>

          </div>
        </div>
      </section>

      <?php
      $related_posts = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type'      => 'feature',
        'post__not_in'   => array($post->ID),
        'orderby'        => 'date',
      ));

      if ($related_posts->have_posts()) : ?>
        <div class="mt-25 mb-50 sp:mt-8 sp:mb-25">
          <h3 class="text-[2.5rem]">関連記事</h3>

          <ul class="InfoList">
            <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
              <li class="InfoList_item">
                <a href="<?php the_permalink(); ?>" class="InfoList_link">
                  <div class="text">
                    <p><?php the_title(); ?></p>
                  </div>
                </a>
                <ul class="Tags">
                  <?php
                  $post_tags = get_the_tags();
                  if ($post_tags) {
                    foreach ($post_tags as $tag) {
                      echo '<li><a href="' . get_tag_link($tag->term_id) . '" class="tag">#' . $tag->name . '</a></li>';
                    }
                  }
                  ?>
                </ul>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      <?php
        wp_reset_postdata();
      endif;
      ?>
    </div>
    <div class="Article_container">
      <div class="Wrapper">
        <ul class="BreadCrumb">
          <li><a href="<?php echo get_home_url() ?>">TOP</a></li>
          <li><a href="<?php echo get_home_url() ?>/feature/">特集</a></li>
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