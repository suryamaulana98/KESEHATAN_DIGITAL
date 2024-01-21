<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $primarykey = 'id';
    protected $fillable = ['id_kategori', 'judul', 'penulis', 'deskripsi','foto'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function komentar()
{
    return $this->hasMany(Komentar::class, 'id_artikel');
}
}
