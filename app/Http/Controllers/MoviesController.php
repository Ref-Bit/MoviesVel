<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];
        
        $genresArr = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];
        
        $genres = collect($genresArr)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
        
        $now_movies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];
        
        // dump($genres);

        return view('index', [
            'popularMovies' => $movies,
            'nowMovies' => $now_movies,
            'genres' => $genres,
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')->json();
        
        return view('show', [
            'movie' => $movie
        ]);
    }

}
