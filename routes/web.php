<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('/book', BookController::class, ['except' => ['create', 'details', 'edit', 'create']]);
Route::get('{id}/details', [BookController::class, 'details']);
Route::get('{id}/edit', [BookController::class, 'edit']);
Route::get('/book_new', [BookController::class, 'create']);

Route::resource('/authors', AuthorController::class);
Route::get('/author/{id}', [AuthorController::class, 'author_details']);

require __DIR__.'/auth.php';
