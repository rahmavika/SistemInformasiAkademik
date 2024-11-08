@extends('layouts.main')
@section('title', 'Data Prodi')
@section('navMhs', 'active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Prodi</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th style="width: 5%;">No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodis as $prodi)
            <tr>
                <td>{{ $prodis->firstItem() + $loop->index }}</td>
                <td>{{ $prodi->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center">
    {{ $prodis->links() }}
</div>

@endsection
