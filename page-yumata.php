<?php
/*
Template Name: 湯俣山荘の宿泊情報
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="Info">

  <div class="Info_main">
    <div class="Info_wrapper Info_wrapper-yumata">

      <nav class="Info_menu">
        <a href="<?php echo get_home_url() ?>/yumata/guide/" class="Button Button_circle">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ico_sign.svg" alt="">
          <p>
            湯俣山荘の<br />
            魅力
          </p>
        </a>
        <h2 class="Info_menu_title">湯俣山荘</h2>
        <h3 class="Info_menu_subTitle">宿泊情報</h3>
        <ul class="Info_menu_list">
          <li><a href="#introduction">施設紹介</a></li>
          <li><a href="#reservation">山荘予約</a></li>
          <li><a href="#roomprice">宿泊料金</a></li>
          <li><a href="#discount">割引</a></li>
          <li><a href="#calendar">カレンダー</a></li>
        </ul>
        <!--<a class="Info_menu_toForm" href="https://reserva.be/kurobegenryu2024/reserve?mode=htl&evt_no=42eJwzNDezsAAAAyABDw&room_num=1&people=1.0.0.0">宿泊予約フォーム</a>-->
      </nav>

      <section class="Info_contents">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_group_yumata_white.svg" alt="" class="mx-auto mb-25 w-30">
        <h3 class="ContentsTitle ContentsTitle-center ContentsTitle-small" id="introduction">
          施設紹介<span>INTRODUCTION</span></h3>
        <div class="Info_text">
          <p>開設時期</p>
          <p>春：5月と6月の週末のみ営業<br>夏：7月1日(月)～11月9日(土)の宿泊まで</p>
        </div>
        <div class="Info_text">
          <p>定員</p>
          <p>28名</p>
        </div>
        <div class="Info_text">
          <p>予約の在り方</p>
          <p>完全予約制</p>
        </div>

        <h3 class="ContentsTitle ContentsTitle-center ContentsTitle-small" id="reservation">
          山荘予約<span>RESERVATION</span></h3>
        <div class="Info_text_wrapper">
          <div class="Info_text">
            <p>予約専用電話</p>
            <p>
              予約電話 <a href="tel:050-8892-6698">050-8892-6698</a>　<small>受付時間: 水・土　9:00-18:00</small>
            </p>
          </div>
          <div class="Info_text">
            <p>個人予約</p>
            <p>
              4/1（月）10:00より予約専用サイトにて受付開始予定
            </p>
          </div>
          <div class="Info_text">
            <p>団体予約（7-12名様）</p>
            <p>
              メールにて受付<br>
              ▪予約専用Email：<a href="mailto:yoyaku@kumonodaira.net">yoyaku@kumonodaira.net</a>
            </p>
          </div>
          <div class="Info_text sp:mt-5">
            <p class="sp:mb-3">団体予約の際の<br class="pc" />
              確認事項</p>
            <div>
              <p>
                団体名と代表者様名/ 合計人数（内ガイド添乗員様がいる場合の人数）/ 代表者/ 電話/ 食事の有無/ 前夜宿泊地/ 翌日宿泊地<br />
                <small>※WEB予約フォームはご利用できませんのでご留意ください。</small><br>
                <small>※団体について</small><br>
                <small>7名様以上のグループは団体として取り扱います。原則1日1組、上限は添乗員ガイド様含め12名様までとします。</small>
              </p>
            </div>
          </div>
        </div>

        <div class="Info_text_wrapper">
          <div class="Info_text">
            <p class="sp:mb-10">予約に際してのお願い</p>
            <div>
              <p class="Annotation">
                <span>・</span>予備日や日程が決まっていない日の複数日のご予約はご遠慮ください。
              </p>
              <p class="Annotation">
                <span>・</span>コロナの感染拡大など小屋の受入れ状況に変更がでましたら、ホームページにてご案内いたします。入山前に今一度当山荘ホームページをご確認ください。
              </p>
              <p class="Annotation">
                <span>・</span>電波状況により電話が途切れる場合は、再度掛け直しをお願いいたします。
              </p>
            </div>
          </div>
        </div>

        <div class="Info_text_wrapper">
          <div class="Info_text">
            <p class="sp:mb-10">キャンセル規定</p>
            <div>
              <p>
                キャンセル料はペナルティという意味ではなく、山荘経営維持のためのご協力のお願いであるということをご理解いただければ幸いです。
              </p>
              <div class="col2 mt-6">
                <span>個人</span>
                <span>宿泊日の5日前～キャンセル料　3,000円/人</span>
              </div>
              <div class="col3 mt-6">
                <p>団体</p>
                <div>
                  7日前～<br />
                  5日前～
                </div>
                <div>
                  キャンセル料3,000円/人<br />
                  キャンセル料3,000円/人
                </div>
              </div>
              <small class="Annotation mt-6">
                <span>※</span>あきらかな交通障害（登山道の通行止め、公共交通機関のストップ等）、行政からの要請（緊急事態宣言等）は、上記キャンセル料の対象とはなりません。
              </small>
              <small class="Annotation">
                <span>※</span>天候判断によるキャンセルは、判断基準に個人差が生じるため、上記の対応とさせていただきます。ご理解とご協力をいただきますよう、お願い申し上げます。
              </small>
            </div>
          </div>
          <a href="https://mitsumatasanso.com/news/%e3%82%ad%e3%83%a3%e3%83%b3%e3%82%bb%e3%83%ab%e6%96%99%e3%81%ae%e6%8c%af%e8%be%bc%e5%85%88%e3%81%ab%e3%81%a4%e3%81%8d%e3%81%be%e3%81%97%e3%81%a6/" class="Button Button_square mt-18 mx-auto">キャンセル料のお振込先はこちら</a>
        </div>

        <h3 class="ContentsTitle ContentsTitle-center ContentsTitle-small" id="roomprice">宿泊料金<span>ROOM PRICE</span>
        </h3>
        <div class="Info_text_wrapper">
          <div class="Info_text Info_text-image">
            <p class="sp:mb-10">宿 泊<br>
              食事料金</p>
            <div>
              <img class="pc" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/yumata/img_price_table.svg" alt="料金表">
              <img class="sp" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/yumata/img_price_table_sp.svg" alt="料金表">
              <small>※お弁当の追加など、お食事のプランはご自由にお選びいただけます。詳細な料金カレンダーは<a href="#calendar">こちら</a></small>
            </div>
          </div>
        </div>

        <h3 class="ContentsTitle ContentsTitle-center ContentsTitle-small" id="discount">割引<span>DISCOUNT</span></h3>
        <div class="Info_text_wrapper">
          <div class="Info_text">
            <p>連泊割</p>
            <p>3,000円引き(2泊目以降)</p>
          </div>
          <div class="Info_text">
            <p>グループ割</p>
            <p>3,000円引き(同一山行で三俣・水晶・湯俣に宿泊)</p>
          </div>
          <div class="Info_text">
            <p>雲ノ平割</p>
            <p>500円引き(同一山行で雲ノ平山荘に宿泊)</p>
          </div>
          <div class="Info_text">
            <p>Neo Alps会員</p>
            <p>5％引き</p>
          </div>
          <div class="Info_text">
            <p>ユース割</p>
            <p>
              子ども～22歳まで年齢に応じて割引
            </p>
          </div>
          <div class="Info_text">
            <p>日本勤労者山岳連盟</p>
            <p>
              500円引き
            </p>
          </div>
          <small>宿泊当日、窓口にて証明書をご提示いただきますと、割引が適用されます。</small>
        </div>
        <h3 class="ContentsTitle ContentsTitle-center ContentsTitle-small" id="calendar">
          カレンダー<span>CALENDAR</span></h3>
        <div class="Info_text_wrapper Info_text_wrapper-nb">
          <div class="Carousel">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/reservation_05_2024.svg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/reservation_06_2024.svg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/reservation_07_2024.svg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/reservation_08_2024.svg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/reservation_09_2024.svg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/reservation_10_2024.svg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/reservation_11_2024.svg" alt="">
          </div>
          <p class="Info_back"><a href="#roomprice">宿泊料金に戻る</a></p>
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

  <a href="#" class="PageTop">PAGE TOP</a>
</main>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/main.js"></script>
</body>

</html>