<?php
/*
Template Name: 会社概要
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="Company">
  <div class="Company_mv">
    <div class="Wrapper">
      <h2 class="ContentsTitle ContentsTitle-small ContentsTitle-center">三俣山荘 株式会社<span>Mitumata sanso Mountain Hut
          OFFICE</span></h2>
      <section class="Company_contents">
        <p class="Company_lead">
          山小屋開設時期の6月中旬から10月下旬までは、三俣山荘 衛星電話(TEL:090-4672-8108)までお問い合わせください。
        </p>
        <ul class="Company_list">
          <li>
            <div class="Company_list_item">
              <p>住所</p>
              <p><b>〒398-0002 <br class="sp">長野県大町市大町2557</b></p>
            </div>
          </li>
          <li>
            <div class="Company_list_item">
              <p>TEL</p>
              <p>
				<a href="tel:0263-83-5735"><b>0263-83-5735</b></a><span class="ml"></span>
                <!--<a href="tel:090-4672-8108"><b>090-4672-8108</b></a><span class="ml">（三俣山荘 現地電話）</span>-->
              </p>
            </div>
          </li>
          <li>
            <div class="Company_list_item">
              <p>MAIL</p>
              <p><a href="mailto:info@kumonodaira.net"><b>info@kumonodaira.net</b></a></p>
            </div>
          </li>
        </ul>
      </section>
    </div>
    <div class="Company_container">
      <div class="Wrapper">
        <ul class="BreadCrumb">
          <li><a href="<?php echo get_home_url() ?>">TOP</a></li>
          <li>三俣山荘事務所</li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>

</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>