<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Ttd;
use Illuminate\Http\Request;

class DapodikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dapodik');
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
        return redirect('ttd');
    }

    public function destroy_ttd($id){
        $kategori = Ttd::findOrFail($id);
        $kategori->delete();

        return redirect()->back();

    }

    public function kelas(){
        return view('admin.kelas');
    }

    public function vaksin(){
        return view('admin.vaksin');
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
