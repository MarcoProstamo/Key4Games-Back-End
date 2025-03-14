<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
