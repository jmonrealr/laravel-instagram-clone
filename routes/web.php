<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get(
    '/', 
    [HomeController::class,'index']
)->name('home');

Route::post(
    'create',
    [PostController::class,'store']
)->name('post.create');

Route::get(
    'show/{id}',
    [PostController::class,'show']
)->name('post.show');

Route::delete(
    'delete',
    [PostController::class,'delete']
)->name('post.delete');

Route::get('settings/',function(){
    return view('profile.settings');
})->name('profile.settings');

Route::get('profile/',function(){
    return view('profile.index');
})->name('profile.index');

Route::get('profile/id',function(){
    return view('profile.show');
})->name('profile.show');