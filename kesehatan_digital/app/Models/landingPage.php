<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landingPage extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'deskripsi', 'background'];

}
