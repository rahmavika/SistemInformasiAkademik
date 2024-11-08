<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::paginate(10); // Adjust the number of items per page as needed
        return view('dashboard.prodi.index', ['prodis' => $prodis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.prodi.create',['prodis' =>Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
         ]);

         //dd($validated);

         Prodi::create($validated);
         return redirect('/dashboard-prodi')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('dashboard.prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('dashboard.prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
         ]);

        Prodi::where('id', $id)->update($validated);
        return redirect('/dashboard-prodi')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prodi::destroy($id);
        return redirect('dashboard-prodi')->with('pesan', 'Data berhasil dihapus');
    }
    public function cetakPdf(){
        $pdf = PDF::loadView('dashboard.prodi.cetak_pdf', ['prodis' => Prodi::all()]);
        return $pdf->stream('Laporan-Data-Prodi.pdf');
        //return $pdf->download('Laporan-Data-Mahasiswa.pdf');
    }
}
