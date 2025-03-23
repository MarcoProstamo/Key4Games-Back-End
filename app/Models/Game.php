<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'description', 'developer', 'publisher', 'genre_id', 'price', 'image'];
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
