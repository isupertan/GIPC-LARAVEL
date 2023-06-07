@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Footer Menu</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Footer Menu</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
      <div class="col-lg-5 mt-5">
        <div class="card mb-4" >
          <div class="card-header">
            <div class="row">
              <div class="col-6 text-left">
                <i class="fas fa-table me-1"></i>
                ADD WIDGET
              </div>
            </div>
          </div>
          <div class="card-body">
        <form method="POST" action="{{route('admin.widget.store')}}" enctype="multipart/form-data">
          @csrf
             
            <div class="form-group mt-3">
              <label>Widget Name</label>
               <input  type="text" class="form-control" name="widget_name"/>
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
                  WIDGET LIST
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($widgets) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Widget Name</th>
                <th scope="col" colspan="3">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($widgets as $widget)

                    <tr>
                      <td><strong>{{ $widget->title }}</strong></td>
                      <td>
                        <a href="{{route('admin.footermenu', $widget->id)}}" class="btn btn-primary">Menus</a>
                      </td>
{{-- 
                      <td>
                        <a href="{{route('admin.submenu', $widget->id)}}" class="btn btn-info">
                          <i class="fa fa-pen"></i>
                        </a>
                      </td> --}}
                      <td>
                        <form action="{{route('admin.footerwidget.destroy', $widget->id)}}" method="POST">
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
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Widget Available</p></strong>
                            {{-- <a href="{{route('admin.userlist.add')}}" class="btn btn-primary">ADD NEW ADMIN</a> --}}
                         </h5>
                      </div>
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

