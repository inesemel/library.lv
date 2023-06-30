<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\BookUser;
use App\Models\BookUserAdditional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function vote(Book $book)
    {
        $user = Auth::user();
        if($book->voters->contains($user)){
            return redirect()->back()->with('error', 'You have already voted for this book.');
        }
        
        $book->voters()->attach($user);

        return redirect()->back()->with('success', 'Vote added successfully.');
    }

    public function deleteVote(Book $book)
    {
        $user = Auth::user();

        // Detach the user and book from the pivot table
        $book->voters()->detach($user);

        // Optionally, update the book table to reflect the updated vote count or any other relevant information
        // $book->vote_count -= 1;
        // $book->save();

        // Redirect back with a success message or return a success response
        return redirect()->back()->with('success', 'Vote deleted successfully.');
    }

    public function index()
    {
        $userId = Auth::id();

        $bookIssues = BookUser::where('user_id', $userId)->get();

        return view('issue_index', compact('bookIssues'));
    }
    public function favorite()
    {
        $userId = Auth::id();

        $bookFavs = BookUserAdditional::where('user_id', $userId)->get();

        return view('favorites', compact('bookFavs'));
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
