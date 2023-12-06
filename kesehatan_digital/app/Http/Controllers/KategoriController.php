<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.kategori', compact('kategori'));
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
            'kategori' => 'required',
        ]);

        // create post
        $kategori = Kategori::create([
            'kategori' => $request->kategori
        ]);

        
        return redirect()->back()->with(['success', 'berhasil menyimpan data']);
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
        $this->validate($request,[
            'kategori' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);

         // create post
         $kategori->update([
            'kategori' => $request->kategori
        ]);
        
        return redirect()->back()->with(['success', 'berhasil mengubah data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->back()->with('success','Berhasil Menghapus kategori');

    }
}
