@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Doctor</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="card mb-5" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> EDIT PRODUCT</h5>
           </div>
           <form method="POST" action="{{route('admin.doctor.update', $doctor->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label><b>Product Name</b></label>
                <input type="text" class="form-control" value="{{$doctor->title}}" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label><b>Product Category</b></label>
                 <select class="form-control" name="category">
                   <option value="{{$doctor->category->id}}" selected>{{$doctor->category->title}}</option>
                   
                    @foreach ($categories as $category)
                    
                      @if ($category->title != $doctor->category->title)
                         <option value="{{$category->id}}">{{$category->title}}</option>
                      @endif
                    
                   @endforeach
                   
                 </select>
              </div>

              <div class="form-group mt-3">
                <label><b>Product Image</b></label> <br>
                <img src="{{url('storage/doctorlist/'.$doctor->image_name)}}" width="250px"/>
                <input type="file" class="form-control" name="file"/>
              </div>

             

              <div class="form-group mt-3">
                
                <label><b>Price</b></label>
                <input type="text" class="form-control" value="{{$doctor->price}}" name="price"/>
              </div>
 

              <div class="form-group mt-3">
                
                <label><b>Doctor Qualification</b></label>
                <input type="text" class="form-control" value="{{$doctor->doctor_qualification}}" name="doctor_qualification"/>
              </div>
 

              <div class="form-group mt-3">
                
                <label><b>Doctor Timings</b></label>
                <input type="text" class="form-control" value="{{$doctor->doctor_timings}}" name="doctor_timings"/>
              </div>
 

              <div class="form-group mt-3">
                <label><b>Product Description</b></label>
                <textarea class="form-control mycustomeditors" name="description" rows="5">{{$doctor->description}}</textarea>
              </div>
 
 

              <div class="row">
                <div class="form-group mt-3">
                  <label><b>On Sale</b></label>
                </div>
                @if ($doctor->priority == 1)
                <div class="col-lg-2">

                  <div class="form-group mt-3">
                    <label>Yes
                      <input type="radio" class="form-controll" name="priority" value="1" checked/>
                    </label>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group mt-3">
                    <label>No
                      <input type="radio" class="form-controll" name="priority" value="0"/>
                    </label>
                  </div>
                </div>
                @elseif($doctor->priority == 0)
                <div class="col-lg-2">
                  <div class="form-group mt-3">
                    <label>Yes
                      <input type="radio" class="form-controll" name="priority" value="1"/>
                    </label>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group mt-3">
                    <label>No
                      <input type="radio" class="form-controll" name="priority" value="0" checked/>
                    </label>
                  </div>
                </div>
                @endif

              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label><b>Meta Title</b></label>
                <input type="text" class="form-control" value="{{$doctor->meta_title}}" name="meta_title" required/>
              </div>

              <div class="form-group mt-3">
                <label><b>Image Alt</b></label>
                <input type="text" class="form-control" value="{{$doctor->image_alt}}" name="img_alt" required/>
              </div>

              <div class="form-group mt-3">
                <label><b>POST Description</b></label>
                <textarea class="form-control" id="meta_description"  name="meta_description" rows="3">{{$doctor->meta_description}}</textarea>
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

