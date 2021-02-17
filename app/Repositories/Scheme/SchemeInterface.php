<?php 
namespace App\Repositories\Scheme;
use App\Repositories\Crud\CrudInterface;
interface SchemeInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 