<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TVsViewModel extends ViewModel
{
    public $popularTV;
    public $topTV;
    public $genres;

    public function __construct($popularTV, $topTV, $genres)
    {
        $this->popularTV = $popularTV;
        $this->topTV = $topTV;
        $this->genres = $genres;
    }

    public function popularTV()
    {
        return $this->formatTV($this->popularTV);
    }

    public function topTV()
    {
        return $this->formatTV($this->topTV);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatTV($tvs)
    {
        return collect($tvs)->map(function($tv){
            $formatedGenres = collect($tv['genre_ids'])->mapWithKeys(function($value){
                return [$value=>$this->genres()->get($value)];
            })->implode(', ');
    
            return collect($tv)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500'.$tv['poster_path'],
                'vote_average' => $tv['vote_average'] * 10 .'%',
                'first_air_date' => Carbon::parse($tv['first_air_date'])->format('M d, Y'),
                'genres' => $formatedGenres
            ])->only([
                'name', 'id', 'genre_ids', 'vote_average', 'poster_path', 'first_air_date', 'genres', 'overview'
            ]);
        });
    }
}
