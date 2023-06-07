@extends('front_layout_two')
{{-- @foreach ($products as $product) --}}
 @section('title',  $category->meta_title)
@section('description',  $category->description)
{{-- @endforeach --}}
@section('bodycontent')



        
    

<div class="row">
    <div class="col-lg-12 website-essential-page">
      <div class="container">
        

        <!-- / -->
        <div class="row">
          <div class="col-lg-9">
            <ol class="breadcrumb custom-breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('category', $category->slug)}}">{{$category->title}}</a></li>
            </ol>
              <!-- / -->
              <div class="row">
                <div class="col-12">
                  <h1>{{$category->title}}</h1>
                </div>
              @if (count($products) > 0)
                @foreach ($products as $product)
                 @if ($product->category->slug == $category->slug)
                     
                
                        
                <div class="col-lg-4 col-6 mt-5">
                  <div class="card">
                   <a href="{{ url('shop', $product->slug) }}" style="color: #222; text-decoration:none"> 
                    <div class="card-body" style="height:250px;
                    background-image: url({{url('storage/products/'.$product->image_name)}});
                    background-size:cover;
                    background-position:center">
                    </div>
                    <div class="card-footer text-center">
                      <h2 style="font-size: 17px;">{{$product->title}}</h2>
                    </div>
                   </a>
                  </div>
                </div>


                @endif
               @endforeach
              @endif
             </div>
              <!-- / -->
              <!-- / -->
        
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

  @endsection