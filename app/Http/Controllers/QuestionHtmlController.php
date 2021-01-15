<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionHtmlController extends Controller
{
    public function index()
    {
        return view('pages.question.question_html');
    }
}
