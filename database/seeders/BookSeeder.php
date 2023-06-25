<?php

namespace Database\Seeders;

use App\Models\Publisher;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zabc = Publisher::where('title', 'Zvaigzne ABC')->first();
        $zabc->publishers()->create(['title' => 'Vislielākais gardums pasaulē', 'pages' => '28', 'year' => '2018',
         'genre' => 'Bērnu literatūra', 'reprint' => 'false', 'cased' => 'false', 'description' => '']);
        $zabc->publishers()->create(['title' => 'Bille', 'pages' => '288', 'year' => '2023',
         'genre' => 'Romāns, autobiogrāfija', 'reprint' => 'false', 'cased' => 'true', 'description' => '']);
        $zabc->publichers()->create(['title' => 'Zem zilās debesu bļodas', 'pages' => '64', 'year' => '2017',
         'genre' => 'Bērnu literatūra', 'reprint' => 'true', 'cased' => 'false', 'description' => '']);


        //
    }
}
