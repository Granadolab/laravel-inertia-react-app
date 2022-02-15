<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $fillable= [
        'name_game',
        'url_game',
        'description',
        'url_image_game',
        'status'
    ];
}
