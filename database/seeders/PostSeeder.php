<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Post::factory()->create([
            'category_id' => 1,
            'title' => 'About family life',
            'slug' => 'first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, voluptate officiis! Commodi, pariatur. Cum, suscipit placeat libero cumque blanditiis a ipsa est ex quo itaque voluptas ipsam fugit quidem doloribus.'

        ]);
        \App\Models\Post::factory()->create([
            'category_id' => 1,
            'title' => 'About family life',
            'slug' => 'family-life',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, voluptate officiis! Commodi, pariatur. Cum, suscipit placeat libero cumque blanditiis a ipsa est ex quo itaque voluptas ipsam fugit quidem doloribus.'

        ]);

        \App\Models\Post::factory()->create([
            'category_id' => 2,
            'title' => 'How to change career',
            'slug' => 'career-change',
            'excerpt' => 'How to do it well and on time.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, voluptate officiis! Commodi, pariatur. Cum, suscipit placeat libero cumque blanditiis a ipsa est ex quo itaque voluptas ipsam fugit quidem doloribus.'

        ]);

        \App\Models\Post::factory()->create([
            'category_id' => 2,
            'title' => 'Workplace relationships',
            'slug' => 'workplace-relationships',
            'excerpt' => 'How to get well with all co-workers.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, voluptate officiis! Commodi, pariatur. Cum, suscipit placeat libero cumque blanditiis a ipsa est ex quo itaque voluptas ipsam fugit quidem doloribus.'

        ]);
    }
}
