<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data  = Artikel::with('kategori')->get();
        return view('admin.artikel',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Kategori::all();
        return view('admin.tambah-data',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        ]);


        $nm = $request->file('foto'); 

        $extension = $nm->getClientOriginalExtension();
        $namaFile = hash('sha256', time() . rand(100, 999)) . '.' . $extension;
        $nm->move(public_path().'/foto', $namaFile);
        
       $kat = new Artikel;
       $kat->judul = $request->judul;
       $kat->id_kategori = $request->kategori;
       $kat->deskripsi = $request->content;
       $kat->penulis = $request->penulis;
       $kat->foto = $namaFile;
            
       $kat->save();
       
       return redirect('artikelAdmin');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
