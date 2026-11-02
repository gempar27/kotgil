<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ProfileController,
    ClassController,
    FreeLessonController,
    GamesController,
    ContactController,
    DashboardLessonController,
    DashboardTransaksiController
};

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
// Home
Route::get('/', [HomeController::class,'index']);
// Classes
Route::get('/classes',[ClassController::class,'index'])->name('class.index');
Route::get('/classes-detail',[ClassController::class,'show'])->name('class.show');
// Games
Route::get('/games',[GamesController::class,'index'])->name('games.index');
// Free Lesson
Route::get('/free-lesson',[FreeLessonController::class,'index'])->name('free-lesson.index');
// Contact
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

Route::group(['prefix'=>'dashboard'],function() {
    Route::get('/beranda', [HomeController::class,'dashboard'])->name('dashboard');
    // Lesson
    Route::get('/free-lesson',[DashboardLessonController::class,'index'])->name('dashboard-free-lesson.index');
    Route::get('/free-lesson/create',[DashboardLessonController::class,'create'])->name('dashboard-free-lesson.create');
    // Transaction
    Route::get('transaksi',[DashboardTransaksiController::class,'index'])->name('dashboard-transaksi.index');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
