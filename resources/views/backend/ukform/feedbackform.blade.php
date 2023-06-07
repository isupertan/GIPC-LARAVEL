@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Feedback Details</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Feedbacks</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  FEEDBACK LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.exportfeedback')}}" class="btn btn-success">Export Excel</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($feedbacks) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">UHID</th>
                <th scope="col">Overall Rating</th>
                <th scope="col">Open Feedback</th>
                <th scope="col">Signature</th>
                <th scope="col">VIEW</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($feedbacks as $feedback)
                        <tr>
                            {{-- <th scope="row">{{$contact->id}}</th> --}}
                            <td>{{$feedback->created_at}}</td>
                            <td>{{$feedback->name}}</td>
                            <td>{{$feedback->email}}</td>
                            <td>{{$feedback->phone}}</td>
                            <td>{{$feedback->uhid}}</td>
                            <td>{{$feedback->overallrating}}</td>
                            <td>{{$feedback->openfeedback}}</td>
                            <td><img class="img-fluid" src="{{url('signature/'.$feedback->image_name)}}" /></td>
                            {{-- <td>
                              <form action="{{ route('admin.contact.destroy', $feedback->id) }}" method="POST">
                                @csrf
                                  @method('DELETE')
                               <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                              </form>
                             </td> --}}

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

