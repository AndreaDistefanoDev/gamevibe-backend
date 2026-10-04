<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    //Collego il genere al videogame
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }
}
