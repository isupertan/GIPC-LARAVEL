@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">TESTIMONIAL</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">ADD TESTIMONIAL</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW TESTIMONIAL</h5>
           </div>
           <form method="POST" action="{{route('admin.testimonial.store')}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group mt-3">
                <label>Full Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Designation</label>
                <input type="text" class="form-control" name="designation" required/>
              </div>

              <div class="form-group mt-3">
                <label>Company</label>
                <input type="text" class="form-control" name="company" required/>
              </div>

              <div class="form-group mt-3">
                <label>Video Link</label>
                <input type="text" class="form-control" name="video_link"/>
              </div>



              <div class="form-group mt-3">
                <label>Image (Avatar)</label>
                <input type="file" class="form-control" name="file" required/>
              </div>

              <div class="form-group mt-3">
                <label>Image Alt (SEO)</label>
                <input type="text" class="form-control" name="image_alt"/>
              </div>

              <div class="form-group mt-3">
                <label>Feedback</label>
                <textarea class="form-control" name="feedback" id="mytextarea" rows="5"></textarea>
              </div>

              {{-- SEO --}}
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="SAVE TESTIMONIAL">
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

