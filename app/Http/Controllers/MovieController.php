<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movies\StoreMoviesRequest;
use App\Http\Requests\Movies\UpdateMoviesRequest;
use App\Models\Movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movies::paginate(4);
        return view('movies', [
            'movies' => $movies
        ]);
    }

    public function create()
    {
        return view('movies.create', []);
    }

    public function store(StoreMoviesRequest $request)
    {
        Movies::create($request->validated());
        return redirect(route('movies'));
    }

    public function edit(Movies $movie)
    {
        return view('movies.update', [
            'movie' => $movie
        ]);
    }

    public function update(UpdateMoviesRequest $request, Movies $movie)
    {
        $movie->update($request->validated());
        return redirect(route('movies'));

    }

    public function destroy(Movies $movie)
    {
        $movie->delete();
        return redirect(route('movies'));
    }
}
