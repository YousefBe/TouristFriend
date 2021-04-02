<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $user = User::create([
            'name' => 'joe',
            'email' => 'test@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $usrRole = Role::find(2);
        // attach the role
        $user->attachRole($usrRole);
        // now the permissions
        $user->attachPermissions($usrRole->permissions);


        $admin = User::create([
            'name' => 'adminBeh',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);
        // gets admin role from the db
        $adminRole = Role::find(1);
        // attach the role
        $admin->attachRole($adminRole);
        // now the permissions
        $admin->attachPermissions($adminRole->permissions);
    }
}