$(document).ready(function () {
  const nextIcon = '<img src="./assets3/img/icon/arrow-next.png" alt="">';
  const prevIcon = '<img src="./assets3/img/icon/arrow-prev.png" alt="">';
  // ----navbar toggle button section------>

  $(".menu-bar").click(function () {
    $(".outer-wrap").toggle(500);
  });
  $(".close").click(function () {
    $(".outer-wrap").toggle(500);
  });

  // ---hero slider section----->

  $(".hero-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    navText: [nextIcon, prevIcon],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
    
    // -----service slider section-------->
  
  const nxtIcon = '<img src="./assets3/img/icon/next-fish.png" alt="">';
  const prvIcon = '<img src="./assets3/img/icon/prev-fish.png" alt="">';

    $(".service-slider").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [nxtIcon, prvIcon],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 4,
        },
      },
    });

  // --------Doctor slider section-------->

  $(".doctor-slider").owlCarousel({
    loop: true,
    margin: 5,
    nav: true,
    navText: [nxtIcon, prvIcon],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });
    
  // -------Date picker function------->

  $(function () {
    $("#datepicker").datepicker();
  });

  // ---------testimonial slider--------->

  $(".testimonial-slider").owlCarousel({
    loop: true,
    margin: 25,
    nav: true,
    navText: [nxtIcon, prvIcon],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  // -----------counter section---------->

  $(".counter").counterUp({
    delay: 10,
    time: 2000,
  });
  $(".counter").addClass("animated fadeInDownBig");
  $("h3").addClass("animated fadeIn");

});
