<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Jefe Departamento']);
        $role3 = Role::create(['name'=> 'Jefe Area']);
        $role4 = Role::create(['name' => 'Jefe Proyecto']);
        $role5 = Role::create(['name' => 'Practicante']);

        Permission::create(['name' => 'Inicio'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'Perfil'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        
        Permission::create(['name' => 'Usuarios'])->assignRole($role1);
        Permission::create(['name' => 'Departamentos'])->assignRole($role1);
        Permission::create(['name' => 'Areas'])->assignRole($role1);
        Permission::create(['name' => 'Roles'])->assignRole($role1);
        
    }
}
