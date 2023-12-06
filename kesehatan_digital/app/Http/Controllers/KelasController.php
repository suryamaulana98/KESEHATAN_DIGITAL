<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas = Kelas::all();       
        return view('admin.kelas', compact('kelas'));
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
        $this->validate($request,[
            'kelas' => 'required'
        ]);

        $kelas = Kelas::create([
            'kelas' => $request->kelas
        ]);

        // dd($kelas);

        return redirect()->back()->with(['success', 'berhasil menyimpan data']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $kelas = Kelas::findOrFail($id);
        // return view('admin.kelas', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request,[
            'kelas' => 'required'
        ]);

        $kelas = Kelas::findOrFail($id);

        $kelas->update([
            'kelas' => $request->kelas
        ]);

        return redirect()->back()->with(['success', 'berhasil mengedit data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kelas = kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->back()->with('success','Berhasil Menghapus Data Kelas');
    }
}
