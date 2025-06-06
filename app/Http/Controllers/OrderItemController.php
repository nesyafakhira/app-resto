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
    dd($request->all());
    $order = Order::create([
        'table_id' => $table->id,
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

    // Update total dan status meja
    $order->update(['total_amount' => $total]);
    $table->update(['is_full' => 1]);

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
