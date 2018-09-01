<?php

use Findtrans\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        $admin = Role::create([
            'name' => "admin"
        ]);

        $createCity = Permission::create([
            'name' => 'create:city'
        ]);

        $readCity = Permission::create([
            'name' => 'read:city'
        ]);

        $updateCity = Permission::create([
            'name' => 'update:city'
        ]);

        $deleteCity = Permission::create([
            'name' => 'delete:city'
        ]);

        $admin->givePermissionTo($createCity);
        $admin->givePermissionTo($readCity);
        $admin->givePermissionTo($updateCity);
        $admin->givePermissionTo($deleteCity);

        $user->assignRole($admin);
    }
}
