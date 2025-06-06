<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $orders = Order::with('table')->where('status', 'paid')->orWhere('status', 'pending')->latest()->get();
        return view('dashboard.staff.transactions.index', compact('orders'));
    }

    public function confirm(Order $order)
    {
        if ($order->status === 'paid') {
            $order->update(['status' => 'coming']);
        } elseif ($order->status === 'coming') {
            $order->update(['status' => 'completed']);
        }

        return redirect()->back()->with('success', 'Status pesanan diperbarui!');
    }
}
