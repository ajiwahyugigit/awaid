<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreHtmlController extends Controller
{
    public function index()
    {
        return view('pages.score.score_html');
    }
}
