@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Services</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                  <div class="col-6 text-left">
                    <i class="fas fa-table me-1"></i>
                    SERVICE LIST
                  </div>
                  <div class="col-6 text-right" style="text-align:right">
                      <a href="{{route('admin.service.add')}}" class="btn btn-success">ADD</a>
                  </div>
                </div>
              </div>
            <div class="card-body">  
          @if (count($services) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Service Name</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              
               @foreach ($services as $service)
                        <tr>
                            <th scope="row">{{$service->id}}</th>
                            <td>{{$service->title}}</td>
                            <td>
                              <img style="height: 10vh" src="{{url('storage/service/'.$service->service_img)}}" alt="image">
                          </td>
                            <td>{{Str::limit(strip_tags($service->service_details),40)}}</td>
                            
                            <td>
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-primary m-2">Edit</a>
                                    </div>
                                    <div  class="col-lg-3 col-12">
                                        <form action="{{route('admin.service.destroy', $service->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Data Available</p></strong>
                            <a href="{{route('admin.service.add')}}" class="btn btn-primary">ADD NEW SERVICE</a>
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

