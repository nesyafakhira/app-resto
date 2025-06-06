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
            'name'  => 'Mie Ayam',
            'price' => 15000,
            'type'  => 'food',
        ]);

        Menu::create([
            'name'  => 'Es Teh Manis',
            'price' => 5000,
            'type'  => 'drink',
        ]);
    }
}
