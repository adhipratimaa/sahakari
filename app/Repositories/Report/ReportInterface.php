<?php 
namespace App\Repositories\Report;
use App\Repositories\Crud\CrudInterface;
interface ReportInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
	
} 