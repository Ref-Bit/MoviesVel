<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $nowMovies;
    public $genres;

    public function __construct($popularMovies, $nowMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowMovies = $nowMovies;
        $this->genres = $genres;
    }

    public function popularMovies()
    {
        return $this->formatMovies($this->popularMovies);
    }

    public function nowMovies()
    {
        return $this->formatMovies($this->nowMovies);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatMovies($movies)
    {
        return collect($movies)->map(function($movie){
            $formatedGenres = collect($movie['genre_ids'])->mapWithKeys(function($value){
                return [$value=>$this->genres()->get($value)];
            })->implode(', ');
    
            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 .'%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $formatedGenres
            ])->only([
                'original_title', 'id', 'genre_ids', 'vote_average', 'poster_path', 'release_date', 'genres', 'overview'
            ]);
        });
    }
}
