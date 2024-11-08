@extends('dashboard.layouts.main')

@section('content')
<h1></h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data User</h1>
  </div>
<div class="row">
  <div class="col-6">
  <form action="/dashboard-user" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"
        name="name" id="name" value="{{ old('name') }}" placeholder="name">
        @error('name')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror"
        name="email" id="email" value="{{ old('email') }}" placeholder="name@example.com">
        @error('email')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror"
        name="password" id="password" value="{{ old('password') }}" placeholder="Password">
        @error('password')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="passwordConfirm" class="form-label">Confirm Password</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password-confirm" placeholder="Confirm Password">
        @error('password_confirmation')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
@endsection
