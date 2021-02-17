<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table='notices';
    protected $fillable = ['title','slug','description','image','meta_title','meta_description','short_description','main','type','publish'];
}
