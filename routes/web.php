<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;

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
    return view('landing.landing-master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('meja', TableController::class);

Route::get('/menu/table/{table}', [MenuController::class, 'createWithTable'])->name('menu.create.with.table');
Route::resource('menu', MenuController::class);

Route::put('/order/{order}/paid', [OrderController::class, 'markAsPaid'])->name('order.markPaid');
Route::resource('order', OrderController::class);

Route::post('/order-item/{table}', [OrderItemController::class, 'store'])->name('order-item.store');
Route::resource('order-item', OrderItemController::class);


require __DIR__.'/auth.php';
