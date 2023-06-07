@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Services</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW SERVICE</h5>
           </div>
          <form method="POST" action="{{route('admin.service.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Service Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Service Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>

              <div class="form-group mt-3">
                <label>Service Detail</label>
                <textarea class="form-control" name="service_detail" id="editor" rows="5"></textarea>
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

