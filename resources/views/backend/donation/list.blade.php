@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Donation</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Donation</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-12 text-left">
                  <i class="fas fa-table me-1"></i>
                  DONATION LIST
                </div>
              </div>
            </div>
            
            <div class="card-body">  
          @if (count($txns) > 0)
          <table class="table table-bordered" id="datatablesSimple">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Order ID</th>
                <th scope="col">Txn ID</th>
                
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Amount</th>
                
                <th scope="col">Pan</th>
                <th scope="col">Aadhar</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              
               @foreach ($txns as $txn)
                        <tr>
                            <td>{{$txn->created_at}}</td>
                            <td>{{$txn->order_id}}</td>
                            <td>{{$txn->rzp_payment_id}}</td>
                            <td>{{$txn->name}}</td>
                            <td>{{$txn->email}}</td>
                            <td>{{$txn->phone}}</td>
                            <td><b>Rs {{$txn->amount}}</b></td>
                            
                            <td>{{$txn->pan_card}}</td>
                            <td>{{$txn->aadhar_card}}</td>
                            <td>
                             @if ($txn['payment_status'] == 1)
                                <button class="btn btn-success" type="button">PAID</button>
                                @else
                                <button class="btn btn-warning" type="button">PENDING</button>    
                             @endif  
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

