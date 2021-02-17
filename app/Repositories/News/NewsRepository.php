<?php
namespace App\Repositories\News;
use App\Repositories\Crud\CrudRepository;
use App\Models\News;
class NewsRepository extends CrudRepository implements NewsInterface{
	public function __construct(News $news){
		$this->model=$news;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$news=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$news['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



