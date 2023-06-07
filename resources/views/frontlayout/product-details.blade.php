@extends('front_layout_two')
{{-- @foreach ($products as $product) --}}
 @section('title',  $product->meta_title)
 @section('description',  $product->meta_description)
{{-- @endforeach --}}
@section('bodycontent')


  {{-- @if (count($product) > 0)
   @foreach ($products as $product)
    @if (Request::segment(1) == $product->slug ) --}}
        
    

<div class="row">
    <div class="col-lg-12 website-essential-page">
      <div class="container">
        

        <!-- / -->
        <div class="row">
          <div class="col-lg-9">
            <ol class="breadcrumb custom-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('category', $product->category->slug)}}">
                  {{$product->category->title}}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
              </ol>
              <!-- / -->
              <div class="row">
                <div class="col-lg-6 mt-5   ">
                  <div class="sceondary-img-conatiner">
                     <img src="{{url('storage/products/'.$product->image_name)}}" class="img-100" />
                     @if ($product->sales == 1)
                     <div class="sale-ribbon">Sale</div> 
                     @endif
                     
                  </div>
                 
                </div>
                <div class="col-lg-6">
                  <p class="product-title">{{$product->title}}</p>
                  @if ($product->price != "")
                    <p class="price-tag"><s>${{$product->price * 3}}</s>${{$product->price}}</p>
                  @endif
                  <p>{!!$product->short_description!!}</p>

                    <br /><br />
                    @if ($product->affiliate_link != "")
                     <a href="{{$product->affiliate_link}}" class="product-buy-button">Buy Product</a>
                    @endif
                    
                    <br /><br />

                <p>Category: <strong>{{$product->category->title}}</strong></p>
                </div>
              </div>
              <!-- / -->
              <!-- / -->
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-tabs" id="myProductTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Reviews(0)</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <br />
                <h2>Description</h2>
                <br />
                {{-- <h2>{{$product->meta_title}}</h2> --}}
                <p>{!!$product->description!!}</p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <br />
                <h2>Reviews</h2>
                <br />
                <p>There are no reviews yet.<br /><br />

                Only logged in customers who have purchased this product may leave a review.</p>
              </div>
            </div>
            <br /><br />
            <!-- You MAy alos Like   -->
            <h2>You may also like</h2>
            <br /><br />



                
        
            <div class="more-product-container">

              @foreach ($productAll as $item)
              
         
              @if ($product->category_id == $item->category->id & $item->id != $product->id) 
              <div class="more-product-card">
                <a href="{{ url('shop', $product->slug) }}" style="color: #222; text-decoration:none;">
                <img src="{{ url('storage/products', $item->image_name ) }}" class="img-fluid" />
                <!-- <div class="sale-ribbon">Sale</div> -->
                
                <br /><br />
                <p class="text-center">{{$item->title}}</p>
                <p class="price-tag"><s>${{$product->price * 3}}</s>${{$product->price}}</p>
                <div class="d-flex justify-content-center">
                  <a href="{{ url('shop', $product->slug) }}" 
                  style="color: #fff; text-decoration:none;
                  background:#222;padding:5px 20px;;"> 
                    VIEW
                   </a>

                </div>
                </a>
              </div>
              @endif
              @endforeach
            </div>


        
          </div>
        </div>
          </div>
          <div class="col-lg-3">
            <!-- Search Box  -->
            <div class="search-box">
              <form method="GET" action="{{ route('front.search') }}">  
               <input type="search" name="search" placeholder="Search Products" />
               <input type="submit" value="search">
              </form>  
             </div>
          </div>
        </div>
        

      </div>
    </div>
  </div>
  {{-- @endif    
  @endforeach
  @endif --}}
  @endsection