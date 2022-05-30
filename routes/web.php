<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view ('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view ('About', [
        "title" => "About",
        "nama" => "Kevin Jonson",
        "email" => "ppppppp@gmail.com",
        "gambar" => "kevin.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view ('Gallery', [
        "title" => "Gallery"
    ]);
});
Route::resource('/contacts', ContactController::class);

Auth::routes();

Route::group(['midleware' => ['auth']], function (){

    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});    
