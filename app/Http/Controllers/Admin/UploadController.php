<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Upload\UploadRepository;
use App\Models\Upload;
use Image;
use File;

class UploadController extends Controller
{
    public function __construct(UploadRepository $upload){
        $this->upload=$upload;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details=$this->upload->orderBy('created_at','desc')->get();
        // dd($details);
        return view('admin.upload.list',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        // dd($request);
        $value=$request->except('cv','publish');
        // dd($value);
        $value['publish']=is_null($request->publish)? 0 : 1 ;
            
            

            if($request->cv){
                $path=public_path().'/images/file';
           
            if(!File::exists($path)){
               File::makeDirectory($path,0777,true,true);
           }
           
            $file_name="document-".date('Ymdhis').rand(0,1234).".".$request->cv->getClientOriginalExtension();
            $success=$request->cv->move($path,$file_name);
            $value['cv'] =$file_name;
            }
             $this->upload->create($value);

           
           
            return redirect()->route('upload.index')->with('message','File Added Successfully');
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
        $detail=$this->upload->find($id);
        return view('admin.upload.edit',compact('detail'));   
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
        $old=$this->upload->find($id);
        $sameSlugVal = $old->slug == $request->slug ? true : false;
        $this->validate($request, $this->rules($old->id,$sameSlugVal));
        $value=$request->except('cv','publish');
        $value['publish']=is_null($request->publish)? 0 : 1 ;
        if($request->cv){
            $cv=$this->upload->find($id);
            // if($image->image){
            //     $thumbPath = public_path('images/thumbnail');
            //     $mainPath = public_path('images/main');
            //     $listingPath = public_path('images/listing');
            //     if((file_exists($thumbPath.'/'.$image->image)) && (file_exists($listingPath.'/'.$image->image)) &&(file_exists($mainPath.'/'.$image->image))){
            //         unlink($thumbPath.'/'.$image->image);
            //         unlink($mainPath.'/'.$image->image);
            //         unlink($listingPath.'/'.$image->image);
            //     }
            // }
            $cv=$this->imageProcessing($request->file('cv'));
            $value['cv']=$cv;
        }
        // if($request->banner_image){
        //     $image=$request->file('banner_image');
        //     $name= time().'.'.$image->getClientOriginalExtension();
        //     $mainPath = public_path('images/main');
        //     $img = Image::make($image->getRealPath());
        //     $img->fit(1349,395)->save($mainPath.'/'.$name);
        //     $value['banner_image']=$name;     
        // }
        $this->upload->update($value,$id);
        return redirect()->route('upload.index')->with('message','Report Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=$this->upload->find($id);
        if($image->image){
            $thumbPath = public_path('images/thumbnail');
            $mainPath = public_path('images/main');
            $listingPath = public_path('images/listing');
            if((file_exists($thumbPath.'/'.$image->image))  && (file_exists($listingPath.'/'.$image->image)) &&(file_exists($mainPath.'/'.$image->image))){
                unlink($thumbPath.'/'.$image->image);
                unlink($mainPath.'/'.$image->image);
                unlink($listingPath.'/'.$image->image);
            }
        }
        $this->upload->destroy($id);
        return redirect()->route('upload.index')->with('message','Blog Deleted Successfully');
    }
    public function imageProcessing($image){
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/thumbnail');
       $mainPath = public_path('images/main');
       $listingPath = public_path('images/listing');
       
       $img1 = Image::make($image->getRealPath());
       $img1->fit(530, 300)->save($thumbPath.'/'.$input['imagename']);
       $img2 = Image::make($image->getRealPath());
       $img2->fit(99, 88)->save($listingPath.'/'.$input['imagename']);
      
       $destinationPath = public_path('/images');
       return $input['imagename'];     
    }
    public function rules($oldId = null, $sameSlugVal=false){

        $rules =  [
            'title' => 'required',
            'slug' => 'unique:uploads|max:255',
            'image'=>'mimes:jpeg,bmp,png'
            
        ];
        if($sameSlugVal){
            $rules['slug'] = 'unique:uploads,slug,'.$oldId.'|max:255';
        }
        return $rules;
    }
    
}
