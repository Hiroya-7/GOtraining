<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LogController;

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

Route::get('/menus', [MenuController::class, 'index'])->name('menu.index');
Route::get('/parts/{part}/menus/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menus', [MenuController::class, 'store'])->name('menu.store');
Route::get('/menus/{menu}', [MenuController::class, 'show'])->name('menu.show');

Route::get('/parts', [PartController::class, 'index'])->name('part.index');
Route::get('parts/create', [PartController::class, 'create'])->name('part.create');
Route::post('/parts', [PartController::class, 'store'])->name('part.store');
Route::get('/parts/{part}', [PartController::class, 'show'])->name('part.show');

Route::get('/log/create', [LogController::class, 'create'])->name('log.create');
Route::get('/log/create2', [LogController::class, 'create2'])->name('log.create2');
Route::post('/log/create', [LogController::class, 'store'])->name('log.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
