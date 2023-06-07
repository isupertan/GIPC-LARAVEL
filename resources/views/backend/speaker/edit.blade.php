@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">BLOG SPEAKER</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">EDIT SPEAKER</li>
        </ol>
    {{-- <!-- Page Body --><img style="height: 20vh" src="{{url('storage/project/'.$category->category)}}" class="img-thumbnail" --}}
    <div class="row">
        <div class="col-lg-8 p-3 mb-3 mx-auto"  style="padding: 15px;border:2px solid #222">
          <form method="POST" action="{{route('admin.speaker.update', $category->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Speaker Name</label>
                <input type="text" class="form-control" name="title" value="{{$category->title}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Speaker Company</label>
                <input type="text" class="form-control" name="company" value="{{$category->company}}" />
              </div>

              <div class="form-group mt-3">
                <label>Speaker Designation</label>
                <input type="text" class="form-control" name="designation" value="{{$category->designation}}" />
              </div>

              <div class="form-group mt-3">
                <label>Speaker Linkedin</label>
                <input type="text" class="form-control" name="linkedin" value="{{$category->linkedin}}" />
              </div>

              <div class="form-group mt-3">
                <label>Speaker Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{$category->twitter}}" />
              </div>

              <div class="form-group mt-3">
                <label>Featured (<b>Priority</b>)</label>  <br/>

                <label class="radio-inline">
                  <input type="radio" value="1" name="featured" @if($category->featured == 1) checked @endif>Yes
                </label>
                <label class="radio-inline">
                  <input type="radio" value="0" name="featured" @if($category->featured == 0) checked @endif>NO
                </label>
               
              
              </div>

              <div class="form-group mt-3">
                <label>Speaker Image</label><br>
                <img style="height: 20vh" src="{{url('storage/speaker/'.$category->image_name)}}" class="img-thumbnail"/>
                <br><input type="file" class="form-control" name="file"/>
              </div>

              <div class="form-group mt-3">
                <label>Speaker Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"> {{ $category->description }} </textarea>
              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Speaker Meta Title</label>
                <input type="text" class="form-control" name="meta_title"  value="{{$category->meta_title}}"  required/>
              </div>

              <div class="form-group mt-3">
                <label>Speaker Img Alt</label>
                <input type="text" class="form-control" name="img_alt" value="{{$category->image_alt}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Speaker Meta POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"> {{$category->meta_description}} </textarea>
              </div>
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="UPDATE">
              </div>
          </form>
        </div>
       
    </div>
    </div>
</main>
@endsection

