<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\siswaUks;
use Illuminate\Http\Request;

class SiswaSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $kelas = Kelas::all();  
        $siswa = siswaUks::with('kelas')->get();
        return view('admin.siswaSakitUks', compact('siswa', 'kelas'));
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
        $siswa = $request->validate([
            'name' => 'required',
            'id_kelas' => 'required',
            'keterangan' => 'required',
        ]);

        // dd($siswa);

        siswaUks::create([
            'name' => $request->name,
            'id_kelas' => $request->id_kelas,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Sukses Menambah Data Baru!!');
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
        //
        $siswa = siswaUks::findOrFail($id);
        return view('admin.siswaSakitUks', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $siswa = $request->validate([
            'name' => 'required',
            'id_kelas' => 'required',
            'keterangan' => 'required',
        ]);
        
        // dd($siswa);
        $siswa = siswaUks::findOrFail($id);

        $siswa->update([
            'name'=>$request->name,
            'id_kelas'=>$request->id_kelas,
            'keterangan'=>$request->keterangan
        ]);

        return redirect()->back()->with('success', 'Sukses Mengedit Data Baru!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         //
         $siswa = siswaUks::findOrFail($id);
         $siswa->delete();
 
         return redirect()->back()->with('success','Berhasil Menghapus Data');
    }
}
