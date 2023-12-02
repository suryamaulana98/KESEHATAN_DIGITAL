<?php

namespace App\Models;

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $primarykey = 'id';
    protected $fillable = ['id_artikel', 'id_user', 'komentar'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'id_artikel');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
