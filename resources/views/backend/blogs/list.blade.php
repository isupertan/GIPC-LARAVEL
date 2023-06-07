@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Blog</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  BLOG LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.blog.add')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($blogs) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col" colspan="2">Action</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($blogs as $blog)
                        <tr>
                            <th scope="row">{{$blog->id}}</th>
                            <td>{{$blog->title}}</td>
                            <td>
                              {{-- @if (substr( $blog->image_name, 0, 4 ) === "http") --}}
                               {{-- <img style="height: 10vh" src="{{$blog->image_name}}" alt="image"> --}}
                               {{-- @else --}}
                               <img style="height: 10vh" src=" @if (substr( $blog->image_name, 0, 4 ) === "http") {{$blog->image_name}} @else {{url('storage/blogs/'.$blog->image_name)}} @endif" alt="image">
                              {{-- @endif --}}
                             
                          </td>
                            <td>{{ $blog->blogcategory->title }}</td>
                            <td>{{Str::limit(strip_tags($blog->description),120)}}</td>
                            
                            <td>
                              <a href="{{route('admin.blog.edit', $blog->id)}}" class="btn btn-primary m-2">Edit</a>
                            </td>
                            <td>

                              <form action="{{route('admin.blog.destroy', $blog->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                              </form>

                            </td>
                        </tr>
                    @endforeach
                    @else
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Data Available</p></strong>
                            <a href="{{route('admin.blog.add')}}" class="btn btn-primary">ADD NEW PRODUCT</a>
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

