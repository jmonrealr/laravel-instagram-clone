<?php

use App\Http\Controllers\FollowersController;
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

    Route::post('/followers/store', [FollowersController::class, 'store'])->name('followers.store');
    Route::delete('/followers/{id}/delete/', [FollowersController::class, 'delete'])->name('followers.delete');

    Route::get('profile/{user}',[ProfileController::class,'index'])->name('profile.index');

    Route::post('/profile/show',[ProfileController::class, 'searchProfile']) ->name('profile.show');

    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/change-password', [ProfileController::class, 'change_password'])->name('profile.change-password');

    Route::get('/search', [ProfileController::class, 'search'])->name('profile.search');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('profile.settings');

    Route::post('like', [PostController::class, 'like']);
    Route::post('comment', [PostController::class, 'comment']);

});
//Default routes
