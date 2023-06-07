@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">MEMBERSHIP PLAN</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Membership Plan</li>
        </ol>
    {{-- <!-- Page Body --><img style="height: 20vh" src="{{url('storage/project/'.$category->category)}}" class="img-thumbnail" --}}
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <form method="POST" action="{{route('admin.membership.planupdate', $plan->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Membership Plan Name</label>
                <input type="text" class="form-control" name="title" value="{{$plan->title}}" required/>
              </div>
              <div class="form-group mt-3">
                <label>Membership Pric</label>
                <input type="text" class="form-control" name="price" value="{{$plan->price}}" required/>
              </div>


              <div class="form-group mt-3">
                <label>Membership Plan Image</label><br>
                <img style="height: 20vh" src="{{url('storage/memebershipplan/'.$plan->image_name)}}" class="img-thumbnail"/>
                <br><input type="file" class="form-control" name="file"/>
              </div>

              <div class="form-group mt-3">
                <label>Membership Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"> {{ $plan->description }} </textarea>
              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Meta Title</label>
                <input type="text" class="form-control" name="meta_title"  value="{{$plan->meta_title}}"  required/>
              </div>

              <div class="form-group mt-3">
                <label>Img Alt</label>
                <input type="text" class="form-control" name="img_alt" value="{{$plan->image_alt}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"> {{$plan->meta_description}} </textarea>
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

