<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Scheme\SchemeRepository;
use App\Repositories\Upload\UploadRepository;
use App\Repositories\Page\PageRepository;
use App\Repositories\News\NewsRepository;
use App\Repositories\Report\ReportRepository;
use App\Repositories\Notice\NoticeRepository;
use App\Repositories\Gallery\GalleryRepository;
use App\Repositories\Service\ServiceRepository;
use App\Repositories\Slider\SliderRepository;
use App\Repositories\Member\MemberRepository;
use Mail;





class DefaultController extends Controller
{
    public function __construct(SchemeRepository $scheme, UploadRepository $upload, PageRepository $page, NewsRepository $news, ReportRepository $report, NoticeRepository $notice, GalleryRepository $gallery, ServiceRepository $service, SliderRepository $slider, MemberRepository $member){
		
        $this->scheme=$scheme;
        $this->upload=$upload;
        $this->page=$page;
        $this->news=$news;
        $this->report=$report;
        $this->notice=$notice;
        $this->gallery=$gallery;
        $this->service=$service;
        $this->slider=$slider;
        $this->member=$member;








        
	}

	public function index(){
        $schemes=$this->scheme->orderBy('created_at','desc')->where('publish',1)->get();
        $sliders=$this->slider->orderBy('created_at','desc')->where('publish',1)->get();
        $services=$this->service->orderBy('created_at','desc')->where('publish',1)->get();
        $news=$this->news->orderBy('created_at','desc')->where('publish',1)->get();
        $members=$this->member->orderBy('created_at','desc')->where('publish',1)->get();
        $pages=$this->page->find(1);

        return view('front.index',compact('schemes', 'sliders', 'pages', 'services', 'news', 'members'));
    }


	public function schemeInner($slug){
        $schemes=$this->scheme->where('slug',$slug)->first();
        
        if($schemes){
            $recentSchemes=$this->scheme->orderBy('created_at','desc')->where('publish',1)->where('id','!=', $schemes->id)->get();
            return view('front.schemeInner',compact('schemes','recentSchemes'));
        }
    }

    public function downloads(){

        $downloads=$this->upload->orderBy('created_at','desc')->where('publish',1)->get();
        
        return view('front.download',compact('downloads'));
    }

    public function pages($slug){

        $page=$this->page->where('slug',$slug)->first();
     
        
        if($page){
                return view('front.pageTemplate',compact('page'));
            
        }
        abort(404);
    }

    public function allNews(){

        $news=$this->news->orderBy('created_at','desc')->where('publish',1)->get();
        // dd($news);
        return view('front.allNews',compact('news'));
    }

    public function newsInner($slug){
        $news=$this->news->where('slug',$slug)->first();
        // dd($news);
        if($news){
            $recentNews=$this->news->orderBy('created_at','desc')->where('id','!=', $news->id)->get();
            // dd($recentNews);
            return view('front.newsInner',compact('news','recentNews'));
        }
    }

    public function allReports(){

        $reports=$this->report->orderBy('created_at','desc')->where('publish',1)->get();
        return view('front.allReports',compact('reports'));
    }

    public function reportsInner($slug){
        $reports=$this->report->where('slug',$slug)->first();
        if($reports){
            $recentReports=$this->report->orderBy('created_at','desc')->where('id','!=', $reports->id)->get();
            
            return view('front.reportsInner',compact('reports','recentReports'));
        }
    }

    public function allNotices(){

        $notices=$this->notice->orderBy('created_at','desc')->where('publish',1)->get();
        return view('front.allNotices',compact('notices'));
    }

    public function noticeInner($slug){
        $notices=$this->notice->where('slug',$slug)->first();
        if($notices){
            $recentNotices=$this->notice->orderBy('created_at','desc')->where('id','!=', $notices->id)->get();
            
            return view('front.noticeInner',compact('notices','recentNotices'));
        }
    }

    public function allServices(){

        $services=$this->service->orderBy('created_at','desc')->where('publish',1)->get();
        return view('front.allServices',compact('services'));
    }

    public function serviceInner($slug){
        $services=$this->service->where('slug',$slug)->first();
        if($services){
            $recentServices=$this->service->orderBy('created_at','desc')->where('id','!=', $services->id)->get();
            
            return view('front.serviceInner',compact('services','recentServices'));
        }
    }

    public function allGalleries(){

        $galleries=$this->gallery->orderBy('created_at','desc')->where('is_active',1)->get();
        // dd($galleries);
        return view('front.allGalleries',compact('galleries'));
    }

    public function galleryInner($id){
        $galleries=$this->gallery->findOrFail($id);
        return view('front.galleryInner',compact('galleries'));
    }

    public function contact(){
        return view('front.contact');
    }

    public function contactUs(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'subject'=>'required',
            'message'=>'required']);

        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message_detail'=>$request->message];

        Mail::send('email.contactus', $data,function ($message) use ($data) {
                        $message->to('adhipratimaa@gmail.com')->from($data['email']);
                        $message->subject('Contact');
                       });
        return redirect()->back()->with('message','Thank you for contacting us');
    }





     
}
