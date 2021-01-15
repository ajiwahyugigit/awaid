<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\TheoryHtmlController;
use App\Http\Controllers\SubHtmlController;
use App\Http\Controllers\QuestionHtmlController;
use App\Http\Controllers\ScoreHtmlController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HtmlController;
use App\Http\Controllers\Admin\CssController;
use App\Http\Controllers\Admin\JavascriptController;
use App\Http\Controllers\Admin\PhpController;
use App\Http\Middleware\IsAdmin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages/home');
// });

Route::get('/', [HomeController::class, 'index'])
        ->name('home');

Route::get('/tutorial', [TutorialController::class, 'index'])
        ->name('tutorial');
Route::get('/portfolio', [PortfolioController::class, 'index'])
        ->name('portfolio');

Route::get('theory_html', [TheoryHtmlController::class, 'index'])
        ->name('theory_html');

Route::get('question_html', [QuestionHtmlController::class, 'index'])
        ->name('question_html');
Route::get('sub_html', [SubHtmlController::class, 'index'])
        ->name('sub_html');

Route::get('score_html', [ScoreHtmlController::class, 'index'])
        ->name('score_html');

Route::get('service', [ServiceController::class, 'index'])
        ->name('service');

Route::prefix('admin')
        ->namespace('Admin')
        ->middleware(['auth','IsAdmin'])
        ->group(function() {
            Route::get('/', [DashboardController::class, 'index'])
                    ->name('dashboard');

            Route::get('/users', [UserController::class, 'index'])
                    ->name('users');
            Route::get('/users/create', [UserController::class, 'create'])
                    ->name('userscreate');
            Route::get('/users/edit/{id}', [UserController::class, 'edit'])
                   ->name('usersedit');
            Route::post('/users/store', [UserController::class, 'store'])
                    ->name('usersstore');
                    
            Route::get('/html', [HtmlController::class, 'index'])
                    ->name('html');
            Route::get('/html/create', [HtmlController::class, 'create'])
                    ->name('htmlcreate');
            Route::post('/html/store', [HtmlController::class, 'store'])
                    ->name('htmlstore');
            Route::get('/html/edit/{id}', [HtmlController::class, 'edit'])
                    ->name('htmledit');
            Route::put('/html/update/{id}', [HtmlController::class, 'update'])
                    ->name('htmlupdate');
            Route::delete('/html/create/destroy/{id}', [HtmlController::class, 'destroy'])
                    ->name('htmldestroy');

            Route::get('/css', [CssController::class, 'index'])
                    ->name('css');
            Route::get('/css/create', [CssController::class, 'create'])
                    ->name('csscreate');
            Route::post('/css/store', [CssController::class, 'store'])
                    ->name('cssstore');
            Route::get('/css/edit/{id}', [CssController::class, 'edit'])
                    ->name('cssedit');
            Route::put('/css/update/{id}', [CssController::class, 'update'])
                    ->name('cssupdate');
            Route::delete('/css/create/destroy/{id}', [CssController::class, 'destroy'])
                    ->name('cssdestroy');


            Route::get('/javascript', [JavascriptController::class, 'index'])
                    ->name('javascript');
            Route::get('/javascript/create', [JavascriptController::class, 'create'])
                    ->name('jscreate');


            Route::get('/php', [PhpController::class, 'index'])
                    ->name('php');
            Route::get('/php/create', [PhpController::class, 'create'])
                    ->name('phpcreate');
        });


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
