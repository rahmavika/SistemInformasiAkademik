@extends('dashboard.layouts.main')

@section('content')
<h1></h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Dosen</h1>
  </div>
<div class="row">
  <div class="col-6">
  <form action="/dashboard-dosen/{{ $dosen->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control @error('nik') is-invalid @enderror"
        name="nik" id="nik" value="{{ old('nik', $dosen->nik) }}" placeholder="NIK" readonly>
        @error('nik')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror"
        name="nama" id="nama" value="{{ old('nama', $dosen->nama) }}" placeholder="Nama">
        @error('nama')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror"
        name="email" id="email" value="{{ old('email', $dosen->email) }}" placeholder="name@example.com">
        @error('email')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">No Telepon</label>
        <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
        name="no_telp" id="no_telp" value="{{ old('no_telp', $dosen->no_telp) }}" placeholder="No Telepon">
        @error('no_telp')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <select class="form-select @error('prodi_id') is-invalid @enderror" name="prodi_id" id="prodi">
            <option value="">Pilih Prodi</option>
            @foreach($prodis as $prodi)
                @if (old('prodi_id', $dosen->prodi_id) == $prodi->id)
                    <option value="{{ $prodi->id }}" selected>{{ $prodi->nama }}</option>
                @else
                    <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror"
                  name="alamat" id="alamat" placeholder="Masukkan Alamat">{{ old('alamat', $dosen->alamat) }}</textarea>
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
