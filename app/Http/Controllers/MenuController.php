<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {}

    public function create($tableId)
    {
        $table = Table::findOrFail($tableId);
        $menus = Menu::all();

        return view('menu', compact('menus', 'table'));
    }

    public function createWithTable(Table $table)
{
    $menus = Menu::all();
    return view('user.menu', compact('table', 'menus'));
}

    public function store(Request $request) {}

    public function show(Order $order) {}

    public function edit(Order $order) {}

    public function update(Request $request, Order $order) {}

    public function destroy(Order $order) {}
}
