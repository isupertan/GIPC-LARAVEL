@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Admin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Admmin</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card mb-5" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW ADMIN</h5>
           </div>
           <form method="POST" action="{{route('admin.userlist.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required/>
                <span class="text-danger">@error('name') {{$message}}@enderror</span>
              </div>
              <div class="form-group mt-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required/>
                <span class="text-danger">@error('email') {{$message}}@enderror</span>
              </div>
              <div class="form-group mt-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" />
                <span class="text-danger">@error('phone') {{$message}}@enderror</span>
              </div>
              <div class="form-group mt-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" />
                <span class="text-danger">@error('password') {{$message}}@enderror</span>
              </div>
              
              <div class="form-group mt-3 mb-5">
                 <input type="submit" class="btn btn-success" name="save" value="SUBMIT">
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

