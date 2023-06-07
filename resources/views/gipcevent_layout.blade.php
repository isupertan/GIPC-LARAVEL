<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GIPC | Event</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
      rel="stylesheet"
    />
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{asset('')}}gipcevent/assets/css/header.css" />
    <link rel="stylesheet" href="{{asset('')}}gipcevent/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('')}}gipcevent/assets/css/footer.css" />
    <link rel="stylesheet" href="{{asset('')}}gipcevent/assets/css/speakers.css" />
  </head>
  <body>
    <!-- =======HEADER START======= -->
    <div class="row">
      <div class="col-lg-12 header-top-wrapper">
        <div class="container">
          <!-- Header logo- menu will be here  -->
          <div class="row">
            <!-- -------------LOGO SECTION------------- -->
            <div class="col-lg-4 col-8 logo-area">
              <a href="{{route('home')}}">
                <img src="{{asset('')}}gipcevent/assets/img/whitelogo.png" class="img-fluid" />
              </a>
            </div>
            <!-- -------------MENU SECTION------------- -->
            <div class="col-lg-8 col-4 menu-area">
              {{-- <ul>
                <li><a href="{{route('upcomingevent',[Request::segment(2),Request::segment(3)])}}">Home</a></li>
                <li><a href="about.html">Agenda</a></li>
                <li><a href="about.html">Speaker</a></li>
              </ul> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HEADER END-->
     @include('alert.messages')
   {{-- FLoating Alert --}}
   <!-- =========   B O D Y   S T A R T     ========= -->
      @yield('bodycontent')
   <!-- =========   B O D Y   E N D     ========= -->
    <!-- footer section  -->
    <div class="row">
      <div class="col-lg-12 footer-section">
        <div class="container">
          <!-- Footer Widget Divider -->
          <div class="row">
            <!-- Logo  -->
            <div class="col-lg-4 footer-logo-social">
              <img
                src="{{asset('')}}gipcevent/assets/img/whitelogo.png"
                class="footer-logo img-fluid"
              />
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
              <ul>
                <li>
                  <a href=""><i class="fa-brands fa-facebook-f"></i></a>
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
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Copyright section -->
      <div class="col-lg-12 copyright--section">
        <div class="container">
          <p>All Rights Reserved © ITAG Business Solution LTD.</p>
        </div>
      </div>
    </div>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>
    <!-- BODY END -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://code.jquery.com/jquery-3.6.4.min.js"
      integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- plugin -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom  -->
    <script src="{{asset('')}}gipcevent/assets/js/custom.js"></script>
    <script src="{{asset('')}}gipcevent/assets/js/animation.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        //      centeredSlides: true,
        spaceBetween: 20,
        grabCursor: true,
        pagination: {
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 3000,
        },
      });
    </script>
    <script>
      AOS.init();
    </script>

    <script>
      var myCarousel = document.querySelector("#carouselExampleControls");
      var myModalEl = document.getElementById("exampleModal");

      myModalEl.addEventListener("show.bs.modal", function (event) {
        const trigger = event.relatedTarget;
        var bsCarousel = bootstrap.Carousel.getInstance(myCarousel);
        bsCarousel.to(trigger.dataset.bsSlideTo);
      });
    </script>

<script>
  $(document).ready(function(){
    $('.tab-pane:first').addClass('show active');
    $('.nav-item:first').addClass('active');
    $('.agenddaa:first').addClass('active');
    $('.my-event-pill:first').addClass('active');
  });
</script>
  </body>
</html>
