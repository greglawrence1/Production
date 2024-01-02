<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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
    return view('/menu');
});
//Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/prod', [ProductController::class, 'browse'])->name('browse');
Route::get('/product/create', [ProductController::class, 'create'])->middleware('can:create, App\Models\Product')->name('create');
Route::post('/product', [ProductController::class, 'store'])->name('store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product-show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware('can:update, App\Models\Product')->name('product-edit');
Route::patch('/product/{id}/edit', [ProductController::class, 'update'])->name('product-edit');
Route::delete('/product/delete/{product}', [ProductController::class, 'destroy'])->name('destroy');
// Route::middleware(['can:create,  App\Models\Product'])->group(function() {
//     Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
//     Route::patch('/product/{id}/edit', [ProductController::class, 'update'])-name('product-updayr');
// });
//Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
//Route::patch('/product/{id}/edit', [ProductController::class, 'update'])-name('product-edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
