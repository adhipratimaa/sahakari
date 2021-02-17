<?php
namespace App\Repositories\Member;
use App\Repositories\Crud\CrudRepository;
use App\Models\Member;
class MemberRepository extends CrudRepository implements MemberInterface{
	public function __construct(Member $member){
		$this->model=$member;
	}
	public function create($input){
		$value=$input;
		$value['slug']=!empty($input['slug'])? \Str::slug($input['slug']) : \Str::slug($input['title']);
		$this->model->create($value);
	}
	public function update($input,$id){
		$member=$this->model->find($id);
		$value=$input;
		if($value['slug']!==$member['slug']){
			$value['slug']=\Str::slug($input['slug']);
		}
		$this->model->find($id)->update($value);
	}
}



