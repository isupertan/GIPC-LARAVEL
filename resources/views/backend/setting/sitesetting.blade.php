@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Site Setting</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Site Setting</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
      <div class="col-lg-7 mx-auto mt-5">
        <div class="card mb-4" >
          <div class="card-header">
            <div class="row">
              <div class="col-6 text-left">
                <i class="fas fa-table me-1"></i>
                SITE SETTINGS
              </div>
            </div>
          </div>
          <div class="card-body">
      
      @if(!empty($setting))
        <form method="POST" action="{{route('admin.sitesetting.update', $setting->id)}}" enctype="multipart/form-data">
          @csrf
            

            <div class="form-group mt-3">
              <label>Site Name</label>
              <input type="text" class="form-control" value="{{$setting->title}}" name="title" required/>
            </div>

            <div class="form-group mt-3">
              <label>Site Logo</label><br>
              <div class="mt-2 mb-2">
              <img src="{{url('storage/site',$setting->image_name)}}" width="150px;"> <br/>
              </div>
              <input type="file" class="form-control" name="file" />
            </div>

            <h5 class="mt-2 mb-2"><strong>SOCIAL MEDIA</strong></h5>
            <div class="form-group mt-3">
              <label>Facebook</label>
              <input type="text" class="form-control" value="{{$setting->facebook}}" name="facebook" />
            </div>
            <div class="form-group mt-3">
              <label>Twitter</label>
              <input type="text" class="form-control" value="{{$setting->twitter}}" name="twitter" />
            </div>
            <div class="form-group mt-3">
              <label>Linkedin</label>
              <input type="text" class="form-control" value="{{$setting->linkedin}}" name="linkedin" />
            </div>
            <div class="form-group mt-3">
              <label>Email</label>
              <input type="text" class="form-control" value="{{$setting->email}}" name="email" />
            </div>
            <div class="form-group mt-3">
              <label>Whatsapp</label>
              <input type="text" class="form-control" value="{{$setting->whatsapp}}" name="whatsapp" />
            </div>
            {{-- <h5 class="mt-2 mb-2"><strong>FOOTER TEXT</strong></h5>
            <div class="form-group mt-3">
              <label>Footer Line One</label>
              <textarea class="form-control" name="footer_description_one">

                {{$setting->footer_description_one}}
              </textarea>
            </div>

            <div class="form-group mt-3">
              <label>Footer Line Two</label>
              <textarea class="form-control" name="footer_description_two">

                {{$setting->footer_description_two}}
              </textarea>
            </div>

            <div class="form-group mt-3">
              <label>Footer Line Three</label>
              <textarea class="form-control" name="footer_description_three">

                {{$setting->footer_description_three}}
              </textarea>
            </div> --}}

          
          
            <div class="form-group mt-3 mb-2">
               <input type="submit" class="btn btn-success" name="save" value="UPDATE">
            </div>
        </form>

        @else
        <form method="POST" action="{{route('admin.sitesetting.store')}}" enctype="multipart/form-data">
          @csrf
            

            <div class="form-group mt-3">
              <label>Site Name</label>
              <input type="text" class="form-control"  name="title" required/>
            </div>

            <div class="form-group mt-3">
              <label>Site Logo</label><br>
              <input type="file" class="form-control" name="file" />
            </div>

            <h5 class="mt-2 mb-2"><strong>SOCIAL MEDIA</strong></h5>
            <div class="form-group mt-3">
              <label>Facebook</label>
              <input type="text" class="form-control"  name="facebook" />
            </div>
            <div class="form-group mt-3">
              <label>Twitter</label>
              <input type="text" class="form-control" name="twitter" />
            </div>
            <div class="form-group mt-3">
              <label>Linkedin</label>
              <input type="text" class="form-control" name="linkedin" />
            </div>
            <div class="form-group mt-3">
              <label>Email</label>
              <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-group mt-3">
              <label>Whatsapp</label>
              <input type="text" class="form-control" name="whatsapp" />
            </div>
            <h5 class="mt-2 mb-2"><strong>FOOTER TEXT</strong></h5>
            <div class="form-group mt-3">
              <label>Footer Line One</label>
              <textarea class="form-control" name="footer_description_one">
              </textarea>
            </div>

            <div class="form-group mt-3">
              <label>Footer Line Two</label>
              <textarea class="form-control" name="footer_description_two">
              </textarea>
            </div>

            <div class="form-group mt-3">
              <label>Footer Line Three</label>
              <textarea class="form-control" name="footer_description_three">
              </textarea>
            </div>

          
          
            <div class="form-group mt-3 mb-2">
               <input type="submit" class="btn btn-success" name="save" value="SAVE">
            </div>
        </form>        
        @endif
        
          </div>
        </div>
      </div>

    </div>
    </div>
</main>
@endsection

