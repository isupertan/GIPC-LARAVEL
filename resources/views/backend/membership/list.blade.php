@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">MEMBERS LIST</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Members</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  MEMBERS LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.membership.add')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
          <div class="card-body">  
          @if (count($members) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Membership Plan</th>
                
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col" colspan="2">View/Edit</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              
               @foreach ($members as $category)
                        <tr>
                            <th scope="row">#{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td>
                              <img style="height: 10vh" src="{{url('storage/members/'.$category->image_name)}}" alt="image">
                          </td>
                          <td><b>{{$category->plan->title}}</b></td>
                          <td><b>{{$category->email}}</b></td>
                          <td><b>{{$category->mobile}}</b></td>

                            
                            <td>
                              <a href="{{route('admin.membership.edit', $category->id)}}" class="btn btn-primary m-2"> Edit</a>
                            </td>
                            <td>

                              {{-- <form action="{{route('admin.membership.plandestroy', $category->id)}}" method="POST"> --}}
                                  {{-- @csrf --}}
                                  {{-- @method('DELETE') --}}
                                  {{-- <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2"> --}}

                                  <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('admin.membership.destroy', $category->id)}}"><i class="fa fa-trash"></i> Delete</a>

                                  {{-- <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2"> --}}
                              {{-- </form> --}}

                            </td>
                        </tr>
                    @endforeach
                    @else
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Member Yet</p></strong>
                            <a href="{{route('admin.membership.add')}}" class="btn btn-primary">ADD NEW MEMBER</a>
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

