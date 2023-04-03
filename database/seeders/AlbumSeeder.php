<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Album;
use Faker\Generator as Faker;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 11; $i++) {
            $album = new Album;
            $album->name = $faker->unique()->word(20);
            $album->album_name = $faker->word();
            $album->author = $faker->name(20);
            $album->editor = $faker->unique()->company(20);
            $album->lenght = $faker->randomFloat(1, 3, 6);
            $album->poster = 'https://picsum.photos/300/200';
            $album->type = $faker->randomElement(['pop', 'rock', 'jazz', 'rap']);
            $album->description = $faker->sentence();
            $album->save();
        }
    }
}
