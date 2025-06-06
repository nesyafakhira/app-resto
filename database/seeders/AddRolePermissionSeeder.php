<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AddRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Admin
            'tambah_menu',
            'tambah_meja',
            'tambah_staff',

            // Staff
            'konfirmasi_transaksi',
            'konfirmasi_meja',
        ];

        foreach ($permissions as $permission) {
            Permission::create([ 'name' => $permission ]);
        }

        $roles = [
            'admin',
            'staff'
        ];

        foreach ($roles as $role) {
            Role::create([ 'name' => $role ]);
        };

        $role_admins = [
            'tambah_menu',
            'tambah_meja',
            'tambah_staff',
        ];

        foreach ($role_admins as $role_admin) {
            $roleAdmin = Role::findByName('admin');
            $roleAdmin->givePermissionTo($role_admin);
        }

        $role_staffs = [
            'konfirmasi_transaksi',
            'konfirmasi_meja',
        ];

        foreach ($role_staffs as $role_staff) {
            $rolestaff = Role::findByName('staff');
            $rolestaff->givePermissionTo($role_staff);
        }
    }
}
