<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Ttd;
use App\Models\User;
use App\Models\Kelas;
use App\Models\siswaUks;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use PhpOffice\PhpSpreadsheet\IOFactory;

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

    public function exportPDF(){
        $user = User::where('role', 'user')->get();
        
        $html = view('admin.userPDF', compact('user'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        // Tampilkan pratinjau PDF di browser
        $dompdf->stream('data-dapodik.pdf', ['Attachment' => false]);
    }
    public function exportPdfTtd(){
        $user = Ttd::get();
        
        $html = view('admin.ttdPdf', compact('user'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        // Tampilkan pratinjau PDF di browser
        $dompdf->stream('data-ttd.pdf', ['Attachment' => false]);
    }

    public function importExcel(Request $request){

        // $rows = $request->validate([
        //     'excel_file' => 'required',
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // ]);

        $file = $request->file('excel_file');
        $path = $file->path();

        $spreadsheet = IOFactory::load($path);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();
    
        foreach ($rows as $row) {
            User::create([
                'name' => $row[0],
                'email' => $row[1],
                'password' => bcrypt($row[2]),
            ]);
        }
    
        return redirect()->back()->with('success', 'Data imported successfully.');
    }

    public function importExcelTtd(Request $request){

        // $rows = $request->validate([
        //     'excel_file' => 'required',
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // ]);

        $file = $request->file('ttd_file');
        $path = $file->path();

        $spreadsheet = IOFactory::load($path);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();
    
        foreach ($rows as $row) {
            Ttd::create([
                'id_kelas' => $row[0],
                'status' => $row[1],
                'jumlah' => $row[2],
            ]);
        }
    
        return redirect()->back()->with('success', 'Data imported successfully.');
    }

    public function ttd(){
        $data = Kelas::all();
        $ttd = Ttd::with('kelas')->get();
        return view('admin.ttd',compact('data','ttd'));
    }

    public function create_ttd(Request $request){
        $request->validate([
            'id_kelas'=>'required'
        ],[
            'id_kelas.require'=>'status harus terisi'
        ]);

        Ttd::create([
            'id_kelas'=>$request->id_kelas,
            'status'=>$request->status,
            'jumlah'=>$request->jumlah,

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
            'tinggi_badan'=>'min:1',
            'berat_badan'=>'min:1'
        ],[
            'tinggi_badan.min'=>'Data tidak boleh kosong',
            'berat_badan.min'=>'Data tidak boleh kosong'
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
