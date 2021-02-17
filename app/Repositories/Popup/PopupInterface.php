<?php 
namespace App\Repositories\Popup;
use App\Repositories\Crud\CrudInterface;
interface PopupInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 