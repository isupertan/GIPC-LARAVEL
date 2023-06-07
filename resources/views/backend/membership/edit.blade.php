@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">MEMBERS</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit MEMBER</li>
        </ol>
    {{-- <!-- Page Body --><img style="height: 20vh" src="{{url('storage/project/'.$category->category)}}" class="img-thumbnail" --}}
    <div class="row">
        <div class="col-lg-8 mt-4 mb-4 mx-auto" style="border:2px solid #222">
          <form method="POST" action="{{route('admin.membership.update', $member->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group mt-3">
              <label>Full Name</label>
              <input type="text" class="form-control" name="name" value="{{$member->name}}"/>
            </div>
            <div class="form-group mt-3">
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="{{$member->email}}"/>
            </div>
            <div class="form-group mt-3">
              <label>Organisation</label>
              <input type="text" class="form-control" name="organisation" value="{{$member->organisation}}" />
            </div>
            <div class="form-group mt-3">
              <label>Designation</label>
              <input type="text" class="form-control" name="designation" value="{{$member->designation}}" />
            </div>
            <div class="form-group mt-3">
              <label>Mobile</label>
              <input type="text" class="form-control" name="mobile" value="{{$member->mobile}}" />
            </div>
            <div class="form-group mt-3">
              <label>Phone</label>
              <input type="text" class="form-control" name="phone" value="{{$member->phone}}" />
            </div>
            <div class="form-group mt-3">
              <label>City</label>
              <input type="text" class="form-control" name="city" value="{{$member->city}}" />
            </div>
            <div class="form-group mt-3">
              <label>Country</label>
              <input type="text" class="form-control" name="country" value="{{$member->country}}" />
            </div>
      
            <div class="form-group mt-3">
              <img style="height: 20vh" src="{{url('storage/members/'.$member->image_name)}}" class="img-thumbnail"/>
              <label>Profile Image</label>
              <input type="file" class="form-control" name="file"/>
            </div>
            <div class="form-group mt-3">
              <label>Password</label>
              <input type="password" class="form-control" name="password"/>
            </div>

            {{-- Memebrship plan --}}
            <div class="form-group mt-3">
              <label>Memebrship Plan</label>
              <select class="form-control" name="membershipplan">
                <option selected value="{{$member->plan->id}}">{{$member->plan->title}}</option>
                @foreach ($plans as $item)
                 @if($item->id != $member->plan->id )
                  <option value="{{$item->id}}">{{$item->title}}</option>
                 @endif
                @endforeach
                
              </select>
            </div>
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="UPDATE">
              </div>
          </form>
        </div>
       
    </div>
    </div>
</main>
@endsection

