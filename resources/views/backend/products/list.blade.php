@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">PACKAGE</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of PACKAGE</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  PACKAGE LIST
                </div>
                <div class="col-6 text-right" style="text-align:right">
                    <a href="{{route('admin.product.add')}}" class="btn btn-success">ADD</a>
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($products) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                {{-- <th scope="col">MRP</th> --}}
                <th scope="col">Price</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">QTY</th>
                <th scope="col">Description</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($products as $product)
                        <tr>
                            {{-- <th scope="row">{{$product->id}}</th> --}}
                            <td>{{$product->title}}</td>
                            <td>{{$product->category->title}}</td>
                            <td>
                              <img style="height: 10vh" src="{{url('storage/products/'.$product->image_name)}}" alt="image">
                          </td>
                          {{-- <td>Rs {{$product->mrp}}</td> --}}
                          <td>Rs {{$product->price}}</td>
                          <td>{{$product->manufacture}}</td>
                          <td>{{$product->expire}}</td>
                          <td>{{$product->qty}}</td>
                            <td>{{Str::limit(strip_tags($product->description),150)}}</td>
                            
                            <td>
                              <a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-primary m-2">Edit</a>
                            </td>
                            <td>

                              <form action="{{route('admin.product.destroy', $product->id)}}" method="POST">
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
                            <strong><p>No Data Available</p></strong>
                            <a href="{{route('admin.product.add')}}" class="btn btn-primary">ADD NEW PACKAGE</a>
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

