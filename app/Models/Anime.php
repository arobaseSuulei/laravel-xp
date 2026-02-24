<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model


{
    protected $table = 'anime';
    public $timestamps = false; // ← désactive created_at et updated_at
    protected $fillable = ['name', 'season', 'platform'];
    //
}
