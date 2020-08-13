'use strict';
jQuery(function(){
  // #で始まるリンクをクリックしたら実行されます
  jQuery('a[href^="#"]').click(function () {
    // スクロールの速度
    var speed = 500; // ミリ秒で記述
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });
});


jQuery(document).ready(function() {
    var pagetop = $('.btn-back-to-top'); //class="btn-back-to-top" の部分をクリックしたとき、
  jQuery(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
    pagetop.fadeIn();
      } else {
    pagetop.fadeOut();
      }
    });
    pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500); //500コマ=0.5秒かけてトップへ戻る。
      return false;
    });
  });
