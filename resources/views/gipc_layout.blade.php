<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>GIPC </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('')}}gipc/favicon-32x32.png" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('')}}gipc/style.css" />
    <link rel="stylesheet" href="{{asset('')}}gipc/css/about.css">
    <link rel="stylesheet" href="{{asset('')}}gipc/css/blog.css">
    <link rel="stylesheet" href="{{asset('')}}gipc/css/gallery.css">
    <link rel="stylesheet" href="{{asset('')}}gipc/css/events.css" />


   
    <link rel="stylesheet" href="{{asset('')}}gipc/css/login.css" />

    <link rel="stylesheet" href="{{asset('')}}gipc/css/lightbox.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('')}}gipc/css/style_in.css" />
    <link rel="stylesheet" href="{{asset('')}}gipc/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('')}}gipc/css/owl.theme.default.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css" rel="stylesheet"/>

     {{-- @if(request()->is('blog')Request::url() === 'http://127.0.0.1:8001/membershiplogin') --}}
     @if(request()->is('membershiplogin'))
       <link
         href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
         rel="stylesheet"
       />
    @endif
    @if(request()->is('membership'))
       <link rel="stylesheet" href="{{asset('')}}gipc/css/membership_new.css">
    @endif
    <style>
      body{
        overflow-x: hidden;
      }
    </style>
  </head>

  <body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
      <!-- Navbar Area -->
      <div class="newsbox-main-menu">
        <div class="classy-nav-container breakpoint-off">
          <div class="container-fluid">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newsboxNav">
              <!-- Nav brand -->
              <a href="{{route('home')}}" class="nav-brand"
                ><img src="{{asset('')}}gipc/img/GIPC_Logo_Full_dark.png" alt=""
              /></a>

              <!-- Navbar Toggler -->
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"
                  ><span></span><span></span><span></span
                ></span>
              </div>

              <!-- Menu -->
              <div class="classy-menu">
                <!-- Close Button -->
                <div class="classycloseIcon">
                  <div class="cross-wrap">
                    <span class="top"></span><span class="bottom"></span>
                  </div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                  <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about-us')}}">About</a></li>
                    <li><a href="{{route('events')}}">Events &amp; Workshops </a></li>
                    {{-- <li><a href="workshops.html">Workshops</a></li> --}}
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('blogs')}}">Media</a></li>
                    {{-- <li><a href="media.html">Media</a></li> --}}
                    <li><a href="{{route('membership')}}">Membership</a></li>
                    <li><a href="{{route('membershiplogin')}}">Login</a></li>
                    <li><a href="{{route('contact')}}">Enquiry</a></li>
                  </ul>
                </div>
                <!-- Nav End -->
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ##### Header Area End ##### -->

{{-- FLoating Alert --}}

@include('alert.messages')
{{-- FLoating Alert --}}
<!-- =========   B O D Y   S T A R T     ========= -->
   @yield('bodycontent')
<!-- =========   B O D Y   E N D     ========= -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
      <!-- Footer Logo -->
      {{-- <div class="footer-logo mb-30">
        
      </div> --}}
      <!-- Footer Content -->
      <div class="row mt-3">
        <div class="col-lg-12 footer-section">
          <div class="container-fluid pr-5 pl-5">
            <!-- Footer Widget Divider -->
            <div class="row">
              <!-- Logo  -->
              <div class="col-lg-4 footer-logo-social">
                <a href="{{route('home')}}">
                  <img src="{{asset('')}}gipc/img/GIPC_Logo_Full_dark.png" width="15%" alt="gipc logo" />
                </a>
                <p>
                  Global Intellectual Property Convention (GIPC) is Asia's leading
                  conference for in-house IP counsels and innovators to interact
                  with IP attorneys from around the world to discuss best
                  practices and solutions to maximize the value of their
                  innovation and IP
                </p>
              </div>
              <!-- Quick Link -->
              <div class="col-lg-2 footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="events.html">Events</a></li>
                  <li><a href="workshops.html">Workshops</a></li>
                  <li><a href="membership.html">Membership</a></li>
                  <li><a href="committee.html">Committee</a></li>
                  <li><a href="blogs.html">Blogs</a></li>
                  <li><a href="media.html">Media</a></li>
                </ul>
              </div>
              <!-- Policy -->
              <div class="col-lg-2 footer-quick-links">
                <h5>Policy</h5>
                <ul>
                  <li><a href="#">Disclaimer</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Return Policy</a></li>
                </ul>
              </div>
              <!-- Contact -->
              <div class="col-lg-2 footer-quick-links">
                <h5>Contact</h5>
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-phone"></i> +91 98765 43210</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-phone"></i> +91 00003 43210</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-envelope"></i> info@gipc.com</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-envelope"></i> support@gipc.com</a
                    >
                  </li>
                </ul>
              </div>
              <!-- Social Menu -->
              <div class="col-lg-2 footer-social">
                <h5>Social Media</h5>
                <ul class="d-flex justify-content-start">
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                  </li>
                </ul>
  
                <form>
                  <div class="input-group mb-3">
                    <input
                      type="email"
                      class="form-control news_letter"
                      placeholder="Enter your email"
                      aria-label="Enter your email"
                      aria-describedby=""
                    />
                  </div>
                </form>
                <div class="input-group-append">
                  <button class="btn sub_btn" type="button" id="">
                    Subscribe Now
                  </button>
                </div>
              </div>
            </div>
          </div>
          
        </div>
                <!-- Footer Copyright section -->
                <div class="col-lg-12 copyright--section" >
                  <div class="container">
                   <p>All Rights Reserved &copy; ITAG Business Solution LTD.</p>   
                  </div>  
                 </div>
      </div>
    <!-- ##### Footer Area end ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('')}}gipc/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{asset('')}}gipc/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('')}}gipc/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{asset('')}}gipc/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{asset('')}}gipc/js/active.js"></script>
    <script src="{{asset('')}}gipc/js/events.js"></script>
    <script src="{{asset('')}}gipc/js/events.js"></script>
    <script src="{{asset('')}}gipc/js/dashboard.js"></script>
        <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js" ></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  
    <script src="js/owl.carousel.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js"
      crossorigin="anonymous"
      defer
    ></script>

    <script>
      $(document).ready(function () {
        // Start the carousel
        $("#brand-slider").carousel({
          interval: 3000, // Time interval in milliseconds
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $("#speaker-slider").carousel({
          interval: 5000, // Change this value to adjust the auto slide speed in milliseconds
          pause: "hover",
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          autoplay: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1,
            },
            768: {
              items: 5,
            },
          },
        });
      });
    </script>
    <script>
      swiffyslider.slide(sliderElement, (next = true));
    </script>

    <script>
      $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        $(".parallax").css(
          "background-position",
          "center " + -(scrollTop / 3) + "px"
        );
      });
    </script>
      <!-- Initialize Lightbox -->
      <script>
        lightbox.option({
          resizeDuration: 200,
          wrapAround: true,
        });
      </script>
      {{-- ADD CLASS TO FIRST CHILD --}}
      <script>
        $(document).ready(function(){
          $('.tab-pane:first').addClass('show active');
          $('.nav-item:first').addClass('active');
          $('.my-event-pill:first').addClass('active');
        });
      </script>
  </body>
</html>
