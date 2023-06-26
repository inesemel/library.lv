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
        $zabc->books()->create(['title' => 'Vislielākais gardums pasaulē', 'pages' => 28, 'year' => 2018,
         'genre' => 'Bērnu literatūra', 'reprint' => false, 'cased' => false, 'description' => '']);
        $zabc->books()->create(['title' => 'Bille', 'pages' => 288, 'year' => 2023,
         'genre' => 'Romāns, autobiogrāfija', 'reprint' => false, 'cased' => true, 'description' => '']);
        $zabc->books()->create(['title' => 'Zem zilās debesu bļodas', 'pages' => 64, 'year' => 2017,
         'genre' => 'Bērnu literatūra', 'reprint' => true, 'cased' => false, 'description' => '']);
        $zabc->books()->create(['title' => 'Billes skaistā jaunība', 'pages' => 256, 'year' => 2023,
         'genre' => 'Romāns, autobiogrāfija', 'reprint' => false, 'cased' => false, 'description' => '']);
        $zabc->books()->create(['title' => 'Zirņa bērni', 'pages' => 32, 'year' => 2013,
         'genre' => 'Dzeja bērniem', 'reprint' => true, 'cased' => false, 'description' => '']);
        $zabc->books()->create(['title' => 'Tik vienkārši', 'pages' => 680, 'year' => 2021,
         'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '']);
        $zabc->books()->create(['title' => 'Slepkavība Austrumu ekspresī', 'pages' => 256, 'year' => 2022,
         'genre' => 'Detektīvs', 'reprint' => true, 'cased' => false, 'description' => '']);
        $zabc->books()->create(['title' => 'Nāve uz Nīlas', 'pages' => 320, 'year' => 2022,
         'genre' => 'Detektīvs', 'reprint' => true, 'cased' => false, 'description' => '']);
        $zabc->books()->create(['title' => 'Erkila Puaro Ziemassvētki', 'pages' => 270, 'year' => 2021,
         'genre' => 'Detektīvs', 'reprint' => true, 'cased' => false, 'description' => '']);

        $lvmed = Publisher::where('title', 'Latvijas Mediji')->first();
        $lvmed->books()->create(['title' => 'Ronēns Mākonītis', 'pages' => 38, 'year' => 2023,
        'genre' => 'Bērnu literatūra', 'reprint' => false, 'cased' => false, 'description' => '']);
        $lvmed->books()->create(['title' => 'Dīvainais Līgovakars', 'pages' => 358, 'year' => 2022,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => false, 'description' => '']);
        $lvmed->books()->create(['title' => 'Ziemas blūzs', 'pages' => 496, 'year' => 2021,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '']);
        $lvmed->books()->create(['title' => 'Lāsts', 'pages' => 334, 'year' => 2019,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '']);
        $lvmed->books()->create(['title' => 'Lāsts', 'pages' => 334, 'year' => 2019,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '']);
        $lvmed->books()->create(['title' => 'Melnā suņa kabinets', 'pages' => 228, 'year' => 2023,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '']);

        $dgram = Publisher::where('title', 'Dienas Grāmata')->first();
        $dgram->books()->create(['title' => 'Sešas pēdas', 'pages' => 352, 'year' => 2023,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '']);

        $lkomb = Publisher::where('title', 'Literatūras KOMBAINS')->first();
        $lkomb->books()->create(['title' => 'Vaska ezers', 'pages' => 84, 'year' => 2022,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '']);

        $neput = Publisher::where('title', 'Neputns')->first();
        $neput->books()->create(['title' => 'Never', 'pages' => 104, 'year' => 2023,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '']);
        $neput->books()->create(['title' => 'Mantojumi', 'pages' => 104, 'year' => 2021,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '']);
        $neput->books()->create(['title' => 'Putna miegā', 'pages' => 80, 'year' => 2014,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '']);
        $neput->books()->create(['title' => 'Kuģa žurnāls', 'pages' => 480, 'year' => 2016,
        'genre' => 'Dienasgrāmata', 'reprint' => false, 'cased' => true, 'description' => '']);
        //
    }
}
