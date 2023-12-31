<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\BookUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        if (Gate::denies('is-admin')) {
            abort(403);
        }

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
        if (Gate::denies('is-admin')) {
            abort(403);
        }

        $request->validate([
            'book_title' =>'required|max:255',
            'book_year' => 'integer|required|max:2023',
            'book_pages' => 'integer|required|gt:0',
            'description' => 'required', //noņēmu nullable un string
            'book_genre' => 'required|max:255',
            'book_image' => 'required'
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
        $book->image_url = $request->input('book_image');

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
        if (Gate::denies('is-admin')) {
            abort(403);
        }
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
        if (Gate::denies('is-admin')) {
            abort(403);
        }

         $request->validate([
            'book_title' =>'required|max:255',
            'book_year' => 'integer|required|max:2023',
            'book_pages' => 'integer|required|gt:0',
            'book_image' => 'required',
            'description' => 'required' //es saprotu, ka grib, lai tas būtu arī
            //nullable, bet nestrādā, jo laikam datubāžu veidošanā tas ir uzlikts,
            //kā not NULL, jo nevar citādāk palaist
        ]);
        $book = Book::findOrFail($id);

        $book->update([
            'title' => $request->input('book_title'),
            'year' => $request->input('book_year'),
            'pages' => $request->input('book_pages'),
            'description' => $request->input('description'),
            'publisher_id' => $request->input('publisher_id'),
            'image_url' => $request->input('book_image')
            
        ]);
    
        $selectedAuthors = $request->input('authors', []);
        $book->authors()->sync($selectedAuthors);
        $book->save(); //idk

        
        //return redirect(action([BookController::class, 'index']));
        return redirect(action([BookController::class, 'details'],['id'=> $book->id]));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Gate::denies('is-admin')) {
            abort(403);
        }

        $book = Book::findOrFail($id);
        $book->authors()->detach();
        $book->delete();
        return redirect('/book');
    }
}
