@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Services</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <form method="POST" action="{{route('admin.service.update', $service->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group mt-3">
                <label>Service Name</label>
                <input type="text" class="form-control" name="title" value="{{$service->title}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Service Image</label><br/>
                <img style="height: 20vh" src="{{url('storage/service/'.$service->service_img)}}" class="img-thumbnail">
                <input type="file" class="form-control" name="file" />
                <input type="hidden" class="form-control" name="old_image" value="{{$service->service_img}}" />
              </div>

              <div class="form-group mt-3">
                <label>Service Detail</label>
                <textarea class="form-control" name="service_detail">{{$service->service_details}}</textarea>
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

