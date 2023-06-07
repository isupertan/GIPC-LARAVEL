@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">PAST EVENT</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Past Event</li>
        </ol>
    {{-- <!-- Page Body --><img style="height: 20vh" src="{{url('storage/project/'.$category->category)}}" class="img-thumbnail" --}}
    <div class="row">
        <div class="col-lg-8 mx-auto">
          <form method="POST" action="{{route('admin.pastevent.update', $category->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Past Event Name</label>
                <input type="text" class="form-control" name="title" value="{{$category->title}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Year</label>
                <input type="text" class="form-control" name="year" value="{{$category->year }}" />
              </div>


              <div class="form-group mt-3">
                <label>Event Cover Image</label><br>
                <img style="height: 20vh" src="{{url('storage/pastevents/'.$category->image_name)}}" class="img-thumbnail"/>
                <br><input type="file" class="form-control" name="file"/>
              </div>


              <div class="form-group mt-3">
                <label>Event Gallery Images</label>
                <input type="file" class="form-control" name="Galleryimage[]" accept="image/*" multiple="multiple"/>
              </div>

              <div class="form-group mt-3">
                <label>Event Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"> {{ $category->description }} </textarea>
              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Event Meta Title</label>
                <input type="text" class="form-control" name="meta_title"  value="{{$category->meta_title}}"  required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Cover Img Alt</label>
                <input type="text" class="form-control" name="img_alt" value="{{$category->image_alt}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Meta POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"> {{$category->meta_description}} </textarea>
              </div>
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="UPDATE">
              </div>
          </form>
        </div>

        {{--  --}}
        <div class="col-lg-4">
          {{-- Related Image --}}
      @if(!empty($gallery))
          <div class="form-group mt-3">
            <label><h4>Gallery Image</h4></label> <br>
            <div class="row">
              @foreach($gallery as $item)
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <img src="{{url('storage/pasteventsgallery/'.$item->image_name)}}" class="img-fluid" width="250px"/>

                  </div>
                  <div class="card-footer">
                    <form action="{{route('admin.pasteventgallery.destroy', $item->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                        Delete
                      </button>
                      
                  </form>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <br/>
            
          </div> 
      @endif
</div>
       
    </div>
    </div>
</main>
@endsection

