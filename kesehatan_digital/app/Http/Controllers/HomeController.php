<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $id)
    {   
        $user = User::findOrFail($id);
        $user = User::all();
        return view('user.index_user', compact('user'));
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('partials.topbar_user', compact('user'));
    }

    public function updateProfile(Request $request){

         $this->validate($request,[
            
        ]);

        // $user = User::findOrFail($id);
         User::query()
        ->where('id', Auth::user()->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'nis' => $request->nis,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
           'd_vaksin' => $request->d_vaksin,
        ]);


        return redirect()->back()->with(['success', 'berhasil mengedit data']);
    }
    

}
