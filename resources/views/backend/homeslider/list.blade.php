@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">HOME SLIDER LIST</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Home Sliders</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  SLIDER LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.homeslider.add')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
              @if (count($homesliders) > 0)
                <div  class="row">
                  @foreach ($homesliders as $item)
                    <div class="col-lg-4">
                    <div class="card">
                    <!-- Image Details -->
                      <div class="card-body">
                        <div class="image-conatiner-gallery">
                          <img src="{{url('storage/homeslider/'.$item->image_name)}}" class="img-fluid"/>
                        </div>
                        <h4 class="text-center">{{ $item->title }}</h4>
                      </div>
                      <!-- Delete -->
                      <div class="card-footer text-center">
                        <form action="{{route('admin.homeslider.destroy', $item->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                        </form>
                        
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
                  
              @else
              <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                <h5 class="text-center">
                    <strong><p>No Images Uplaoded Yet</p></strong>
                    <a href="{{route('admin.homeslider.add')}}" class="btn btn-primary">ADD NEW IMAGES</a>
                 </h5>
              </div>
              @endif
            

            </div>
        </div>
        </div>
    </div>
    </div>
</main>
@endsection

