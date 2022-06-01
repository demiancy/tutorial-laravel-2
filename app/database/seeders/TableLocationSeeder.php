<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TableLocation;

class TableLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 15; $i++) {
            TableLocation::create([
                'name'        => "Location $i",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel posuere odio, quis venenatis metus.'
            ]);
        }
    }
}
