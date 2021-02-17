<?php 
namespace App\Repositories\Service;
use App\Repositories\Crud\CrudInterface;
interface ServiceInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 