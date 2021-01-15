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

        $foto = $request->file('foto');
        $nama_foto = "";

        if(!empty($foto)){
            $extension = $foto->extension();
            $nama_foto = time()."_.".$extension;
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

    public function show($id)
    {
        //
    }

    public function edit($id) 
    {
        $html = Html::findOrFail($id);

        return view('pages.admin.materi.html.edit', [
            'html' =>$html
        ]);
    }

    public function update($id, HtmlRequest $request)
    {
       
        //$data = $request->all();
        //$data = $request->validated();
        $html = Html::findOrFail($id);
        $foto = $request->file('foto');
        $nama_foto = "";

        if(!empty($foto)){
            $extension = $foto->extension();
            $nama_foto = time()."_.".$extension;
            $nama_folder = 'img';
            $foto->move($nama_folder,$nama_foto);
        }
        
        $html->hari = $request->hari;
        $html->tanggal = $request->tanggal;
        $html->judul = $request->judul;
        $html->sub_judul = $request->sub_judul;
        $html->aktor = $request->aktor;
        $html->isi_content = $request->isi_content;
        $html->foto = $nama_foto;
        $html->save();

        // Html::create([
        //     'hari' =>$request->hari,
        //     'tanggal' =>$request->tanggal,
        //     'judul' =>$request->judul,
        //     'sub_judul' =>$request->sub_judul,
        //     'aktor' =>$request->aktor,
        //     'isi_content' =>$request->isi_content,
        //     'foto' =>$nama_foto
        // ]);
        return redirect()->route('html');
    }

    public function destroy($id)
    {
        $html = Html::findOrFail($id);
        $html->delete();

        return redirect()->route('html');
    }
}
