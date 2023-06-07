@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">BLOG</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Blog</li>
        </ol>
    {{-- <!-- Page Body --><img style="height: 20vh" src="{{url('storage/project/'.$category->category)}}" class="img-thumbnail" --}}
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <form method="POST" action="{{route('admin.blog.update', $blog->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Blog Name</label>
                <input type="text" class="form-control" name="title" value="{{$blog->title}}" required/>
              </div>


              <div class="form-group mt-3">
                <label>Blog Image</label><br>
                <img style="height: 20vh" src="{{url('storage/blogs/'.$blog->image_name)}}" class="img-thumbnail"/>
                <br><input type="file" class="form-control" name="file"/>
              </div>

              <div class="form-group mt-3">
                <label>Blog Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"> {{ $blog->description }} </textarea>
              </div>

              <div class="form-group mt-3">
                <label>Blog Short Description</label>
                <textarea class="form-control mycustomeditors2" name="short_description" rows="5">{{ $blog->short_description }}</textarea>
              </div>

              <div class="form-group mt-3">
                
                <label>Affiliate Link</label>
                <input type="text" class="form-control" name="affiliate_link" value="{{ $blog->affiliate_link }}"/>
              </div>


              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Meta Title</label>
                <input type="text" class="form-control" name="meta_title"  value="{{$blog->meta_title}}"  required/>
              </div>

              <div class="form-group mt-3">
                <label>Img Alt</label>
                <input type="text" class="form-control" name="img_alt" value="{{$blog->image_alt}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"> {{$blog->meta_description}} </textarea>
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

