<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Image;

class BannerController extends Controller
{
    //__Banner Section Function ___//
       public function index(){
        return view('admin.banner.index');
    }
    public function store(Request $request){
        // $request->validate([
        //     'heading'=> 'required',
        //     'name_title'=> 'required',
        //     'description'=> 'required',
        //     'banner_photo'=> 'required',
        //     'font_icon'=> 'required',
        //     'Links'=> 'required',
        //     'button_text'=> 'required',
     
        //     ]);

        $banner_data = new Banner;
        $banner_data->heading = $request->heading;
        $banner_data->name_title = $request->name_title;
        $banner_data->description = $request->description;
        $banner_data->links = $request->links;
        $banner_data->button_text = $request->button_text;

        $banner_photo = $request->banner_photo;
    

        if($banner_photo){
            $photoname =date('d-m-Y-H-i').'.'.$banner_photo->getClientOriginalExtension();
            $path =('media/'.$photoname);
            Image::make($banner_photo)->resize(600,850)->save($path);
             $banner_data ['banner_photo'] = $path;
             
           }

        // $banner_data->banner_photo = $request->file('banner_photo')->store('media');

        $banner_data->save();
       return back()->with('insert','Banner data Insert on successfully');
    }
    
    public function createbanner(){
        $banner_info = Banner::all();
        return view('admin.banner.create',compact('banner_info'));
    }

    public function delete($id){
        $banner = Banner::find($id);
        $banner->delete();
        return back()->with('del','Banner Data Deleted Successfully');
    }



}
