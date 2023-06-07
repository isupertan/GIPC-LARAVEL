@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">EVENT</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Event</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD EVENT</h5>
           </div>
           <form method="POST" action="{{route('admin.event.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Event Title</label>
                <input type="text" class="form-control" name="title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Place</label>
                <input type="text" class="form-control" name="place" required/>
              </div>

              <div class="form-group mt-3">
                <label>Start date</label>
                <input type="date" class="form-control" name="startdate" required/>
              </div>

              <div class="form-group mt-3">
                <label>End date</label>
                <input type="date" class="form-control" name="enddate" required/>
              </div>

              <div class="form-group mt-3">
                <label>Venue</label>
                <input type="text" class="form-control" name="venue" required/>
              </div>

              <div class="form-group mt-3">
                <label>Organiser Email</label>
                <input type="text" class="form-control" name="organiseremail"/>
              </div>

              <div class="form-group mt-3">
                <label>Organiser Phone</label>
                <input type="text" class="form-control" name="organiserphone"/>
              </div>

              <div class="form-group mt-3">
                <label>Video Link</label>
                <input type="text" class="form-control" name="video"/>
              </div>


              <div class="form-group mt-3">
                <label>Event Cover Image</label>
                <input type="file" class="form-control" name="file"/>
              </div>

              {{-- <div class="form-group mt-3">
                <label>Event Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"></textarea>
              </div> --}}

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Event Meta Title</label>
                <input type="text" class="form-control" name="meta_title"/>
              </div>

              <div class="form-group mt-3">
                <label>Event Img Alt</label>
                <input type="text" class="form-control" name="img_alt"/>
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

