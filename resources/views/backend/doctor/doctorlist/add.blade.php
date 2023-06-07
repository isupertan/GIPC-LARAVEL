@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Doctor</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Doctor</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card mb-5" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW DOCTOR</h5>
           </div>
           <form method="POST" action="{{route('admin.doctor.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Doctor Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Doctor Category</label>
                 <select class="form-control" name="category">
                   @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                   @endforeach
                   
                 </select>
              </div>

              <div class="form-group mt-3">
                <label>Doctor Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>


              <div class="form-group mt-3">
                
                <label>Price</label>
                <input type="text" class="form-control" name="price"/>
              </div>

              <div class="form-group mt-3">
                
                <label>Doctor Qualification</label>
                <input type="text" class="form-control" name="doctor_qualification"/>
              </div>

              <div class="form-group mt-3">
                
                <label>Doctor Timings</label>
                <input type="text" class="form-control" name="doctor_timings"/>
              </div>


              <div class="form-group mt-3">
                <label>Doctor Description</label>
                <textarea class="form-control mycustomeditors" name="description" rows="5"></textarea>
              </div>



              <div class="row">
                <div class="form-group mt-3">
                  <label>Priority?</label>
                </div>
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
                      <input type="radio" class="form-controll" name="priority" value="0"/>
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
                <label>Doctor Description</label>
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

