<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        $staff = User::create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff123'),
        ]);

        $admin->assignRole('admin');
        $staff->assignRole('staff');
    }
}
