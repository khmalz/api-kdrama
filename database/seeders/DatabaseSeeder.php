<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KDrama;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        KDrama::create([
            'title' => 'Crash Landing on You',
            'year' => '2019',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Comedy', 'Romance'],
            'released' => '2019-12-14'
        ]);

        KDrama::create([
            'title' => 'True Beauty',
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Slice of life', 'Coming-of-age'],
            'released' => '2020-12-09'
        ]);

        KDrama::create([
            'title' => "It's Okay to Not Be Okay",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Comedy', 'Romance'],
            'released' => '2020-06-20'
        ]);

        KDrama::create([
            'title' => "Start-Up",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Slice of life'],
            'released' => '2020-10-17'
        ]);

        KDrama::create([
            'title' => "Alchemy of Souls",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 20,
            'genres' => ['Fantasy', 'Romance', 'Sageuk', 'Action'],
            'released' => '2022-06-18'
        ]);

        KDrama::create([
            'title' => "Alchemy of Souls: Light and Shadow",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 10,
            'genres' => ['Fantasy', 'Romance', 'Sageuk', 'Action'],
            'released' => '2022-12-10'
        ]);
    }
}