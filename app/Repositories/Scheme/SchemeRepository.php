<?php
namespace App\Repositories\Scheme;
use App\Repositories\Crud\CrudRepository;
use App\Models\Scheme;
class SchemeRepository extends CrudRepository implements SchemeInterface{
	public function __construct(Scheme $scheme){
		$this->model=$scheme;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$scheme=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$scheme['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



