@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">SPONSORS CATEGORY</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Sponsors</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  SPONSORS CATEGORY LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                  <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">
                         <i class="fa fa-plus"></i> ADD
                  </button>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($categories) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col" colspan="2">Edit</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              
               @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->title}}</td>
                            
                          
                            
                            <td>
                              <button type="button" class="btn btn-secondary btn-block" data-bs-toggle="modal"
                                     data-bs-target="#Editmodal{{ $category->id }}">
                                     <i class="fa fa-plus"></i> EDIT
                              </button>

                            </td>
                            <td>

                              <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('admin.sponsor.destroycats', $category->id)}}"><i class="fa fa-trash"></i> Delete</a>

                            </td>
                        </tr>
                    @endforeach
                    @else
                    <div class="jumbotron" style="background: rgb(228, 227, 227);padding:50px">
                        <h5 class="text-center">
                            <strong><p>No Sponsor Category Added</p></strong>
                            <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal"
                                     data-bs-target="#exampleModal">
                                     <i class="fa fa-plus"></i> ADD NEW SPONSORS CATEGORY
                            </button>
                            
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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD SPONSOR CATEGORY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.sponsor.storecats')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group mt-3">
              <label>SPONSOR CATEGORY TITLE</label>
              <input type="text" placeholder="Diamond" class="form-control" name="title" required/>
            </div>
              
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-success" name="save" value="ADD DAY">
           </div>

        </form>
      </div>
  
    </div>
  </div>
</div> 

{{-- Edit The Category --}}
@foreach ($categories as $category)
    <!-- Modal -->
    <div class="modal fade" id="Editmodal{{ $category->id }}" tabindex="-1" aria-labelledby="Editmodal{{ $category ->id }}" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD SPONSOR CATEGORY</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{route('admin.sponsor.updatecats',$category->id)}}" enctype="multipart/form-data">
              @csrf
                <div class="form-group mt-3">
                  <label>SPONSOR CATEGORY TITLE</label>
                  <input type="text"  value="{{ $category->title }}" class="form-control" name="title" required/>
                </div>
                  
                <div class="form-group mt-3">
                  <input type="submit" class="btn btn-success" name="save" value="ADD DAY">
               </div>
    
            </form>
          </div>
      
        </div>
      </div>
    </div> 
    
@endforeach

</main>
@endsection

