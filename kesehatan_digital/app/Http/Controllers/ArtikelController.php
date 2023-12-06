<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function getDataPerkembanganArtikel()
{
    $dataPerkembanganArtikel = Artikel::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as period, COUNT(*) as jumlah_artikel")
        ->groupBy('period')
        ->orderBy('period')
        ->get();

    return response()->json($dataPerkembanganArtikel);
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
        $data2  = Artikel::with('kategori')->findOrFail($id);
        $data = Kategori::all();
        return view('admin.edit-artikel',compact('data','data2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

        ]);

        $ubah = Artikel::findOrFail($id);
        $awal = $ubah->foto;

        if($request->hasFile('foto')){
            if (File::exists(public_path().'/foto/'.$awal)){
                File::delete(public_path().'/foto/'.$awal);
            }
            $awal= $request->foto->hashName();
            $request->foto->move(public_path().'/foto',$awal);
        }

        $data = [
       'id_kategori' => $request['kategori'],
       'judul' => $request['judul'],
       'deskripsi' => $request['content'],
       'penulis' => $request['penulis'],
       'foto' => $awal
        ];

        $ubah->update($data);

        return redirect('artikelAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Artikel::findOrFail($id);
        $file = public_path('/foto/').$hapus->foto;
        if(file_exists($file)){
            @unlink($file);
        }
        $hapus->delete();
        return redirect('artikelAdmin');
    }
}
