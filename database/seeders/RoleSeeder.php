<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat role user / level user
        $admin = Role::updateOrCreate(['name' => 'admin']);
        $operator = Role::updateOrCreate(['name' => 'operator']);

        $admin->givePermissionTo(Permission::all());
        $operator->givePermissionTo(['show users', 'add users', 'edit users']);
    }
}
