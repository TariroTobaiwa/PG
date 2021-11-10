<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieTest extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'plot',
        'year_released',
        'director',
        'leading_actors',
        'poster_url',
        'imdb_url',
        'imdb_score'
    ];

    public function mark_movie_as_rated()
    {
        $this->rated = 1;
        $this->save();
    }
    public function is_rated()
    {
        return $this->rated;
    }
}
