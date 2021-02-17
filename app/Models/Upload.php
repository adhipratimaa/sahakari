<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table='uploads';
    protected $fillable = ['title','slug','description','meta_title','meta_description','short_description','main','type','publish', 'cv'];
}
