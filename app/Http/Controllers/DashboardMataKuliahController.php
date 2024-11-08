<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class DashboardMataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkuls=\App\Models\MataKuliah::latest()->paginate(10);
        return view('dashboard.matakuliah.index', ['matkuls' => $matkuls]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required|min:3',
            'sks' => 'required',
            'semester' => 'required',
         ]);

         //dd($validated);

         MataKuliah::create($validated);
         return redirect('/dashboard-matakuliah')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matkul = MataKuliah::find($id);
        return view('dashboard.matakuliah.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required|min:3',
            'sks' => 'required|integer',
            'semester' => 'required|integer',
         ]);

         MataKuliah::where('id', $id)->update($validated);
         return redirect('dashboard-matakuliah')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MataKuliah::destroy($id);
        return redirect('dashboard-matakuliah')->with('pesan', 'Data berhasil dihapus');
    }
}
