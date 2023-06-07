@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">UkForm Details</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of UkForm</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  UkForm LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                  <a href="{{route('admin.exportukform')}}" class="btn btn-primary">Export Excel</a>
              </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($formDetails) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Country</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($formDetails as $formData)
                        <tr>
                            <th scope="row">{{$formData->id}}</th>
                            <td>{{$formData->created_at}}</td>
                            <td>{{$formData->f_name}} {{$formData->m_name}} {{$formData->l_name}}</td>
                            <td>{{$formData->address}}</td>
                            <td>{{$formData->immigration->birth_country}}</td>
                            <td>{{$formData->email}}</td>
                            <td>{{$formData->mobile}}</td>
                            
                            <td>
                              <a href="{{route('admin.ukform.show', $formData->id)}}" class="btn btn-success">
                                  <i class="fa fa-eye"></i> VIEW
                              </a>
                            </td>
                            <td>
                              <form action="{{ route('admin.ukform.destroy', $formData->id) }}" method="POST">
                                @csrf
                                  @method('DELETE')
                               <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                              </form>
                            </td>
                            
                        </tr>
                    @endforeach
                    @else
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Data Available</p></strong>
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

