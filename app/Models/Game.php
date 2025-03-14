<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'developer', 'publisher', 'description', 'genre_id'];
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
