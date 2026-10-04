<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $platforms = ['PC', 'PlayStation 5', 'Xbox Series X|S', 'Nintendo Switch', 'Mobile'];
        foreach ($platforms as $platform) {
            $newPlatform = new Platform();
            $newPlatform->name = $platform;
            $newPlatform->color = $faker->hexColor(); // Genera un colore casuale in formato esadecimale
            $newPlatform->save();
        }
    }
}
