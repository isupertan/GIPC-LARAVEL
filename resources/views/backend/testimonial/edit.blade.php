@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">TESTIMONIAL</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">EDIT TESTIMONIAL</li>
        </ol>
    {{-- <!-- Page Body --><img style="height: 20vh" src="{{url('storage/project/'.$category->category)}}" class="img-thumbnail" --}}
    <div class="row">
        <div class="col-lg-6 mx-auto mt-3 mb-3 p-3" style="border: 2px solid #222">
          <form method="POST" action="{{route('admin.testimonial.update', $testimonial->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Full Name</label>
                <input type="text" class="form-control" name="title" value="{{$testimonial->title}}" />
              </div>

              <div class="form-group mt-3">
                <label>Designation</label>
                <input type="text" class="form-control" name="designation" value="{{$testimonial->designation}}"  />
              </div>

              <div class="form-group mt-3">
                <label>Company</label>
                <input type="text" class="form-control" name="company" value="{{$testimonial->company}}"  />
              </div>

              <div class="form-group mt-3">
                <label>Video Link</label>
                <input type="text" class="form-control" name="video_link" value="{{$testimonial->video_link}}" />
              </div>



              <div class="form-group mt-3">
                <label>Image (Avatar)</label><br>
                <img style="height: 20vh" src="{{url('storage/testimonial/',$testimonial->image_name)}}" class="img-thumbnail"/>
                <br><input type="file" class="form-control" name="file"/>
              </div>

              <div class="form-group mt-3">
                <label>Image Alt (SEO)</label>
                <input type="text" class="form-control" name="img_alt" value="{{$testimonial->image_alt}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Feedback</label>
                <textarea class="form-control" name="feedback" id="mytextarea" rows="5"> {{ $testimonial->feedback }} </textarea>
              </div>


              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="UPDATE TESTIMONIAL">
              </div>
          </form>
        </div>
       
    </div>
    </div>
</main>
@endsection

