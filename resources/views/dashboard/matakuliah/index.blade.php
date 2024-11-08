@extends('dashboard.layouts.main')
@section('title','Data Mahasiswa')
@section('navMhs','active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Mata Kuliah</h1>
  </div>

  @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    <a href="/dashboard-matakuliah/create" class="btn btn-primary mb-3">+ Mata Kuliah</a>
    {{-- <a href="/cetak-pdf/mahasiswa" target="_blank" class="btn btn-success mb-3">Cetak PDF</a> --}}

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
@foreach($matkuls as $matkul)
        <tr>
            <td>{{ $matkuls->firstItem()+$loop->index}}</td>
            <td>{{ $matkul->kode_mk }}</td>
            <td>{{ $matkul->nama_mk }}</td>
            <td>{{ $matkul->sks }}</td>
            <td>{{ $matkul->semester }}</td>
            <td class="text-nowrap">
                <a href="/dashboard-matakuliah/{{ $matkul->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
                <a href="/dashboard-matakuliah/{{ $matkul->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard-matakuliah/{{ $matkul->id }}" title="Hapus Data" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                </form>
            </td>
        </tr>
@endforeach
    </table>
    {{ $matkuls->links() }}
@endsection
