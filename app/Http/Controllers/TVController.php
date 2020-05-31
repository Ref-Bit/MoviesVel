<?php

namespace App\Http\Controllers;

use App\ViewModels\TVsViewModel;
use App\ViewModels\TVViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popluar_tv = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/popular')->json()['results'];
        
        $genres = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/tv/list')->json()['genres'];
        
        $top_tv = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/top_rated')->json()['results'];
        
        
        $viewModel = new TVsViewModel(
            $popluar_tv,
            $top_tv,
            $genres
        );

        return view('tv.index', $viewModel);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tv = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/'.$id.'?append_to_response=credits,videos,images')->json();

        $viewModel = new TVViewModel($tv);
        
        return view('tv.show', $viewModel);
    }
}
