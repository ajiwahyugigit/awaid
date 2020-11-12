<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JavascriptController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.materi.javascript.index');
    }

    public function create()
    {
        return view('pages.admin.materi.javascript.create');
    }
}
