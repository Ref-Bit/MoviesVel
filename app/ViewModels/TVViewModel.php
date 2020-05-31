<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TVViewModel extends ViewModel
{
    public $tv; 

    public function __construct($tv)
    {
        $this->tv = $tv;
    }

    public function tv()
    {
        return collect($this->tv)->merge([
            'poster_path' => $this->tv['poster_path']
                ? 'https://image.tmdb.org/t/p/w500'.$this->tv['poster_path']
                : 'https://via.placeholder.com/500x750',
            'vote_average' => $this->tv['vote_average'] * 10 .'%',
            'first_air_date' => Carbon::parse($this->tv['first_air_date'])->format('M d, Y'),
            'genres' => collect($this->tv['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->tv['credits']['crew'])->take(5),
            'cast' => collect($this->tv['credits']['cast'])->map(function($item){
                return collect($item)->merge([
                    'profile_path' => $item['profile_path']
                        ? 'https://image.tmdb.org/t/p/w500'.$item['profile_path']
                        : 'https://via.placeholder.com/500x750',
                ]);
            })->take(10),
            'images' => collect($this->tv['images']['backdrops'])->take(9),
        ])->only([
            'name', 'id', 'genres', 'vote_average', 'poster_path', 'profile_path', 'first_air_date', 'credits', 'crew', 'cast', 'videos', 'images',  'overview', 'created_by'
        ]);
    
    }
}
