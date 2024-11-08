@extends('dashboard.layouts.main')

@section('content')
<h1></h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Prodi</h1>
  </div>
<div class="row">
  <div class="col-6">
  <form action="/dashboard-prodi" method="post">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Prodi</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror"
        name="nama" id="nama" value="{{ old('nama') }}" placeholder="Prodi">
        @error('nama')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
@endsection
