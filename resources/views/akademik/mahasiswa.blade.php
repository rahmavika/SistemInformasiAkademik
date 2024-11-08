@extends('layouts.main')
@section('title', 'Data Mahasiswa')
@section('navMhs', 'active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Mahasiswa Jurusan TI</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th style="width: 5%;">No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswas->firstItem() + $loop->index }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama_lengkap }}</td>
                <td>{{ $mahasiswa->email }}</td>
                <td>{{ $mahasiswa->prodi->nama }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center">
    {{ $mahasiswas->links() }}
</div>

@endsection
