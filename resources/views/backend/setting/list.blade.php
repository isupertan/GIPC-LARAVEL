@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">MENU</h1>
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
        <form method="POST" action="{{route('admin.mainmenu.store')}}" enctype="multipart/form-data">
          @csrf
            <input type="hidden" value="" name="parent_id"/>
            <div class="form-group mt-3">
              <label>Select Main Menu</label>
              <select class="form-control" name="menu">
                <option selected value="">Select Page</option>
                {{-- <option value="5555">Contact</option>
                <option value="7777">Blog</option> --}}
                   @foreach ($pages as $page)
                     <option value="{{$page->id}}">{{$page->title}}</option> 
                   @endforeach
              </select>
            </div>
            <div class="form-group mt-3">
              <label>Status</label>
              <select class="form-control" name="status">
                <option value="1">Active</option>
                <option value="0">Disable</option>
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
                  MENU LIST
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($menus) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Main Menu</th>
                <th scope="col">Sub Menu</th>
                <th scope="col">Status</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($menus as $menu)
               @if ($menu->parent_id == 0)
                   
               
                        <tr>
                            {{-- <th scope="row">#</th> --}}
                            <td>{{ $menu->page->title }}</td>
                            <td>
                              <a href="{{route('admin.submenu', $menu->id)}}" class="btn btn-primary">Sub Menu</a>
                            </td>
                            <td>
                              @if ($menu->status == 1)
                              <button class="btn btn-success"></button>
                              @else
                              <button class="btn btn-secondary"></button>
                              @endif
                              
                            </td>
                            {{-- <td>
                              <a href="{{route('admin.blog.edit', $authuser->id)}}" class="btn btn-primary m-2">Edit</a>
                            </td> --}}
                           
                            <td>
                              
                              

                              <form action="{{route('admin.menu.destroy', $menu->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                  </button>
                              </form>

                            </td>
                            
                        </tr>
                        @endif
                    @endforeach
                    @else
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Data Available</p></strong>
                            <a href="{{route('admin.userlist.add')}}" class="btn btn-primary">ADD NEW ADMIN</a>
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

