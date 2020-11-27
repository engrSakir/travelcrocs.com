<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrative= Role::find(1);
        $vendor= Role::find(2);
        $user= Role::find(3);

        //administrative access
        $permission = Permission::create(['name' => 'administrative-access']);
        $administrative->givePermissionTo($permission);

        //vendor access
        $permission = Permission::create(['name' => 'vendor-access']);
        $vendor->givePermissionTo($permission);

        //user access
        $permission = Permission::create(['name' => 'user-access']);
        $user->givePermissionTo($permission);

    }
}
