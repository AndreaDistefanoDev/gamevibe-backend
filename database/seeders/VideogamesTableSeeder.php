<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class VideogamesTableSeeder extends Seeder
{
    public function run(): void
    {
        $videogames = [
            ['title' => 'Fortnite', 'description' => 'Battle royale di Epic Games con costruzione di strutture.', 'release_date' => '2017-07-25', 'price' => 0],
            ['title' => 'Minecraft', 'description' => 'Sandbox di costruzione e sopravvivenza.', 'release_date' => '2011-11-18', 'price' => 26.95],
            ['title' => 'Grand Theft Auto V', 'description' => 'Azione open world a Los Santos.', 'release_date' => '2013-09-17', 'price' => 29.99],
            ['title' => 'League of Legends', 'description' => 'MOBA a squadre 5 contro 5 di Riot Games.', 'release_date' => '2009-10-27', 'price' => 0],
            ['title' => 'Counter-Strike 2', 'description' => 'Sparatutto tattico competitivo di Valve.', 'release_date' => '2023-09-27', 'price' => 0],
            ['title' => 'Valorant', 'description' => 'Sparatutto tattico 5 contro 5 con agenti dotati di abilità.', 'release_date' => '2020-06-02', 'price' => 0],
            ['title' => 'Roblox', 'description' => 'Piattaforma di giochi creati dagli utenti.', 'release_date' => '2006-09-01', 'price' => 0],
            ['title' => 'Dota 2', 'description' => 'MOBA strategico di Valve, celebre per i tornei The International.', 'release_date' => '2013-07-09', 'price' => 0],
            ['title' => 'Apex Legends', 'description' => 'Battle royale a squadre con eroi dalle abilità uniche.', 'release_date' => '2019-02-04', 'price' => 0],
            ['title' => 'Rocket League', 'description' => 'Calcio con le automobili.', 'release_date' => '2015-07-07', 'price' => 0],
        ];


        foreach ($videogames as $game) {
            $newVideogame = new Videogame();
            $newVideogame->title = $game['title'];
            $newVideogame->description = $game['description'];
            $newVideogame->release_date = $game['release_date'];
            $newVideogame->price = $game['price'];
            $newVideogame->save();
        }
    }
}
