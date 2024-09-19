<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adi = User::updateOrCreate([
            'name'      => 'Adi',
            'email'     => 'adi@email.com',
            'password'  => bcrypt ('password'),
        ]);
        $adi->assignRole('admin');

        $budi = User::updateOrCreate([
            'name'      => 'Budi',
            'email'     => 'budi@email.com',
            'password'  => bcrypt ('password'),
        ]);
        $budi->assignRole('operator');

        $cindy = User::updateOrCreate([
            'name'      => 'Cindy',
            'email'     => 'cindy@email.com',
            'password'  => bcrypt ('password'),
        ]);
        $cindy->assignRole('operator');
        $cindy->givePermissionTo('delete users');
    }
}
