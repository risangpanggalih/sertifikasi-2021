<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
use App\Models\Wiki;
use App\Http\Controllers\WikiController;

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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/content', [ArticleController::class, 'index']);

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Eula Lawrence",
        "affiliation" => "Knight of Favonious",
        "image" => "eula.png"
    ]);
});

//Article
Route::get('content/{article:slug}', [ArticleController::class, 'show']);

//Wiki
Route::get('/wiki', [WikiController::class, 'index']);

//Wiki create
Route::get('/wiki/tambah', [WikiController::class, 'tambah']);

//Wiki store
Route::post('/wiki/store', [WikiController::class, 'store']);

//Wiki update
Route::get('/wiki/edit/{id}', [WikiController::class, 'edit']);
Route::put('/wiki/update/{id}', [WikiController::class, 'update']);

//Wiki delete
Route::get('wiki/hapus/{id}', [WikiController::class, 'delete']);