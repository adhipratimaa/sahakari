<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
	protected $table='schemes';
    protected $fillable = ['title','slug','description','image','meta_title','meta_description','short_description','main','type','publish'];
}
