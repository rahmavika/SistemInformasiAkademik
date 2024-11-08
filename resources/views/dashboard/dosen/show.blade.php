@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Dosen</h1>
</div>
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card shadow-sm mb-4">
      <div class="card-header bg-primary text-white">
        <h5 class="card-title mb-0">Informasi Mahasiswa</h5>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row" class="bg-light">NIK</th>
              <td>{{ $dosen->nik }}</td>
            </tr>
            <tr>
              <th scope="row" class="bg-light">Nama</th>
              <td>{{ $dosen->nama }}</td>
            </tr>
            <tr>
              <th scope="row" class="bg-light">Email</th>
              <td>{{ $dosen->email }}</td>
            </tr>
              <th scope="row" class="bg-light">No Telepon</th>
              <td>{{ $dosen->no_telp }}</td>
            </tr>
            <tr>
              <th scope="row" class="bg-light">Prodi</th>
              <td>{{ $dosen->prodi->nama }}</td>
            </tr>
            <tr>
              <th scope="row" class="bg-light">Alamat</th>
              <td>{{ $dosen->alamat }}</td>
            </tr>
          </tbody>
        </table>
        <div class="d-flex justify-content-between mt-4">
          <a href="/dashboard-dosen" class="btn btn-secondary">Kembali</a>
          <a href="/dashboard-dosen/{{ $dosen->id }}/edit" class="btn btn-primary">Edit</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
