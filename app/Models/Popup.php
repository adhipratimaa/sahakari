<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    
    protected $table='popups';
    protected $fillable = ['title','slug','description','image','meta_title','meta_description','short_description','main','type','publish'];
}
