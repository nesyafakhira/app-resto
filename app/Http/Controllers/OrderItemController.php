<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\Table;
use App\Models\orderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Table $table)
{
    // Langsung gunakan $table
    $order = Order::create([
        'table_id' => $request->table_id,
        'order_name' => $request->order_name,
        'total_amount' => 0, // dihitung nanti
        'payment_method' => 'qris',
        'status' => 'pending',
        'paid_amount' => 0,
    ]);


    $total = 0;

    foreach ($request->quantities as $menuId => $qty) {
        if ($qty > 0) {
            $menu = Menu::findOrFail($menuId);
            $subtotal = $menu->price * $qty;
            $total += $subtotal;

            orderItem::create([
                'order_id' => $order->id,
                'menu_id' => $menu->id,
                'quantity' => $qty,
            ]);
        }
    }

    // Ambil table_id dari request
$tableId = $request->table_id;

// Update total amount pada order
$order->update(['total_amount' => $total]);

// Cari meja berdasarkan id yang diambil dari input hidden
$table = Table::find($tableId);

// Jika meja ditemukan, update status is_full jadi 1
if ($table) {
    $table->update(['is_full' => 1]);
} else {
    // Bisa tambahkan logika error handling jika meja tidak ditemukan
}


    return redirect()->route('order.show', $order->id)->with('success', 'Pesanan berhasil dibuat');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
