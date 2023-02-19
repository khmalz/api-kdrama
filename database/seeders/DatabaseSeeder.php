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
            'episodes' => 30,
            'genres' => ['Sci-Fi & Fantasy', 'Romance', 'Sageuk', 'Action'],
            'released' => '2022-06-18'
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
            'genres' => ['Crime', 'Sci-Fi & Fantasy', 'Thriller', 'Action', 'Romance', 'Comedy'],
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
            'genres' => ['Thriller', 'Action', 'Sci-Fi & Fantasy', 'Mystery', 'Drama'],
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

        KDrama::create([
            'title' => "Money Heist: Korea - Joint Economic Area",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Heist', 'Action', 'Thriller', 'Mystery', 'Crime'],
            'released' => '2022-06-24'
        ]);

        KDrama::create([
            'title' => "Revenge of Others",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Action', 'Thriller', 'Mystery', 'Drama'],
            'released' => '2022-11-09'
        ]);

        KDrama::create([
            'title' => "Work Later, Drink Now",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 24,
            'genres' => ['Comedy', 'Slice of life', 'Drama'],
            'released' => '2021-10-22'
        ]);

        KDrama::create([
            'title' => "Extraordinary Attorney Woo",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Law', 'Romance', 'Slice of life', 'Drama'],
            'released' => '2022-06-29'
        ]);

        KDrama::create([
            'title' => "Red Balloon",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 20,
            'genres' => ['Comedy', 'Family', 'Slice of life', 'Drama', 'Melodrama'],
            'released' => '2022-12-17'
        ]);

        KDrama::create([
            'title' => "Connect",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 6,
            'genres' => ['Mystery', 'Horror', 'Thriller', 'Crime', 'Sci-Fi & Fantasy'],
            'released' => '2022-12-07'
        ]);

        KDrama::create([
            'title' => "Under the Queen's Umbrella",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Historical', 'Sageuk', 'Comedy', 'Drama', 'Political'],
            'released' => '2022-10-15'
        ]);

        KDrama::create([
            'title' => "W: Two Worlds Apart",
            'year' => '2016',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Thriller', 'Action', 'Comedy', 'Romance', 'Sci-Fi & Fantasy'],
            'released' => '2016-07-20'
        ]);

        KDrama::create([
            'title' => "Pinocchio",
            'year' => '2014',
            'type' => 'series',
            'episodes' => 20,
            'genres' => ['Drama', 'Mystery', 'Comedy', 'Romance'],
            'released' => '2014-11-12'
        ]);

        KDrama::create([
            'title' => "Hospital Playlist",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 24,
            'genres' => ['Romance', 'Slice of life', 'Drama', 'Medical', 'Comedy'],
            'released' => '2020-03-12'
        ]);

        KDrama::create([
            'title' => "Vagabond",
            'year' => '2019',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Action', 'Thriller', 'Mystery', 'Crime', 'Romance'],
            'released' => '2019-09-20'
        ]);

        KDrama::create([
            'title' => "Doom at Your Service",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Comedy', 'Romance', 'Drama', 'Sci-Fi & Fantasy'],
            'released' => '2021-05-10'
        ]);

        KDrama::create([
            'title' => "Tomorrow",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Action', 'Thriller', 'Drama', 'Sci-Fi & Fantasy'],
            'released' => '2022-04-01'
        ]);

        KDrama::create([
            'title' => "Suspicious Partner",
            'year' => '2017',
            'type' => 'series',
            'episodes' => 32,
            'genres' => ['Mystery', 'Romance', 'Drama', 'Sci-Fi & Fantasy', 'Comedy'],
            'released' => '2017-09-27'
        ]);

        KDrama::create([
            'title' => "While You Were Sleeping",
            'year' => '2017',
            'type' => 'series',
            'episodes' => 32,
            'genres' => ['Mystery', 'Romance', 'Drama', 'Sci-Fi & Fantasy', 'Comedy'],
            'released' => '2017-09-27'
        ]);

        KDrama::create([
            'title' => "WMy ID is Gangnam Beauty",
            'year' => '2018',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Psychological', 'Romance', 'Youth', 'Drama', 'Comedy'],
            'released' => '2018-07-27'
        ]);

        KDrama::create([
            'title' => "Extracurricular",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 10,
            'genres' => ['Psychological', 'Crime', 'Youth', 'Drama'],
            'released' => '2020-04-29'
        ]);

        KDrama::create([
            'title' => "The K2",
            'year' => '2016',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Action', 'Thriller', 'Political', 'Romance'],
            'released' => '2016-09-23'
        ]);

        KDrama::create([
            'title' => "Blind",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Thriller', 'Mystery', 'Drama', 'Crime'],
            'released' => '2022-09-16'
        ]);

        KDrama::create([
            'title' => "Love in Contract",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Business'],
            'released' => '2022-09-21'
        ]);

        KDrama::create([
            'title' => "18 Again",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Comedy', 'Sci-Fi & Fantasy', 'Slice of life'],
            'released' => '2020-09-21'
        ]);

        KDrama::create([
            'title' => "The Forbidden Marriage",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Historical', 'Mystery', 'Comedy', 'Romance'],
            'released' => '2022-12-09'
        ]);

        KDrama::create([
            'title' => "Run On",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Slice of life', 'Drama', 'Sports'],
            'released' => '2020-12-16'
        ]);

        KDrama::create([
            'title' => "Because This Is My First Life",
            'year' => '2017',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Comedy', 'Romance', 'Slice of life', 'Drama'],
            'released' => '2017-10-09'
        ]);

        KDrama::create([
            'title' => "The Golden Spoon",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Psychological', 'Drama', 'Sci-Fi & Fantasy', 'Supernatural', 'Mystery'],
            'released' => '2022-09-23'
        ]);

        KDrama::create([
            'title' => "SKY Castle",
            'year' => '2018',
            'type' => 'series',
            'episodes' => 20,
            'genres' => ['Mystery', 'Family', 'Psychological', 'Drama', 'Comedy'],
            'released' => '2018-11-23'
        ]);

        KDrama::create([
            'title' => "Gaus Electronics",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Business', 'Comedy', 'Romance', 'Slice of life'],
            'released' => '2022-09-30'
        ]);

        KDrama::create([
            'title' => "Search: WWW",
            'year' => '2019',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Business', 'Comedy', 'Romance', 'Drama'],
            'released' => '2019-06-05'
        ]);

        KDrama::create([
            'title' => "The Law Cafe",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Comedy', 'Law', 'Romance', 'Drama'],
            'released' => '2022-09-05'
        ]);

        KDrama::create([
            'title' => "Find Me in Your Memory",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 32,
            'genres' => ['Romance', 'Drama', 'Melodrama', 'Mystery'],
            'released' => '2020-03-18'
        ]);

        KDrama::create([
            'title' => "Café Minamdang",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 18,
            'genres' => ['Mystery', 'Comedy', 'Romance'],
            'released' => '2022-06-27'
        ]);

        KDrama::create([
            'title' => "He Is Psychometric",
            'year' => '2019',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Thriller', 'Mystery', 'Comedy', 'Romance', 'Supernatural', 'Sci-Fi & Fantasy'],
            'released' => '2019-03-11'
        ]);

        KDrama::create([
            'title' => "One Dollar Lawyer",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Comedy', 'Law', 'Drama'],
            'released' => '2022-09-23'
        ]);

        KDrama::create([
            'title' => "Law School",
            'year' => '2021',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Mystery', 'Law', 'Crime', 'Drama'],
            'released' => '2021-04-14'
        ]);

        KDrama::create([
            'title' => "My Liberation Notes",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Romance', 'Slice of life', 'Drama', 'Melodrama'],
            'released' => '2022-04-09'
        ]);

        KDrama::create([
            'title' => "Love Revolution",
            'year' => '2020',
            'type' => 'series',
            'episodes' => 30,
            'genres' => ['Comedy', 'Romance', 'Youth', 'Drama'],
            'released' => '2020-09-01'
        ]);

        KDrama::create([
            'title' => "Ghost Doctor",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Comedy', 'Medical', 'Sci-Fi & Fantasy', 'Supernatural'],
            'released' => '2022-01-03'
        ]);

        KDrama::create([
            'title' => "Unlock My Boss",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Thriller', 'Mystery', 'Comedy', 'Sci-Fi & Fantasy'],
            'released' => '2022-12-07'
        ]);

        KDrama::create([
            'title' => "Cheer Up",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Mystery', 'Comedy', 'Romance', 'Youth'],
            'released' => '2022-10-03'
        ]);

        KDrama::create([
            'title' => "The Glory",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Revenge', 'Thriller', 'Drama'],
            'released' => '2022-12-30'
        ]);

        KDrama::create([
            'title' => "Agency",
            'year' => '2023',
            'type' => 'series',
            'episodes' => 16,
            'genres' => ['Business', 'Slice of life', 'Drama'],
            'released' => '2023-01-07'
        ]);

        KDrama::create([
            'title' => "Island",
            'year' => '2022',
            'type' => 'series',
            'episodes' => 12,
            'genres' => ['Action', 'Thriller', 'Horror', 'Sci-Fi & Fantasy'],
            'released' => '2022-12-30'
        ]);
    }
}