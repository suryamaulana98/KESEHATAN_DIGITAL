<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Ttd;
use App\Models\User;
use Illuminate\Http\Request;

class DapodikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('role','user')->get();
        return view('admin.dapodik',compact('data'));
    }

    public function ttd(){
        $data = Kelas::all();
        $ttd = Ttd::with('kelas')->get();
        return view('admin.ttd',compact('data','ttd'));
    }

    public function create_ttd(Request $request){
        $request->validate([

        ]);

        Ttd::create([
            'id_kelas'=>$request->id_kelas,
            'status'=>$request->status
        ]);
        return redirect('ttd')->with('success','Berhasil Menambah Ttd');
    }

    public function destroy_ttd($id){
        $kategori = Ttd::findOrFail($id);
        $kategori->delete();

        return redirect()->back()->with('success','Berhasil Menghapus Ttd');

    }

    public function kelas(){
        return view('admin.kelas');
    }

    public function vaksin(){
        $data = User::where('role','user')->get();
        return view('admin.vaksin',compact('data'));
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
        $request->validate([

        ]);

        $data = User::findOrFail($id);
        $data->update([
            'tinggi_badan'=>$request->tinggi_badan,
            'berat_badan'=>$request->berat_badan
        ]);
        return redirect('dapodikAdmin')->with('success','Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
