<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table='applications';
    protected $fillable=['career_id', 'first_name','last_name','email','phone', 'cv', 'inquiries'];

    public function applications(){
        return $this->belongsTo('App\Models\Application');
    }
}
