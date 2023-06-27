<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;

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
        $author = Author::findOrFail($id);
        $books= Book::all();

        return view('author_edit', compact('author', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
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
        //
    }
}
