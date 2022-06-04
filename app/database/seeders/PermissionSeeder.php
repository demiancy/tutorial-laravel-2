<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $data = [
            'view_admin',
            'view_categories',
            'update_categories',
            'create_categories',
            'delete_categories',
            'view_menus',
            'update_menus',
            'create_menus',
            'delete_menus',
            'view_tables',
            'update_tables',
            'create_tables',
            'delete_tables',
            'view_reservations',
            'update_reservations',
            'create_reservations',
            'delete_reservations',
            'view_users',
            'update_users',
            'create_users',
            'delete_users',
            'view_roles',
            'update_roles',
            'create_roles',
            'delete_roles',
        ];

        foreach ($data as $name) {
            Permission::create(['name' => $name]);
        }
    }
}
