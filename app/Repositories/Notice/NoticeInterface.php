<?php 
namespace App\Repositories\Notice;
use App\Repositories\Crud\CrudInterface;
interface NoticeInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 