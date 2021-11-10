<?php

/**
 * This is specifically for Feature and Unit Tests.
 */

namespace App\Http\Controllers;

use App\Models\MovieTest;
use Illuminate\Http\Request;

class MovieTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MovieTest  $movieTest
     * @return \Illuminate\Http\Response
     */
    public function show(MovieTest $movieTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MovieTest  $movieTest
     * @return \Illuminate\Http\Response
     */
    public function edit(MovieTest $movieTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovieTest  $movieTest
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $movie_to_be_updated = MovieTest::find($id);
        if ($movie_to_be_updated){
            $movie_to_be_updated->update($request->all());
            return response()->json([
                'message' => 'movie updated successfully'
            ], 200);
        }
        return response()->json([
            'message' => 'movie deleted successfully'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovieTest  $movieTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($movie)
    {
        $movie_to_be_deleted = MovieTest::findOrFail($movie);
        $movie_to_be_deleted->delete();
        return response()->json(['message' => 'movie deleted successfully'], 410);
    }

    public function mark_movie_as_rated(MovieTest $movieTest)
    {
        $movieTest->mark_movie_as_rated(); //calls the mark_movie_as_complete method we created in the App/Models/Task.php file
        return response()->json([
            'message' => 'movie successfully rated'
        ], 200); //send a json response with the 200 status code
    }

}
