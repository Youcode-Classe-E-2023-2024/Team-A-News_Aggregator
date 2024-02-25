<?php

namespace Database\Seeders;

use App\Models\FeedLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            ['link' => 'Politics'],
            ['link' => 'Technology'],
        ];

        foreach ($links as $link) {
            FeedLink::create($category);
        }
    }
}
