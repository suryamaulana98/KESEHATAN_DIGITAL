<?php

namespace App\Http\Controllers;

use App\Models\landingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class landingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landing = landingPage::all();
        return view('admin.landingPage', compact('landing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahLandingPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'background'=>'required'
        ],[
            'judul.required'=>'judul tidak boleh kosong',
            'deskripsi.required'=>'deskripsi tidak boleh kosong',
            'background.required'=>'background tidak boleh kosong',

        ]);
        // dd($val);
        $nm = $request->file('background'); 

        $extension = $nm->getClientOriginalExtension();
        $namaFile = hash('sha256', time() . rand(100, 999)) . '.' . $extension;
        $nm->move(public_path().'/foto', $namaFile);
        
       $kat = new landingPage;
       $kat->judul = $request->judul;   
       $kat->deskripsi = $request->deskripsi;
       $kat->background = $namaFile;
            
       $kat->save();
       
       return redirect('landingPage')->with('success','Berhasil Menambah Landing Page');
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
        $data = landingPage::findOrFail($id);
        return view('admin.editLandingPage',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $request->validate([
            'judul'=>'min:4',
            'deskripsi'=>'min:4',
            'background'=>'min:4',
        ]);

        $ubah = landingPage::findOrFail($id);
        $awal = $ubah->background;

        if($request->hasFile('background')){
            if (File::exists(public_path().'/foto/'.$awal)){
                File::delete(public_path().'/foto/'.$awal);
            }
            $awal= $request->foto->hashName();
            $request->foto->move(public_path().'/foto',$awal);
        }

        $data = [
       'judul' => $request['judul'],
       'deskripsi' => $request['deskripsi'],
       'background' => $awal
        ];

        $ubah->update($data);

        return redirect('landingPage')->with('success','Berhasil Update Landing Page');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hapus = landingPage::findOrFail($id);
        $file = public_path('/foto/').$hapus->background;
        if(file_exists($file)){
            @unlink($file);
        }
        $hapus->delete();
        return redirect('landingpage')->with('success','Berhasil Menghapus Landing Page');
    }
}
