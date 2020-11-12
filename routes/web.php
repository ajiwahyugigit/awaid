<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
                    
            Route::get('/html', [HtmlController::class, 'index'])
                    ->name('html');
            Route::get('/html/create', [HtmlController::class, 'create'])
                    ->name('htmlcreate');
            Route::get('/html/create/store', [HtmlController::class, 'store'])
                    ->name('htmlstore');

            Route::get('/css', [CssController::class, 'index'])
                    ->name('css');
            Route::get('/css/create', [CssController::class, 'create'])
                    ->name('csscreate');


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
