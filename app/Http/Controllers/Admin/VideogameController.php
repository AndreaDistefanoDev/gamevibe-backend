<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view("videogames.index", compact("videogames"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $platforms = Platform::all();
        $genres = Genre::all();
        return view("videogames.create", compact("genres", "platforms"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newVideogame = new Videogame();
        $newVideogame->title = $data["title"];
        $newVideogame->genre_id = $data["genre_id"];
        $newVideogame->description = $data["description"];
        $newVideogame->release_date = $data["release_date"];
        $newVideogame->price = $data["price"];

        $newVideogame->save();

        if ($request->has("platforms")) {
            $newVideogame->platforms()->attach($data["platforms"]);
        }

        return redirect()->route("admin.videogames.show", $newVideogame);
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view("videogames.show", compact("videogame"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        $platforms = Platform::all();
        $genres = Genre::all();
        return view("videogames.edit", compact("videogame", "genres", "platforms"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();

        $videogame->title = $data["title"];
        $videogame->genre_id = $data["genre_id"];
        $videogame->description = $data["description"];
        $videogame->release_date = $data["release_date"];
        $videogame->price = $data["price"];

        $videogame->update();

        if ($request->has("platforms")) {
            $videogame->platforms()->sync($data["platforms"]);
        } else {
            $videogame->platforms()->detach();
        }

        return redirect()->route("admin.videogames.show", $videogame);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return redirect()->route("admin.videogames.index");
    }
}
