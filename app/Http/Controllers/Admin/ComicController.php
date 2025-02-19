<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = Comic::all();
        return view('comics.index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {

        $data = $request->validated();

        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];
        
        $comic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        
        $data = $request->validated();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        
        $comic->delete();
        return redirect()->route('comics.index');

    }

}
