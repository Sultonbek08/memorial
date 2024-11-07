<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ProfileController;
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
Route::get('/ourbooks', [FrontController::class, 'ourbooks'])->name('ourbooks');
Route::get('/library', [FrontController::class, 'library'])->name('library');
Route::get('/contactus', [FrontController::class, 'contactus'])->name('contactus');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('contact',ContactController::class);
    Route::resource('author',AuthorController::class);
    Route::post('/post-image-upload', [AuthorController::class, 'upload'])->name('upload');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
