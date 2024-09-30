<?php
/*
Template Name: 【オフシーズン】三俣山荘の宿泊情報
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="Info">

  <div class="Info_main">
    <div class="Info_wrapper Info_wrapper-mitsumata">

      <section class="Info_contents" style="height: 80vh">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_mitsumata.svg" alt="" class="mx-auto mb-25 w-30">
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
            <li>三俣山荘宿泊情報</li>
          </ul>
        </div>
        <?php get_footer(); ?>
      </div>
    </div>
  </div>


  <a href="#" class="PageTop">PAGE TOP</a>
</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>