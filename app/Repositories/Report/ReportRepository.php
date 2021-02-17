<?php
namespace App\Repositories\Report;
use App\Repositories\Crud\CrudRepository;
use App\Models\Report;
class ReportRepository extends CrudRepository implements ReportInterface{
	public function __construct(Report $report){
		$this->model=$report;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$report=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$report['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



