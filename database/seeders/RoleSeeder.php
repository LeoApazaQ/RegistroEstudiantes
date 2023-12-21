<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// roles y permisos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Estudiante']);

        //creando permisos

        Permission::create(['name' => 'admin.estudiante.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.estudiante.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.estudiante.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.estudiante.destroy'])->syncRoles([$role1]);

    }
}
