<?php 
namespace App\Repositories\News;
use App\Repositories\Crud\CrudInterface;
interface NewsInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 