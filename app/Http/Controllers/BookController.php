<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // show all books
        $books=Book::all();
        return view ('books', compact('books'));
    }
    public function details($id)
    {
        // show all books
        $book=Book::where('id','=', $id)->first();
        $publisher = $book->publisher()->first();
    
        return view('booksdetails', ['book' => $book, 'publisher' => $publisher]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();

        return view('book_edit', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::findOrFail($id);

        $book->update([
            'title' => $request->input('book_title'),
            'year' => $request->input('book_year'),
            'pages' => $request->input('book_pages'),
            'description' => $request->input('description')
            
        ]);
    
        $selectedAuthors = $request->input('authors', []);
        $book->authors()->sync($selectedAuthors);

        // $book=Book::where('id','=', $id)->first();
        // $book->title = $request->book_title;
        // $book->pages = $request->book_pages;
        // $book->year = $request->book_year;
        // $book->description = $request->book_description;
        // $book->save();
        // $selectedAuthors = $request->input('authors', []);
        // foreach ($selectedAuthors as $author) {
        //     $book->authors()->attach($author->id);
        // }
        
        /* return redirect(action([BookController::class, 'index'])); */ //redirect uz galveno lapu
        return redirect(action([BookController::class, 'details'],['id'=> $book->id])); //redirect uz grāmatas lapu
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
