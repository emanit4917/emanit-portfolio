<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;


class PortfolioController extends Controller
{
    public function index(){
        return view('admin.portfolio.index');
    }
    public function storeportf(Request $request){
        $request->validate([
            'thum_heading'=> 'required',
            'thum_title'=> 'required',
            'thum_btn_text'=> 'required',
            'thum_photo'=> 'required',
            'description'=> 'required',
     
            ]);
    
        // database insert data
           $portfolio_data = New Portfolio;
           $portfolio_data->thum_heading = $request->thum_heading;
           $portfolio_data->thum_title = $request->thum_title;
           $portfolio_data->description = $request->description;
           $portfolio_data->thum_btn_text = $request->thum_btn_text;

           $thum_photo = $request->thum_photo;

             if($thum_photo){
                  $photoname =date('d-m-Y-H-i').'.'.$thum_photo->getClientOriginalExtension();
                  $path =('media/'.$photoname);
                 Image::make($thum_photo)->resize(600,300)->save($path);
                 $portfolio_data ['thum_photo'] = $path;
              }
             $portfolio_data->save();
        
        // Navbar::insert([
        //     'navbar'=>$request->navbar,
        //     'link'=>$request->link,
        //    ]);
        return back()->with('success','Portfolio item data insert successfully!');
      
    }

//__Create Portfolio Function__//
    public function createport(){
        $portfolio = Portfolio::all();
        return view('admin.portfolio.create',compact('portfolio'));
    }

//D Portfolio Function__//
    public function destroyport($id){
        Portfolio::find($id)->delete();
        return redirect()->back();
    }


//Edit Portfolio Function__//
    public function edit($id){
        $portfolio_data = Portfolio::find($id);
        return view('admin.portfolio.edit',compact('portfolio_data'));
    }

//updated Portfolio Function__//
    public function updated(Request $request, $id){
        $portfolioes = Portfolio::find($id);
        $portfolioes->thum_heading = $request->thum_heading;
        $portfolioes->thum_title = $request->thum_title;
        $portfolioes->description = $request->description;
        $portfolioes->thum_btn_text = $request->thum_btn_text;

        $thum_photo = $request->thum_photo;
       
        if($thum_photo){
            $photo_path = $portfolioes->thum_photo;
             if (file_exists($photo_path)){
                @unlink($photo_path);
            }
            $photoname =date('d-m-Y-H-i').'.'.$thum_photo->getClientOriginalExtension();
            $path =('media/'.$photoname);

           Image::make($thum_photo)->resize(600,850)->save($path);
           $portfolioes ['thum_photo'] = $path;
        }

      

        $portfolioes->save();

        return redirect()->route('portfolio.create')->with('status','Portfolio Updated Successfully');
    }



    //__single page__//
  
    public function singlepage($id){

            $single_page = Portfolio::find($id);
          
          return view('frontend.singlepage',compact('single_page'));
    }

}
