$(document).ready(function(){
  $('.loading-page').fadeOut(300);
  


  // $('.services-title').click(function() {
  //   $('.services-title').removeClass("services-active");
  //   $(this).addClass("services-active");
  //   if ($(".services-graphic-table").is(":visible")) {
  //       $('.services-title-graphic').removeClass("services-active");
  //   }
  //   if ($(".services-web-table").is(":visible")) {
  //       $('.services-title-web').removeClass("services-active");
  //   }
  // });

  // $('.services-graphic').click(function() {
  //   $('.services-web-table').fadeOut(0);
  //   $('.services-graphic-table').fadeToggle(300);
  // });

  // $('.services-web').click(function() {
  //   $('.services-web-table').fadeToggle(300);
  //   $('.services-graphic-table').fadeOut(0);
  // });

  $('.main-btn').click(function() {
    $('.main').animate({
        left: 0,
    }, 200);
    $('.main').show(200);
  });
  $('.faq-btn').click(function() {
    $('.faq').animate({
        left: 0,
    }, 200);
    $('.faq').show(200);
  });
  $('.guide-btn').click(function() {
    $('.guide').animate({
        left: 0,
    }, 200);
    $('.guide').show(200);
  });
  $('.portfolio-btn').click(function() {
    $('.portfolio').animate({
        left: 0,
    }, 200);
    $('.portfolio').show(200);
  });
  $('.services-btn').click(function() {
    $('.services').animate({
        left: 0,
    }, 200);
    $('.services').show(200);
  });
 
//   $('.nav-menu-item').click(function() {
//       load = $('.loading-page').fadeIn(300);
//       setTimeout(load, 3000)

//   });



  /////////////////////////////////////////////
  // ЗАГРУЗКА 
  // $(".nav-menu-item").on("click", function(){
  //   $(".loading-page").fadeIn(200);
  //   setTimeout(function() {
  //       $(".loading-page").fadeOut('slow');
  //   }, 1200);
  // });



  // $(".services-btn").click(function() {
  //     $('.main, .faq, .guide, .portfolio').css('display', 'none');
  // });
  //   $(".main-btn").click(function() {
  //     $('.services, .faq, .guide, .portfolio').css('display', 'none');
  // });
  //   $(".faq-btn").click(function() {
  //     $('.main, .services, .guide, .portfolio').css('display', 'none');
  // });
  //   $(".guide-btn").click(function() {
  //     $('.main, .faq, .services, .portfolio').css('display', 'none');
  // });
  //   $(".portfolio-btn").click(function() {
  //     $('.main, .faq, .guide, .services').css('display', 'none');
  // });


});


