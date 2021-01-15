<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubHtmlController extends Controller
{
    public function index()
    {
        return view('pages.theory.sub_html');
    }
}
