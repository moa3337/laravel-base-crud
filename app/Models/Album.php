<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ["name", "album_name", "author", "editor", "lenght", "poster", "type", "description"];

    public function getAbstract($chars = 30)
    {
        return substr($this->description, 0, $chars);
    }
}
