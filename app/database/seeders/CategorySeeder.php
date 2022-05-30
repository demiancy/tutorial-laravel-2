<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++) {
            Category::create([
                'name'        => "Category $i",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel posuere odio, quis venenatis metus. Sed mauris eros, vehicula eget posuere at, blandit eu velit. Vestibulum venenatis libero tellus, nec accumsan ex gravida eu.',
                'image'       => 'default.png'
            ]);
        }
    }
}
