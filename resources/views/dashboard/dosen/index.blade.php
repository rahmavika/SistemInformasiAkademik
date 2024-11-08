@extends('dashboard.layouts.main')
@section('title','Data Dosen')
@section('navDosen','active')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Dosen</h1>
  </div>
  @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    <a href="/dashboard-dosen/create" class="btn btn-primary mb-3">+ Dosen</a>
    <a href="/cetak-pdf/dosen" target="_blank" class="btn btn-success mb-3">Cetak PDF</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        {{-- <th>Nik</th> --}}
        <th>Nama</th>
        <th>Email</th>
        {{-- <th>No Telepon</th> --}}
        <th>Prodi</th>
        {{-- <th>Alamat</th> --}}
        <th>Aksi</th>
    </tr>
@foreach ($dosens as $dosen )
    <tr>
        <td>{{ $dosens->firstItem()+$loop->index}}</td>
        {{-- <td>{{ $dosen->nik }}</td> --}}
        <td>{{ $dosen->nama }}</td>
        <td>{{ $dosen->email }}</td>
        {{-- <td>{{ $dosen->no_telp }}</td> --}}
        <td>{{ $dosen->prodi->nama }}</td>
        {{-- <td>{{ $dosen->alamat }}</td> --}}
        <td class="text-nowrap">
            <a href="/dashboard-dosen/{{ $dosen->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
            <a href="/dashboard-dosen/{{ $dosen->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard-dosen/{{ $dosen->id }}" title="Hapus Data" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash-fill"></i></button>
            </form>
        </td>
    </tr>

@endforeach

</table>
{{ $dosens->links() }}

@endsection
