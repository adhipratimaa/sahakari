<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
	protected $table='settings';
   	protected $fillable=['facebook','twitter','linkedin','email','youtube','instagram','fav_icon','logo', 'address', 'cell', 'phone', 'services_banner_image', 'footer_description', 'footer_logo', 'office_map'];

	public function youtubeVideo($url){
    	$url_string = parse_url($url, PHP_URL_QUERY);
  		parse_str($url_string, $args);
  		return isset($args['v']) ? $args['v'] : false;
    }
}


