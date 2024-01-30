<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ttd extends Model
{
    protected $table = 'ttd';
    protected $primarykey ='id';
    protected $fillable = [
        'id_kelas',
        'status',
        'jumlah'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
