<?php 
namespace App\Repositories\Upload;
use App\Repositories\Crud\CrudInterface;
interface UploadInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 