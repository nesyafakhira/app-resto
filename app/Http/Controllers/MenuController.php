<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get(); // ambil order dan user-nya
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_order' => 'required|string',
        ]);

        Order::create([
            'nama_order' => $request->nama_order,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order dibuat!');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'nama_order' => 'required|string',
        ]);

        $order->update([
            'nama_order' => $request->nama_order,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order diperbarui!');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order dihapus!');
    }
}
