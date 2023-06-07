<!doctype html>
<html  lang="en-GB" prefix="og: https://ogp.me/ns#">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Fontawosome  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <!-- Swiper Js  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- AOS Animation  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Styles  -->
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/header.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/main.css" />
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('')}}assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('')}}assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('')}}assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('')}}assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('')}}assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('')}}assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('')}}assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('')}}assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('')}}assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"   href="{{asset('')}}assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"   href="{{asset('')}}assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"   href="{{asset('')}}assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{asset('')}}assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    {{-- META PROPERTY --}}
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://himaldeals.com/xmlrpc.php">
    <link rel="shortcut icon" href="#">



    <meta name="description" content="@yield('description')"/>
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="{{Request::url()}}"/>
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:site_name" content="@yield('title')">
    {{-- <meta property="og:updated_time" content="2021-04-01T19:46:54+01:00">
    <meta property="article:published_time" content="2020-05-30BST13:49:52+01:00">
    <meta property="article:modified_time" content="2021-04-01BST19:46:54+01:00"> --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <script type="application/ld+json" class="rank-math-schema">{"@context":"https://schema.org","@graph":[{"@type":"Place","@id":"https://himaldeals.com/#place","address":{"@type":"PostalAddress","streetAddress":"19 Plumstead Road","addressLocality":"London","postalCode":"SE18 7BZ","addressCountry":"UK"}},{"@type":["LocalBusiness","Organization"],"@id":"https://himaldeals.com/#organization","name":"Himal Deals","url":"https://himaldeals.com","email":"himaldeals@gmail.com","address":{"@type":"PostalAddress","streetAddress":"19 Plumstead Road","addressLocality":"London","postalCode":"SE18 7BZ","addressCountry":"UK"},"logo":{"@type":"ImageObject","url":"https://himaldeals.com/wp-content/uploads/2020/06/cropped-Himal-Deals-big.png"},"openingHours":["Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday 09:00-17:00"],"location":{"@id":"https://himaldeals.com/#place"},"image":{"@type":"ImageObject","url":"https://himaldeals.com/wp-content/uploads/2020/06/cropped-Himal-Deals-big.png"}},{"@type":"WebSite","@id":"https://himaldeals.com/#website","url":"https://himaldeals.com","name":"Himal Deals","publisher":{"@id":"https://himaldeals.com/#organization"},"inLanguage":"en-GB","potentialAction":{"@type":"SearchAction","target":"https://himaldeals.com/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://himaldeals.com/#webpage","url":"https://himaldeals.com/","name":"Himal Deals - Shopping Directory - Buy Goods Or Services - 1","datePublished":"2020-05-30T13:49:52+01:00","dateModified":"2021-04-01T19:46:54+01:00","isPartOf":{"@id":"https://himaldeals.com/#website"},"inLanguage":"en-GB"},{"@type":"Article","headline":"Himal Deals - Shopping Directory - Buy Goods or Services - 1","datePublished":"2020-05-30BST13:49:52+01:00","dateModified":"2021-04-01BST19:46:54+01:00","author":{"@type":"Person","name":"Himal Deals"},"description":"Himal Deals is an online shopping directory. Its offer different services and goods from trusted and best vendors of the UK and Global all on one platform.","@id":"https://himaldeals.com/#schema-7627","isPartOf":{"@id":"https://himaldeals.com/#webpage"},"publisher":{"@id":"https://himaldeals.com/#organization"},"inLanguage":"en-GB","mainEntityOfPage":{"@id":"https://himaldeals.com/#webpage"}}]}</script>
    {{-- META PROPERTY --}}
    <style>
      figure.image{
        text-align: center;
      }
      figure.image img{
        text-align: center;
        max-width: 100%;
        height: auto;
      }
    </style>
    <title>Himedeals!  @yield('title')</title>
  </head>
  <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" 
      src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0&appId=2181088818798435&autoLogAppEvents=1" 
      nonce="VabdH5RA"></script>

    <!-- Header -->
    <div class="row">
      <div class="col-lg-12 header-menu-black padding-1-4">
        <div class="container">
          

          <div class="row">
            <div class="col-lg-2 mobile-center">
             <a href="https://www.facebook.com/himaldeals" target="_blank"> <i class="fa fa-facebook"></i></a>  
            </div>
          <div class="col-lg-10">
            @include('frontinc.topmenu')
          </div>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="container">
          
          <div class="row">
            <div class="col-lg-2 mobile-center">
            <a href="{{route('home')}}">
              {{-- LOGO --}}
              @include('frontinc.sitelogo')
            </a>
            </div>
            <div class="col-lg-10 d-flex justify-content-end align-items-center mobile-center">
           
                <div class="form-group search-bar">
                  <form method="GET" action="{{ route('front.search') }}">
                   <input type="search" name="search" placeholder="Search Products" />
                   <button type="submit" style="border: none"> <i class="fa fa-search"></i></button>
                  </form>
                </div>
              
            </div>
          </div>

        </div>
      </div>
    </div>
    <br />

    {{-- Incld Jumbo Menu --}}
    @include('frontinc.headerjumbo')

    <div>
      
   
    <!-- End Of Header -->
    
    <!-- =========== Start OF Body =========== -->
    <div class="body">
        @yield('bodycontent')
    </div>
    
    <!-- ========= End Of Body =========== -->

    <!-- =========== Footer ========== -->
    <div class="row">
      <div class="col-lg-12 footer">
        <div class="container">

          <!-- Sticky Facebbok Icon  -->
          {{-- <div class="sticky-facebook"><i class="fa fa-facebook"></i></div> --}}
          
          <!-- Footer First part  -->
          <div class="row">


            @include('frontinc.footermenu')
            @include('frontinc.social')

          </div>

          <!-- Footer Second Part  -->
          @include('frontinc.footertext')

        </div>
      </div>
    </div>



    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Jquery UI  -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Swiper JS  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- AOS Animation  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript">
      AOS.init()

      if($(window).width() < 960) {

      } else {
      $("#hem").menu()
      $("#sdm").menu()
      $("#sodm").menu()
      $("#aum").menu()
    }
      let isAlreadyActivated = false
      
      function ToogleNav(activeIndex) {
        if(activeIndex  == 0){
           $("#hem").css("display","block")
           $("#sdm").css("display","none")
           $("#sodm").css("display","none")
          $('#aum').css('display', 'none')
          if(!isAlreadyActivated) {
           

          // $("#hem").animate({
          //       height: 'toggle'
          //     });
          isAlreadyActivated = true
        }

        } else if(activeIndex == 1) {
          $("#hem").css("display","none")
          $("#sdm").css("display","block")
          $("#sodm").css("display","none")
          $('#aum').css('display', 'none')

        } else if(activeIndex == 2) {
          $("#hem").css("display","none")
          $("#sodm").css("display","block")
          $("#sdm").css("display","none")
          $('#aum').css('display', 'none')

        } else if(activeIndex == 3) {
          $("#hem").css("display","none")
           $("#sdm").css("display","none")
          $("#sodm").css("display","none")
          $('#aum').css('display', 'block')
        }else {
           $("#hem").css("display","none")
          $("#sdm").css("display","none")
          $("#sodm").css("display","none")
          $('#aum').css('display', 'none')
          isAlreadyActivated = false
        }
      }

      if($(window).width() < 960) {
      }else {
      $('#aumb').hover(()=>{
        console.log("")
        ToogleNav(3)
      })

      $("#sodmb").hover(()=>{
        ToogleNav(2)
      })


      $("#hemb").hover(()=>{
        ToogleNav(0)
      })

      $("#sdmb").hover(()=>{
        ToogleNav(1)
      })

      $("#sdm").hover(()=>{
        //ToogleNav(5)
      },()=>{
        ToogleNav(5)
      })

      $("#hem").hover(()=>{
        //ToogleNav(5)
      },()=>{
        ToogleNav(5)
      })

       $("#sodm").hover(()=>{
        //ToogleNav(5)
      },()=>{
        ToogleNav(5)
      })
        $("#aum").hover(()=>{
        //ToogleNav(5)
      },()=>{
        ToogleNav(5)
      })
      }

        // ..
        $('.mobile-menu-icon').click(()=>{
          $('.main-menu-container').css('right','0')
        })

        $('.mobile-menu-close-btn').click(()=>{
          $('.main-menu-container').css('right','-100%')
        })


      var swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
          
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    
    if($(window).width() < 960) {
      var swiper2 = new Swiper(".webEssSwiper", {
        slidesPerView: 1,
        spaceBetween: 15,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
        },
      
      })

    } else {
      var swiper2 = new Swiper(".webEssSwiper", {
        slidesPerView: 4,
        spaceBetween: 15,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
        },
      
      })
    }


    if($(window).width() < 960 ) {
      var swiper3 = new Swiper(".our-latest-news", {
        slidesPerView: 1,
        spaceBetween:50,
        loop: true,
        pagination: {
          el: '.swiper-pagination'
        }
      })
    } else {
       var swiper3 = new Swiper(".our-latest-news", {
        slidesPerView: 3,
        spaceBetween:50,
        loop: true,
        pagination: {
          el: '.swiper-pagination'
        }
      })
    }

      if($(window).width() < 960) {
      let swiper4 = new Swiper(".wsSwiper", {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 15
      })
    } else {
      let swiper4 = new Swiper(".wsSwiper", {
        slidesPerView: 6,
        spaceBetween:15,
        loop: true,
           autoplay: {
            delay: 3000,
          },
      })
    }

    </script>
  </body>
</html>