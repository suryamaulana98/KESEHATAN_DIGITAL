<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswaUks extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 'id_kelas', 'keterangan'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas');
    }
}
