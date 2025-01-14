<div class="container">
  @if ($flash = session('success'))
    <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
      {{ $flash }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  @if ($flash = session('error'))
    <div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ $flash }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
</div>