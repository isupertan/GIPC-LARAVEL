@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Blog</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="card mb-5" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW BLOG</h5>
           </div>
           <form method="POST" action="{{route('admin.blog.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Blog Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Blog Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>
              
              {{-- <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="filename">
              </div> --}}




              <div class="form-group mt-3">
                <label>Blog Description</label>
                <textarea class="form-control mycustomeditors" name="description" rows="5"></textarea>
              </div>

              <div class="form-group mt-3">
                <label>Blog Short Description</label>
                <textarea class="form-control mycustomeditors2" name="short_description" rows="5"></textarea>
              </div>

              <div class="form-group mt-3">
                
                <label>Affiliate Link</label>
                <input type="text" class="form-control" name="affiliate_link"/>
              </div>

              <div class="form-group mt-3">
                
                <label>Category</label>
                <select class="form-control" name="category">
                  <option disabled selected>Select One</option>
                  @foreach($categorys as $item)
                  <option value="{{$item->id}}">{{ $item->title }}</option>
                  @endforeach
                </select>
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
                <label>Meta Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="4"></textarea>
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

