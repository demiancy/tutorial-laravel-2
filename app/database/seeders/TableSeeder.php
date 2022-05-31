<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;
use App\Enums\TableStatus;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++) {
            Table::create([
                'name'         => "Table $i",
                'guest_number' => random_int(1, 6),
                'status'       => TableStatus::getRandomValue(),
                'location'     => "position $i",
            ]);
        }
    }
}
