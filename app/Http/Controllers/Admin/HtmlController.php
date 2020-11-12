<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Html;
use App\Http\Requests\Admin\HtmlRequest;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class HtmlController extends Controller
{
    public function index()
    {
        $htmls = Html::all();
        return view('pages.admin.materi.html.index', compact('htmls'));
    }

    public function create()
    {
        return view('pages.admin.materi.html.create');
    }

    public function store(HtmlRequest $request)
    {
        $nama = $request->nama;
        $foto = $request->file('foto');
        $extension = $foto->extension();
        $nama_foto = "";

        if(!empty($foto)){
            $nama_foto = time()."_".$nama.".".$extension;
            $nama_folder = 'img';
            $foto->move($nama_folder,$nama_foto);
        }

        Html::create([
            'hari' =>$request->hari,
            'tanggal' =>$request->tanggal,
            'judul' =>$request->judul,
            'sub_judul' =>$request->sub_judul,
            'aktor' =>$request->aktor,
            'isi_content' =>$request->isi_content,
            'foto' =>$nama_foto
        ]);
    
        return redirect()->route('html');
    }
}
