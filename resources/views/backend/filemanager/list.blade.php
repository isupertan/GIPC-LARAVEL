@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">FILEMANAGER</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">FILEMANAGER</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header">
              <div class="row">
                <div class="col-6 text-left">
                  <i class="fas fa-table me-1"></i>
                  FILEMANAGER
                </div>
                <div class="col-6 text-right" style="text-align:right">
       
                </div>
              </div>
            </div>
            
            <div class="card-body">  
              <div class="row">
                <div class="col-md-12 mb-5">
                  <h2 class="mt-4">File Manager</h2>
                  <iframe src="http://127.0.0.1:8000/filemanager?type=Images" 
                      style="width: 100%; height: 500px; overflow: hidden; border: none;">
                  </iframe>
                </div>
              </div>
            </div>

        </div>
      </div>
     </div>
    </div>
</main>
@endsection

