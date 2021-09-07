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
        $role5 = Role::create(['name' => 'Colaborador']);
        $role6 = Role::create(['name' => 'Practicante']);

        Permission::create(['name' => 'Inicio'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);
        Permission::create(['name' => 'Perfil'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);

        Permission::create(['name' => 'Usuarios'])->assignRole($role1);
        Permission::create(['name' => 'Departamentos'])->assignRole($role1);
        Permission::create(['name' => 'Areas'])->syncRoles($role1);
        Permission::create(['name' => 'Roles'])->assignRole($role1);
        Permission::create(['name' => 'Clientes'])->assignRole($role1);

        Permission::create(['name' => 'Metas'])->assignRole($role1);

        Permission::create(['name' => 'Proyectos'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);
        Permission::create(['name' => 'ListarProyecto'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);
        Permission::create(['name' => 'CrearProyecto'])->assignRole($role1);
        Permission::create(['name' => 'EditarProyecto'])->assignRole($role1);
        Permission::create(['name' => 'EliminarProyecto'])->assignRole($role1);
        Permission::create(['name' => 'EstadoProyecto'])->syncRoles([$role3, $role4]);
        Permission::create(['name' => 'UsuarioProyecto'])->syncRoles([$role3, $role4]);
        Permission::create(['name' => 'OpcionesProyecto'])->syncRoles([$role1, $role3, $role4]);

        Permission::create(['name' => 'ListarTarea'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);
        Permission::create(['name' => 'CrearTarea'])->syncRoles([$role3, $role4]);
        Permission::create(['name' => 'EditarTarea'])->syncRoles([$role3, $role4]);
        Permission::create(['name' => 'EliminarTarea'])->syncRoles([$role3, $role4]);
        Permission::create(['name' => 'EstadoTarea'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);        
    }
}
