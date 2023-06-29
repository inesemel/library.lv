<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Gate;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $authors=Author::all();
        return view ('authors', compact('authors'));
    }

    public function author_details($id)
    {
        $author=Author::where('id','=', $id)->first();
        return view('authordetails', ['author' => $author]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Gate::denies('is-admin')) {
            abort(403);
        }
        $books = Book::orderBy('title')->get();
        return view('author_new', ['books' => $books]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_name' =>'required|max:255',
            'author_pseudonym' => 'required|max:255',
            'author_year' => 'date|required',
            'author_country' => 'required|max:255'
        ]);

        $author = new Author;

        $author->name = $request->input('author_name');
        $author->pseudonym = $request->input('author_pseudonym');
        $author->birthday = $request->input('author_year');
        $author->country = $request->input('author_country');


        $author->save();
        $selectedBooks = $request->input('books', []);
        $author->books()->attach($selectedBooks);
        return redirect(action([AuthorController::class, 'index']));
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
        $author = Author::findOrFail($id);
        $books= Book::all();

        return view('author_edit', compact('author', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Gate::denies('is-admin')) {
            abort(403);
        }
         $request->validate([
            'author_name' =>'required|max:255',
            'author_pseudonym' => 'required|max:255',
            'author_year' => 'date|required|max:2023',
            'author_country' => 'required|max:255'
        ]); 

        $author = Author::findOrFail($id);

        $author->update([
            'name' => $request->input('author_name'),
            'pseudonym' => $request->input('author_pseudonym'),
            'birthday' => $request->input('author_year'),
            'country' => $request->input('author_country')
        ]);

        $selectedBooks = $request->input('books', []);
        $author->books()->sync($selectedBooks);

        return redirect(action([AuthorController::class, 'author_details'],['id'=> $author->id])); //redirect uz grāmatas lapu
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Gate::denies('is-admin')) {
            abort(403);
        }
        Author::findOrfail($id)->delete();
        return redirect('/authors');
    }
}
