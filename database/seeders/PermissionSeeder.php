<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // permission untuk mengelola users
        Permission::updateOrCreate(['name' => 'show users']);
        Permission::updateOrCreate(['name' => 'add users']);
        Permission::updateOrCreate(['name' => 'edit users']);
        Permission::updateOrCreate(['name' => 'delete users']);

        // permission untuk mengelola karyawan

        // permission untuk mengelola pt (perusahaan)
        
    }
}
