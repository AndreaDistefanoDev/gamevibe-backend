<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //Collego i videogames al genere
    public function videogames()
    {
        return $this->hasMany(Videogame::class);
    }
}
