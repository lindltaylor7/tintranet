<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StatuSeeder::class);
        //\App\Models\User::factory(10)->create()->assignRole('Practicante');
    }
}
