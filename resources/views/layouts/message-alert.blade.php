{{-- <div class="alert alert-warning" role="alert">
    <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
    <span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
</div> --}}

@if ($message=Session::get('success'))
  {{-- @for ($i=0; $i < count($message); $i++) --}}
  <div class="pesan alert alert-success alert-dismissible fade show d-print-none" role="alert">
    <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
    <span class="alert-inner--text">{!!$message!!}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  {{-- @endfor --}}
@endif

@if ($message=Session::get('info'))
  {{-- @for ($i=0; $i < count($message); $i++) --}}
  <div class="pesan alert alert-info alert-dismissible fade show d-print-none" role="alert">
    <span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
    <span class="alert-inner--text">{!!$message!!}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  {{-- @endfor --}}
@endif

@if ($messages=Session::get('error-query'))
  @foreach ($messages as $message)
    <div class="pesan alert alert-warning alert-dismissible fade show d-print-none" role="alert">
      <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
      <span class="alert-inner--text">{{$message}}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>  
  @endforeach
@endif


@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="pesan alert alert-danger alert-dismissible fade show d-print-none" role="alert">
      <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
      <span class="alert-inner--text">{{$error}}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>  
  @endforeach
@endif

@if ($message=Session::get('error'))
  {{-- @for ($i=0; $i < count($message); $i++) --}}
  <div class="pesan alert alert-danger alert-dismissible fade show d-print-none" role="alert">
    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
    <span class="alert-inner--text">{!!$message!!}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  {{-- @endfor --}}
@endif

@if ($message=Session::get('warn'))
  {{-- @for ($i=0; $i < count($message); $i++) --}}
  <div class="pesan alert alert-warning alert-dismissible fade show d-print-none" role="alert">
    <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
    <span class="alert-inner--text">{!!$message!!}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  {{-- @endfor --}}
@endif