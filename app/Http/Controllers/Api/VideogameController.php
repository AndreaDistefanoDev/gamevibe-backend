<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function index()
    {

        $videogames = Videogame::all();

        return response()->json([
            "success" => true,
            "data" => $videogames

        ]);
    }

    public function show(Videogame $videogame)
    {
        $videogame->load('platforms', 'genre');

        return response()->json([
            "success" => true,
            "data" => $videogame
        ]);
    }
}
