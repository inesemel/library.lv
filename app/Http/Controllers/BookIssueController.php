<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use App\Models\BookUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //user ID
use Illuminate\Support\Facades\Gate;

class BookIssueController extends Controller
{

    public function index()
    {
        $userId = Auth::id();

        $bookIssues = BookUser::where('user_id', $userId)->get();

        return view('issue_index', compact('bookIssues'));
    }
    //
    public function create()
    {
        if (Gate::denies('is-admin')) {
            abort(403);
        }
        $books = Book::all();

        return view('issue_create', compact('books'));
    }

    public function store(Request $request)
    {
        $book = Book::findOrFail($request->input('book_id'));
        $user = User::findOrFail($request->input('user_id'));

        $bookUser = new BookUser();
        $bookUser->issue_date = now()->toDateString();
        $bookUser->return_date = $request->input('return_date');

        $book->users()->attach($user, [
            'issue_date' => $bookUser->issue_date,
            'return_date' => $bookUser->return_date
        ]);

        return redirect('dashboard');
    }
}
