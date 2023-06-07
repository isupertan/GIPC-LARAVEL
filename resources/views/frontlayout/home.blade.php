
    <!-- hero Banner  -->
  @extends('front_layout_two')
  @section('title', 'Himal Deals - Shopping Directory - Buy Goods Or Services - 1')
  @section('description', 'Himal Deals is an online shopping directory. Its offer different services and goods from trusted and best vendors of the UK and Global all on one platform.')
  @section('bodycontent')
    <div class="row">
      <div class="col-lg-12">
    

          <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                  <div class="swiper-slide" style="background-image: url({{asset('assets/img/himaldeals-slide-1.webp')}});background-size:cover;">
                    <div class="container">
                      <h2 class="mt-5" data-aos="fade-right" data-aos-duration="1500">Shopping Directory</h2>
                    
                    <div class="btn btn-yellow">
                      <a href="#">
                        IT, Travel, Education, Solicitor, Mortgage & more
                      </a>
                    </div>
                    </div>
                  </div>

                  <div class="swiper-slide" style="background-image: url({{asset('assets/img/himaldeals-slide-2.webp')}});background-size:cover;">
                    <div class="container">
                      <h2 class="mt-5" data-aos="fade-right" data-aos-duration="1500">Services Directory</h2>
                      <div class="btn btn-yellow">
                        <a href="#">Electronics, Food, Cloths, Home ,Garden & more</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
          
      </div>
    </div>

    <!-- Education Essentials  -->
    <div class="row">
      <div class="col-lg-12 education-essential-container">
        <div class="container education-essential">
          <h2>Education Essentials</h2>

                <div class="blue-dash"></div>

                <div class="swiper wsSwiper">
                    <div class="swiper-wrapper">
                    @if (count($posts) > 0)
                     @foreach ($posts as $post)
                       @if ($post->slug === 'higher-education' )
                        <div class="swiper-slide">
                          <a href="{{route('blog',$post->slug)}}" style="color: #222; text-decoration:none">
                            <img src="{{url('storage/nestedpost/'.$post->image_name)}}" class="img-fluid" />
                            <div class="overlay-text text-center"  >{{$post->title}}</div>
                          </a>  
                        </div>
                       @endif
                     @endforeach
                    @endif
                    
                  @if (count($posts) > 0)
                   @foreach ($posts as $post)
                    @if ($post->parent_id === 1 )
                    <div class="swiper-slide">
                      <a href="{{route('blog',$post->slug)}}" style="color: #222; text-decoration:none">
                        <img src="{{url('storage/nestedpost/'.$post->image_name)}}" class="img-fluid" />
                        <div class="overlay-text text-center">{{$post->title}}</div>
                      </a>  
                    </div>
                    @endif
                   @endforeach
                  @endif

            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Travel Essential  -->
    <div class="row">
      <div class="col-lg-12 mobile-padding-2">
        <div class="container travel-essential">
          <h2>Travel  Essentials</h2>

          <div class="blue-dash"></div>
          <div class="row">
            <div class="col-lg-12">
              <script initialized="true" script-initialized="true" 
              src="https://www.travelpayouts.com/widgets_static/7ff6bb732e2a218d9215b1dabdbec58b.js?v=2006"></script>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Website essentials  -->
    <div class="row">
      <div class="col-lg-12">
        <div class="container website-essentials">
          <div data-aos="fade-down" data-aos-duration="1200">
          <h2>Website Essentials</h2>

          <div>
            <hr />
            <div class="blue-dash transform-20"></div>
          </div>
          </div>

          <div class="swiper webEssSwiper">
            <div class="swiper-wrapper">
                {{-- web_essentials --}}

                @if (count($products) > 0)
                 @foreach ($products  as $product)
                  @if ($product->category->slug == 'website-essentials')
                      
                    <div class="swiper-slide">
                      <a href="{{route('front.shop', $product->slug)}}" style="color: #222; text-decoration:none">
                        <div style="height: 250px;background-image: url({{url('storage/products/'.$product->image_name)}});background-size:cover; background-position: center"></div>
                        {{-- <img src="{{url('storage/products/'.$product->image_name)}}" class="img-fluid" /> --}}
                        <div class="shopping-icon">
                        <span><i class="fa fa-shopping-basket"></i></span>
                        </div>
                        <p>{{$product->title}}</p>
                        <p class="price-tag">
                        <s>£400</s>&nbsp;&nbsp;£{{$product->price}}
                        </p>
                      </a> 
                    </div>

                 @endif
                @endforeach
               @endif

            </div>
            
             <div class="swiper-pagination"></div>
          </div>

            <br /><br />
          <div class="d-flex justify-content-center align-items-center">
             <button>View All Website Essential</button>
          </div>
         
        </div>
      </div>
    </div>

    <!-- Middle Banner  -->
    <div class="row">
      <div class="col-lg-12 midddle-banner">
        
      </div>
    </div>

    <!-- personnal essentials  -->
    <div class="row">
      <div class="col-lg-12">

        <div class="container personal-essential">
          
          <div data-aos="fade-down" data-aos-duration="1200" data-aos-once="true">
          <h2>Personal Essentials</h2>
          <div>
            <hr />
            <div class="blue-dash transform-20"></div>
          </div>
          </div>

          <!-- Card  -->
          <div class="row">
            @if (count($products) > 0)
            @foreach ($products as $product)
             @if ($product->category->slug == 'evening-essentials')
                              
                 <div class="col-lg-4 mb-5">
                   <a href="{{ url('shop', $product->slug) }}" style="color: #222; text-decoration:none">
                    <div class="card">
                    <div class="row">
                      <div class="col-lg-5" 
                         style="height: 150px;
                         background-image:url({{url('storage/products/'.$product->image_name)}});
                         background-size:cover;background-position:center">
                      </div>
                      <div class="col-lg-7">
                        <p class="mt-5"><b>{{$product->title}}</b></p>
                      </div>
                    </div>
                    </div>
                  </a>
                 </div>  
                 @endif
                @endforeach
            @endif


          </div>

          <div class="d-flex justify-content-center align-items-center">
             <button class="btn-viewall">Check Out Amazon For All Essential</button>
          </div>

        </div>

      </div>
    </div>

    <!-- Home & Garden essntial  -->
    <div class="row">
      <div class="col-lg-12 home-garden-essentials">
        <div class="container">
          
          <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
           <h2>Home & Garden Essentials</h2>

          <div>
            <hr />
            <div class="blue-dash transform-20"></div>
          </div>
          </div>

         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
           <li class="nav-item" role="presentation">
             <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home Appliance</a>
           </li>
           <li class="nav-item" role="presentation">
             <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Beds</a>
           </li>
           <li class="nav-item" role="presentation">
             <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Furniture</a>
           </li>
           <li class="nav-item" role="presentation">
             <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-eletronics" role="tab" aria-controls="pills-contact" aria-selected="false">Electronics</a>
           </li>
           <li class="nav-item" role="presentation">
             <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-garden-outdoor" role="tab" aria-controls="pills-contact" aria-selected="false">Garden & Outdoor</a>
           </li>
           <li class="nav-item" role="presentation">
             <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-decoration" role="tab" aria-controls="pills-contact" aria-selected="false">Decoration</a>
           </li>
           <li class="nav-item" role="presentation">
             <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-home-accessories" role="tab" aria-controls="pills-contact" aria-selected="false">Home Accessories</a>
           </li>
         </ul>
         <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
             <!-- Home Appliance  -->
             <div class="row">
            @if (count($products) > 0)
              @foreach ($products as $product)
               @if ($product->category->slug == 'evening-essentials')
               
               <div class="col-lg-6 mt-3 mb-3">
                 <div class="showcase-card mobile-padding-margin-1" style="padding: 25px 5px">
                  <div class="row">
                    <div class="col-6" style="height: 250px;
                    background-image:url({{url('storage/products/'.$product->image_name)}});
                    background-size:cover;background-position:center;">

                    </div>
                    <div class="col-6">
                      <p class="showcase-card-title">{{$product->title}}</p>
                      <p class="showcase-card-desc">{{Str::limit(strip_tags($product->description),100)}}</p>
                      <a href="{{ url('shop', $product->slug) }}" class="btn-primary-blue">Read More</a>
                    </div>
                  </div>
                 </div>

               </div>
               @endif
              @endforeach
            @endif

            </div>

             <!-- / -->
           </div>
           <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
             Beds
           </div>
           <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
             Furniture
           </div>
           <div class="tab-pane fade" id="pills-eletronics" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
              @if (count($products) > 0)
              @foreach ($products as $product)
               @if ($product->category->slug == 'evening-essentials')
               <div class="col-lg-6 mt-3 mb-3">
                <div class="showcase-card mobile-padding-margin-1" style="padding: 25px 5px">
                 <div class="row">
                   <div class="col-6" style="height: 250px;
                   background-image:url({{url('storage/products/'.$product->image_name)}});
                   background-size:cover;background-position:center;">

                   </div>
                   <div class="col-6">
                     <p class="showcase-card-title">{{$product->title}}</p>
                     <p class="showcase-card-desc">{{Str::limit(strip_tags($product->description),100)}}</p>
                     <a href="{{ url('shop', $product->slug) }}" class="btn-primary-blue">Read More</a>
                   </div>
                 </div>
                </div>

              </div>
                  @endif
                 @endforeach
               @endif
   
               </div>
           </div>
            <div class="tab-pane fade" id="pills-garden-outdoor" role="tabpanel" aria-labelledby="pills-contact-tab">
             Garden & OutDoor
           </div>
            <div class="tab-pane fade" id="pills-decoration" role="tabpanel" aria-labelledby="pills-contact-tab">
              Decoration
           </div>
            <div class="tab-pane fade" id="pills-home-accessories" role="tabpanel" aria-labelledby="pills-contact-tab">
              Home Accesoriwes
           </div>
         </div>

         <br /><br />

        </div>
      </div>
    </div>

    <!-- Office & Bussiness esentials  -->
    <div class="row">
      <div class="col-lg-12 office-essentials">
        <div class="container">
          
          <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
           <h2>Office & Bussiness Essentials</h2>
           
           <div class="blue-dash"></div>
           </div>
          
        </div>
      </div>
    </div>

    <!-- Below part  -->
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-4">
            <div class="primary-img-container">
              <div>
                <p data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Ink, Toner Cartidge</p>
              <a href="#" class="btn-primary-blue">Deals</a>
              </div>
                  <img src="./assets/img/printer-ink-toner-cartridge-near-me.jpg" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature-item">
              <i class="fa fa-truck"></i>
              <div class="feature-item-container">
                <p class="fw-bold">Free Shipping</p>
                <p>On Order Over $10</p>
              </div>
            </div>

          

            <div class="feature-item">
              <i class="fa fa-dollar-sign"></i>
              <div class="feature-item-container">
                <p class="fw-bold">Free Shipping</p>
                <p>On Order Over $10</p>
              </div>
            </div>

           

             <div class="feature-item">
               <i class="fa fa-trophy"></i>
              <div class="feature-item-container">
                <p class="fw-bold">Free Shipping</p>
                <p>On Order Over $10</p>
              </div>
            </div>
           

          </div>
          <div class="col-lg-4">
            <div class="primary-img-container">
              <div>
                <p data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Electronics Appliances</p>
              <a href="#" class="btn-primary-blue">Deals</a>
              </div>
            <img src="./assets/img/electrics-appliances-near-me.jpg" class="img-fluid" />
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Legal Advice  -->
    <div class="row">
      <div class="col-lg-12 legal-advice">
        
        <div class="row">
          <div class="col-lg-6">
            <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Legal Advice ?</h3>
            <div class="num-box">
              <h5>10</h5>
              <span class="upto-text" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Up to</span>
              <span class="percentage-text">
                <span>%</span><br />
                <span data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Off</span>
              </span>
            </div>

            <div class="d-flex justify-content-center">
              <a href="#" class="get-quote-btn"><span>Get Quotes Now</span><span><i class="fa fa-arrow-right"></i></span></a>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="./assets/img/shoessaleimg.jpg" class="img-fluid" />
          </div>
        </div>

        <br /><br />

        <div class="container">
           <!-- Three Column Items  -->
        <div class="row">
        @if (count($products) > 0)
         @foreach ($products as $product)
           @if ($product->category->slug == 'courier-cargo')

              <div class="col-lg-4 mobile-padding-2">
                <a href="{{ url('shop', $product->slug) }}" style="color: #222; text-decoration:none">
                <h4 class="sh-title">Buy Courier Cargo Stuffs</h4>
                <div class="sh-container">
                  <img src="{{url('storage/products/'.$product->image_name)}}" class="img-fluid" />
                  <p>{{$product->title}}</p>
                </div>
                </a>
              </div>

           @endif
        @endforeach
      @endif

      @if (count($products) > 0)
       @foreach ($products as $product)
         @if ($product->category->slug == 'office-electronic')
          <div class="col-lg-4 mobile-padding-2">
            <a href="{{ url('shop', $product->slug) }}" style="color: #222; text-decoration:none">
            <h4 class="sh-title">Buy Office Electronics</h4>
            <div class="sh-container">
              <img src="{{url('storage/products/'.$product->image_name)}}" class="img-fluid" />
              <p>{{$product->title}}</p>
            </div>
            </a>
          </div>
          @endif
        @endforeach
      @endif
      
      @if (count($products) > 0)
       @foreach ($products as $product)
         @if ($product->category->slug == 'office-furnitures')
          <div class="col-lg-4 mobile-padding-2">
            <a href="{{ url('shop', $product->slug) }}" style="color: #222; text-decoration:none">
            <h4 class="sh-title">Buy Office Furnitures</h4>
            <div class="sh-container">
              <img src="{{url('storage/products/'.$product->image_name)}}" class="img-fluid" />
              <p>{{$product->title}}</p>
            </div>
          </a>
          </div>
          @endif
         @endforeach
        @endif

        </div>
        </div>
       

      </div>
    </div>

    <!-- Our Latest News  -->
    <div class="row">
      <div class="col-lg-12 our-latest-news" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
        <div class="container">
          
          <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
            <h2>Our Latest News</h2>

          <div>
            <hr />
            <div class="blue-dash transform-20"></div>
          </div>
          </div>

          <div class="swiper our-latest-news">
            <div class="swiper-wrapper">

              @if (count($blogs) > 0)
                  @foreach ($blogs   as $blog)
                  <div class="swiper-slide">
                    <a href="{{route('blog',$blog->slug)}}" style="color: #222;text-decoration:none">
                    <div class="blog-card-image-container mt-3" style="height: 200px; background-image:url({{url('storage/blogs/'.$blog->image_name)}});background-size:cover">
                       {{-- <img src="{{url('storage/blogs/'.$blog->image_name)}}" class="img-fluid" /> --}}
                    </div>
                  <p class="blog-card-title">
                     {{$blog->title}}
                  </p>
                  <div class="blue-dash"></div>
                    <p class="comment-count"><i class="fa fa-comments"></i>&nbsp;&nbsp;0 Comments</p>
                </a>
                  </div>                  
                  @endforeach
              @endif

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </div>

    <!-- Text Section  -->
    <div class="row">
      <div class="col-lg-12 upper-footer-text-section">
        <div class="container">
          
          <p class="h2 fw-bold">Himal Deals</p>
          <br />
          <p class="h2 fw-bold sub-heading">Himal Deals – Shopping Directory – Services Directory</p>

          <hr />
          <br />
          <p class="text-xs">Himal Deals is an online shopping and services directory where visitors can buy anything online from trusted companies of the UK and worldwide. Similarly, they can find out different companies’ services. We only list here genius & well-known organizations. If we refer it means, you can buy goods or book for services with confidence.  You can see a list of stuff and services provides.</p>
          <br />
          <h3 data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">Goods and Services from trusted companies</h3>
          <br />
          <p class="text-xs">As we mentioned above, we will provide which we are aware of the companies or which we took a service before. For example, we are referring to booking.com, tripadvisor.com etc., which are well-known and trusted companies. For more information, please visit ours About us page. Likewise, if any vendors want to list their companies, then please contact us.</p>

          <br /><br /><br /><br />

        </div>
      </div>
    </div>

    <!-- / -->
@endsection
