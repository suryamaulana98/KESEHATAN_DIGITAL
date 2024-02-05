<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\siswaUks;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::count();
        $jumlahSudahVaksin = User::whereIn('d_vaksin', ['ketiga', 'pertama', 'kedua'])->count();
        $user = User::count();
        $hariIni = date("Y-m-d");
        $siswaSakit = siswaUks::whereDate('created_at', $hariIni)->count();
        return view('admin.dashboard',compact('artikel','jumlahSudahVaksin','user','siswaSakit'));
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
