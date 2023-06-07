@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ONGOING OFFERS</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">ADD OFFER</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-5 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW ONGOING OFFER</h5>
           </div>
          <form method="POST" action="{{route('admin.ongoingoffer.store')}}" enctype="multipart/form-data" >
            @csrf

              <div class="form-group mt-3">
                <label>Slider Images*</label>
                <input type="file" class="form-control" name="file" />
                
              </div>
              <div class="form-group mt-3">
                <label>Title*</label>
                <input type="text" class="form-control" name="title" />
               
              </div>
              <div class="form-group mt-3">
                <label>Link</label>
                <input type="text" class="form-control" name="link" />
              </div>
              <div class="form-group mt-3">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>
              </div>

              <div class="form-group mt-3">
                <label>Status</label>
                <input type="radio" class="form-control" name="status" value="0" />
                <input type="radio" class="form-control" name="status" value="1" />
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

