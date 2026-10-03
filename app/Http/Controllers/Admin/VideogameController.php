<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view("videogames.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newVideogame = new Videogame();
        $newVideogame->title = $data["title"];
        $newVideogame->description = $data["description"];
        $newVideogame->release_date = $data["release_date"];
        $newVideogame->price = $data["price"];

        $newVideogame->save();

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
        return view("videogames.edit", compact("videogame"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();

        $videogame->title = $data["title"];
        $videogame->description = $data["description"];
        $videogame->release_date = $data["release_date"];
        $videogame->price = $data["price"];
        $videogame->update();
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
