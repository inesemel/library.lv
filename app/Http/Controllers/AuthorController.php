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
        // show all authors
        $authors=Author::all();
        return view ('authors', compact('authors'));
    }
    public function author_details($id)
    {
        $author=Author::where('id','=', $id)->first();
        return view('authordetails', ['author' => $author]);
    }

    public function showAll(string $id)
    {
        //
        $authors = Author::all();
        $book=Book::where('id','=', $id)->first();

        return view('book_edit', [compact('authors'), compact('book')]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}