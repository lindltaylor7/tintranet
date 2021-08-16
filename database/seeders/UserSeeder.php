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
            'name' => 'Bryan Darien',
            'email' => 'barias@gmail.com',
            'phone' => '987654321',
            'password' => bcrypt('123456'),
            'status' => 1,
            'area_id' => 1
        ])->assignRole('Administrador');
    }
}
