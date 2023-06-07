@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ONGOING OFFER</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Ongoing Offer</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <form method="POST" action="{{route('admin.ongoingoffer.update', $ongoingoffer->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group mt-3">
                <label>Offer Name</label>
                <input type="text" class="form-control" name="title" value="{{$ongoingoffer->title}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Offer Image</label><br/>
                <img style="height: 20vh" src="{{url('storage/ongoingoffer/'.$ongoingoffer->image_name)}}" class="img-thumbnail">
                <input type="file" class="form-control" name="file" />
                <input type="hidden" class="form-control" name="old_image" value="{{$ongoingoffer->project_img}}" />
              </div>

              <div class="form-group mt-3">
                <label>Offer Details</label>
                <textarea class="form-control" name="project_detail">{{$ongoingoffer->description}}</textarea>
              </div>

              <div class="form-group mt-3">
                <label>Offer Link</label>
                <input type="text" class="form-control" name="title" value="{{$ongoingoffer->link}}"/>
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

