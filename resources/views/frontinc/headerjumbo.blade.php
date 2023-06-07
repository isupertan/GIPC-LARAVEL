<div class="row">
    <div class="col-lg-12 header-menu-black">
      <div class="container">
        
        <div id="header">
        <div class="row">
          <div class="col-lg-2 mobile-flex">
            <div class="category-box">
              <h5>
                <a style="color: #f4f4f5;font-size:17px;text-decoration:none;font-weight:bold" 
                  href="{{route('home')}}"><i class="fa fa-home"></i>&nbsp;Home
                 </a>
              </h5>
            </div>
            <a href="javascript:void(0)" class="mobile-menu-icon">&#9776;</a>
          </div>
          <div class="col-lg-10 d-flex justify-content-center align-items-center">
            <!-- Mian Mewnu  -->
            <div class="main-menu-container">
              <a href="javascript:void(0)" class="mobile-menu-close-btn">&times;</a>

            <ul class="main-menu">
             @foreach ($HeaderMenu as $main)
                
             @if ($main->parent_id == 0)
              <li style="position: relative;">
                <a href="{{route('blog', $main->page->slug)}}" 
                    @if ($main->page->slug == 'higher-education')id="hemb" 
                    @elseif($main->page->slug == 'service-directory') id="sdmb" 
                    @elseif($main->page->slug == 'shopping-directory') id="sodmb" 
                    @elseif($main->page->slug == 'about') id="aumb" 
                    @endif>
                    {{$main->page->title}}
                    
                       &nbsp;&nbsp;<i class="fa fa-caret-down"></i> 
                   
                </a>
                
                <ul @if ($main->page->slug == 'higher-education') id="hem"
                    @elseif($main->page->slug == 'service-directory') id="sdm" 
                    @elseif($main->page->slug == 'shopping-directory') id="sodm" 
                    @elseif($main->page->slug == 'about') id="aum" 
                    @endif>
                  @foreach ($HeaderMenu as $mains)  
                    @if ($mains->parent_id == $main->id)
                     <li>
                         <a href="{{route('blog',$mains->page->slug)}}">{{$mains->page->title}}</a> 
                         @foreach ($HeaderMenu as $item)
                         @if ($item->parent_id == $mains->id)  
                            <ul>
                             @foreach ($HeaderMenu as $item)
                                @if ($item->parent_id == $mains->id)  
                                <li>
                                  <a href="{{route('blog',$item->page->slug)}}">{{$item->page->title}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                            @endif
                        @endforeach
                           
                     </li>
                     @endif
                 @endforeach   
                  
         

                </ul>
              </li>
              @endif
              @endforeach 
              
              {{-- <li style="position: relative;">
                <a href="{{route('about-us')}}" id="aumb">About Us&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
                <ul id="aum">
                  <li>
                    <a href="{{route('about-us')}}">About US</a>
                  </li>
                  <li>
                    <a href="{{route('how-it-works')}}">How It Works</a>
                  </li>
                  <li>
                    <a class="no-border" href="{{route('blogs')}}">Blog</a>
                  </li>
                </ul>
              </li> --}}
              {{-- <li>
                <a href="{{route('contact-us')}}">Contact Us</a>
              </li> --}}
            </ul>
            </div>
            <!-- / -->
          </div>
        </div>
        </div>

      </div>
    </div>
  </div>