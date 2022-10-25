{{-- pesan success --}}
@if (Session::has('success'))
<div class="pt-3">
  <div class="alert alert-success">
    {{ Session::get('success') }}
  </div>
</div>
@endif
@if (Session::has('danger'))
<div class="pt-3">
  <div class="alert alert-danger">
    {{ Session::get('danger') }}
  </div>
</div>
@endif

{{-- pesan errors --}}
@if ($errors->any())
    <div class="pt-3"></div>
    <div class="alert  alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif