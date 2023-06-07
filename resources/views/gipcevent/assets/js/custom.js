$(document).ready(function(){
   
    $(".field").click(function() {
        $('html,body').animate({
            scrollTop: $("#section-two").offset().top},
            'slow');
    });
    //fixed header on scroll
    $(window).scroll(function(){
      var sticky = $('.header-top-wrapper'),
          scroll = $(window).scrollTop();

      if (scroll >= 400) sticky.addClass('scroll-fix');
      else sticky.removeClass('scroll-fix');
    });
    
});