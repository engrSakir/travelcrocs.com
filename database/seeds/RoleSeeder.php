<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'administrative']);
        Role::create(['name' => 'vendor']);
        Role::create(['name' => 'user']);

        User::find(1)->assignRole('administrative');
        User::find(2)->assignRole('vendor');
        User::find(3)->assignRole('user');

    }
}
