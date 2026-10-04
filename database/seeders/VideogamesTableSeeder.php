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
            ['title' => 'Fortnite', 'genre_id' => 1, 'description' => 'Battle royale di Epic Games con costruzione di strutture.', 'release_date' => '2017-07-25', 'price' => '€12,00'],
            ['title' => 'Minecraft', 'genre_id' => 2, 'description' => 'Sandbox di costruzione e sopravvivenza.', 'release_date' => '2011-11-18', 'price' => '€26,95'],
            ['title' => 'Grand Theft Auto V', 'genre_id' => 3, 'description' => 'Azione open world a Los Santos.', 'release_date' => '2013-09-17', 'price' => '€29,99'],
            ['title' => 'League of Legends', 'genre_id' => 4, 'description' => 'MOBA a squadre 5 contro 5 di Riot Games.', 'release_date' => '2009-10-27', 'price' => '€70,00'],
            ['title' => 'Counter-Strike 2', 'genre_id' => 5, 'description' => 'Sparatutto tattico competitivo di Valve.', 'release_date' => '2023-09-27', 'price' => '€20,00'],
            ['title' => 'Valorant', 'genre_id' => 6, 'description' => 'Sparatutto tattico 5 contro 5 con agenti dotati di abilità.', 'release_date' => '2020-06-02', 'price' => '€34,00'],
            ['title' => 'Roblox', 'genre_id' => 7, 'description' => 'Piattaforma di giochi creati dagli utenti.', 'release_date' => '2006-09-01', 'price' => '€29,00'],
            ['title' => 'Among Us', 'genre_id' => 7, 'description' => 'Gioco di deduzione sociale in cui i giocatori devono scoprire l\'impostore.', 'release_date' => '2018-06-15', 'price' => '€4,99'],
            ['title' => 'Dota 2', 'genre_id' => 4, 'description' => 'MOBA strategico di Valve, celebre per i tornei The International.', 'release_date' => '2013-07-09', 'price' => '€30,00'],
            ['title' => 'Apex Legends', 'genre_id' => 1, 'description' => 'Battle royale a squadre con eroi dalle abilità uniche.', 'release_date' => '2019-02-04', 'price' => '€10,00'],
            ['title' => 'Rocket League', 'genre_id' => 1, 'description' => 'Calcio con le automobili.', 'release_date' => '2015-07-07', 'price' => '€5,00'],
        ];


        foreach ($videogames as $game) {
            $newVideogame = new Videogame();
            $newVideogame->title = $game['title'];
            $newVideogame->genre_id = $game['genre_id'];
            $newVideogame->release_date = $game['release_date'];
            $newVideogame->price = $game['price'];
            $newVideogame->save();
        }
    }
}
