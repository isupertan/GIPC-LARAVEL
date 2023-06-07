@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">TESTIMONIAL</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Testimonials</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  TESTIMONIAL LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.testimonial.add')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($testimonials) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>

                {{-- //     title
                // designation
                // company
                // image_name
                // image_alt
                // video_link
                // feedback --}}


                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Designation</th>
                <th scope="col">Company</th>
                <th scope="col">Avatar</th>
                <th scope="col">Video Link</th>
                <th scope="col">Feedback</th>
                <th scope="col" colspan="2">Action</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              
               @foreach ($testimonials as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->title}}</td>
                            <td>{{$category->designation}}</td>
                            <td>{{$category->company}}</td>
                            <td>
                              <img style="height: 10vh" src="{{url('storage/testimonial/'.$category->image_name)}}" alt="image">
                            </td>
                            <td>
                              @if(!empty($category->video_link))
                              <a href="{{$category->video_link}}" class="btn btn-warning">Click here</a> @else No Link  @endif</td>
                            <td>{{Str::limit(strip_tags($category->feedback),150)}}</td>
                          
                            
                            <td>
                              <a href="{{route('admin.testimonial.edit', $category->id)}}" class="btn btn-primary m-2">Edit</a>
                            </td>
                            <td>

                              <form action="{{route('admin.testimonial.destroy', $category->id)}}" method="POST">
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
                            <strong><p>No Testimonial Added</p></strong>
                            <a href="{{route('admin.testimonial.add')}}" class="btn btn-primary">ADD NEW TESTIMONIAL</a>
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

