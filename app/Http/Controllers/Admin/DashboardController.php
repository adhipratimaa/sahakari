<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\DashboardRepository;
use App\Repositories\Report\ReportRepository;
use App\Repositories\Notice\NoticeRepository;
use App\Repositories\News\NewsRepository;
use App\Repositories\Service\ServiceRepository;
use Image;

class DashboardController extends Controller
{
    public function __construct(DashboardRepository $dashboard, ReportRepository $report, NoticeRepository $notice, NewsRepository $news, ServiceRepository $service){
        $this->dashboard=$dashboard;
        $this->report=$report;
        $this->notice=$notice;
        $this->news=$news;
        $this->service=$service;


       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports=$this->report->get();
        $notices=$this->notice->get();
        $news=$this->news->get();
        $services=$this->service->get();

        
        return view('admin.dashboard',compact('reports', 'notices','news', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
