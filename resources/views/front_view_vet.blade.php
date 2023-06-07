<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ======A L L   C S S   S T Y L E   S H E E T S   A R E   H E R E========= -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/owl-carousel/owl.theme.green.min.css">

    <link rel="stylesheet" href="{{asset('')}}assets3/css/header.css">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/footer.css">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/responsive.css">
    <link rel="stylesheet" href="{{asset('')}}assets3/css/counter.css">


    <!-- ====================== M E T A T A G S========================== -->
    
    <meta name="description" content="@yield('description')"/>
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="{{Request::url()}}"/>
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:site_name" content="@yield('title')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">

</head>

<body>
 <!-- =========== H E A D E R ========= -->
 <header class="container">
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">

            <!-- ===========L O G O   S E C T I O N   O R   B R A N D   S E C T I O N========= -->

            <a class="navbar-brand" href="{{ url('/') }}">
                @include('frontinc.sitelogo')
            </a>

            <i class="fa-solid fa-bars menu-bar"></i>

            <!-- =========N A V B A R   M E N U   S E C T I O N======== -->

            <div class="outer-wrap">

                <div class="outer-bg">
                    <div class="outer-bg-img"></div>
                </div>

                <i class="fa-solid fa-xmark close"></i>

                <ul class="navbar-nav mx-auto nav-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url("/") }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('doctor-list') ? 'active' : '' }}" 
                            href="{{ url("doctor-list") }}">Doctor List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" 
                            href="{{ url("about-us") }}">About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('services') ? 'active' : '' }} " 
                            href="{{ url("services") }}">Service
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('store') ? 'active' : '' }} " 
                            href="{{ url("store") }}">Store
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" 
                            href="{{ url("contact") }}">Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- =============== -->
            <div class="my-btn call">
                <a href="tel:+919007997652" class="btn"><i class="fa-solid fa-phone"></i> 
                    <span>+91 90079 97652</span>
                </a>
            </div>

        </div>
    </nav>
</header>
                 
  <!-- =============== B O D Y  S T A R T S  H E R E  =============== -->
                              @yield('bodycontent')
  <!-- =============== B O D Y   E N D S   H E R E =============== --> 

    <!-- =============== F O O T E R   S E C T I O N ============= -->

    <footer class="footer py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="wrap my-2">
                        <a href="{{ url('/') }}" class="logo">
                            @include('frontinc.sitelogo')
                        </a>
                        <div class="text mt-4">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, eveniet! Lorem
                                ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, maxime.
                            </p>
                            <div class="social">
                                <h6>Follow us on :</h6>
                                <br/>
                                <div class="social-icons d-flex">
                                    <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
                                    <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
                                    <span><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></span>
                                    <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="wrap my-2">
                        <div class="heading">
                            <h6>working hours</h6>
                        </div>
                        <div class="text d-flex mt-5">
                            <div class="col-6">
                                <div class="wrap">
                                    <p>Sat & Sunday:</p>
                                    <p>Monday:</p>
                                    <p>Tuesday:</p>
                                    <p>Wednesday:</p>
                                    <p>Thursday:</p>
                                    <p>Friday:</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="wrap">
                                    <p>Closed</p>
                                    <p>8:00 AM – 6:00 PM</p>
                                    <p>8:00 AM – 6:00 PM</p>
                                    <p>9:00 AM – 5:00 PM</p>
                                    <p>8:00 AM – 6:00 PM</p>
                                    <p>8:00 AM – 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="wrap my-2 info-sec">
                        <div class="heading">
                            <h6>INFO</h6>
                        </div>
                        <div class="text mt-5">
                            <ul class="list p-0">
                                <li class="items">
                                    <a href="#" class="link">Why Us</a>
                                </li>
                                <li class="items">
                                    <a href="#" class="link">Company Fact Sheet</a>
                                </li>
                                <li class="items">
                                    <a href="#" class="link">History</a>
                                </li>
                                <li class="items">
                                    <a href="#" class="link">Management
                                    </a>
                                </li>
                                <li class="items">
                                    <a href="#" class="link">Global Presence</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="wrap my-2 newsletter-sec">
                        <div class="heading">
                            <h6>NEWS LETTER</h6>
                        </div>
                        <div class="text mt-5">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, ex.
                            </p>
                            <div class="mt-4">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="my-btn mt-4">
                                <div class="btn text-uppercase">Subscribe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

























    <!-- =============S C R I P T============= -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c2a6c7c9ff.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js" crossorigin="anonymous">
    </script>
    <script src="{{asset('')}}assets3/js/owl.carousel.js"></script>
    <script src="{{asset('')}}assets3/js/owl.carousel.min.js"></script>
    <script src="{{asset('')}}assets3/js/main.js"></script>
    <script>
        AOS.init({
            once: true,
            delay: 2, // values from 0 to 3000, with step 50ms
            duration: 1000,
        });
    </script>


    <!-- ====================== -->
</body>

</html>