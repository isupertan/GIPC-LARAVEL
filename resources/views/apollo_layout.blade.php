<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apollo Mukundapur</title>
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
    <!-- ==== Custom Css ==== -->
    <link rel="stylesheet" href="{{asset('')}}apollo/css/header.css" />
    <link rel="stylesheet" href="{{asset('')}}apollo/css/body.css" />
    <link rel="stylesheet" href="{{asset('')}}apollo/css/footer.css" />
    {{-- SIGNATURE PLUGIN --}}
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    {{-- Slider  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<!--
  
    <link rel="stylesheet" type="text/css" href="https://keith-wood.name/css/jquery.signature.css">
-->
    <!-- AOS ANIMATION -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- AOS ANIMATION -->
    <!-- ==== Plug-ins ==== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    {{-- HOVER CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css"/>
    <!-- ==== Meta Data ==== -->
    <style>
      .kbw-signature { width: 100%; height: 200px;}
      #sig canvas{
          width: 100% !important;
          height: auto;
      }
        .kbw-signature {
	display: inline-block;
	border: 1px solid #a0a0a0;
	-ms-touch-action: none;
}
.kbw-signature-disabled {
	opacity: 0.35;
}
  </style>
  </head>
  <body>
<!--  ====  HEADER START ==== -->
    <div class="row">
     <div class="col-lg-12 header-section-wrapper">
      <div class="container">
        <!-- Logo And Menu -->
         <div class="row">
         <!-- Logo Section-->
          <div class="col-lg-3 col-8 top-logo-section">
            <a href="{{route('home')}}">
            @include('frontinc.sitelogo')
             <!-- <img src="{{asset('')}}apollo/img/logo.png" class="img-fluid"> -->
            </a>
          </div>
         <!-- Menu Section -->
          <div class="col-lg-9 col-4 wrapper-menu-top">
           <div class="row">
            <!-- =====Logo Upper Section=====  -->
             <div class="col-lg-12 menu-upper-section">
              {{-- <p>Mon - Sun: 7.30 - 8.30</p> --}}
                <ul>
                 <li><a class="telecall" href="tel:033 6161 6161b">033 6161 6161</a></li>
                 
                 <li>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".contactmodal">BOOK AN APPOINTMENT</a> 
                </li>
                 <li><a href="{{route('homeservices')}}">HOME SERVICES</a> </li>
                 {{-- <li><a href="{{route('twentypharma')}}">PHARMACY</a> </li> --}}
                 {{-- <li><a href="{{route('feedback')}}">FEEDBACK</a> </li> --}}
                </ul>
             </div>
            <!-- ========Logo Bottom Section========  --> 
             <div class="col-lg-12 menu-lower-section">
                 <ul>
                   <li><a href="{{route('home')}}">Home</a> </li>
                   <li><a href="{{route('about-us')}}">About</a> </li>
                   <li><a href="{{route('services')}}">Services</a> </li>
                   <li><a href="{{route('doctor-list')}}">Doctors</a> </li>
                   <li><a href="{{route('gallery')}}">Gallery</a> </li>
                   <li><a href="{{route('healthpackage')}}">Health Packages</a> </li>
                   <li><a href="{{route('contact')}}">Contact</a> </li>
                   {{-- <li><a href="corporate.html">Corporate</a> </li> --}}
                   {{-- <li><a href="/">Blog</a> </li> --}}
                </ul>               
             </div>
           </div>

            </div>
          </div>
         </div>
     </div>
    </div>  

{{-- FIXEFD SECTION --}}
    <div class="fixed-feedback">
      <a href="https://goo.gl/maps/XRnrTzZP3jU8e9ZX7">REVIEW US!</a>
    </div>
{{-- FIXEFD SECTION --}}

{{-- FLoating Alert --}}

@include('alert.messages')
{{-- FLoating Alert --}}
<!-- =========   B O D Y   S T A R T     ========= -->
   @yield('bodycontent')
<!-- =========   B O D Y   E N D     ========= -->
      
<!--   ========= F O O T E R    S T A R T ========= -->
    <div class="row">
     <div class="col-lg-12 footer-wrapper">
      <div class="container">
        <!--       Details   -->
          <div class="row">
        <!--   About Apollo-->
            <div class="col-lg-6 col-md-6   order-lg-1 order-2">
              <div class="row">
                <!-- White Logo-->
               <div class="col-12 white-logo">
                 <img src="{{asset('')}}apollo/img/logo-white.png" class="img-fluid"/>  
               </div>
                <!--  Address   -->
               <div class="col-12 white-address">
                 <p>Balaji House, 9/1 Barakhola Road,<br/> Kolkata 900099 (Beside Avidipta, Mukundapur)
                 </p> 
               </div> 
                <!-- Social Media    -->
               <div class="col-12 white-social">
                   <ul>
                    <li><a href="https://fb.com/apolloclinicmukundapur "><img src="{{asset('')}}apollo/img/facebook.png" class="img-fluid"/> </a> </li>
                    <li><a href="https://twitter.com/apollomukundpur"><img src="{{asset('')}}apollo/img/twitter.png" class="img-fluid"/> </a> </li>
                    <li><a href="https://instagram.com/apolloclinicmukundapur "><img src="{{asset('')}}apollo/img/instagram.png" class="img-fluid"/> </a> </li>
                    <li><a href="https://www.linkedin.com/company/apolloclinicmukundapur"><img src="{{asset('')}}apollo/img/linkedin.png" class="img-fluid"/> </a> </li>
                   </ul>
               </div> 
              </div>
            </div>
            <!-- Quick Link -->
            <div class="col-lg-6 col-md-6  order-lg-2 order-1">
              <!-- Quick Menu -->
              <div class="row">
               <div class="col-12 footer-quick-menu">
                 <h2>Quick Links</h2>
                 <ul>
                  <li><a href="{{route('home')}}">Home</a> </li>  
                  <li><a href="{{route('about-us')}}">About</a> </li>  
                  <li><a href="{{route('doctor-list')}}">Doctor</a> </li>  
                  <li><a  href="javascript:void(0)" data-bs-toggle="modal" 
                        data-bs-target=".contactmodal">Book an Appointment</a> 
                  </li>  
                   <li><a href="{{route('contact')}}">Contact Us</a> </li>  
                  <div class="top-margin">
                  <li><a class="not-active" href="#">Privacy Policy</a> </li>  
                  <li><a class="not-active" href="#">Terms &amp; Condition</a> </li>  
                  </div>
                 </ul>   
               </div>  
              </div>
            </div>
          </div>
      </div>   
     </div>  
    </div>

    {{-- MODAL --}}
    <!-- Modal -->
<div class="modal fade contactmodal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border: 5px solid #0a1c58;">
      {{-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get an Appointment!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> --}}
      <div class="modal-body">
            <!-- APPOINTMENT FORM -->
            <div class="row">
            <div class="col-12 blog-appo-form">
                <div class="card">

                <div class="row">
                  <div class="col-12">
                    <h3>Book an Appointment</h3>
                  </div>   
                  <div class="col-12 form-label-blogs-right-side">
                    <form action="{{ route('appointment.store') }}" method="POST">
          
                      @csrf
                    <!-- Full Name -->  
                    <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" required>
                    </div>                    
                    <!-- Email ID -->  
                    <div class="form-group">
                    <label>Email ID</label>
                    <input type="text" class="form-control" name="email">
                    </div>                    
                    <!-- Phone No. -->  
                    <div class="form-group">
                    <label>Phone No.</label>
                    <input type="text" class="form-control" name="phone">
                    </div>  
                    {{-- UTM  --}}
                    <input type="hidden" name="utm" value="{{request()->segment(count(request()->segments()))
                    }}">
                    <!-- SUbmit Button -->  
                    <div class="form-group mt-3">
                    <button type="submit" class="btn-blog-appointment">SUBMIT</button>  
                    </div>
                    </form>
                  </div>
                </div>
                </div>  
            </div>  
            </div>
      </div>

    </div>
  </div>
</div>



    {{-- MODAL --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
          
    <!-- ===== Plugins =====  -->
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- ===== Custom CSS =====  -->
<!--          //Touch Mobilw-->
        
<!--
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
-->
     <script src="{{asset('')}}apollo/js/custom.js"></script>
     <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
     <script>
      

// external js: isotope.pkgd.js
// https://isotope.metafizzy.co/

// init Isotope
var iso = new Isotope( '.grid', {
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});

// filter functions
var filterFns = {
  // show if name ends with -ium
  ium: function( itemElem ) {
    var name = itemElem.querySelector('.name').textContent;
    return name.match( /ium$/ );
  }
};

// bind filter button click
var filtersElem = document.querySelector('.filters-button-group');
filtersElem.addEventListener( 'click', function( event ) {
  // only work with buttons
  if ( !matchesSelector( event.target, 'button' ) ) {
    return;
  }
  var filterValue = event.target.getAttribute('data-filter');
  // use matching filter function
  filterValue = filterFns[ filterValue ] || filterValue;
  iso.arrange({ filter: filterValue });
});

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.button-group');
for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
  var buttonGroup = buttonGroups[i];
  radioButtonGroup( buttonGroup );
}
function radioButtonGroup( buttonGroup ) {
  buttonGroup.addEventListener( 'click', function( event ) {
    // only work with buttons
    if ( !matchesSelector( event.target, 'button' ) ) {
      return;
    }
    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}

     </script>

     {{-- PLUGIN TOUCH --}}
<!--     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!--     <script type="text/javascript" src="https://keith-wood.name/js/jquery.signature.js"></script>-->
     <script src="{{asset('')}}apollo/js/sig.js"></script>
      
     <script type="text/javascript">
//      $document.ready(function(){
          
      
      var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
      $('#clear').click(function(e) {
          e.preventDefault();
          sig.signature('clear');
          $("#signature64").val('');
      });
//    });
  </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();

    </script>
<script>
  $(document).ready(function() {
      $(".toast").toast('show');
  });
</script>
    <script>
      $('.home-sliders').owlCarousel({
          loop:true,
          margin:10,
              //  nav:true,
          autoplay:true,
          dots: false,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
          
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:1
              }
          }
      })
</script>










  </body>
</html>