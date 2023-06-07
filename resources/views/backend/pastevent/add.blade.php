@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">PAST EVENT</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Past Event</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD PAST EVENT</h5>
           </div>
           <form method="POST" action="{{route('admin.pastevent.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Event Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Year</label>
                <input type="text" class="form-control" name="year" required/>
              </div>


              <div class="form-group mt-3">
                <label>Event Cover Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>

            {{-- Gallery Image --}}

              <div class="form-group mt-3">
                <label>Event Gallery Images</label>
                <input type="file" class="form-control" name="Galleryimage[]" accept="image/*" multiple="multiple"/>
              </div>

              <div class="form-group mt-3">
                <label>Event Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"></textarea>
              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Event Meta Title</label>
                <input type="text" class="form-control" name="meta_title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Img Alt</label>
                <input type="text" class="form-control" name="img_alt" required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Meta Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"></textarea>
              </div>
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="ADD">
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

