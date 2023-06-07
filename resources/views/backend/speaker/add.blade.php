@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">SPEAKER</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">ADD SPEAKER</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-8 p-4 mx-auto">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW SPEAKER</h5>
           </div>
           <form method="POST" action="{{route('admin.speaker.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Speaker Name</label>
                <input type="text" class="form-control" name="title" required/>
              </div>
              <div class="form-group mt-3">
                <label>Speaker Company</label>
                <input type="text" class="form-control" name="company" />
              </div>
              <div class="form-group mt-3">
                <label>Speaker Designation</label>
                <input type="text" class="form-control" name="designation" />
              </div>
              <div class="form-group mt-3">
                <label>Speaker Linkedin</label>
                <input type="text" class="form-control" name="linkedin" />
              </div>
              <div class="form-group mt-3">
                <label>Speaker Twitter</label>
                <input type="text" class="form-control" name="twitter" />
              </div>

              <div class="form-group mt-3">
                <label>Featured (<b>Priority</b>)</label>  <br/>

                <label class="radio-inline">
                  <input type="radio" name="featured" value="1" checked>Yes
                </label>
                <label class="radio-inline">
                  <input type="radio" name="featured" value="0">NO
                </label>
               
              
              </div>


              <div class="form-group mt-3">
                <label>Speaker Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>

              <div class="form-group mt-3">
                <label>Speaker Description</label>
                <textarea class="form-control" name="description" id="mytextarea" rows="5"></textarea>
              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Speaker Meta Title</label>
                <input type="text" class="form-control" name="meta_title" required/>
              </div>

              <div class="form-group mt-3">
                <label>Speaker Image Alt</label>
                <input type="text" class="form-control" name="img_alt" required/>
              </div>

              <div class="form-group mt-3">
                <label>Speaker META POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"></textarea>
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

