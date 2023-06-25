<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'Lilija Berzinska', 'pseudonym' => '' , 'birthday' => '1978-12-18', 'country' => 'Latvija']);
        Author::create(['name' => 'Dace Judina', 'pseudonym' => '' , 'birthday' => '1970-05-13', 'country' => 'Latvija']);
        Author::create(['name' => 'Dzintra Šulce', 'pseudonym' => '' , 'birthday' => '1953-06-12', 'country' => 'Latvija']);
        Author::create(['name' => 'Vizma Belševica', 'pseudonym' => '' ,'birthday' => '1931-05-30', 'country' => 'Latvija']);

        Author::create(['name' => 'Kristaps Vecgrāvis', 'pseudonym' => '' , 'birthday' => '1980-01-05', 'country' => 'Latvija']);
        Author::create(['name' => 'Ilmārs Šlāpins','pseudonym' => '' ,  'birthday' => '1968-11-08', 'country' => 'Latvija']);
        Author::create(['name' => 'Inese Zandere','pseudonym' => '' ,  'birthday' => '1958-09-15', 'country' => 'Latvija']);
        Author::create(['name' => 'Jānis Pliekšāns', 'pseudonym' => 'Rainis', 'birthday' => '1865-09-11', 'country' => 'Latvija']);
        Author::create(['name' => 'Agata Kristi', 'pseudonym' => '' , 'birthday' => '1890-09-15', 'country' => 'Lielbritānija']);
    
    }
}
