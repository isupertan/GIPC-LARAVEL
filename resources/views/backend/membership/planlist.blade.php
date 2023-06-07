@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Membership Plan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Plans</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  MEMBERSHIP PLAN LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.membership.planadd')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($plans) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Plan Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col" colspan="2">View/Edit</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              
               @foreach ($plans as $category)
                        <tr>
                            <th scope="row">#{{$category->id}}</th>
                            <td>{{$category->title}}</td>
                            <td>
                              <img style="height: 10vh" src="{{url('storage/memebershipplan/'.$category->image_name)}}" alt="image">
                          </td>
                          <td><b>Rs {{$category->price}}</b></td>

                            <td>{{Str::limit(strip_tags($category->description),40)}}</td>
                            
                            <td>
                              <a href="{{route('admin.membership.planedit', $category->id)}}" class="btn btn-primary m-2"> Edit</a>
                            </td>
                            <td>

                              {{-- <form action="{{route('admin.membership.plandestroy', $category->id)}}" method="POST"> --}}
                                  {{-- @csrf --}}
                                  {{-- @method('DELETE') --}}
                                  {{-- <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2"> --}}

                                  <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('admin.membership.plandestroy', $category->id)}}"><i class="fa fa-trash"></i> Delete</a>

                                  {{-- <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2"> --}}
                              {{-- </form> --}}

                            </td>
                        </tr>
                    @endforeach
                    @else
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Membership Plan Added</p></strong>
                            <a href="{{route('admin.membership.planadd')}}" class="btn btn-primary">ADD NEW PLAN</a>
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

