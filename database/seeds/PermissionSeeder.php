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

        //administrative access
        $permission = Permission::create(['name' => 'administrative-access']);
        $administrative->givePermissionTo($permission);

    }
}
