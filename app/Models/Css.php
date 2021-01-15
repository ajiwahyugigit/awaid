<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Css extends Model
{
    use HasFactory;

    protected $table = "css";

    protected $fillable = [
        'hari', 'tanggal','judul','sub_judul','aktor','isi_content','foto'
    ];
    
    protected $hidden = [];
}
