<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Valentina Meza',
            'email' => 'vmeza@gmail.com',
            'phone' => '987654321',
            'password' => bcrypt('123456'),
            'status' => 1,
            'area_id' => 1
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Ivon Sinche',
            'email' => 'isinche@gmail.com',
            'phone' => '987654321',
            'password' => bcrypt('123456'),
            'status' => 1,
            'area_id' => 1
        ])->assignRole('Jefe Departamento');

        User::create([
            'name' => 'Lind Taylor',
            'email' => 'riuyagami@gmail.com',
            'phone' => '987654321',
            'password' => bcrypt('123456'),
            'status' => 1,
            'area_id' => 1
        ])->assignRole('Jefe Area');

        User::create([
            'name' => 'Bryan Darien',
            'email' => 'barias@gmail.com',
            'phone' => '987654321',
            'password' => bcrypt('123456'),
            'status' => 1,
            'area_id' => 1
        ])->assignRole('Jefe Proyecto');

        User::create([
            'name' => 'Johan Meza',
            'email' => 'jmeza@gmail.com',
            'phone' => '987654321',
            'password' => bcrypt('123456'),
            'status' => 1,
            'area_id' => 1
        ])->assignRole('Practicante');

        User::create([
            'name' => 'Natalia',
            'email' => 'nn@gmail.com',
            'phone' => '985474521',
            'password' => bcrypt('123456'),
            'status' => 1,
            'area_id' => 2
        ])->assignRole('Finanzas');

    }
}
