<?php

namespace Database\Seeders;

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
        $categories = [
            ['category' => 'World'],
            ['category' => 'Africa'],
            ['category' => 'Europe'],
            ['category' => 'Americas'],
            ['category' => 'U.S.'],
            ['category' => 'Politics'],
            ['category' => 'Technology'],
            ['category' => 'Business'],
            ['category' => 'Sports'],
            ['category' => 'Science'],
            ['category' => 'Health'],
            ['category' => 'Arts'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
