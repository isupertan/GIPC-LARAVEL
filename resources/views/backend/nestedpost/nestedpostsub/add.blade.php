@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">POST</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            @foreach ($post_details as $item)
             <li class="breadcrumb-item">{{$item->title}}s</li>
            @endforeach
            <li class="breadcrumb-item active">Add Posts</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW POST</h5>
           </div>
          <form method="POST" action="{{route('admin.npost.substore')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Post Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              @if (count($post_details) > 0)
                 
              @foreach ($post_details as $item)
               <input type="hidden" name="parent_id" class="form-group" value="{{$item->id}}"/>
              @endforeach
              
              @endif 

              <div class="form-group mt-3">
                <label>Featured Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>

              <div class="form-group mt-3">
                <label>POST Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"></textarea>
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
                <label>POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"></textarea>
                {{-- <textarea class="form-control editor_spl" id="ck_texteditor" name="meta_detail"  class="" rows="5"></textarea> --}}
              </div>
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="SUBMIT">
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

