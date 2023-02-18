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
            'genres' => ['Sci-Fi & Fantasy', 'Romance', 'Sageuk', 'Action'],
            'released' => '2022-06-18'
        ]);

        KDrama::create([
            'title' => "Alchemy of Souls: Light and Shadow",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 10,
            'genres' => ['Sci-Fi & Fantasy', 'Romance', 'Sageuk', 'Action'],
            'released' => '2022-12-10'
        ]);

        KDrama::create([
            'title' => "All of Us Are Dead",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Action', 'Drama', 'Sci-Fi & Fantasy'],
            'released' => '2022-01-28'
        ]);

        KDrama::create([
            'title' => "Squid Game",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 9,
            'genres' => ['Action', 'Drama', 'Survival', 'Thriller', 'Horror'],
            'released' => '2021-09-17'
        ]);

        KDrama::create([
            'title' => "Business Proposal",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Romance', 'Comedy'],
            'released' => '2022-02-28'
        ]);

        KDrama::create([
            'title' => "Weak Hero Class 1",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 8,
            'genres' => ['Action', 'Youth', 'Drama'],
            'released' => '2022-11-18'
        ]);

        KDrama::create([
            'title' => "Big Mouth",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Hardboiled', 'Noir', 'Legal', 'Crime'],
            'released' => '2022-07-29'
        ]);

        KDrama::create([
            'title' => "Strong Woman Do Bong Soon",
            'year' => '2017',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Crime', 'Fantasy', 'Thriller', 'Action', 'Romance', 'Comedy'],
            'released' => '2017-02-24'
        ]);

        KDrama::create([
            'title' => "Hometown Cha-Cha-Cha",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Slice of life'],
            'released' => '2021-08-28'
        ]);

        KDrama::create([
            'title' => "Love Alarm",
            'year' => '2019',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Drama', 'Youth'],
            'released' => '2019-08-22'
        ]);

        KDrama::create([
            'title' => "Twenty Five Twenty One",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Coming-of-age'],
            'released' => '2022-02-12'
        ]);

        KDrama::create([
            'title' => "Vincenzo",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 20,
            'genres' => ['Drama', 'Dark', 'Comedy', 'Crime'],
            'released' => '2021-02-20'
        ]);

        KDrama::create([
            'title' => "Descendants of the Sun",
            'year' => '2016',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Drama', 'Romance', 'Action', 'Melodrama'],
            'released' => '2016-02-24'
        ]);

        KDrama::create([
            'title' => "Kingdom",
            'year' => '2019',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Historical period', 'Political drama', 'Action', 'Horror', 'Thriller'],
            'released' => '2019-01-25'
        ]);

        KDrama::create([
            'title' => "Mr. Queen",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 20,
            'genres' => ['Sageuk', 'Romance', 'Comedy', 'Body swap', 'Sci-Fi & Fantasy'],
            'released' => '2020-12-12'
        ]);

        KDrama::create([
            'title' => "Reborn Rich",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Business', 'Drama', 'Sci-Fi & Fantasy', 'Romance', 'Revenge'],
            'released' => '2022-11-18'
        ]);

        KDrama::create([
            'title' => "What's Wrong with Secretary Kim",
            'year' => '2018',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Mystery'],
            'released' => '2018-06-06'
        ]);

        KDrama::create([
            'title' => "The World of the Married",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Melodrama', 'Romance', 'Family', 'Thriller', 'Drama'],
            'released' => '2020-03-27'
        ]);

        KDrama::create([
            'title' => "Hotel Del Luna",
            'year' => '2019',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Dark Fantasy', 'Drama'],
            'released' => '2019-07-12'
        ]);

        KDrama::create([
            'title' => "Welcome to Waikiki",
            'year' => '2018',
            'type' => 'series',
            'episodes' => 36,
            'genres' => ['Romance', 'Comedy'],
            'released' => '2018-02-05'
        ]);

        KDrama::create([
            'title' => "Happiness",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Thriller', 'Action', 'Fantasy', 'Mystery', 'Drama'],
            'released' => '2021-11-05'
        ]);

        KDrama::create([
            'title' => "Our Beloved Summer",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Life', 'Youth', 'Drama'],
            'released' => '2021-12-06'
        ]);

        KDrama::create([
            'title' => "Hi Bye, Mama!",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Drama', 'Sci-Fi & Fantasy', 'Comedy'],
            'released' => '2020-02-22'
        ]);

        KDrama::create([
            'title' => "Itaewon Class",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Drama', 'Romance'],
            'released' => '2020-01-31'
        ]);

        KDrama::create([
            'title' => "Backstreet Rookie",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Slice of life'],
            'released' => '2020-06-19'
        ]);

        KDrama::create([
            'title' => "Memories of the Alhambra",
            'year' => '2018',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Sci-Fi & Fantasy', 'Action', 'Thriller', 'Romance', 'Mystery', 'Drama'],
            'released' => '2018-12-01'
        ]);
    }
}