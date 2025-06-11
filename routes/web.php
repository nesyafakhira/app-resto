<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\TableStatusController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\MenuManagementController;
use App\Http\Controllers\StaffManagementController;

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


Route::middleware(['auth', 'verified'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', function () {
        $orders = Order::with('table')->where('status', 'paid')->orWhere('status', 'pending')->orWhere('status', 'completed')->latest()->get();


        return view('dashboard.index', compact('orders'));
    })->name('index');

    // ADMIN - CRUD Menu & Staff
    Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
        Route::resource('menu', MenuManagementController::class);
        Route::resource('staff', StaffManagementController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    });

    // STAFF - Konfirmasi Transaksi & Update Meja
    Route::middleware('role:staff')->group(function () {
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
        Route::post('transactions/{order}/confirm', [TransactionController::class, 'confirm'])->name('transactions.confirm');

        Route::get('tables', [TableStatusController::class, 'index'])->name('tables.index');
        Route::patch('tables/{table}/clear', [TableStatusController::class, 'clear'])->name('tables.clear');
    });
});



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

Route::post('/order-item/{table:id}', [OrderItemController::class, 'store'])->name('order-item.store');
Route::resource('order-item', OrderItemController::class);


require __DIR__.'/auth.php';
