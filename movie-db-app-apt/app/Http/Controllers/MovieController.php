<?php

/**
 * This is specifically for the application.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all()->toArray();
        return array_reverse($movies);
    }

    public function store(Request $request)
    {
        $Movie = new Movie([
            'title' => $request['title'],
            'plot' => $request['plot'],
            'year_released' => $request['year_released'],
            'director' => $request['director'],
            'leading_actors' => $request['leading_actors'],
            'imdb_url' => $request['imdb_url'],
            'imdb_score' => $request['imdb_score']
        ]);
        $Movie->save();
        return response()->json($Movie, 201);
    }

    public function show($id)
    {
        $Movie = Movie::find($id);
        return response()->json($Movie, 200);
    }

    public function update($id, Request $request)
    {
        $Movie = Movie::find($id);
        if ($Movie){
            $Movie->update($request->all());
            return response()->json($Movie, 200);
        }
        return response()->json(['message' => 'movie with this id not found'], 404);
    }

    public function destroy($id)
    {
        $Movie = Movie::find($id);
        $Movie->delete();
        return response()->json(['message' => 'movie deleted successfully'], 410);
    }
}
