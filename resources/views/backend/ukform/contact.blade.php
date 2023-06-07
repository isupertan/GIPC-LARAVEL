@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Contact Details</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Contact</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  CONTACT LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.exportcontact')}}" class="btn btn-success">Export Excel</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($contacts) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($contacts as $contact)
                        <tr>
                            {{-- <th scope="row">{{$contact->id}}</th> --}}
                            <td>{{$contact->created_at}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                            <td>
                              <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">
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

