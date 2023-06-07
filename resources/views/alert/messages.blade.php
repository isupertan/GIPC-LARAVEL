@if ($errors->any())
    @foreach ($errors->all() as $error)

      <div class="toast-container position-fixed top-30 end-0 p-3" data-bs-autohide="false">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-danger text-white">
            <strong class="me-auto"><b>Error!</b></strong>
            
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{$error}}
          </div>
        </div>
      </div>

    @endforeach
@endif


@if (session('error'))

     <div class="toast-container position-fixed top-30 end-0 p-3" data-bs-autohide="false">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-danger text-white">
            <strong class="me-auto"><b>Error!</b></strong>
            <small>..</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{session('error')}}
          </div>
        </div>
      </div>

@endif

@if (session('success'))

      <div class="toast-container position-fixed top-30 end-0 p-3" data-bs-autohide="false">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success text-white">
            <strong class="me-auto"><b>Success!</b></strong>
            <small>..</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{session('success')}}
          </div>
        </div>
      </div>


@endif