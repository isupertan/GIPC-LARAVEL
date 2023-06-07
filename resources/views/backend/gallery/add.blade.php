@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Projects</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Projects</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-5 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW IMAGES</h5>
           </div>
          <form method="POST" action="{{route('admin.gallery.store')}}" enctype="multipart/form-data" >
            @csrf

              <div class="form-group mt-3">
                <label>Gallery Images</label>
                <input type="file" class="form-control" name="file[]" accept="image/*" multiple="multiple"/>
                {!!$errors->first("images", "<span class='text-danger'>:message</span>") !!}
              </div>
              
              <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> UPLOAD </button>
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

