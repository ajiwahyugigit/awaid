<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Css;
use App\Http\Requests\Admin\CssRequest;
use Illuminate\Http\Request;
use Illuminate\Http\str;

class CssController extends Controller
{
    public function index(Request $request)
    {
        $css = Css::all();
        return view('pages.admin.materi.css.index', compact('css'));
    }

    public function create()
    {
        return view('pages.admin.materi.css.create');
    }

    public function store(CssRequest $request)
    {
        $foto = $request->file('foto');
        $nama_foto = "";

        if(!empty($foto)){
            $extension = $foto->extension();
            $nama_foto = time()."_.".$extension;
            $nama_folder = 'img';
            $foto->move($nama_folder,$nama_foto);
        }

        Css::create([
            'hari' =>$request->hari,
            'tanggal' =>$request->tanggal,
            'judul' =>$request->judul,
            'sub_judul' =>$request->sub_judul,
            'aktor' =>$request->aktor,
            'isi_content' =>$request->isi_content,
            'foto' =>$nama_foto
        ]);
    
        return redirect()->route('css');
    }

    public function show()
    {

    }

    public function edit($id) 
    {
        $css = Css::findOrFail($id);

        return view('pages.admin.materi.css.edit', [
            'css' =>$css
        ]);
    }

    public function update($id, CssRequest $request)
    {
        $data = $request->all();
        $css = Css::findOrFail($id);

        $css->update($data);
        return redirect()->route('css');
    }

    public function destroy($id)
    {
        $css = Css::findOrFail($id);
        $css->delete();

        return redirect()->route('css');
    }
}
