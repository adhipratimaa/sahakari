<?php
namespace App\Repositories\ViewComposer;
// use App\Repositories\Dashboard\DashboardRepository;
use App\Repositories\Setting\SettingRepository;
use App\Repositories\Scheme\SchemeRepository;
use App\Repositories\Service\ServiceRepository;
use Illuminate\View\View;

class ViewComposer {
	// private $dashboard;
	private $setting;
	
	public function __construct( SettingRepository $setting, SchemeRepository $scheme, ServiceRepository $service) {
		// $this->dashboard=$dashboard;
		$this->setting=$setting;
		$this->scheme=$scheme;
		$this->service=$service;



	}
	public function compose(View $view) {
		// $dashboard=$this->dashboard->first();
		$setting=$this->setting->first();
		$scheme=$this->scheme
					 ->orderBy('created_at', 'desc')
					 ->where('publish',1)
					 ->get();
		$service=$this->service
					  ->orderBy('created_at', 'desc')
					  ->where('publish',1)
					  ->get();

		


		$view->with([ 'setting_composer'=>$setting,'view_scheme'=>$scheme, 'view_service'=>$service]);

	}
	
}
