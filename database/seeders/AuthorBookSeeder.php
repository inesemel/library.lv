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
        $book3->authors()->attach(4);

        $book4=Book::where('id', 4)->first();
        $book4->authors()->attach(4);
        
        $book5=Book::where('id', 5)->first();
        $book5->authors()->attach(8);

        $book6=Book::where('id', 6)->first();
        $book6->authors()->attach(2);

        $book7=Book::where('id', 7)->first();
        $book7->authors()->attach(9);

        $book8=Book::where('id', 8)->first();
        $book8->authors()->attach(9);

        $book9=Book::where('id', 9)->first();
        $book9->authors()->attach(9);

        $book10=Book::where('id', 10)->first();
        $book10->authors()->attach(1);

        $book11=Book::where('id', 11)->first();
        $book11->authors()->attach(2);

        $book12=Book::where('id', 12)->first();
        $book12->authors()->attach(2);

        $book13=Book::where('id', 13)->first();
        $book13->authors()->attach(2);

        $book14=Book::where('id', 14)->first();
        $book14->authors()->attach(2);

        $book15=Book::where('id', 15)->first();
        $book15->authors()->attach(2);

        $book16=Book::where('id', 16)->first();
        $book16->authors()->attach(2);

        $book17=Book::where('id', 17)->first();
        $book17->authors()->attach(5);

        $book18=Book::where('id', 18)->first();
        $book18->authors()->attach(6);

        $book19=Book::where('id', 19)->first();
        $book19->authors()->attach(7);

        $book20=Book::where('id', 20)->first();
        $book20->authors()->attach(7);

        $book21=Book::where('id', 21)->first();
        $book21->authors()->attach(7);
    }
}
