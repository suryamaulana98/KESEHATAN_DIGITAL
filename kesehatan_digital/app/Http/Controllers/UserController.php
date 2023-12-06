<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $data = User::where('role', 'Admin')->get();

    return view('admin.user', compact('data'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $data = Kelas::all(); 
    return view('admin.tambah-admin', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$request->validate([
    // Validasi lainnya...
]);

User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => bcrypt($request->password),
    'id_kelas' => $request->id_kelas,
    'role'=> 'Admin',
    'nis' => $request->nis,
]);

return redirect('userAdmin');

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
        $kelas = Kelas::all();
        $data = User::with('kelas')->findOrFail($id);
        return view('admin.edit-admin',compact('data','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::findOrFail($id);
        $data->update([
    'name' => $request->name,
    'email' => $request->email,
    'password' => bcrypt($request->password),
    'id_kelas' => $request->id_kelas,
    'nis' => $request->nis,
        ]);
        return redirect('userAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return back();
    }
}
