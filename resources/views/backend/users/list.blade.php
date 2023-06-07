@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Admin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Admins</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  ADMIN LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.userlist.add')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($authusers) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($authusers as $authuser)
                        <tr>
                            <th scope="row">{{$authuser->id}}</th>
                            <td>{{$authuser->name}}</td>
                            <td>{{$authuser->email}}</td>
                            <td>{{$authuser->phone}}</td>
                            {{-- <td>
                              <a href="{{route('admin.blog.edit', $authuser->id)}}" class="btn btn-primary m-2">Edit</a>
                            </td> --}}
                            <td>

                              <form action="{{route('admin.userlist.destroy', $authuser->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <input type="submit" name="submit" value="Revoke" class="btn btn-danger m-2">
                              </form>

                            </td>
                        </tr>
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

