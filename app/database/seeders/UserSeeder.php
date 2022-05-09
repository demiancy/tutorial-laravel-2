<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'              => 'Usuario Administrador',
                'email'             => 'admin@noemail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('desa'),
                'roles'             => ['admin']
            ]
        ];

        foreach ($data as $user) {
            User::create(Arr::except($user, ['roles']))
                ->assignRole($user['roles']);
        }
    }
}
