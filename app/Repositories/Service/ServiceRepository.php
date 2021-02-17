<?php
namespace App\Repositories\Service;
use App\Repositories\Crud\CrudRepository;
use App\Models\Service;
class ServiceRepository extends CrudRepository implements ServiceInterface{
	public function __construct(Service $service){
		$this->model=$service;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$service=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$service['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



