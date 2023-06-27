<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $publishers=Publisher::orderBy('title')->get();
        return view('publisher', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publisher_new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'publisher_title' =>'required|max:255',
            'publisher_address' => 'required'
        ]);
        $publisher = new Publisher;

        $publisher->title = $request->input('publisher_title');
        $publisher->address = $request->input('publisher_address');
        

        $publisher->save();
        
        return redirect(action([PublisherController::class, 'index']));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publisher = Publisher::findOrFail($id);
        
        return view('publisher_edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'publisher_title' =>'required|max:255',
            'publisher_address' => 'required'
        ]);

        $publisher = Publisher::findOrFail($id);
        $publisher->update([
            'title' => $request->input('publisher_title'),
            'address' => $request->input('publisher_address')
        ]);

        return redirect(action([PublisherController::class, 'index'],['id'=> $publisher->id]));
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
