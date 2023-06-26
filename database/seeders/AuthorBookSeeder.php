<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $book1=Book::where('id', 1)->first();
        $book1->authors()->attach(1);

        $book2=Book::where('id', 2)->first();
        $book2->authors()->attach(4);

        $book3=Book::where('id', 3)->first();
        $book3->authors()->attach(3);
        //
    }
}
