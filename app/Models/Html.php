<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Html extends Model
{
    use HasFactory;

    protected $table = "html";

    protected $fillable = [
        'hari', 'tanggal','judul','sub_judul','aktor','isi_content','gambar'
    ];
    
    protected $hidden = [];
}
