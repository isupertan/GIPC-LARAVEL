@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">TOP MENU</h1>
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
                ADD TOP MENU
              </div>
            </div>
          </div>
          <div class="card-body">
        <form method="POST" action="{{route('admin.topmenu.store')}}" enctype="multipart/form-data">
          @csrf
           

            

            <div class="form-group mt-3">
              <label>Select Main Menu</label>
              <select class="form-control" name="menu">
                <option selected value="">Select Page</option>
                   @foreach ($pages as $page)
                       <option value="{{$page->id}}">{{$page->title}}</option> 
                   @endforeach
              </select>
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
                  TOP MENU LIST
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($menus) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Top Menu</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($menus as $menu)
               
                    
                
                        <tr>
                            {{-- <th scope="row">#</th> --}}
                            <td><b>{{ $menu->page->title }}</b></td>
                         
                            <td>
                              <form action="{{route('admin.topmenu.destroy', $menu->id)}}" method="POST">
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

