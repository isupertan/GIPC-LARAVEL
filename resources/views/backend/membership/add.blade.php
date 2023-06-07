@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">MEMBERS</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Member</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-8 mx-auto mt-4 mb-4">
          <div class="card" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> ADD NEW MEMBER</h5>
           </div>
           <form method="POST" action="{{route('admin.membership.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Full Name</label>
                <input type="text" class="form-control" name="name" required/>
              </div>
              <div class="form-group mt-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" required/>
              </div>
              <div class="form-group mt-3">
                <label>Organisation</label>
                <input type="text" class="form-control" name="organisation" required/>
              </div>
              <div class="form-group mt-3">
                <label>Designation</label>
                <input type="text" class="form-control" name="designation" required/>
              </div>
              <div class="form-group mt-3">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" required/>
              </div>
              <div class="form-group mt-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone"/>
              </div>
              <div class="form-group mt-3">
                <label>City</label>
                <input type="text" class="form-control" name="city" required/>
              </div>
              <div class="form-group mt-3">
                <label>Country</label>
                <input type="text" class="form-control" name="country" required/>
              </div>
        
              <div class="form-group mt-3">
                <label>Profile Image</label>
                <input type="file" class="form-control" name="file" required/>
              </div>
              <div class="form-group mt-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required/>
              </div>

              {{-- Memebrship plan --}}
              <div class="form-group mt-3">
                <label>Memebrship Plan</label>
                <select class="form-control" name="membershipplan">
                  <option selected disabled>Select One Plan</option>
                  @foreach ($plans as $item)
                   <option value="{{$item->id}}">{{$item->title}}</option>
                  @endforeach
                  
                </select>
              </div>
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="ADD MEMBER">
              </div>
          </form>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

