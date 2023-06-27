<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
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
        $authors = Author::orderBy('name')->get();
        $publishers = Publisher::orderBy('title')->get();
        //return view('book_new', array('publishers' =>$publishers, 'authors' => $authors));
        
        return view('book_new', ['authors' => $authors, 'publishers' => $publishers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'book_title' =>'required|max:255',
            'book_year' => 'integer|required|max:2023',
            'book_pages' => 'integer|required|gt:0',
            'description' => 'string|nullable',
            'book_genre' => 'string|required|max:255'
        ]);
        $book = new Book;

        $book->title = $request->input('book_title');
        $book->pages = $request->input('book_pages');
        $book->year = $request->input('book_year');
        $book->description = $request->input('description');
        $book->genre = $request->input('book_genre');
        $book->cased = $request->has('cased');
        $book->reprint = $request->has('reprint');
        $book->publisher_id = $request->input('publisher_id');

        $book->save();
        $selectedAuthors = $request->input('authors', []);
        $book->authors()->attach($selectedAuthors);
        return redirect(action([BookController::class, 'index']));
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
        $publishers = Publisher::orderBy('title')->get();

        return view('book_edit', compact('book', 'authors', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'book_title' =>'required|max:255',
            'book_year' => 'integer|required|max:2023',
            'book_pages' => 'integer|required|gt:0',
            'description' => 'string|nullable'
        ]);
        $book = Book::findOrFail($id);

        $book->update([
            'title' => $request->input('book_title'),
            'year' => $request->input('book_year'),
            'pages' => $request->input('book_pages'),
            'description' => $request->input('description'),
            'publisher_id' => $request->input('publisher_id')
            
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
        
        //return redirect(action([BookController::class, 'index']));
        return redirect(action([BookController::class, 'details'],['id'=> $book->id]));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
