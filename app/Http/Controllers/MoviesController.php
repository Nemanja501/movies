<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Comment;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        $sidebarMovies = Movie::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.movies', compact('movies', 'sidebarMovies'));
    }


    public function create(){
        $allGenres = Genre::orderBy('name', 'asc')->get();
        return view('pages.addmovie', compact('allGenres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMovieRequest $request)
    {
        $movie = Movie::create($request->all());
        $movie->genres()->attach($request->genres);
        return redirect('/create')->with('status', 'Movie added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('pages.singlemovie', compact('movie'));
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
