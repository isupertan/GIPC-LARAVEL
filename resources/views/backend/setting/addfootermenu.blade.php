@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Widget ~ {{$widget->title}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Menus</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
      <div class="col-lg-5 mt-5">
        <div class="card mb-4" >
          <div class="card-header">
            <div class="row">
              <div class="col-6 text-left">
                <i class="fas fa-table me-1"></i>
                ADD MENU
              </div>
            </div>
          </div>
          <div class="card-body">
        <form method="POST" action="{{route('admin.footmenu.store')}}" enctype="multipart/form-data">
          @csrf
            
            <input type="hidden" value="{{$widget->id}}" name="widget_id">

            <div class="form-group mt-3">
              <label>Menu Title</label>
              <input type="text" class="form-control" name="title" required/>
            </div>

            <div class="form-group mt-3">
              <label>Menu Link</label>
              <input type="text" class="form-control" name="link" required/>
            </div>
            
            <div class="form-group mt-3 mb-2">
               <input type="submit" class="btn btn-success" name="save" value="SUBMIT">
            </div>

        </form>
          </div>
        </div>
      </div>
        <div class="col-lg-7 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  FOOTER MENU LIST
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($footers) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Menu</th>
                <th scope="col">Link</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($footers as $footer)
    
                        <tr>
                            {{-- <th scope="row">#</th> --}}
                            <td><b>{{ $footer->title }}</b></td>
                            <td><b>{{ $footer->link }}</b></td>
                   
                   
                         
                            <td>
                              <form action="{{route('admin.menufooterlink.destroy', $footer->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                            </form>

                            </td>
                            
                        </tr>
                      
                    @endforeach
                    @else
                   
                @endif
              
            </tbody>
          </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</main>
@endsection

