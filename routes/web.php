<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookIssueController;
use App\Http\Controllers\BookUserController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

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
Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change-language');

Route::resource('/book', BookController::class, ['except' => ['details', 'edit', 'create']]);
Route::get('{id}/details', [BookController::class, 'details']);
Route::get('{id}/edit', [BookController::class, 'edit']);
Route::delete('book/{id}', [BookController::class, 'destroy']);

Route::resource('/favorite', FavoritesController::class);


Route::get('/new', [BookController::class, 'create']);

Route::resource('/authors', AuthorController::class);
Route::get('/author/{id}', [AuthorController::class, 'author_details']);
Route::get('/author/{id}/edit', [AuthorController::class, 'edit']);

Route::resource('/publisher', PublisherController::class, ['except' => ['edit', 'create']]);
Route::get('publisher/{id}/edit', [PublisherController::class, 'edit']);
Route::get('publishernew', [PublisherController::class, 'create']);

Route::get('/issue/create', [BookIssueController::class, 'create'])->name('issue.create');
Route::post('book/issue/new', [BookIssueController::class, 'store']);
Route::get('/issue/view', [BookIssueController::class, 'index'])->name('issue.index');

Route::post('book/{book}/vote', [BookUserController::class, 'vote'])->name('book.vote');
Route::delete('/books/{book}/vote', [BookUserController::class, 'deleteVote'])->name('books.delete_vote');
Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change-language');

require __DIR__.'/auth.php';
