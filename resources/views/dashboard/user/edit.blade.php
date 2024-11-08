@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Mahasiswa</h1>
</div>
<div class="row">
    <div class="col-6">
        <form action="/dashboard-user/{{ $user->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" id="name" value="{{ old('name', $user->name) }}" placeholder="name">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" id="email" value="{{ old('email', $user->email) }}" placeholder="name@example.com">
                @error('email')
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
