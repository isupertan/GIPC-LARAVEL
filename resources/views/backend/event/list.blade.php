@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Upcoming Events & Workshop</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Events & Workshop</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                   EVENT & WORKSHOP LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.event.add')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($categories) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">EVENT</th>
                <th scope="col">Image</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Place</th>
                <th scope="col">Venue</th>
                <th scope="col" colspan="2">Action</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              
               @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td><b>{{$category->title}}</b></td>
                            <td>
                              <img style="height: 10vh" src="{{url('storage/events/'.$category->image_name)}}" alt="image">
                          </td>
                            <td>{{$category->startdate}}</td>
                            <td>{{$category->enddate}}</td>
                            <td>{{$category->place}}</td>
                            <td>{{$category->venue}}</td>
                            
                            <td>
                              <a href="{{route('admin.event.edit', $category->id)}}" class="btn btn-primary m-2">Edit</a>
                            </td>
                            <td>

                              <form action="{{route('admin.event.destroy', $category->id)}}" method="POST">
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
                            <strong><p>No Upcoming Event Scheduled</p></strong>
                            <a href="{{route('admin.event.add')}}" class="btn btn-primary">SCHEDULE AN UPCOMING EVENT</a>
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

