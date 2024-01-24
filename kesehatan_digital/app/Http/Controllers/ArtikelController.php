<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Komentar;
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

    public function search(Request $request){
        $searchItem = $request->input('cariArtikel');
        $result = Artikel::where('judul', 'LIKE', '%'.$searchItem.'%')->with('kategori')->get();
        return response()->json($result);
    }
    
public function berita(){
    $data = Artikel::with('kategori')
                   ->orderBy('created_at', 'asc')
                   ->paginate(3);
    return view('user.news-2', compact('data'));
}


    public function kontak(){
        return view('user.kontak');
    }

    public function detail_berita($id){
        $data = Artikel::findOrFail($id);
        $kat = Kategori::all();
        $data2 = Artikel::all();
        $kom = Komentar::where('id_artikel', $id)->get();
        return view('user.detail-berita',compact('data','kat','data2','kom'));
    }

    public function about(){
        return view('user.about-2');
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
        $val = $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'id_kategori'=>'required',
            'penulis'=>'required',
            'foto'=>'required'
        ],[
            'judul.required'=>'judul tidak boleh kosong',
            'deskripsi.required'=>'deskripsi tidak boleh kosong',
            'id_kategori.required'=>'Kategori tidak boleh kosong',
            'penulis.required'=>'penulis tidak boleh kosong',
            'foto.required'=>'foto tidak boleh kosong',

        ]);

        $nm = $request->file('foto'); 

        $extension = $nm->getClientOriginalExtension();
        $namaFile = hash('sha256', time() . rand(100, 999)) . '.' . $extension;
        $nm->move(public_path().'/foto', $namaFile);
        
       $kat = new Artikel;
       $kat->judul = $request->judul;
       $kat->id_kategori = $request->id_kategori;
       $kat->deskripsi = $request->deskripsi;
       $kat->penulis = $request->penulis;
       $kat->foto = $namaFile;
            
       $kat->save();
       
       return redirect('artikelAdmin')->with('success','Berhasil Menambah artikel');
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
            'judul'=>'min:4',
            'deskripsi'=>'min:4',
            'penulis'=>'min:4',
        ],[
            'judul.min'=>'judul tidak boleh kosong',
            'deskripsi.min'=>'deskripsi tidak boleh kosong',
            'penulis.min'=>'penulis tidak boleh kosong',

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

        return redirect('artikelAdmin')->with('success','Berhasil Update artikel');
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
        return redirect('artikelAdmin')->with('success','Berhasil Menghapus artikel');
    }
}
