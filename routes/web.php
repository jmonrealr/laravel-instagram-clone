<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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


//Auth routes
Route::middleware(['auth'])->group( function () {
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

    Route::post(
        'delete',
        [PostController::class,'destroy']
    )->name('post.delete');

    Route::get('settings/',function(){
        return view('profile.settings');
    })->name('profile.settings');

    Route::get('profile/',[ProfileController::class,'index'])->name('profile.index');

    Route::get('profile/{id}',[ProfileController::class, 'show'])
    ->name('profile.show');

    Route::post('like', [PostController::class, 'like']);
    Route::post('comment', [PostController::class, 'comment']);
});
//Default routes
