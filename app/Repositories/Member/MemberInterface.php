<?php 
namespace App\Repositories\Member;
use App\Repositories\Crud\CrudInterface;
interface MemberInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 