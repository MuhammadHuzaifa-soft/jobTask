<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

    return view('posts.index');
});

Auth::routes();
 Route::middleware(['auth'])->group(function(){
 Route::resource('posts' , PostController::class);

   Route::get('post-filters' ,[ PostController::class, 'filters'])->name('posts.filters');
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');