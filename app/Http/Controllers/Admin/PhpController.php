<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhpController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.materi.php.index');
    }

    public function create()
    {
        return view('pages.admin.materi.php.create');
    }
}
