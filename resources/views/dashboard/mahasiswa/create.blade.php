@extends('dashboard.layouts.main')

@section('content')
<h1></h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Mahasiswa</h1>
  </div>
<div class="row">
  <div class="col-6">
  <form action="/dashboard-mahasiswa" method="post">
    @csrf
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control @error('nim') is-invalid @enderror"
        name="nim" id="nim" value="{{ old('nim') }}" placeholder="NIM">
        @error('nim')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
    <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control  @error('nama_lengkap') is-invalid @enderror"
        name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap">
        @error('nama_lengkap')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
    <div class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
        name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Temp Lahir">
        @error('tempat_lahir')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal lahir</label>
        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
        name="tgl_lahir" id="etgl_lahir" value="{{ old('tgl_lahir') }}" placeholder="Tgl Lahir">
        @error('tgl_lahir')
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
        <label for="prodi" class="form-label">Prodi</label>
        <select class="form-select" name="prodi_id" id="prodi">
            <option value="">Pilih Prodi</option>
            @foreach($prodis as $prodi)
                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror"
                  name="alamat" id="alamat" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
        @error('alamat')
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
