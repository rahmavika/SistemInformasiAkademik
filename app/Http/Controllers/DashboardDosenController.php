<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardDosenController extends Controller
{
    public function index()
    {
        // yg bisa akses cuma admin
        // if (! Gate::allows('admin')) {
        //     abort(403);
        // }

        $dosen = Dosen::latest()->paginate(10);
        return view('dashboard.dosen.index',['dosens' => $dosen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dosen.create',['prodis' =>Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:dosens',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
         ]);

         //dd($validated);

         Dosen::create($validated);
         return redirect('/dashboard-dosen')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dashboard.dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodis = Prodi::all(); //untuk menampilkan pilihan dari prodi
        $dosen = Dosen::find($id);
        return view('dashboard.dosen.edit', compact('prodis', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nik' => 'required|max:15',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
         ]);

         Dosen::where('id', $id)->update($validated);
         return redirect('dashboard-dosen')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::destroy($id);
        return redirect('dashboard-dosen')->with('pesan', 'Data berhasil dihapus');
    }

    public function cetakPdf(){
        $pdf = PDF::loadView('dashboard.dosen.cetak_pdf', ['dosens' => Dosen::all()]);
        return $pdf->stream('Laporan-Data-Dosen.pdf');
        //return $pdf->download('Laporan-Data-Mahasiswa.pdf');
    }
}
