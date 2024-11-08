@extends('dashboard.layouts.main')
@section('title','Data User')
@section('navMhs','active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data User</h1>
</div>

@if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<a href="/dashboard-user/create" class="btn btn-primary mb-3">+ User</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $users->firstItem() + $loop->index }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td class="text-nowrap">
            <a href="/dashboard-user/{{ $user->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard-user/{{ $user->id }}" title="Hapus Data" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash-fill"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $users->links() }}
@endsection
