<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publisher::create(['title' => 'Zvaigzne ABC', 'address'=>'Biķernieku iela 19, Rīga, LV-1039']);
        Publisher::create(['title' => 'Latvijas Mediji', 'address'=>'Toma iela 4, Rīga, LV-1003']);
        Publisher::create(['title' => 'Dienas Grāmata', 'address'=>'Mūkusalas iela 15a, Rīga, LV-1004']);
        Publisher::create(['title' => 'Literatūras KOMBAINS', 'address'=>'Balvu nov., Kubulu pag., Kubuli, Balvu iela 4 - 9, LV-4566']);
        Publisher::create(['title' => 'Neputns', 'address'=>'Tērbatas iela 49/51, Rīga, LV-1011']);
        //
    }
}
