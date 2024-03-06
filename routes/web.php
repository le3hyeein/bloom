<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();
Route::middleware(['auth', 'ceklevel:admin'])->group(function () {
    Route::get('/datauser', [App\Http\Controllers\DatauserController::class, 'index'])->name('datauser');
    Route::get('/edit', [App\Http\Controllers\EditController::class, 'index'])->name('edit');


    Route::middleware(['auth', 'ceklevel:admin, user'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
        Route::get('/tambah', [App\Http\Controllers\TambahController::class, 'index'])->name('tambah');
        Route::get('/postingan', [App\Http\Controllers\PostinganController::class, 'index'])->name('postingan');
        Route::get('/comment/{id:id_photo}', [App\Http\Controllers\CommentController::class, 'index'])->name('comment');
        Route::get('/comment', [App\Http\Controllers\CommentController::class, 'index'])->name('comment');
        Route::get('/editprofile', [App\Http\Controllers\EditprofileController::class, 'index'])->name('editprofile');
        Route::get('/comments/{id}', 'CommentController@index');
});

        Route::post('/posts', [App\Http\Controllers\PostsController::class,'store'])->name('post.store');
        Route::get('/datauser', [App\Http\Controllers\UserController::class, 'index'])->name('datauser.index');
        Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
        Route::post('comment/{post}', [App\Http\Controllers\CommentController::class,'postComments'])->name('addComent');
});
