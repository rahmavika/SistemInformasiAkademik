<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$mahasiswas = Mahasiswa::latest();
        // if (request('search')) {
        //     $mahasiswas->where('nama_lengkap', 'like', '%' . Request('search') . '%')->orWhere('email', 'like', '%' . Request('search') . '%')->orWhere('nim', 'like', '%' . Request('search') . '%');
        // }
        //$mahasiswa = Mahasiswa::latest()->paginate(10);
        return view('akademik.mahasiswa',['mahasiswas' => Mahasiswa::latest()->pencarian()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
