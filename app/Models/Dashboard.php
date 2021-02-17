<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table='dashboards';
   	protected $fillable=['facebook','twitter','linkedin','email','youtube','instagram','fav_icon','logo','banner_image','home','display_content','poem_banner_image','songs_banner_image','movie_banner_image','home_text','contact_banner_image','blog_banner_image','story_banner_image'];

   	public function youtubeVideo($url){
    	$url_string = parse_url($url, PHP_URL_QUERY);
  		parse_str($url_string, $args);
  		return isset($args['v']) ? $args['v'] : false;
    }
}
