<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permissions
        $permissons = [
            'view_permissions',
            'view_roles',
            'edit_roles',
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'master_kerusakan',
            'master_gejala',
            'master_rule',

        ];

        foreach ($permissons as $key => $permission) {
            Permission::create(['name' => $permission]);
        }


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'SUPERADMIN']);

        $role2 = Role::create(['name' => 'ADMIN']);
        $role2->givePermissionTo('view_permissions');
        $role2->givePermissionTo('view_roles');
        $role2->givePermissionTo('edit_roles');

        $user = \App\User::find(1);
        $user->assignRole($role1);
    }
}
