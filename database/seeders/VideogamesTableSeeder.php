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
            ['title' => 'Fortnite', 'genre_id' => 1, 'description' => 'Battle royale di Epic Games con costruzione di strutture.', 'release_date' => '2017-07-25', 'price' => '€12,00', 'platforms' => [1, 2, 3]],
            ['title' => 'The Legend of Zelda: Breath of the Wild', 'genre_id' => 2, 'description' => 'Avventura open world di Nintendo con esplorazione e puzzle.', 'release_date' => '2017-03-03', 'price' => '€59,99', 'platforms' => [1, 2]],
            ['title' => 'Call of Duty: Modern Warfare', 'genre_id' => 5, 'description' => 'Sparatutto in prima persona con modalità multiplayer e campagna.', 'release_date' => '2019-10-25', 'price' => '€49,99', 'platforms' => [1, 2, 3]],
            ['title' => 'FIFA 23', 'genre_id' => 6, 'description' => 'Simulazione calcistica di EA Sports con licenze ufficiali.', 'release_date' => '2022-09-30', 'price' => '€69,99', 'platforms' => [1, 2, 3]],
            ['title' => 'The Witcher 3: Wild Hunt', 'genre_id' => 2, 'description' => 'RPG open world di CD Projekt RED con storia epica e scelte morali.', 'release_date' => '2015-05-19', 'price' => '€39,99', 'platforms' => [1, 2]],
            ['title' => 'Minecraft', 'genre_id' => 2, 'description' => 'Sandbox di costruzione e sopravvivenza.', 'release_date' => '2011-11-18', 'price' => '€26,95', 'platforms' => [1, 2]],
            ['title' => 'Grand Theft Auto V', 'genre_id' => 3, 'description' => 'Azione open world a Los Santos.', 'release_date' => '2013-09-17', 'price' => '€29,99', 'platforms' => [1, 2]],
            ['title' => 'League of Legends', 'genre_id' => 4, 'description' => 'MOBA a squadre 5 contro 5 di Riot Games.', 'release_date' => '2009-10-27', 'price' => '€70,00', 'platforms' => [1, 2, 3]],
            ['title' => 'Counter-Strike 2', 'genre_id' => 5, 'description' => 'Sparatutto tattico competitivo di Valve.', 'release_date' => '2023-09-27', 'price' => '€20,00', 'platforms' => [1, 2, 3]],
            ['title' => 'Valorant', 'genre_id' => 5, 'description' => 'Sparatutto tattico 5 contro 5 con agenti dotati di abilità.', 'release_date' => '2020-06-02', 'price' => '€34,00', 'platforms' => [1, 2, 3]],
            ['title' => 'Roblox', 'genre_id' => 2, 'description' => 'Piattaforma di giochi creati dagli utenti.', 'release_date' => '2006-09-01', 'price' => '€29,00', 'platforms' => [1, 2, 3]],
            ['title' => 'Among Us', 'genre_id' => 7, 'description' => 'Gioco di deduzione sociale in cui i giocatori devono scoprire l\'impostore.', 'release_date' => '2018-06-15', 'price' => '€4,99', 'platforms' => [1, 2]],
            ['title' => 'Dota 2', 'genre_id' => 4, 'description' => 'MOBA strategico di Valve, celebre per i tornei The International.', 'release_date' => '2013-07-09', 'price' => '€30,00', 'platforms' => [1, 2, 3]],
            ['title' => 'Apex Legends', 'genre_id' => 1, 'description' => 'Battle royale a squadre con eroi dalle abilità uniche.', 'release_date' => '2019-02-04', 'price' => '€10,00', 'platforms' => [1, 2]],
            ['title' => 'Rocket League', 'genre_id' => 6, 'description' => 'Calcio con le automobili.', 'release_date' => '2015-07-07', 'price' => '€5,00', 'platforms' => [1, 2]],
        ];


        foreach ($videogames as $game) {
            $newVideogame = new Videogame();
            $newVideogame->title = $game['title'];
            $newVideogame->genre_id = $game['genre_id'];
            $newVideogame->description = $game['description'];
            $newVideogame->release_date = $game['release_date'];
            $newVideogame->price = $game['price'];
            $newVideogame->save();
            $newVideogame->platforms()->attach($game['platforms']);
        }
    }
}
