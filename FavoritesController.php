<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Favorite;
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
        $favorites=Favorite::all();
        return view ('favorites', compact('favorites'));
    }
    public function author_details($id)
    {

    }

    public function showAll(string $id)
    {

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