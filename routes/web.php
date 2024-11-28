<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MagazineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/magazine', [FrontController::class, 'magazine'])->name('magazine');
Route::get('/magazine__detail{id}', [FrontController::class, 'magazine__detail'])->name('magazine__detail');
Route::get('/library', [FrontController::class, 'library'])->name('library');
Route::get('/contactus', [FrontController::class, 'contactus'])->name('contactus');
Route::get('/search', [FrontController::class, 'search'])->name('search');


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('contact',ContactController::class);
    Route::resource('author',AuthorController::class);
    Route::resource('magazine',controller: MagazineController::class);
    Route::resource('article',ArticleController::class);
    Route::post('/post-image-upload', [AuthorController::class, 'upload'])->name('upload');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
