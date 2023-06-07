@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="card mb-5" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> EDIT PACKAGE</h5>
           </div>
           <form method="POST" action="{{route('admin.product.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label><b>PACKAGE Name</b></label>
                <input type="text" class="form-control" value="{{$product->title}}" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label><b>PACKAGE Category</b></label>
                 <select class="form-control" name="category">
                   <option value="{{$product->category->id}}" selected>{{$product->category->title}}</option>
                   
                    @foreach ($categories as $category)
                    
                      @if ($category->title != $product->category->title)
                         <option value="{{$category->id}}">{{$category->title}}</option>
                      @endif
                    
                   @endforeach
                   
                 </select>
              </div>

              <div class="form-group mt-3">
                <label><b>PACKAGE Image</b></label> <br>
                <img src="{{url('storage/products/'.$product->image_name)}}" width="250px"/>
                <input type="file" class="form-control" name="file"/>
              </div>

             

              <div class="form-group mt-3">
                
                <label><b> PACKAGE Price</b></label>
                <input type="text" class="form-control" value="{{$product->price}}" name="price"/>
              </div>

              <div class="form-group mt-3">
              <label><b>PACKAGE MRP</b></label>
                <input type="text" class="form-control" value="{{$product->mrp}}" name="mrp"/>
              </div>

              <div class="form-group mt-3">
                
                <label><b>PACKAGE Start Date</b></label>
                <input type="date" class="form-control" value="{{$product->manufacture}}" name="manufacture"/>
              </div>
              <div class="form-group mt-3">
                
                <label><b>PACKAGE End Date</b></label>
                <input type="date" class="form-control" value="{{$product->expire}}" name="expire"/>
              </div>
              <div class="form-group mt-3">
                
                <label><b>Quantity</b></label>
                <input type="number" class="form-control" value="{{$product->qty}}" name="qty"/>
              </div>

              <div class="form-group mt-3">
                <label><b>PACKAGE Description</b></label>
                <textarea class="form-control mycustomeditors" name="description" rows="5">{{$product->description}}</textarea>
              </div>

              <div class="form-group mt-3">
                <label><b>PACKAGE Short Description</b></label>
                <textarea class="form-control mycustomeditors2" name="short_description" rows="5">{{$product->short_description}}</textarea>
              </div>

              <div class="form-group mt-3">
                
                <label><b>PACKAGE External Link</b></label>
                <input type="text" class="form-control" value="{{$product->affiliate_link}}" name="affiliate_link"/>
              </div>

              <div class="row">
                <div class="form-group mt-3">
                  <label><b>On Sale</b></label>
                </div>
                @if ($product->sale == 1)
                <div class="col-lg-2">

                  <div class="form-group mt-3">
                    <label>Yes
                      <input type="radio" class="form-controll" name="sale" value="1" checked/>
                    </label>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group mt-3">
                    <label>No
                      <input type="radio" class="form-controll" name="sale" value="0"/>
                    </label>
                  </div>
                </div>
                @elseif($product->sale == 0)
                <div class="col-lg-2">
                  <div class="form-group mt-3">
                    <label>Yes
                      <input type="radio" class="form-controll" name="sale" value="1"/>
                    </label>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group mt-3">
                    <label>No
                      <input type="radio" class="form-controll" name="sale" value="0" checked/>
                    </label>
                  </div>
                </div>
                @endif

              </div>






              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label><b>Meta Title</b></label>
                <input type="text" class="form-control" value="{{$product->meta_title}}" name="meta_title" required/>
              </div>

              <div class="form-group mt-3">
                <label><b>Image Alt</b></label>
                <input type="text" class="form-control" value="{{$product->image_alt}}" name="img_alt" required/>
              </div>

              <div class="form-group mt-3">
                <label><b>PACKAGE POST Description</b></label>
                <textarea class="form-control" id="meta_description"  name="meta_description" rows="3">{{$product->meta_description}}</textarea>
              </div>
              
              <div class="form-group mt-3 mb-5">
                 <input type="submit" class="btn btn-success" name="save" value="SUBMIT">
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

