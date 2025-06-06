<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableStatusController extends Controller
{
    public function index()
    {
        $tables = Table::with('orders')->get();
        return view('dashboard.staff.tables.index', compact('tables'));
    }

    public function clear(Table $table)
    {
        $table->update(['is_full' => 0]);
        return redirect()->back()->with('success', 'Status meja berhasil dikosongkan.');
    }
}
