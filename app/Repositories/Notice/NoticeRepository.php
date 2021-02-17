<?php
namespace App\Repositories\Notice;
use App\Repositories\Crud\CrudRepository;
use App\Models\Notice;
class NoticeRepository extends CrudRepository implements NoticeInterface{
	public function __construct(Notice $notice){
		$this->model=$notice;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$notice=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$notice['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



