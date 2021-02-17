<?php
namespace App\Repositories\Upload;
use App\Repositories\Crud\CrudRepository;
use App\Models\Upload;
class UploadRepository extends CrudRepository implements UploadInterface{
	public function __construct(Upload $upload){
		$this->model=$upload;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$upload=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$upload['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



