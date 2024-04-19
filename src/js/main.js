import $ from "jquery";
import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "lightbox2/dist/css/lightbox.css";
import "lightbox2/dist/js/lightbox.min.js";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

// フローティングバナー閉じる
$(".js-banner-close").on("click", function () {
  $(this).parent().fadeOut("fast");
});

// ハンバーガーメニュー開く
$(".Header_menu").on("click", function () {
  $(".Menu").addClass("is-show");
});

// ハンバーガーメニュー閉じる
$(".Menu_close").on("click", function () {
  $(".Menu").removeClass("is-show");
});

// トップのメインビジュアル
if ($("main").hasClass("Top")) {
  const $slider = $(".Carousel");

  $slider.slick({
    centerMode: false,
    centerPadding: "80px",
    infinite: true,
    draggable: false,
    slidesToShow: 4,
    arrows: false,
    dots: true,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          centerPadding: "20px",
          draggable: true,
          centerMode: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerPadding: "20px",
          draggable: true,
        },
      },
    ],
  });

  const instaBusinessId = "17841441087737285";
  const accessToken =
    "EAARwdYsA1ZBcBO79rjCEN9da4vZB42N6JZBKjJ13DHQVZCyNKSAuZAwAtZCWz7gKl39Nbhn4BUbuVqINuMR6LVlPb0HZBufer5LpA8ZBs4M2bYhWWoGg6YzNeV6wppHZBOyxbKfTNg4vz7jFMg2Wi80hbuE1ZCAWahf5uDyZAG4ZBvrFCQhcNTr4JuZAFklf9";

  // 投稿を取得する
  function instagramBasicDisplayApiPostId() {
    const url = `https://graph.facebook.com/v17.0/${instaBusinessId}?fields=media{media_url,thumbnail_url,media_type,permalink}&access_token=${accessToken}`;

    $.get(url)
      .done(function (data) {
        const insta = data.media.data;
        for (var i = 0; i < 8; i++) {
          let url =
            insta[i].media_type === "IMAGE" || "CAROUSEL_ALBUM"
              ? insta[i].media_url
              : insta[i].thumbnail_url; // メディアソースのURLを取得
          let href = insta[i].permalink; // リンク先URLを取得
          $(".Top_instagram").append(`
<li>
<a href="${href}" target="qoo_insta">
<img src="${url}" alt="instagram">
</a>
</li>
          `);
        }
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        console.error(
          "Instagram APIのリクエスト中にエラーが発生しました: ",
          textStatus,
          errorThrown
        );
      });
  }
  instagramBasicDisplayApiPostId();
}

document.addEventListener("DOMContentLoaded", () => {
  if ($("main").hasClass("Guide")) {
    const scene1 = document.getElementById("scene1");
    const scene2 = document.getElementById("scene2");
    const scene3 = document.getElementById("scene3");
    const scene4 = document.getElementById("scene4");
    const scene5 = document.getElementById("scene5");
    const scene6 = document.getElementById("scene6");
    const scene7 = document.getElementById("scene7");
    const scene8 = document.getElementById("scene8");
    const scene9 = document.getElementById("scene9");
    const scene10 = document.getElementById("scene10");
    const h_scene1 = document.getElementById("h_scene1");
    const h_scene2 = document.getElementById("h_scene2");
    const h_scene3 = document.getElementById("h_scene3");
    const h_scene4 = document.getElementById("h_scene4");
    const h_scene5 = document.getElementById("h_scene5");
    const h_scene6 = document.getElementById("h_scene6");
    const h_scene7 = document.getElementById("h_scene7");
    const h_scene8 = document.getElementById("h_scene8");
    const h_scene9 = document.getElementById("h_scene9");
    const h_scene10 = document.getElementById("h_scene10");
    const h_scene11 = document.getElementById("h_scene11");
    const h_scene12 = document.getElementById("h_scene12");
    const h_scene13 = document.getElementById("h_scene13");
    const h_scene14 = document.getElementById("h_scene14");
    const h_scene15 = document.getElementById("h_scene15");
    const h_scene16 = document.getElementById("h_scene16");
    const h_scene17 = document.getElementById("h_scene17");
    const h_scene18 = document.getElementById("h_scene18");
    const h_scene19 = document.getElementById("h_scene19");
    const h_scene20 = document.getElementById("h_scene20");

    ScrollTrigger.create({
      trigger: "#item_02",
      start: "top 40%",
      onEnter: () => {
        scene1?.classList.add("disappear");
        scene2?.classList.add("true");
      },
      onLeaveBack: () => {
        scene1?.classList.remove("disappear");
        scene2?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_03",
      start: "top 40%",
      onEnter: () => {
        scene2?.classList.add("disappear");
        scene3?.classList.add("true");
      },
      onLeaveBack: () => {
        scene2?.classList.remove("disappear");
        scene3?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_04",
      start: "top 40%",
      onEnter: () => {
        scene3?.classList.add("disappear");
        scene4?.classList.add("true");
      },
      onLeaveBack: () => {
        scene3?.classList.remove("disappear");
        scene4?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_05",
      start: "top 40%",
      onEnter: () => {
        scene4?.classList.add("disappear");
        scene5?.classList.add("true");
      },
      onLeaveBack: () => {
        scene4?.classList.remove("disappear");
        scene5?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_06",
      start: "top 40%",
      onEnter: () => {
        scene5?.classList.add("disappear");
        scene6?.classList.add("true");
      },
      onLeaveBack: () => {
        scene5?.classList.remove("disappear");
        scene6?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_07",
      start: "top 40%",
      onEnter: () => {
        scene6?.classList.add("disappear");
        scene7?.classList.add("true");
      },
      onLeaveBack: () => {
        scene6?.classList.remove("disappear");
        scene7?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_08",
      start: "top 40%",
      onEnter: () => {
        scene7?.classList.add("disappear");
        scene8?.classList.add("true");
      },
      onLeaveBack: () => {
        scene7?.classList.remove("disappear");
        scene8?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_09",
      start: "top 40%",
      onEnter: () => {
        scene8?.classList.add("disappear");
        scene9?.classList.add("true");
      },
      onLeaveBack: () => {
        scene8?.classList.remove("disappear");
        scene9?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#item_10",
      start: "top 40%",
      onEnter: () => {
        scene9?.classList.add("disappear");
        scene10?.classList.add("true");
      },
      onLeaveBack: () => {
        scene9?.classList.remove("disappear");
        scene10?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#gallery",
      start: "top 0%",
      onEnter: () => {
        h_scene1?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene1?.classList.add("disappear");
        h_scene1?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_02",
      start: "top 40%",
      onEnter: () => {
        h_scene1?.classList.add("disappear");
        h_scene2?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene1?.classList.remove("disappear");
        h_scene2?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_03",
      start: "top 40%",
      onEnter: () => {
        h_scene2?.classList.add("disappear");
        h_scene3?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene2?.classList.remove("disappear");
        h_scene3?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_04",
      start: "top 40%",
      onEnter: () => {
        h_scene3?.classList.add("disappear");
        h_scene4?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene3?.classList.remove("disappear");
        h_scene4?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_05",
      start: "top 40%",
      onEnter: () => {
        h_scene4?.classList.add("disappear");
        h_scene5?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene4?.classList.remove("disappear");
        h_scene5?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_06",
      start: "top 40%",
      onEnter: () => {
        h_scene5?.classList.add("disappear");
        h_scene6?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene5?.classList.remove("disappear");
        h_scene6?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_07",
      start: "top 40%",
      onEnter: () => {
        h_scene6?.classList.add("disappear");
        h_scene7?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene6?.classList.remove("disappear");
        h_scene7?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_08",
      start: "top 40%",
      onEnter: () => {
        h_scene7?.classList.add("disappear");
        h_scene8?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene7?.classList.remove("disappear");
        h_scene8?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_09",
      start: "top 40%",
      onEnter: () => {
        h_scene8?.classList.add("disappear");
        h_scene9?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene8?.classList.remove("disappear");
        h_scene9?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_10",
      start: "top 40%",
      onEnter: () => {
        h_scene9?.classList.add("disappear");
        h_scene10?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene9?.classList.remove("disappear");
        h_scene10?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_11",
      start: "top 40%",
      onEnter: () => {
        h_scene10?.classList.add("disappear");
        h_scene11?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene10?.classList.remove("disappear");
        h_scene11?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_12",
      start: "top 40%",
      onEnter: () => {
        h_scene11?.classList.add("disappear");
        h_scene12?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene11?.classList.remove("disappear");
        h_scene12?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_13",
      start: "top 40%",
      onEnter: () => {
        h_scene12?.classList.add("disappear");
        h_scene13?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene12?.classList.remove("disappear");
        h_scene13?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_14",
      start: "top 40%",
      onEnter: () => {
        h_scene13?.classList.add("disappear");
        h_scene14?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene13?.classList.remove("disappear");
        h_scene14?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_15",
      start: "top 40%",
      onEnter: () => {
        h_scene14?.classList.add("disappear");
        h_scene15?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene14?.classList.remove("disappear");
        h_scene15?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_16",
      start: "top 40%",
      onEnter: () => {
        h_scene15?.classList.add("disappear");
        h_scene16?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene15?.classList.remove("disappear");
        h_scene16?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_17",
      start: "top 40%",
      onEnter: () => {
        h_scene16?.classList.add("disappear");
        h_scene17?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene16?.classList.remove("disappear");
        h_scene17?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_18",
      start: "top 40%",
      onEnter: () => {
        h_scene17?.classList.add("disappear");
        h_scene18?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene17?.classList.remove("disappear");
        h_scene18?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_19",
      start: "top 40%",
      onEnter: () => {
        h_scene18?.classList.add("disappear");
        h_scene19?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene18?.classList.remove("disappear");
        h_scene19?.classList.remove("true");
      },
    });
    ScrollTrigger.create({
      trigger: "#history_20",
      start: "top 40%",
      onEnter: () => {
        h_scene19?.classList.add("disappear");
        h_scene20?.classList.add("true");
      },
      onLeaveBack: () => {
        h_scene19?.classList.remove("disappear");
        h_scene20?.classList.remove("true");
      },
    });
  }
});

if ($("main").hasClass("Guide")) {
  const $slider = $(".Carousel");

  $slider.slick({
    centerMode: true,
    centerPadding: "10px",
    infinite: true,
    draggable: false,
    slidesToShow: 3,
    arrows: true,
    dots: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          centerPadding: "20px",
          draggable: true,
          arrows: false,
        },
      },
    ],
  });
}

if ($("main").hasClass("Info")) {
  const $slider = $(".Carousel");

  $slider.slick({
    centerMode: true,
    centerPadding: "10px",
    infinite: true,
    draggable: false,
    slidesToShow: 1,
    arrows: true,
    dots: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerPadding: "20px",
          draggable: true,
          arrows: false,
        },
      },
    ],
  });
}

$(function () {
  $(window).on("load", function () {
    $(".Spinner").delay(500).fadeOut(1000);
    $(".Spinner_wrapper").delay(800).fadeOut(1000);
  });
});
