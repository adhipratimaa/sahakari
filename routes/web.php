<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'Admin'],function(){
	Route::get('login','LoginController@login')->name('login');
	Route::post('postLogin','LoginController@postLogin')->name('postLogin');
	Route::get('password-reset', 'PasswordResetController@resetForm')->name('password-reset');
    Route::post('send-email-link', 'PasswordResetController@sendEmailLink')->name('sendEmailLink');
    Route::get('reset-password/{token}', 'PasswordResetController@passwordResetForm')->name('passwordResetForm');
    Route::post('update-password', 'PasswordResetController@updatePassword')->name('updatePassword');
    Route::get('/home', 'HomeController@index')->name('home');
	});
    



Route::group(['namespace'=>'Admin','middleware'=>['auth'],'prefix'=>'admin'],function(){
	Route::resource('setting','SettingController');
	Route::resource('dashboard','DashboardController');
	Route::get('logout','LoginController@Logout')->name('logout');
	Route::group(['middleware'=>['role']],function(){
		Route::resource('page','PageController');
		Route::resource('user','UserController');
		Route::resource('gallery','GalleryController');
		Route::post('gallery-image','GalleryController@gallery')->name('galleryimage');
		Route::post('crop-image','GalleryController@crop')->name('crop');
		Route::post('jcrop-process','GalleryController@postJcrop')->name('jcropprocess');
		Route::post('gallery-update/{id}','GalleryController@galleryUpdate')->name('galleryUpdate');
		Route::post('remove-image','GalleryController@removeimage')->name('removeImage');
		Route::resource('scheme','SchemeController');
		Route::resource('slider','SliderController');
		Route::post('slider-process','SliderController@sliderProcess')->name('sliderProcess');
		Route::post('crop-modal','SliderController@cropmodal')->name('cropmodal');
		Route::post('crop-process','SliderController@cropprocess')->name('slidercropprocess');
		Route::post('update-slider/{id}','SliderController@updateSlider')->name('updateSlider');
		Route::resource('news','NewsController');
		Route::resource('notice','NoticeController');
		Route::resource('report','ReportController');
		Route::resource('service','ServiceController');
		Route::resource('member','MemberController');
		Route::resource('upload','UploadController');
		Route::resource('career','CareerController');
		Route::resource('popup','PopupController');


	});
});

Route::group(['namespace'=>'Front'],function(){
	Route::get('/','DefaultController@index')->name('home');
	Route::get('scheme/{slug}','DefaultController@schemeInner')->name('schemeInner');
	Route::get('download','DefaultController@downloads')->name('downloads');
	Route::get('service/{slug}','DefaultController@serviceInner')->name('serviceInner');
	Route::get('news','DefaultController@allNews')->name('allNews');
	Route::get('news/{slug}','DefaultController@newsInner')->name('newsInner');
	Route::get('reports','DefaultController@allReports')->name('allReports');
	Route::get('reports/{slug}','DefaultController@reportsInner')->name('reportsInner');
	Route::get('notice','DefaultController@allNotices')->name('allNotices');
	Route::get('notice/{slug}','DefaultController@noticeInner')->name('noticeInner');
	Route::get('gallery','DefaultController@allGalleries')->name('allGalleries');
	Route::get('gallery/{id}','DefaultController@galleryInner')->name('galleryInner');
	Route::get('contact', 'DefaultController@contact')->name('contact');
	Route::post('contact-us','DefaultController@contactUs')->name('contactUs');



	

	Route::get('/{slug}','DefaultController@pages')->name('page');


		

});


