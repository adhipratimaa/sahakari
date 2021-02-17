<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table='members';
    protected $fillable=['image','title','publish','sub_title','link_title','link','type'];

}
