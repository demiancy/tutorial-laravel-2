<?php

namespace Database\Seeders;

use App\Models\TableLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            MenuSeeder::class,
            TableLocationSeeder::class,
            TableSeeder::class,
        ]);
    }
}
