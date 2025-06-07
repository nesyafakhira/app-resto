<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name'  => 'Classic Sirloin Steak',
            'price' => 95000,
            'type'  => 'food',
        ]);

        Menu::create([
            'name'  => 'Coffee Latte (hot/iced)',
            'price' => 24000,
            'type'  => 'drink',
        ]);
    }
}
