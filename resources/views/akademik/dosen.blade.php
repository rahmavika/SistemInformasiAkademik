@extends('layouts.main')
@section('title', 'Data Dosen')
@section('navDosen', 'active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Dosen</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th style="width: 5%;">No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Prodi</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
            <tr>
                <td>{{ $dosens->firstItem() + $loop->index }}</td>
                <td>{{ $dosen->nik }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->no_telp }}</td>
                <td>{{ $dosen->prodi_id }}</td>
                <td>{{ $dosen->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center">
    {{ $dosens->links() }}
</div>

@endsection
