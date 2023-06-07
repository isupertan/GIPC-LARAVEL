@extends('admin_layout')
@section('bodypart')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 col-8"><i class="fas fa-address-card fa-4x"></i><br>TOTAL SPONSORS</div>    
                            <div class="col-lg-4 col-4" style="font-size: 3em">{{$sponsorcount}}</div>    
                          </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admin.sponsor')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 col-8"><i class="fas fa-bullhorn fa-4x"></i><br>TOTAL SPEAKERS</div>    
                            <div class="col-lg-4 col-4" style="font-size: 3em">{{$speakercount
                                }}</div>    
                          </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admin.speaker')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 col-8"><i class="fas fa-ticket-alt fa-4x"></i><br>TOTAL PAST EVENTS</div>    
                            <div class="col-lg-4 col-4" style="font-size: 3em">{{$pasteventcount
                                }}</div>    
                          </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admin.pastevent')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                     <div class="row">
                      <div class="col-lg-8 col-8"><i class="fas fa-balance-scale fa-4x"></i><br>TOTAL CATEGORY</div>    
                      <div class="col-lg-4 col-4" style="font-size: 3em">{{$blogcategory}}</div>    
                    </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admin.blogcategory')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 col-8"><i class="fas fa-rss-square fa-4x"></i><br>TOTAL BLOGS</div>    
                            <div class="col-lg-4 col-4" style="font-size: 3em">{{$blogcount}}</div>    
                          </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admin.blog')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- LATEST PRODUCT SECTION --}}
        @if (count($products) > 0)
<!--
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                 LATEST PRODUCTS
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Image</th>
                            {{-- <th>Description</th> --}}
                            <th>View</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                    
                      @foreach ($products->take(3) as $product)
                      <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->category->title}}</td>
                        <td><img style="height: 10vh" src="{{url('storage/products/'.$product->image_name)}}" 
                            alt="{{$product->image_alt}}"></td>
                        {{-- <td>{{Str::    limit(strip_tags($product->description),110)}}</td> --}}
                        <td><a target="_blank" href="{{route('front.shop', $product->slug)}}" class="btn btn-primary"> <i class="fas fa-eye"></i> </a></td>
                    </tr>
                      @endforeach
                  
                        

                </tbody>
            </table>
        </div>
    </div>
-->
    @endif
  </div>
</main>
@endsection

