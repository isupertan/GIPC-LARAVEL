<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Chandannagar Prayas Society  @yield('title')</title>
      <link rel="shortcut icon" href="{{asset('')}}assets/images/fav.png" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="assets/images/fav.jpg">
      <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('')}}assets/css/all.min.css">
      <link rel="stylesheet" href="{{asset('')}}assets/css/animate.css">
      <link rel="stylesheet" href="{{asset('')}}assets/plugins/slider/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('')}}assets/plugins/slider/css/owl.theme.default.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/style.css" />
</head>

<body>

<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            info@prayas-ngo.org
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +91 9875339719</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                  
                    <ul class="ulright">
                       <li> <small>Folow Us </small>:</li>
                        <li>
                          <a href="#">    
                            <i class="fab fa-facebook-square"></i>
                          </a>      
                        </li>
                        <li>
                           <a href="#">    
                            <i class="fab fa-twitter-square"></i>
                           </a>     
                        </li>
                        <li>
                          <a href="#">    
                            <i class="fab fa-instagram"></i>
                          </a>     
                        </li>
                        <li>
                         <a href="#">    
                            <i class="fab fa-linkedin"></i>
                         </a>     
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <a href="{{route('donate')}}" class="btn btn-sm btn-success"> Donate</a>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('')}}assets/images/chandannagorelogo.jpeg" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">
                    <ul class="navbad">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }} ">
                            <a class="nav-link" href="{{route('home')}}">Home
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item {{ request()->is('services') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('services')}}">Services</a>
                        </li>
                         <li class="nav-item {{ request()->is('project-list') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('project-list')}}">Projects</a>
                        </li>
                        <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                        </li>
                        <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('contact')}}">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
</header>
  
                 
  <!-- ******************** BODY Starts Here ******************* -->
  @yield('bodycontent')
  <!-- ******************** BODY Ends Here ********************* -->  
          
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>Chandannagore Prayas Society is a not-for-profit organisation working for 10 years, focusing on alleviating poverty and social injustice. We do this through well planned and comprehensive projects in health, education, livelihoods and disaster preparedness and response. Our overall goal is the empowerment of women and girls from poor and marginalised communities leading to improvement in their lives and livelihoods.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li>
                            <a ui-sref="about" href="{{route('about')}}">About us</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a ui-sref="products" href="{{route('services')}}">Services</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a ui-sref="gallery" href="{{route('gallery')}}">Gallery</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a ui-sref="contact" href="{{route('contact')}}">Contact us</a><i class="fa fa-angle-right"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                      Battala   , Chandannagar<br>Hooghly<br>
                        Phone: +91 9876543210 <br>
                        Email: <a href="mailto:info@prayas-ngo.org" class="">info@prayas-ngo.org</a><br>
                        Web: <a href="https://prayas-ngo.org/" class="">https://prayas-ngo.org/</a>
                    </address>
                </div>
            </div>
            
            
            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                         <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('project-list')}}">Projects</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('terms')}}">Terms & condition</a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('refund')}}">Refund Policy</a></li>
                    </ul>

                  
                </div>
                  <div class="donate-link col-md-3"><a href="{{route('donate')}}" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            </div>
            
        </div>
        

    </footer>
        <div class="copy">
             <div class="container">
                    <a href="https://www.tintasquare.com/" rel="nofollow">
                        2021 &copy; All Rights Reserved | Designed and Developed by TINTA SQUARE
                    </a>
                <span>
                    <a><i class="fab fa-pinterest-p"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                </span>
             </div>
         </div>
          
    
</body>

  <script src="{{asset('')}}assets/js/jquery-3.2.1.min.js"></script>
  <script src="{{asset('')}}assets/js/popper.min.js"></script>
  <script src="{{asset('')}}assets/js/bootstrap.min.js"></script>
  <script src="{{asset('')}}assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
  <script src="{{asset('')}}assets/plugins/slider/js/owl.carousel.min.js"></script>
  <script src="{{asset('')}}assets/js/script.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript">
    if($(window).width() > 960) {
      var swiper = new Swiper('.previewContainer', {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
          });
    } else {
    var swiper = new Swiper('.previewContainer', {
          slidesPerView: 2,
          spaceBetween: 30,
          navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                },
        });
    }

    swiper.slides.forEach( slide => {
      slide.addEventListener('click',  e => {
        slide.classList.add('active')
        document.querySelector('#fullPreviewImage').src = e.target.src
        document.querySelector('#fullPreviewImage').style.transition = '0.3s'
      })
    })

    swiper.on('click', function (e) {
       let currentIndex = e.clickedIndex;
       swiper.slides.forEach((slide, index) => {
        if(index == currentIndex) {
          slide.classList.add('active')
        } else {
          slide.classList.remove('active')
        }
       })
    });
  </script>

</html>