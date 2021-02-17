<?php
namespace App\Repositories\Popup;
use App\Repositories\Crud\CrudRepository;
use App\Models\Popup;
class PopupRepository extends CrudRepository implements PopupInterface{
	public function __construct(PopUp $popup){
		$this->model=$popup;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$popup=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$popup['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



