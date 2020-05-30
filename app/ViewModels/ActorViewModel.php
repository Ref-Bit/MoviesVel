<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
    public $actor; 
    public $social; 
    public $credits;

    public function __construct($actor, $social, $credits)
    {
        $this->actor = $actor;
        $this->social = $social;
        $this->credits = $credits;
    }

    public function actor()
    {
        return collect($this->actor)->merge([
            'birthday' => Carbon::parse($this->actor['birthday'])->format('M d, Y'),
            'age' => Carbon::parse($this->actor['birthday'])->age,
            'profile_path' => $this->actor['profile_path']
                ? 'https://image.tmdb.org/t/p/w500'.$this->actor['profile_path']
                : 'https://via.placeholder.com/500x750'
        ]);
    
    }

    public function social()
    {
        return collect($this->social)->merge([
            'facebook' => $this->social['facebook_id'] ? 'https://facebook.com/'.$this->social['facebook_id'] : null,
            'instagram' => $this->social['instagram_id'] ? 'https://instagram.com/'.$this->social['instagram_id'] : null,
            'twitter' => $this->social['twitter_id'] ? 'https://twitter.com/'.$this->social['twitter_id'] : null,
        ]);
    }


    public function knownFor()
    {
        $knownTitles = collect($this->credits)->get('cast');

        return collect($knownTitles)->map(function($mixed){
            if (isset($mixed['title'])) {
                $title = $mixed['title'];
            } else if (isset($mixed['name'])) {
                $title = $mixed['name'];
            } else {
                $title = 'Untitled';
            }

            return collect($mixed)->merge([
                'poster_path' => $mixed['poster_path']
                    ? 'https://image.tmdb.org/t/p/w500'.$mixed['poster_path']
                    : 'https://via.placeholder.com/500x750',
                'title' => $title,
            ]);
        })->sortByDesc('popularity');
    }

    public function credits()
    {
        $castTitles = collect($this->credits)->get('cast');

        return collect($castTitles)->map(function($mixed){
            if (isset($mixed['release_date'])) {
                $releaseDate = $mixed['release_date'];
            } else if (isset($mixed['first_air_date'])) {
                $releaseDate = $mixed['first_air_date'];
            } else {
                $releaseDate = '';
            }

            if (isset($mixed['title'])) {
                $title = $mixed['title'];
            } else if (isset($mixed['name'])) {
                $title = $mixed['name'];
            } else {
                $title = 'Untitled';
            }
            
            return collect($mixed)->merge([
                'release_date' => $releaseDate,
                'release_year' => isset($releaseDate) ? Carbon::parse($releaseDate)->format('Y') : 'Future', 
                'title' => $title,
                'character' => isset($mixed['character']) ? $mixed['character'] : ''
            ]);
        })->sortByDesc('release_date');
    }
}