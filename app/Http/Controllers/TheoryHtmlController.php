<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheoryHtmlController extends Controller
{
    public function index() 
    {
        return view('pages.theory.theory_html');
    }
}
