<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album = new Album;
        $album->name = 'Smooth Criminal';
        $album->album_name = 'Bad';
        $album->author = 'Michael Jackson';
        $album->editor = 'Recording Studios';
        $album->lenght = 4;
        $album->poster = 'image';
        $album->type = 'pop';
        $album->description = 'Lorem';
        $album->save();
    }
}
