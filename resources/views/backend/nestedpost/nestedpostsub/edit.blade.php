@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">POST</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            {{-- @foreach ($post_details as $item)
             <li class="breadcrumb-item">{{$item->title}}</li>
            @endforeach --}}
            <li class="breadcrumb-item active">Edit Sub Posts :{{$post->title}} </li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-8 mx-auto mb-3">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> EDIT POST: {{$post->title}} </h5>
           </div>
          <form method="POST" action="{{route('admin.npost.update',$post->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label><b>Post Name</b></label>
                <input type="text" class="form-control" name="title" value="{{$post->title}} " required/>
              </div>

              {{-- @if (count($post_details) > 0)
                 
              @foreach ($post_details as $item)
               <input type="hidden" name="parent_id" class="form-group" value="{{$item->parent_id}}"/>
              @endforeach
              
              @endif  --}}

              <div class="form-group mt-3">
                <label><b>Featured Image</b></label><br>
                <img src="{{url('storage/nestedpost/'.$post->image_name)}}" class="img-fluid" width="150px;" /> <br>
                <input type="file" class="form-control" name="file"/>
              </div>

              <div class="form-group mt-3">
                <label><b>Post Description</b></label>
                <textarea class="form-control" name="description" id="mytextarea" rows="2">{{$post->description}} </textarea>
              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label><b>Meta Title</b></label>
                <input type="text" class="form-control" name="meta_title" value="{{$post->meta_title}} " required/>
              </div>

              <div class="form-group mt-3">
                <label><b>Img Alt</b></label>
                <input type="text" class="form-control" name="img_alt" value="{{$post->image_alt}} " required/>
              </div>

              <div class="form-group mt-3">
                <label><b>Post Description</b></label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{$post->meta_description}} </textarea>
                {{-- <textarea class="form-control editor_spl" id="ck_texteditor" name="meta_detail"  class="" rows="5"></textarea> --}}
              </div>
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="UPDATE">
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

