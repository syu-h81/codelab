'use strict'; // swiper部分

var mySwiper = new Swiper('.swiper', {
  speed: 800,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false
  },
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  }
}); //スクロール時のヘッダー固定

$(function () {
  $(window).on('scroll', function () {
    if ($('#header-Fix').height() < $(this).scrollTop()) {
      $('.header').addClass('header-Active');
    } else {
      $('.header').removeClass('header-Active');
    }
  });
}); //spヘッダーメニュー表示

$(function () {
  $('#toggle').on('click', function () {
    $('#toggle').toggleClass('show');

    if ($('.header-Nav_area').hasClass('is-show')) {
      $('.header-Nav_area').removeClass('is-show');
    } else {
      $('.header-Nav_area').addClass('is-show');
    }
  });
});