<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publication;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Publication::create([
            new Publication([
                'title' => 'My first publication',
                'content' => 'Whatever',
                'author' => 'me ig'
            ]),
            new Publication([
                'title' => 'My second publication',
                'content' => 'Whatever',
                'author' => 'me ig'
            ]),
            new Publication([
                'title' => 'My third publication',
                'content' => 'Whatever',
                'author' => 'me ig'
            ])
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
