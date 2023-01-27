<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Category::factory()->create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
    }
}
