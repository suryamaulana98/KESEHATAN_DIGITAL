<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\landingPage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        $landing = landingPage::all();
        $data = Artikel::with('kategori')->paginate('3');
        return view('user.index_user', compact('user','data','landing'));
    }


    public function komentar(Request $request){
    $request->validate([
        'komentar' => 'required'
    ]);
        $user = Auth::user();
        Komentar::create([
            'id_artikel' => $request->id_artikel,
            'id_user' => $user->id,
            'komentar' => $request->komentar
        ]);
        return back();
    }

    public function delete_komentar($id){
        $ubah = Komentar::findOrFail($id);
        $ubah->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Komentar');
    }


    public function show($id){
        $user = User::with('kelas')->findOrFail($id);
        return view('partials.topbar_user', compact('user'));
    }

    public function profil(Request $id){
        $user = User::with('kelas');
        return view('user.test', compact('user'));
    }
    

    public function cetakPdf($id){
        $user = User::with('kelas')->findOrFail($id);
        
        $html = view('user.kartuPelajarPdf', compact('user'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        // Tampilkan pratinjau PDF di browser
        $dompdf->stream('kartu-pelajar.pdf', ['Attachment' => false]);
    }

    public function updateProfile(Request $request){

         $this->validate($request,[
            'foto' => 'image'
        ]);

        $namaFile = null;
        if($request->hasFile('foto')){
            $nm = $request->file('foto'); 
    
            $extension = $nm->getClientOriginalExtension();
            $namaFile = hash('sha256', time() . rand(100, 999)) . '.' . $extension;
            $nm->move(public_path().'/foto', $namaFile);

        }

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
            'nisn' =>$request->nisn,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'jenis_kelamin' =>$request->jenis_kelamin,
            'lingkar_kepala' =>$request->lingkar_kepala,
            'jumlah_saudara' =>$request->jumlah_saudara,
            'jarak_rumah' =>$request->jarak_rumah,
            'waktu_tempuh' =>$request->waktu_tempuh,
            'foto' =>  $namaFile
        ]);


        return redirect()->back()->with(['success', 'berhasil mengedit data']);
    }
    

}
