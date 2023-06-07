@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Product</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card mb-5" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW PRODUCT</h5>
           </div>
           <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Package Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Package Category</label>
                 <select class="form-control" name="category">
                   @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                   @endforeach
                   
                 </select>
              </div>

              <div class="form-group mt-3">
                <label>Package Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>


              <div class="form-group mt-3">
                
                <label>Package Price</label>
                <input type="text" class="form-control" name="price"/>
              </div>
              <div class="form-group mt-3">
                
              <label>Package MRP</label>
                <input type="text" class="form-control" name="mrp"/>
              </div>
              <div class="form-group mt-3">
                
                <label>Start Date</label>
                <input type="date" class="form-control" name="manufacture"/>
              </div>
              <div class="form-group mt-3">
                
                <label>End Date</label>
                <input type="date" class="form-control" name="expire"/>
              </div>
              <div class="form-group mt-3">
                
                <label>Quantity</label>
                <input type="number" class="form-control" name="qty"/>
              </div>



              <div class="form-group mt-3">
                <label>Package Description</label>
                <textarea class="form-control mycustomeditors" name="description" rows="5"></textarea>
              </div>

              <div class="form-group mt-3">
                <label>Package Short Description</label>
                <textarea class="form-control mycustomeditors2" name="short_description" rows="5"></textarea>
              </div>

              <div class="form-group mt-3">
                
                <label>Package External Link</label>
                <input type="text" class="form-control" name="affiliate_link"/>
              </div>

              <div class="row">
                <div class="form-group mt-3">
                  <label>On Sale?</label>
                </div>
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
                      <input type="radio" class="form-controll" name="sale" value="0"/>
                    </label>
                  </div>
                </div>
              </div>






              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Meta Title</label>
                <input type="text" class="form-control" name="meta_title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Img Alt</label>
                <input type="text" class="form-control" name="img_alt" required/>
              </div>

              <div class="form-group mt-3">
                <label>Package POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"></textarea>
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

