<?php
/*
Template Name: お問い合わせ
Template Post Type: page
*/
?>

<?php get_header(); ?>
<main class="Contact">
  <div class="Contact_mv">
    <h2 class="ContentsTitle ContentsTitle-small ContentsTitle-center">お問い合わせ<span>CONTACT</span></h2>
    <h3 class="Contact_title">お電話・メールでのお問い合わせ</h3>
    <div class="Wrapper">
      <ul class="Contact_list">
        <li>
          <div class="Contact_list_item">
            <p>三俣山荘 大町事務室</p>
            <p>〒398-0002 長野県大町市大町2557</p>
          </div>
        </li>
        <li>
          <div class="Contact_list_item">
            <p>ネット予約</p>
            <!-- <a href="https://reserva.be/kurobegenryu2024" target="_blank">予約WEBフォーム</a> -->
            <p>2024年4月ごろ開始予定</p>
          </div>
        </li>
        <li>
          <div class="Contact_list_item">
            <p>電話予約:三俣山荘</p>
            <!-- <p><a href="tel:050-8882-5833">050-8882-5833</a><span class="ml">(7:00-16:00)</span></p> -->
            <p>2024年7月にお知らせ予定</p>
          </div>
        </li>
        <li>
          <div class="Contact_list_item">
            <p>電話予約:水晶小屋</p>
            <!-- <p><a href="tel:070-1183-7080">070-1183-7080</a><span class="ml">(7:00-16:00)</span></p> -->
            <p>2024年7月にお知らせ予定</p>
          </div>
        </li>
        <li class="Contact_list_item">
          <p>電話予約:湯俣山荘</p>
          <!-- <p><a href="tel:070-4811-7994">070-4811-7994</a><span class="ml">(8:00-18:00)</span></p> -->
          <p>2024年4月にお知らせ予定</p>
        </li>
       <li>
          <div class="Contact_list_item">
            <p>予約に関する相談と団体予約</p>
            <div class="flex flex-wrap">
                <p>
                  <span>E-mail：</span>
                  <a href="mailto:yoyaku@mitsumatasanso.com">yoyaku@mitsumatasanso.com</a>
                </p>
                <p class="">
                  <span><b> ｜ </b>電話： </span>
                  <a href="tel:0263‐83‐5735">0263‐83‐5735</a>　(月‐木曜日 9:00-16:00)
                </p>
              </div>
          </div>
        </li>
       <li>
          <div class="Contact_list_item">
            <p>その他お問い合わせ</p>
            <div class="flex flex-wrap">
              <div class="flex items-baseline sp:flex-wrap">
                <span class="pc:mr sp:w-full">E-mail: </span>
                <a href="mailto:info@mitsumatasanso.com">info@mitsumatasanso.com</a>
              </div>
              <div class="flex items-baseline pc:ml-3 sp:flex-wrap sp:mt-3">
                <span class="pc:mr sp:w-full"><span class="pc_inline"> ｜ </span>電話: </span>
                <a href="tel:050‐8882‐5833">050‐8882‐5833</a>
                <!--<span class="ml">(7:00-16:00)</span>-->
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="Contact_list_item">
            <p>緊急連絡先</p>
            <!-- <p><a href="tel:090-4672-8108">090-4672-8108</a><span class="pc:ml sp:block">
                (三俣山荘現地衛星電話)※山小屋営業期間のみ）</span></p> -->
                <p>現在ご利用いただけません。</p>
          </div>
        </li>
      </ul>
      <p class="text-[1.4rem] mt-6">※電話番号のかけ間違いが多く苦情が寄せられています。お問合せの際は今一度確認して頂きますようお願いいたします。</p>
    </div>

    <div class="Wrapper my-37">
      <h3 class="Contact_title">お問い合わせフォーム</h3>
      <?php the_content(); ?>
    </div>
    <div class="Contact_container">
      <div class="Wrapper">
        <ul class="BreadCrumb">
          <li><a href="<?php echo get_home_url() ?>">TOP</a></li>
          <li>お問い合わせ</li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>

  <a href="#" class="PageTop">PAGE TOP</a>
</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>