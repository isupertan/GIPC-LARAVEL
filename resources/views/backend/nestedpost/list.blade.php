@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Posts</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Posts</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                  <div class="col-6 text-left">
                    <i class="fas fa-table me-1"></i>
                    POST LIST
                  </div>
                  <div class="col-6 text-right" style="text-align:right">
                      <a href="{{route('admin.npost.add')}}" class="btn btn-success">ADD</a>
                  </div>
                </div>
              </div>
            <div class="card-body">  
          @if (count($posts) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                {{-- <th scope="col">Parent Post</th> --}}
                <th scope="col">Title</th>
                <th scope="col">Featured Image</th>
                <th scope="col">Description</th>
                <th colspan="5" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- // "parent_id",  "title", "slug", "image_name", "image_alt", "description", "meta_title", "meta_description" --}}
               @foreach ($posts as $post)
                        <tr>
                            {{-- <th scope="row">{{$post->id}}</th> --}}
                            <td>{{$post->title}}<td>
                              <img style="height: 10vh" src="{{url('storage/nestedpost/'.$post->image_name)}}" alt="{{$post->image_alt}}">
                          </td>
                            {{-- <td>{!! $post->description !!} </td> --}}
                            <td style="width: 350px;">{{Str::limit(strip_tags($post->description),150)}}</td>
                            
                            <td>
                              
                                <a href="{{route('admin.npost.edit', $post->id)}}" class="btn btn-primary m-2">Edit</a>
                            </td>

                            <td>
                              <a class="btn btn-warning" href="{{route('admin.npost.sub', $post->id)}}">Sub Post<a>
                              
                              {{-- <button class="btn btn-primary">SUB_POST</button> --}}
                            </td>
                            <td><a class="btn btn-success" href="{{route('admin.npost.subadd', $post->id)}}">Add Sub Post<a></td>
                            <td>
                              <a href="{{route('blog',$post->slug )}}" target="_blank" class="btn btn-primary">
                                <i class="fa fa-eye"></i></a>
                            </td>
                            <td>
                              <form action="{{route('admin.npost.destroy', $post->id)}}" method="POST">
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
                            <a href="{{route('admin.npost.add')}}" class="btn btn-primary">ADD NEW POST</a>
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

