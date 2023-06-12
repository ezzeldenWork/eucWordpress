jQuery(document).ready(function ($) {
  if ($("html").attr("dir") == "rtl") {
    var dir_lang = true;
  } else {
    var dir_lang = false;
  }
  $(".header-section .open-icon").click(function () {
    $(".header-section .nav-box").addClass("open-menu");
    $("body").addClass("over-flow");
    $(".overlay").fadeIn();
  });
  $(".header-section .nav-box .close-icon, .overlay").click(function () {
    $(".header-section .nav-box").removeClass("open-menu");
    $("body").removeClass("over-flow");
    $(".overlay").fadeOut();
  });

  $(".feedback-slider").slick({
    slidesToShow: 3,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1500,
    dots: true,
    rtl: dir_lang,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 772,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
